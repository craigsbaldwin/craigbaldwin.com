<div class="card">
  <h1 class="card__title">
    <?php echo $title ?>
  </h1>

  <span class="card__line"></span>

  <?php if ($description): ?>
    <p class="card__description">
      <strong><?php echo $description ?></strong>
    </p>
  <?php endif ?>
</div>
