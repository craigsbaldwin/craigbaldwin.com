/**
 * Helper: Breakpoints
 * -----------------------------------------------------------------------------
 * Global configuration for consistent values for media queries in scripts.
 * - These values should mirror the breakpoint values defined in `grid.scss`.
 */
export const values = {
  xs: 0,
  s: 576,
  m: 768,
  l: 1024,
  xl: 1366,
};

export default {
  xs: `${values.tiny}px`,
  s: `${values.small}px`,
  m: `${values.medium}px`,
  l: `${values.large}px`,
  xl: `${values.wide}px`,
};
