<?php
  $carousel = [
    [
      'titulo' => 'Moon',
      'modal_id' => 'holi',
      'active' => 1,
      'img' => 'img-06.jpg',
      'descr' => '<p>
        Sed id tellus in risus pre
        tium imperdiet eu lobortis dolor. Sed pellentesque, urna ac viverra lacinia, erat mauris venenatis purus, mollis egestas urna purus ac ex.
        Aenean nunc sem, lobortis at elit non, lobortis laoreet nibh. Maecenas at mi ipsum.
      </p>
      <p>
        Quisque tempor, ligula pharetra luctus elementum, arcu nisl suscipit ante, pharetra commodo dui est et enim. Sed eu vestibulum elit. Donec ut libero non.
      </p>',
      'url' => 'project.html'
    ],[
      'titulo' => 'Lbortis',
      'modal_id' => 'chaito',
      'active' => 0,
      'img' => 'img-07.jpg',
      'descr' => '<p>
        Pre id tellus in risus pre
        tium imperdiet eu lobortis dolor. Sed pellentesque, urna ac viverra lacinia, erat mauris venenatis purus, mollis egestas urna purus ac ex.
        Aenean nunc sem, lobortis at elit non, lobortis laoreet nibh. Maecenas at mi ipsum.
      </p>
      <p>
        Quisque tempor, ligula pharetra luctus elementum, arcu nisl suscipit ante, pharetra commodo dui est et enim. Sed eu vestibulum elit. Donec ut libero non.
      </p>',
      'url' => 'project.html'
    ]
  ];
?>

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
      <a href="./<?= $c['url'] ?>" class="btn btn-primary" title="<?= $c['titulo'] ?>">
        Discover
      </a>
      <!-- Trigger/Open The Modal -->
      <label for="<?= $c['modal_id'] ?>">Launch modal</label>
    </div>
  </div>

<?php endforeach; ?>

<!-- Trigger the modal with a button -->


<!-- The Modal -->
<div class="modal">
  <input id="holi" class="checkbox" type="checkbox">
  <div class="modal-overlay">
    <label for="holi" class="o-close"></label>
    <!-- from-top -->
    <div class="modal-wrap full a-center">
      <label for="holi" class="close">&#10006;</label>
      <h2>HOLI</h2>
      <p>
        HOLI
      </p>
    </div>
  </div>
</div>

<div class="modal">
  <input id="chaito" class="checkbox" type="checkbox">
  <div class="modal-overlay">
    <label for="chaito" class="o-close"></label>
    <!-- from-top -->
    <div class="modal-wrap full a-center">
      <label for="chaito" class="close">&#10006;</label>
      <h2>CHAITO</h2>
      <p>
        CHAITO
      </p>
    </div>
  </div>
</div>
