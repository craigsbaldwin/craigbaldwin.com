<header class="header">
  <div class="header__backdrop"></div>

  <<?php if ($page == 'index'): ?>h1<?php else: ?>p<?php endif ?> class="header__title">
    <a
      class="header__link"
      href="/"
    >
      Craig Baldwin
    </a>
  </<?php if ($page == 'index'): ?>h1<?php else: ?>p<?php endif ?>>

  <ul class="header__list">
    <li class="header__list-item">
      <a
        class="header__link<?php if ($page == 'about') echo ' is-active' ?>"
        href="/about"
      >
        About
      </a>
    </li>

    <li class="header__list-item">
      <a
        class="header__link<?php if ($page == 'work') echo ' is-active' ?>"
        href="/work"
      >
        Work
      </a>
    </li>

    <li class="header__list-item">
      <a
        class="header__link<?php if ($page == 'stats') echo ' is-active' ?>"
        href="/stats"
      >
        Stats
      </a>
    </li>

    <li class="header__list-item">
      <a
        class="header__link<?php if ($page == 'contact') echo ' is-active' ?>"
        href="/contact"
      >
        Contact
      </a>
    </li>
  </ul>
</header>
