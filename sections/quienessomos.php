<div class="row section-container-spacer">
  <div class="col-xs-12 col-md-12">
    <h2>Quienes somos</h2>
    <p>Praesent at feugiat est, at faucibus ipsum. Aenean condimentum mauris vel malesuada pulvinar. <br>Vestibulum sit amet hendrerit leo, quis vehicula mi.</p>
  </div>
</div>
<div class="row">
  <?php foreach ($nosotros as $u): ?>
    <div class="col-xs-12 col-md-6">
      <img src="./assets/images/<?= $u['img'] ?>" alt="<?= $u['alt'] ?>" class="reveal img-responsive reveal-content image-center">
      <h3><?= $u['nombre'] ?></h3>
      <h4><?= $u['funcion'] ?></h4>
      <p><?= $u['descr'] ?></p>
      <p>
        <?php foreach ($u['social'] as $url): ?>
          <a href="<?= $url['url'] ?>" class="social-round-icon fa-icon" title="">
            <i class="fa <?= $url['icon'] ?>" aria-hidden="true"></i>
          </a>
        <?php endforeach; ?>
      </p>
    </div>
  <?php endforeach; ?>
</div>
