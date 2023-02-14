/**
 * Components > Counter.
 * ------------------------------------------------------------------------------
 * Online counter functionality.
 *
 * @namespace counter
 */

/**
 * DOM selectors.
 */
const selectors = {
  counter: '[js-counter="number"]',
  unit: '[js-counter="unit"]',
};

/**
 * Create a new counter object.
 */
export default () => {

  /**
   * DOM node selectors.
   */
  const nodeSelectors = {
    counter: document.querySelector(selectors.counter),
    unit: document.querySelector(selectors.unit),
  };

  /**
   * Initialise component.
   */
  function init() {
    updateCounter();
  }

  /**
   * Update the counter.
   */
  function updateCounter() {
    let launch = nodeSelectors.counter.getAttribute('data-launch');
    launch = new Date(launch);
    const now = new Date();

    let difference = (now - launch);
    difference = parseFloat(difference / 1000 / 60 / 60 / 24 / 365).toFixed(2);

    nodeSelectors.counter.innerText = difference;

    if (difference < 2) {
      nodeSelectors.unit.innerText = 'year';
    }
  }

  /**
   * Expose public interface.
   */
  return Object.freeze({
    init,
  });
};
