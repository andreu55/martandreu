<?php

require_once 'datos_comunes.php';

$descripcion = 'WELCOME TO MOUNTAIN WEBSITE. AGENCY IN BERLIN.';
$contacto = 'Contact';
$ult_entradas = 'Last posts';

$que_hacemos = 'What do we do?';
$que_hacemos_text = '<p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas luctus at sem quis varius.<br>
  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus iaculis magna sagittis elit sagittis, at hendrerit lorem venenatis. Morbi accumsan iaculis blandit. Cras ultrices hendrerit nisl.
</p>
<p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas luctus at sem quis varius.
</p>';

$quienes_somos = 'Who we are';
$quienes_somos_text = '<p>Praesent at feugiat est, at faucibus ipsum. Aenean condimentum mauris vel malesuada pulvinar. <br>Vestibulum sit amet hendrerit leo, quis vehicula mi.</p>';

$getInTouch = 'Get in touch';
$getInTouch_text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

$escribenos = 'Write aquí!';

$send = 'Send';

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
  ],[
    'titulo' => 'Anchonio',
    'modal_id' => 'chaito',
    'active' => 0,
    'img' => 'img-07.jpg',
    'descr' => '<p>
      Anchonio id tellus in risus pre
      tium imperdiet eu lobortis dolor. Sed pellentesque, urna ac viverra lacinia, erat mauris venenatis purus, mollis egestas urna purus ac ex.
      Aenean nunc sem, lobortis at elit non, lobortis laoreet nibh. Maecenas at mi ipsum.
    </p>
    <p>
      Quisque tempor, ligula pharetra luctus elementum, arcu nisl suscipit ante, pharetra commodo dui est et enim. Sed eu vestibulum elit. Donec ut libero non.
    </p>',
    'url' => 'project.html'
  ]
];

// Quienes somos
$nosotros = [
  [
    'id' => 'foto-andreu',
    'nombre' => 'Andreu García',
    'img' => 'andreu-garcia.jpg',
    'img-mobile' => 'marta-tornero.jpg',
    'alt' => 'Andreu Garcia',
    'funcion' => 'Full Stack Developer',
    'descr' => 'Sed elementum vehicula nisl, a egestas velit rhoncus nec.Cras vel sapien tincidunt, lacinia risus vel, imperdiet neque.',
    'social' => [
      [
        'icon' => 'fa-facebook',
        'url' => 'https://facebook.com'
      ],[
        'icon' => 'fa-twitter',
        'url' => 'https://twitter.com'
      ],[
        'icon' => 'fa-linkedin',
        'url' => 'https://www.linkedin.com'
      ],[
        'icon' => 'fa-rss',
        'url' => 'https://www.linkedin.com'
      ]
    ]
  ],[
    'id' => 'foto-marta',
    'nombre' => 'Marta Tornero',
    'img' => 'marta-tornero.jpg',
    'img-mobile' => 'andreu-garcia.jpg',
    'alt' => 'Marta Tornero',
    'funcion' => 'Copywriter & Community Manager',
    'descr' => 'Sed elementum vehicula nisl, a egestas velit rhoncus nec.Cras vel sapien tincidunt, lacinia risus vel, imperdiet neque.',
    'social' => [
      [
        'icon' => 'fa-facebook',
        'url' => 'https://facebook.com'
      ],[
        'icon' => 'fa-twitter',
        'url' => 'https://twitter.com'
      ],[
        'icon' => 'fa-linkedin',
        'url' => 'https://www.linkedin.com'
      ],[
        'icon' => 'fa-rss',
        'url' => 'https://www.linkedin.com'
      ]
    ]
  ]
];
