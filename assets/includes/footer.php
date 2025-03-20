<footer class="footer">
  <div class="footer__noise"></div>

  <div class="footer__content">
    <p class="footer__copyright">
      <strong>&copy; Craig Baldwin <?php echo date('Y'); ?></strong>
    </p>
  </div>

  <ul class="footer__links">
    <li>
      <a
        class="footer__link<?php if ($page == 'about') echo ' is-active' ?>"
        href="/about"
      >
        About
      </a>
    </li>

    <li class="footer__meta-links">
      <ul>
        <li>
          <a
            class="footer__link<?php if ($page == 'info') echo ' is-active' ?>"
            href="/about/info"
          >
            Info
          </a>
        </li>

        <li">
          <a
            class="footer__link"
            href="https://github.com/craigsbaldwin/craigbaldwin.com"
          >
            Repo
          </a>
        </li>
      </ul>
    </li>

    <li>
      <a
        class="footer__link<?php if ($page == 'blog') echo ' is-active' ?>"
        href="/blog"
      >
        Blog
      </a>
    </li>

    <li>
      <a
        class="footer__link<?php if ($page == 'work') echo ' is-active' ?>"
        href="/work"
      >
        Work
      </a>
    </li>

    <li>
      <a
        class="footer__link<?php if ($page == 'stats') echo ' is-active' ?>"
        href="/stats"
      >
        Stats
      </a>
    </li>

    <li>
      <a
        class="footer__link<?php if ($page == 'contact') echo ' is-active' ?>"
        href="/contact"
      >
        Contact
      </a>
    </li>
  </ul>
</footer>
