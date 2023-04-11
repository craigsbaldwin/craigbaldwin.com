---
block_type: "clients"
title: "Canvas"
handle: "canvas"
weight: 1
header_colour: "241, 68, 54"
---
Principal developer on original company framework called Canvas. Canvas is a Vue-based development environment used as We Make Websites' primary approach for Liquid-based development, it has now been used on over 30 projects.

Canvas is supported by a Webpack-based custom build compiler called Basis and a suite of dependencies called Brush, each designed to extend the functionality of Canvas.

My responsibilities include the original development of Canvas, Basis, and Brush from scratch, and the continued development and support of all parts of the company development ecosystem.

Headline features include:

* Just in time asynchronous Vue component loading for improved performance
* Browsersync-based localhost development environment for page refresh on update
* Section and settings schemas are stored as separate JS files with support for importing fragments
* First class support for Liquid locale strings using global Vue `$string()` helper function
* Design command to automatically convert Figma tokens into CSS variables and text classes
* Lightweight GraphQL compiling and querying function
* Folder structure supports nesting and each component folder contains all corresponding files
* SVG icons folder automatically compiles icon Liquid snippets and creates base64 strings for inline stylesheet support
* Component command to scaffold component folder and files automatically
* Automatic creation of critical CSS Liquid snippets based on SCSS stylesheets
* Storybook support for Vue component previewing
* Library of pre-made components to speed up development
