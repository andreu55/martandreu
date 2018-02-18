<?php

  $andreu = [
    [
      'icon' => 'fa-facebook',
      'url' => 'https://facebook.com/'
    ],[
      'icon' => 'fa-twitter',
      'url' => 'https://twitter.com/'
    ],[
      'icon' => 'fa-linkedin',
      'url' => 'https://www.linkedin.com/'
    ],[
      'icon' => 'fa-rss',
      'url' => 'https://www.linkedin.com/'
    ],
  ];

  $marta = [
    [
      'icon' => 'fa-facebook',
      'url' => 'https://facebook.com/'
    ],[
      'icon' => 'fa-twitter',
      'url' => 'https://twitter.com/'
    ],[
      'icon' => 'fa-linkedin',
      'url' => 'https://www.linkedin.com/'
    ],[
      'icon' => 'fa-rss',
      'url' => 'https://www.linkedin.com/'
    ],
  ];

?>

<div class="row section-container-spacer">
  <div class="col-xs-12 col-md-12">
    <h2>Quienes somos</h2>
    <p>Praesent at feugiat est, at faucibus ipsum. Aenean condimentum mauris vel malesuada pulvinar. <br>Vestibulum sit amet hendrerit leo, quis vehicula mi.</p>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-6">
    <img src="./assets/images/andreugarcia.jpg" alt="" class="reveal img-responsive reveal-content image-center">
    <h3>John Snow</h3>
    <h4>UX designer</h4>
    <p>Sed elementum vehicula nisl, a egestas velit rhoncus nec.Cras vel sapien tincidunt, lacinia risus vel, imperdiet neque.</p>
    <p>
      <?php foreach ($andreu as $url): ?>
        <a href="<?= $url['url'] ?>" class="social-round-icon fa-icon" title="">
          <i class="fa <?= $url['icon'] ?>" aria-hidden="true"></i>
        </a>
      <?php endforeach; ?>
    </p>
  </div>

  <div class="col-xs-12 col-md-6">
    <img src="./assets/images/profil-02.jpg" alt="" class="reveal img-responsive reveal-content image-center">
    <h3>Sansa Stark</h3>
    <h4>UI designer</h4>
    <p>Praesent at feugiat est, at faucibus ipsum. Aenean condimentum mauris vel malesuadav pulvinar. Vestibulum sit amet hendrerit leo, quis vehicula mi.</p>
    <p>
      <?php foreach ($marta as $url): ?>
        <a href="<?= $url['url'] ?>" class="social-round-icon fa-icon" title="">
          <i class="fa <?= $url['icon'] ?>" aria-hidden="true"></i>
        </a>
      <?php endforeach; ?>
    </p>
  </div>
</div>
