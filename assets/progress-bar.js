/**
 * Create new progress bar custom element.
 */
class ProgressBar extends HTMLElement {

  /**
   * Custom element constructor.
   */
  constructor() {
    super()
    this.bar = this.querySelector('[js-progress-bar="bar"]')
    this.list = this.querySelector('[js-progress-bar="list"]')
    this.yearList = this.querySelector('[js-progress-bar="year-list"]')
    this.text = this.querySelector('[js-progress-bar="text"]')
    this.total = 214
  }

  /**
   * Lifecycle hook - component is attached to the DOM.
   */
  connectedCallback() {
    const listItems = [...this.list.querySelectorAll('li[year]')]
    const completed = listItems.length

    this.text.innerText = `${completed} / ${this.total}`
    this.bar.style.width = `${(completed / this.total) * 100}%`

    this.buildYearList()
  }

  /**
   * Builds list of mountains climbed ordered by year attribute.
   */
  buildYearList() {
    this.mountains = [...this.list.querySelectorAll('li[year]')]

    this.mountains
      .map((element) => element.cloneNode(true))
      .sort((a, b) => {
        const aYear = a.getAttribute('year')
        const bYear = b.getAttribute('year')

        return bYear - aYear
      })
      .forEach((element) => this.yearList.appendChild(element))
  }
}

customElements.define('progress-bar', ProgressBar)
