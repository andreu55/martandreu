<ul class="list-icons pull-right">
  <?php foreach ($social as $s): ?>
    <li><a href="<?= $s['url'] ?>" class="social-round-icon white-round-icon fa-icon">
      <i class="fa <?= $s['icon'] ?>"></i>
    </a></li>
  <?php endforeach; ?>
</ul>
