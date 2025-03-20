/**
 * Create new code block custom element.
 */
class CodeBlock extends HTMLElement {

  /**
   * Custom element constructor.
   */
  constructor() {
    super()
    this.textarea = this.querySelector('textarea')
    this.type = this.getAttribute('lang')
  }

  /**
   * Lifecycle hook - component is attached to the DOM.
   */
  connectedCallback() {
    let syntax = this.textarea.innerHTML
      .replaceAll('<', '&lt;')
      .replaceAll('>', '&gt;')
      .replaceAll('\n', '<br>')
      .replaceAll('  ', '&nbsp;&nbsp;')
      .replaceAll(' ', '&nbsp;')

    switch (this.type) {
      case 'html':
        syntax = this.html(syntax)
        break
      case 'js':
        syntax = this.js(syntax)
        break
      case 'liquid':
        syntax = this.liquid(syntax)
        break
    }

    this.textarea.remove()

    const code = document.createElement('div')
    code.classList.add('code-block')
    code.innerHTML = syntax

    const lines = document.createElement('ul')
    lines.classList.add('code-block__lines')
    lines.setAttribute('aria-hidden', true)
    const lineCount = syntax.split('<br>').length

    lines.innerHTML = Array.from({ length: lineCount }).map((_, index) => {
      return `<li>${index + 1}</li>`
    }).join('')

    this.appendChild(code)
    this.appendChild(lines)
  }

  /**
   * Add JS syntax highlighting.
   * @param {String} syntax - Code to highlight.
   * @returns {String}
   */
  js(syntax) {
    return syntax
      .replace(
        /(\.|\!|\||==|=&nbsp;)/g,
        ($1) => `<span class="syntax-white">${$1}</span>`,
      )
      .replace(
        /\/\*\*.+?\*\//gs,
        ($1) => `<span class="syntax-dark-green">${$1}</span>`,
      )
      .replace(
        /[a-zA-Z]+(?=\()/g,
        ($1) => `<span class="syntax-light-yellow">${$1}</span>`,
      )
      .replace(
        /(\(|\)|{|})/g,
        ($1) => `<span class="syntax-dark-yellow">${$1}</span>`,
      )
      .replace(
        /(return\b|export\b|import\b)/g,
        ($1) => `<span class="syntax-purple">${$1}</span>`,
      )
      .replace(
        /(=&gt;|this|const\b|let\b|\[|\]|false)/g,
        ($1) => `<span class="syntax-dark-blue">${$1}</span>`,
      )
      .replace(
        /\d+/g,
        ($1) => `<span class="syntax-light-green">${$1}</span>`,
      )
      .replace(
        /'.+?'/g,
        ($1) => `<span class="syntax-orange">${$1}</span>`,
      )
  }

  /**
   * Add HTML syntax highlighting.
   * @param {String} syntax - Code to highlight.
   * @returns {String}
   */
  html(syntax) {
    return syntax
      .replace(
        /=/g,
        ($1) => `<span class="syntax-white">${$1}</span>`,
      )
      .replace(
        /"[a-zA-Z\-0-9_(){};&\.]+?"<br>/g,
        ($1) => `<span class="syntax-orange">${$1}</span>`,
      )
      .replace(
        /(?:&lt;(\/)?)\w+-\w+/g,
        ($1) => `<span class="syntax-dark-blue">${$1}</span>`,
      )
      .replace(
        /(&gt;|&lt;(\/)?)/g,
        ($1) => `<span class="syntax-dark-grey">${$1}</span>`,
      )
  }

  /**
   * Add Liquid syntax highlighting.
   * @param {String} syntax - Code to highlight.
   * @returns {String}
   */
  liquid(syntax) {
    return syntax
      .replace(
        /(end)*((els)?if|for|in|liquid)\b/g,
        ($1) => `<span class="syntax-purple">${$1}</span>`,
      )
      .replace(
        /(assign|product|&nbsp;==&nbsp;)\b/g,
        ($1) => `<span class="syntax-dark-blue">${$1}</span>`,
      )
      .replace(
        /(&nbsp;==&nbsp;)/g,
        ($1) => `<span class="syntax-dark-blue">${$1}</span>`,
      )
      .replace(
        /(\||,|&nbsp;=&nbsp;|\.)/g,
        ($1) => `<span class="syntax-white">${$1}</span>`,
      )
      .replace(
        /(?=\|\s)?(where|first)\b/g,
        ($1) => `<span class="syntax-light-yellow">${$1}</span>`,
      )
      .replace(
        /({%(-)?|(-)?%})/g,
        ($1) => `<span class="syntax-dark-yellow">${$1}</span>`,
      )
      .replace(
        /'.+?'/g,
        ($1) => `<span class="syntax-orange">${$1}</span>`,
      )
      .replace(
        /(&gt;|&lt;)(?=&nbsp;\d)/g,
        ($1) => `<span class="syntax-red">${$1}</span>`,
      )
      .replace(
        /\d+/g,
        ($1) => `<span class="syntax-light-green">${$1}</span>`,
      )
  }
}

customElements.define('code-block', CodeBlock)
