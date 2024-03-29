/**
 * Index JS.
 * ------------------------------------------------------------------------------
 * Entry point JavaScript file.
 *
 */
import "../styles/theme.scss";

/**
 * Global helper imports.
 */
import {keyboardTabbable} from './helpers/a11y';
import eventBus from './helpers/event-bus';
import {pageHandle} from './helpers/utils';

/**
 * Global component imports.
 */
import code from './components/code';
import counter from './components/counter';
import distances from './components/distances';
import header from './components/header';
import highlighter from './components/highlighter';
import map from './components/map';
import progress from './components/progress';

/**
 * Global utils.
 */
window.site = window.site || {};
window.site.eventBus = eventBus();

/**
 * Init based on page handle.
 */
document.addEventListener('DOMContentLoaded', () => {
  keyboardTabbable().init();
  header().init();
  highlighter().init();

  switch (pageHandle()) {
    case 'info':
      counter().init();
      break;

    case 'distances':
      distances().init();
      break;

    case 'mountains':
      map().init();
      progress().init();
      break;

    case 'article':
      code().init();
      break;

    default:
      break;
  }
});
