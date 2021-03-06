<?php foreach ($carousel as $c): ?>

  <div class="item <?= $c['active'] ? 'active' : '' ?>">
    <img class="img-responsive" src="./assets/images/<?= $c['img'] ?>" alt="<?= $c['titulo'] ?> imagen">
    <div class="carousel-caption card-shadow reveal">
      <h3><?= $c['titulo'] ?></h3>
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
      </a>
      <div class="descripcion">
        <?= $c['descr'] ?>
      </div>
      <a href="./<?= $c['url'] ?>" target="_blank" rel="nofollow" class="btn btn-primary" title="<?= $c['titulo'] ?>">
        Discover
      </a>
    </div>
  </div>

<?php endforeach; ?>
