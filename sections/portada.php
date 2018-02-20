<div class="container-fluid">
  <div class="row">
    <div class="col-sm-offset-4 col-sm-4 hidden-xs">
      <h1><?= $nombre ?></h1>
      <p><?= $descripcion ?></p>
    </div>
    <!-- col-sm-offset-8  -->
    <div class="col-sm-4 pull-right ult-noticias">
      <div class="text-right">
        <h3 class="template-title-example">Últimas entradas</h3>
        <?php foreach ($noticias as $noticia): ?>
          <p><a href="<?= $noticia['url'] ?>"><?= $noticia['titulo'] ?></a></p>
        <?php endforeach; ?>
      </div>
      <br>
      <?php include("sections/socialbuttons.php") ?>
    </div>
  </div>
</div>
