<?php
  $page = 'blog';
  $seo_title = 'Building SofaSofa - Craig Baldwin';
  $title = 'Building SofaSofa';
  $description = 'A look at the headline features and how they were built.';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include '../../assets/includes/head.php' ?>
    <link href="../../assets/blog.css?v=1310" rel="stylesheet" />
  </head>

  <body>
    <div class="container">
      <?php include '../../assets/includes/header.php' ?>

      <div class="content blog">
        <?php include '../../assets/includes/card.php' ?>

        <p>The SofaSofa website is a blend of the We Make Websites framework Frame 3 and custom Vue components built to handle the complicated feature requirements. I was the sole developer on the project for the majority of the time and was responsible for coming up with solutions for the features then building and testing them.<p>

        <h2>Product colours</h2>
        <p>SofaSofa's products would have often exceeded Shopify's 100 variant limit so it was decided early on to split products into separate colour products. For example, the <a href="https://sofasofa.co.uk/products/mia-3-seater-sofa-opulence-saffron">Mia 3 Seater Sofa</a> appears as a single product, but each of the different colours are a separate product in Shopify, blended together using Vue and Apollo to seamlessly switch products.</p>

        <p>These products were associated using a title naming convention; the Mia 3 Seater Sofa is actually called <code>Mia | 3 Seater Sofa | Opulence Saffron</code> in the Shopify admin. For each of the colour swatches that appears there is a separate Fabric Sample type product, each tagged with <code>sample_product_family: Mia</code>.</p>

        <p>On page load a Storefront GraphQL API request is made to load all products in the family Mia with the size 3 Seater Sofa. A separate request will load all Fabric Samples with the associated tag. These are then combined together in a computed property (with several additional checks) and displayed as a row of swatches.</p>

        <p>Clicking a swatch makes a request for the associated product handle, once this has loaded the Vue component's data object is updated.</p>

        <h2>Sofa finder</h2>
        <p>The <a href="https://sofasofa.co.uk/collections/sofa-finder">Sofa Finder</a> (and other collection pages) uses our custom API wrapper called Lens (built by me). This uses the Klevu JS API to request products, filter results, update the URL, and power the predictive search.</p>

        <p>Using Lens allowed full customisation of the Sofa Finder page, something that wouldn't have been possible with the default Klevu Shopify app.</p>

        <p>This meant we could display a single 'parent' product instead of all the different colours for each family and size. This filtering is then removed when the customer filters by a certain colour.</p>

        <p>This was achieved by tagging parent products with <code>parent~Product</code> (the tilde is the Klevu filter separator character in this instance) and then filtering all requests by this filter unless the list of filters includes 'colour'.</p>

        <h2>Request fabric samples</h2>
        <p>The <a href="https://sofasofa.co.uk/collections/fabric-samples">Request Fabric Samples</a> collection is a specially customised collection designed to display all Fabric Sample products with the ability to add up to eight samples to the cart.</p>

        <p>This uses several Vue components interacting with one another to handle adding and removing samples from the queue, adding the queue to the cart (displayed as a single line item) and then removing samples from the cart and enforcing the eight sample limit.</p>

        <p>I'm particularly pleased that all the functionality continues to work when Javascript is disabled, as does most of the site's functionality.</p>

        <h2>In closing</h2>
        <p>I'm certainly happy with the outcome, not just because of building the technical headline features, but also because of the many small touches and details that I spent a lot of time focusing on.</p>

        <div class="blog__links">
          <ul>
            <li><a href="/work/sofasofa">View SofaSofa work entry</a></li>
            <li><a href="https://sofasofa.co.uk/">View SofaSofa website</a></li>
          </ul>
        </div>
      </div>
    </div>

    <?php include '../../assets/includes/footer.php' ?>
  </body>
</html>
