<?php
  $page = 'blog';
  $seo_title = 'Dynamically updating args in Storybook from a Vue component - Craig Baldwin';
  $title = 'Dynamically updating args in Storybook from a Vue component';
  $description = 'A straightforward way of using events from inside a Vue component to update the Storybook story\'s args.';
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

          <p>The below approach was developed for Storybook 6. It hasn't been tested with later versions.</p>
        </blockquote>

        <h2>Introduction</h2>
        <p>Over the past few weeks I've been updating We Make Websites' internal framework with Storybook so we had a single place to see a projects' components in a sandboxed view.</p>

        <p>While doing this I found it particularly tricky to dynamically update the args passed to the Vue component from an event in the Vue component itself. The component in question was a quantity selector with buttons to increment and decrement a value displayed in its input.</p>

        <p>When I researched it there didn't seem to be a straightforward solution, the Storybook controls available to update the arg worked but I thought this wasn't the best way to simulate the different button states based on the quantity value.</p>

        <p>By piecing together various GitHub issues and forum posts I built the below solution. It's worth noting I'm not a Storybook expert so this could have some unforeseen consequence but it works in my testing with Vue 3.</p>

        <h2>Solution</h2>
        <p>The solution revolves around the <code>updateArgs()</code> function available in the <code>useArgs()</code> function which is only available as a decorator. The trouble with it being a decorator is that you can't directly access it within a story so first we have to make it available.</p>

        <p>As noted in the <a href="https://storybook.js.org/docs/6/writing-stories/decorators#global-decorators">decorators documentation</a> you can use the <em>.storybook/preview.js</em> file to globally set decorators. Make sure any component-level decorators don't override it.</p>

        <code-block lang="js">
<textarea readonly>import { useArgs } from '@storybook/client-api'

export const decorators = [
  (story, context) => {
    const [_, updateArgs] = useArgs()
    return story({ ...context, updateArgs })
  },
]</textarea>
        </code-block>

        <p>The above export makes the <code>updateArgs()</code> function globally available. The <code>export</code> is an array which allows you to add further customisations such as globally setting the template:</p>

        <code-block lang="js">
<textarea readonly>export const decorators = [
  (story, context) => {
    const [_, updateArgs] = useArgs()
    return story({ ...context, updateArgs })
  },
  () => ({ template: '<story />' }),
]</textarea>
        </code-block>

        <p>Now in your story template you can access the <code>updateArgs()</code> function as below:</p>

        <code-block lang="js">
<textarea readonly>const Template = (args, { updateArgs }) => ({
  components: { QuantitySelector },
  setup() {
    return { args }
  },
  template: '<quantity-selector v-bind="args" @update-quantity="handleQuantityUpdate" />',
  methods: {
    handleQuantityUpdate(quantity) {
      updateArgs({ ...args, quantity })
    },
  },
})</textarea>
        </code-block>

        <p>The <quantity-selector> component already emits the update-quantity custom event when the buttons are clicked (see custom events documentation). This custom event is used in the template to trigger a custom method which uses the updateArgs function.</p>

        <p>Passing the existing args variable as a destructured object inside a new object with the new quantity variable is a shorthand way to update only the quantity variable's value. If you passed just the quantity variable then you would lose all your other args.</p>

        <h2>References</h2>
        <ul>
          <li><a href="https://github.com/storybookjs/storybook/issues/12006#issuecomment-676277112">useArgs throws exception when used with Story function</a></li>
          <li><a href="https://github.com/storybookjs/storybook/issues/15325">Story parameters do not update when they are based on story args</a></li>
          <li><a href="https://stackoverflow.com/questions/63708208/how-to-dynamically-mutate-args-in-storybook-v6-from-the-components-action/67424836#67424836">How to dynamically mutate “args” in Storybook v6 from the component's action</a></li>
        </ul>
      </div>
    </div>

    <?php include '../../assets/includes/footer.php' ?>
  </body>
</html>
