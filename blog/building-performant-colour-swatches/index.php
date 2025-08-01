<?php
  $page = 'blog';
  $seo_title = 'Build performant colour swatches - Craig Baldwin';
  $title = 'Build performant colour swatches';
  $description = 'Using Shopify\'s storefront API and sessionStorage.';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include '../../assets/includes/head.php' ?>
    <link href="../../assets/blog.css?v=1311" rel="stylesheet" />
  </head>

  <body>
    <div class="container">
      <?php include '../../assets/includes/header.php' ?>

      <div class="content blog">
        <?php include '../../assets/includes/card.php' ?>

        <h2>The problem</h2>

        <p>As part of Pangaia's collection page rebuild we took the opportunity to replace the product cards which appear throughout the site with a single Vue component with several new features.</p>

        <p>One of these new features was colour swatches which allow the user to seamlessly switch between the product's colours within the collection page grid. On Pangaia colours are set up as separate products, so instead of just displaying the variants of a product we have to load the information of all the separate related products. The easiest way to do this is to use the <code>products</code> query in <a href="https://shopify.dev/api/storefront/reference/common-objects/queryroot#products-2024-10">Shopify's storefront API</a>.</p>

        <blockquote>
          <p><strong>Product setup</strong></p>

          <p>Product families are linked by having the same prefix in their title and handle. So a 365 Hoodie would be called <em>365 Hoodie—Navy Blue</em> or <em>365 Hoodie—Jade Green</em>. To find all colours of the 365 Hoodie we would use the query <code>title:365 Hoodie*</code> which finds all products with the <a href="https://help.shopify.com/en/manual/online-store/storefront-search#searching-specific-fields">title</a> <a href="https://help.shopify.com/en/manual/online-store/storefront-search#prefix-search">prefix</a> <em>365 Hoodie</em>, and a few more besides.<p>
        </blockquote>

        <p>On the product page this was straightforward as we could simply make the single request and render the response, however on collection pages you could be loading tens of products at a time which could mean hitting the <a href="https://shopify.dev/api/usage/rate-limits#storefront-api-rate-limits">API rate limit</a> or simply slowing down the user's browser as it renders possibly hundreds of swatches.</p>

        <h2>The solution</h2>

        <p>First we check if the product card is visible (according to the <a href="https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API">intersection observer API</a>), we only make the request if the product card has scrolled into view.</p>

        <p>Next the product card's handle is added to a queue which is used to spread the requests. This means when a row of four product cards become visible they don't all load simultaneously. Once the request is made we remove the handle from the queue so we don't unnecessarily slow down future requests.</p>

        <p>Then we check if the product family has already been loaded; if the product family's colour array is already available in <code>sessionStorage</code> then we use that instead of making a request.</p>

        <blockquote>
          <p><strong>Why <code>sessionStorage</code>?</strong></p>

          <p>We used <code>sessionStorage</code> because Pangaia frequently updates their product catalogue as products become available or go out of stock due to the popular nature of their products. <code>sessionStorage</code> persists as long as the tab exists which saves us having to check if the cache should be expired or not.</p>
        </blockquote>

        <p>If the colour array isn't available in <code>sessionStorage</code>, but the product family handle has <code>loading</code> set to <code>true</code>, then we add an EventBus listener to wait for the related request to complete. This is why we use a queue to spread the requests as it gives the first product card time to update <code>sessionStorage</code> with the <code>loading</code> state.</p>

        <p>Finally if none of the previous conditions are met then the storefront API request will be made using the following steps:</p>

        <ol>
          <li>Add the product family handle to the <code>colours</code> object in <code>sessionStorage</code> with <code>loading</code> set to <code>true</code></li>
          <li>Send the request to the storefront API using a title prefix search</li>
          <li>Receive the response, remove unrelated products and format their objects</li>
          <li>Replace the entry in the <code>colours</code> object with the formatted array</li>
          <li>Emit an event with the formatted array as the payload</li>
          <li>Set the product card's state to use the array and render it</li>
        </ol>

        <h2>Final thoughts</h2>

        <p>Thanks to this additional work we made the collection pages as performant as we could when loading large amounts of data. This is just one of several complex features we integrated into the new collection build.</p>

        <div class="blog__links">
          <ul>
            <li><a href="/work/pangaia">View Pangaia work entry</a></li>
          </ul>
        </div>
      </div>
    </div>

    <?php include '../../assets/includes/footer.php' ?>
  </body>
</html>
