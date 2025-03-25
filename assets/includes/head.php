<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="description" content="<?php echo $description ?>">

<meta property="og:title" content="<?php echo $seo_title ?>">

<meta property="og:description" content="<?php echo $description ?>">
<meta property="og:locale" content="en_GB">
<meta property="og:site_name" content="Craig Baldwin">
<meta property="og:type" content="website">
<meta property="og:url" content="https://craigbaldwin.com/">

<link href="/assets/images/favicon/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
<link href="/assets/images/favicon/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
<link href="/assets/images/favicon/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
<link href="/assets/images/favicon/site.webmanifest" rel="manifest">
<link color="#1b2229" href="/assets/images/favicon/safari-pinned-tab.svg" rel="mask-icon">
<link href="/assets/images/favicon/favicon.ico" rel="shortcut icon">
<meta content="#1b2229" name="msapplication-TileColor">
<meta content="/assets/images/favicon/browserconfig.xml" name="msapplication-config">
<meta content="#1b2229" name="theme-color">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200..900&display=swap" rel="stylesheet">

<style>
  :root {
    /* Border radius */
    --border-radius: 5px;

    /* Colours */
    --color-black: rgb(0 0 0);
    --color-black-opacity: rgb(0 0 0 / 60%);
    --color-blue: rgb(52 152 219);
    --color-dark-blue: rgb(10 61 98);
    --color-dark-grey: rgb(60 60 60);
    --color-darker-grey: rgb(35 35 35);
    --color-darkest-grey: rgb(15 15 15);
    --color-deep-purple: rgb(52 73 94);
    --color-fuchsia: rgb(179 55 113);
    --color-green: rgb(46 204 113);
    --color-grey: rgb(241 241 241);
    --color-light-blue: rgb(156 220 254);
    --color-light-grey: rgb(200 200 200);
    --color-lighter-grey: rgb(220 220 220);
    --color-mid-grey: rgb(75 75 75);
    --color-orange: rgb(230 126 34);
    --color-pink: rgb(232 67 147);
    --color-purple: rgb(155 89 182);
    --color-red: rgb(231 76 60);
    --color-white: rgb(255 255 255);
    --color-white-opacity: rgb(255 255 255 / 75%);
    --color-white-text: rgb(235 235 235);
    --color-yellow: rgb(234 181 67);

    /* Code colours */
    --color-inline-code: var(--color-red);
    --color-syntax-dark-blue: rgb(86 156 214);
    --color-syntax-dark-green: rgb(82 153 73);
    --color-syntax-dark-grey: rgb(128 128 128);
    --color-syntax-dark-yellow: rgb(215 186 125);
    --color-syntax-light-blue: rgb(156 220 254);
    --color-syntax-light-green: rgb(78 187 125);
    --color-syntax-light-yellow: rgb(220 220 170);
    --color-syntax-orange: rgb(206 145 120);
    --color-syntax-purple: rgb(197 134 192);
    --color-syntax-white: var(--color-white);
    --color-syntax-red: var(--color-red);

    /* Page colours */
    --color-about: var(--color-blue);
    --color-blog: var(--color-orange);
    --color-contact: var(--color-red);
    --color-info: var(--color-blue);
    --color-page: var(--color-<?php echo $page ?>);
    --color-stats: var(--color-green);
    --color-work: var(--color-purple);

    /* Year colours */
    --color-2025: var(--color-fuchsia);
    --color-2024: var(--color-green);
    --color-2023: var(--color-blue);
    --color-2022: var(--color-red);
    --color-2021: var(--color-purple);
    --color-2020: var(--color-orange);
    --color-2019: var(--color-pink);
    --color-2018: var(--color-dark-blue);

    /* Dynamic colours */
    --color-background: var(--color-white);
    --color-code-background: var(--color-darker-grey);
    --color-code-lines: var(--color-text-inverse);
    --color-container: var(--color-grey);
    --color-footer: var(--color-darker-grey);
    --color-header: var(--color-white-opacity);
    --color-inline-code-background: var(--color-lighter-grey);
    --color-text-inverse: var(--color-white);
    --color-text-dark: var(--color-darker-grey);
    --color-text: var(--color-dark-grey);

    /* Font family */
    --font-family-body: 'Inconsolata', serif;

    /* Spacing */
    --spacing-2xs: 0.25rem;
    --spacing-xs: 0.5rem;
    --spacing-s: 0.75rem;
    --spacing-m: 1rem;
    --spacing-l: 1.25rem;
    --spacing-xl: 1.5rem;
    --spacing-2xl: 2rem;
    --spacing-3xl: 3rem;
    --spacing-4xl: 4rem;

    @media (prefers-color-scheme: dark) {
      --color-background: var(--color-mid-grey);
      --color-code-background: var(--color-darkest-grey);
      --color-code-lines: var(--color-text);
      --color-container: var(--color-darker-grey);
      --color-footer: var(--color-lighter-grey);
      --color-header: var(--color-black-opacity);
      --color-inline-code-background: var(--color-dark-grey);
      --color-text-inverse: var(--color-dark-grey);
      --color-text-dark: var(--color-white-text);
      --color-text: var(--color-white-text);
    }
  }
</style>

<link href="/assets/reset.css?v=1302" rel="stylesheet" />
<link href="/assets/theme.css?v=1302" rel="stylesheet" />
