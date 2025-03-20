/**
 * Create new time since custom element.
 */
class TimeSince extends HTMLElement {

  /**
   * Custom element constructor.
   */
  constructor() {
    super()
  }

  /**
   * Lifecycle hook - component is attached to the DOM.
   */
  connectedCallback() {
    let launch = this.getAttribute('date')
    launch = new Date(launch)
    const now = new Date()

    let difference = (now - launch)
    difference = parseFloat(difference / 1000 / 60 / 60 / 24).toFixed(0)

    let unit = 'day'

    if (difference > 182) {
      difference = parseFloat(difference / 365).toFixed(2)
      unit = 'year'
    }

    unit = difference === 1 ? unit : `${unit}s`
    this.innerText = `${difference} ${unit}`
  }
}

customElements.define('time-since', TimeSince)
