---
title: "Building performant colour swatches"
date: 2021-07-17
tags: ["Development", "Pangaia"]
draft: false
excerpt: "Using Shopify's storefront API and sessionStorage."
---

## The problem

As part of [Pangaia's](https://thepangaia.com/) collection page rebuild we took the opportunity to replace the product cards which appear throughout the site with a single Vue component with several new features.

One of these new features was colour swatches which allow the user to seamlessly switch between the product's colours within the collection page grid. On Pangaia colours are setup as separate products, so instead of just displaying the variants of a product we have to load the information of all the separate related products. The easiest way to do this is to use the `products` query in [Shopify's storefront API](https://shopify.dev/api/storefront/reference/common-objects/queryroot#products-2021-07).

> **Product setup**
> Product families are linked by having the same prefix in their title and handle. So a 365 Hoodie would be called _365 Hoodie—Navy Blue_ or _365 Hoodie—Jade Green_. To find all colours of the 365 Hoodie we would use the query `title:365 Hoodie*` which finds all products with the [title](https://help.shopify.com/en/manual/online-store/storefront-search#searching-specific-fields) [prefix](https://help.shopify.com/en/manual/online-store/storefront-search#prefix-search) _365 Hoodie_, and a few more besides.

On the product page this was straightforward as we could simply make the single request and render the response, however on collection pages you could be loading tens of products at a time which could mean hitting the [API rate limit](https://shopify.dev/api/usage/rate-limits#storefront-api-rate-limits) or simply slowing down the user's browser as it renders possibly hundreds of swatches.

## The solution

First we check if the product card is visible (according to the [intersection observer API](https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API)), we only make the request if the product card has scrolled into view.

Next the product card's handle is added to a queue which is used to spread the requests. This means when a row of four product cards become visible they don't all load simultaneously. Once the request is made we remove the handle from the queue so we don't unnecessarily slow down future requests.

Then we check if the product family has already been loaded; if the product family's colour array is already available in `sessionStorage` then we use that instead of making a request.

> **Why `sessionStorage`?**
> We used `sessionStorage` because Pangaia frequently update their product catalogue as products becomes available or go out of stock due to the popular nature of their products. `sessionStorage` persists as long as the tab exists which saves us having to check if the cache should be expired or not.

If the colour array isn't available in `sessionStorage`, but the product family handle has `loading` set to `true`, then we add an EventBus listener to wait for the related request to complete. This is why we use a queue to spread the requests as it gives the first product card time to update `sessionStorage` with the `loading` state.

Finally if none of the previous conditions are met then the storefront API request will be made using the following steps:

1. Add the product family handle to the `colours` object in `sessionStorage` with `loading` set to `true`
1. Send the request to the storefont API using a title prefix search
1. Receive the response, remove unrelated products and format their objects
1. Replace the entry in the `colours` object with the formatted array
1. Emit an event with the formatted array as the payload
1. Set the product card's state to use the array and render it

## Final thoughts

Thanks to this additional work we made the collection pages as performant as we could when loading large amounts of data. This is just one of several complex features we integrated into the new collection build.

The next step is to create a custom sync app to store the colour swatches directly in Algolia so we don't have to make these additional requests in the first place.