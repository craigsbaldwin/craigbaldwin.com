---
title: "Dynamically updating args in Storybook from a Vue component"
date: 2022-01-17
tags: ["Development", "Canvas"]
draft: false
excerpt: "A straightforward way of using events from inside a Vue component to update the Storybook story's args."
---

## Introduction

Over the past few weeks I've been updating We Make Websites' internal framework with [Storybook](https://storybook.js.org/) so we had a single place to see a projects' components in a sandboxed view.

While doing this I found it particularly tricky to dynmically update the args passed to the Vue component from an event in the Vue component itself. The component in question was a quantity selector with buttons to increment and decrement a value displayed in its input.

When I researched it there didn't seem to be a straightforward solution, the Storybook controls available to update the `arg` worked but I thought this wasn't the best way to simulate the different button states based on the quantity value.

By piecing together various GitHub issues and forum posts I built the below solution. It's worth noting I'm not a Storybook expert so this could have some unforeseen consequence but it works in my testing with Vue 3.

## Solution

The solution revolves around the `updateArgs()` function available in the `useArgs()` function which is only available as a decorator. The trouble with it being a decorator is that you can't directly access it within a story so first we have to make it available.

As noted in the [decorators documentation](https://storybook.js.org/docs/vue/writing-stories/decorators#global-decorators) you can use the _.storybook/preview.js_ file to globally set decorators. Make sure any component-level decorators don't override it.

{{< highlight js >}}
import { useArgs } from '@storybook/client-api'

export const decorators = [
  (story, context) => {
    const [_, updateArgs] = useArgs()
    return story({ ...context, updateArgs })
  },
]
{{< /highlight >}}

The above export makes the `updateArgs()` function globally available. The `export` is an array which allows you to add further customisations such as globally setting the template:

{{< highlight js >}}
export const decorators = [
  (story, context) => {
    const [_, updateArgs] = useArgs()
    return story({ ...context, updateArgs })
  },
  () => ({ template: '<story />' }),
]
{{< /highlight >}}

Now in your story template you can access the `updateArgs()` function as below:

{{< highlight js >}}
const Template = (args, { updateArgs }) => ({
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
})
{{< /highlight >}}

The `<quantity-selector>` component already emits the `update-quantity` custom event when the buttons are clicked (see [custom events documentation](https://v3.vuejs.org/guide/component-custom-events.html)). This custom event is used in the `template` to trigger a custom `method` which uses the `updateArgs` function.

Passing the existing `args` variable as a destructured object inside a new object with the new `quantity` variable is a shorthand way to update only the `quantity` variable's value. If you passed just the `quantity` variable then you would lose all your other `args`.

## References

* [useArgs throws exception when used with Story function](https://github.com/storybookjs/storybook/issues/12006#issuecomment-676277112)
* [Story parameters do not update hwen they are based on story args](https://github.com/storybookjs/storybook/issues/15325)
* [How to dynamically mutate "args" in Storybook v6 from the component's action](https://stackoverflow.com/questions/63708208/how-to-dynamically-mutate-args-in-storybook-v6-from-the-components-action/67424836#67424836)