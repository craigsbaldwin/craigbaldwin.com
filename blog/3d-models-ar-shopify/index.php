<?php
  $page = 'blog';
  $seo_title = '3D models and variants in Shopify - Craig Baldwin';
  $title = '3D models and variants in Shopify';
  $description = 'How we solved seamless 3D model switching for TP Toys.';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include '../../assets/includes/head.php' ?>
    <link href="../../assets/blog.css?v=1320" rel="stylesheet" />
    <script src="../../assets/code-block.js?v=1320" async></script>
  </head>

  <body>
    <div class="container">
      <?php include '../../assets/includes/header.php' ?>

      <div class="content blog">
        <?php include '../../assets/includes/card.php' ?>

        <blockquote>
          <p><strong>Update</strong></p>

          <p>The below code snippets assumes you are using Vue 2. Inline templates were removed in Vue 3 so you can't directly use Vue in a Liquid template. Instead you will need to pass Liquid variables to Vue using props.</p>
        </blockquote>

        <h2>Solving requirements</h2>

        <p>One of the main requirements for the TP Toys' store was the ability to combine augmented reality with 3D models so customers could see the product in their garden. At the same time they needed to be able to see an updated model seamlessly as they changed variant, or product builder configuration.</p>

        <p>In the original specification we were planning on switching the 3D model file entirely whenever a new variant was selected. It soon became apparent this wasn't viable; 3D files were no smaller than 5 MB and some products had more than 20 configurations meaning a customer might end up downloading 100 MB just to preview the product model.</p>

        <p>Shopify uses the [model-viewer API](https://modelviewer.dev/) to display 3D models in the browser and in AR. Upon reviewing the documentation, and in consultation with TP Toys' 3D artist, we decided to use different animations in the same file to represent each variant using a special naming convention.</p>

        <h2>Development</h2>

        <p>The product page was built using a combination of Liquid templates and Vue components. This could have been entirely built using Vue templating, but I always prefer to use inline templates so I can leverage Liquid rendering, this makes sense as Liquid objects and language strings are still easily available.</p>

        <p>First I had to check if a product had a 3D model file uploaded to its media and then assign it in Liquid. Each product only supports a single 3D model.</p>

        <code-block lang="liquid">
<textarea readonly>{%- liquid
  assign models = product.media | where: 'media_type', 'model'

  if models.size > 0
    assign model = models | first

    for model_source in model.sources
      if model_source.format == 'glb'
        assign model_url = model_source.url

      elsif model_source.format == 'usdz'
        assign model_url_usdz = model_source.url
      endif
    endfor
  endif
-%}</textarea>
        </code-block>

        <p>Once this is set I needed to output the <code>model-viewer</code> component. I decided not to use the base Shopify implementation so I could customise its display with Vue, this means I also had to separately call the model-viewer JS.</p>

        <code-block lang="html">
<textarea readonly><model-viewer
  ref="model"
  class="product-gallery__model"
  alt="{{ model.alt }}"
  animation-crossfade-duration="0"
  ar
  ar-models="webxr scene-viewer quick-look"
  ar-scale="fixed"
  camera-controls
  interaction-prompt="none"
  ios-src="{{ model_url_usdz }}"
  loading="lazy"
  quick-look-browsers="safari"
  reveal="manual"
  shadow-intensity="1"
  src="{{ model_url }}"
  tabindex="-1"
  @load="handleModelLoad()"
></model-viewer></textarea>
        </code-block>

        <p>The <code>handleModelLoad()</code> function is used to update the Vue state once the <code>load</code> event is fired by model-viewer. This function also runs the <code>getVariantModelAnimation()</code> function but first let's look at other the Vue states.</p>

        <p>Every variant has a unique SKU and as these SKUs are selected a <code>currentSkus</code> computed array is updated and sorted alphanumerically. It's possible to have multiple current SKUs due to the product builder hence why it's an array.</p>

        <p>Each configuration is represented as an animation in the model, and each animation is named as follows:</p>

        <ul>
          <li>001.SKU1</li>
          <li>002.SKU2</li>
          <li>003.SKU1-SKU2</li>
          <li>004.SKU1-SKU2-SKU2</li>
          <li>etc.</li>
        </ul>

        <p>Using a Vue watch on <code>currentSkus</code> I run <code>getVariantModelAnimation()</code> every time it's updated, this function is used to look through available animations and then exactly match it with the <code>currentSkus</code> array.</p>

        <code-block lang="js">
<textarea readonly>/**
 * Get current SKUs matching model animation.
 * - If no matching animation then set to first animation.
 */
getVariantModelAnimation() {
  if (
    !this.model.loaded ||
    !this.$refs.model.availableAnimations.length
  ) {
    return
  }

  /**
   * Check to see if there is a matching animation with the same number of
   * SKUs and which contains all current SKUs.
   */
  const match = this.$refs.model.availableAnimations.find((animation) => {
    let animationSkus = animation.split('.')[1].split('-')

    if (animationSkus.length !== this.currentSkus.length) {
      return false
    }

    animationSkus = animationSkus.sort()

    return animationSkus.every((sku, index) => {
      return sku === sortedCurrentSkus[index]
    })
  })

  /**
   * Update model animation and set time to end.
   */
  this.$refs.model.animationName = (
    match ||
    this.$refs.model.availableAnimations[0]
  )

  this.$refs.model.currentTime = 1.0
},</textarea>
        </code-block>

        <p>As you can see in the code (lines 34-37) <code>match</code> is then used to update the current animation on the model. The <code>currentTime</code> is also set to the end (line 39) otherwise it might show a transitional state between two animations.</p>

        <p>Thanks to a bit of co-operation and Vue this was ultimately a fairly straightforward challenge when it could have been a much bigger problem.</p>

        <div class="blog__links">
          <ul>
            <li><a href="/work/tp-toys">View TP Toys work entry</a></li>
          </ul>
        </div>
      </div>
    </div>

    <?php include '../../assets/includes/footer.php' ?>
  </body>
</html>
