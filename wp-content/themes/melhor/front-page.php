<?php

/**
 * Template name: Home
 */
$estiloPagina = "style.css";
require_once("header.php");
?>

<section class="hero">
  <div class="container">
    <div class="row align-items-center">
      <?php
      $args = array(
        'page_id' => 2,
      );
      $institucional = new WP_Query($args);

      if ($institucional->have_posts()) : while ($institucional->have_posts()) : $institucional->the_post(); ?>

          <div class="col-12 col-lg-4 hero__puv">

            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

            <a href="https://wa.me/+5531975326033" class="btn" target="_blank">
              <div class="btn__label">
                Fale com um consultor
              </div>

              <div class="btn__icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon">
                  <path d="M504.3 273.6l-112.1 104c-6.992 6.484-17.18 8.218-25.94 4.406c-8.758-3.812-14.42-12.45-14.42-21.1L351.9 288H32C14.33 288 .0002 273.7 .0002 255.1S14.33 224 32 224h319.9l0-72c0-9.547 5.66-18.19 14.42-22c8.754-3.809 18.95-2.075 25.94 4.41l112.1 104C514.6 247.9 514.6 264.1 504.3 273.6z" />
                </svg>
              </div>
            </a>
          </div>

          <div class="col-12 col-lg-8 hero__image">
            <?php the_post_thumbnail(); ?>
          </div>

        <?php endwhile;
      else : ?>

        <p>Não há informações publicadas</p>

      <?php endif; ?>
    </div>
  </div>
</section>

<section id="produtos" class="destaque">
  <div class="container">
    <div class="row">
      <div class="col-12 destaque__titulo">
        <h2>Peças em destaque</h2>
      </div>
    </div>

    <div class="row justify-content-center destaque__pecas pecas slider">
      <?php
      $args = array(
        'post_type' => 'pecas',
        'posts_per_page' => -1
      );
      $pecas = new WP_Query($args);
      if ($pecas->have_posts()) : while ($pecas->have_posts()) : $pecas->the_post(); ?>

          <div class="pecas__box">
            <?php the_post_thumbnail(); ?>

            <div class="pecas__name">
              <?php
              $post_tags = get_the_tags();

              if ($post_tags) {
                echo "<h3>";
                echo $post_tags[0]->name;
                echo "</h3>";
              }
              ?>
              <p><?php the_title(); ?></p>
            </div>
          </div>

        <?php endwhile;
      else : ?>

        <p>Não há peças publicados</p>

      <?php endif; ?>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-md-6 destaque__conversao">
        <p><strong>Não encontrou o que procura?</strong><br />
          Podemos te ajudar! Solicite um orçamento e iremos em busca das peças que você precisa.</p>

        <a href="https://wa.me/+5531975326033" class="btn" target="_blank">
          <div class="btn__label">
            Fale com um consultor
          </div>

          <div class="btn__icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon">
              <path d="M504.3 273.6l-112.1 104c-6.992 6.484-17.18 8.218-25.94 4.406c-8.758-3.812-14.42-12.45-14.42-21.1L351.9 288H32C14.33 288 .0002 273.7 .0002 255.1S14.33 224 32 224h319.9l0-72c0-9.547 5.66-18.19 14.42-22c8.754-3.809 18.95-2.075 25.94 4.41l112.1 104C514.6 247.9 514.6 264.1 504.3 273.6z" />
            </svg>
          </div>
        </a>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-md-8 destaque__subtitulo">
        <h2>Aqui você encontra todas as peças que o seu Fiat precisa</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <?php
      $args = array(
        'post_type' => 'produtos',
        'posts_per_page' => -1
      );
      $produtos = new WP_Query($args);

      if ($produtos->have_posts()) : while ($produtos->have_posts()) : $produtos->the_post(); ?>

          <div class="col-4 col-md-2 destaque__box">
            <?php the_post_thumbnail(); ?>
            <p><?php the_title(); ?></p>
          </div>

        <?php endwhile;
      else : ?>

        <p>Não há produtos publicados</p>

      <?php endif; ?>
    </div>
  </div>
</section>

<section id="sobre-nos" class="institucional">
  <div class="container">
    <div class="row d-flex align-items-center">

      <?php
      $args = array(
        'page_id' => 42,
      );
      $institucional = new WP_Query($args);

      if ($institucional->have_posts()) : while ($institucional->have_posts()) : $institucional->the_post(); ?>

          <div class="col-12 col-md-6 institucional__imagem">
            <?php the_post_thumbnail(); ?>
          </div>

          <div class="col-12 col-md-6 institucional__conteudo">
            <h2><?php the_title(); ?></h2>

            <?php the_content(); ?>

            <a href="https://wa.me/+5531975326033" class="btn" target="_blank">
              <div class="btn__label">
                Fale com um consultor
              </div>

              <div class="btn__icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon">
                  <path d="M504.3 273.6l-112.1 104c-6.992 6.484-17.18 8.218-25.94 4.406c-8.758-3.812-14.42-12.45-14.42-21.1L351.9 288H32C14.33 288 .0002 273.7 .0002 255.1S14.33 224 32 224h319.9l0-72c0-9.547 5.66-18.19 14.42-22c8.754-3.809 18.95-2.075 25.94 4.41l112.1 104C514.6 247.9 514.6 264.1 504.3 273.6z" />
                </svg>
              </div>
            </a>
          </div>

        <?php endwhile;
      else : ?>

        <p>Não há produtos publicados</p>

      <?php endif; ?>
    </div>

    <div class="row justify-content-center institucional__conversao conversao">
      <div class="col-12 col-md-7 conversao__conteudo">
        <h3>Não encontrou o que procurava?</h3>
        <p>Podemos te ajudar! Solicite um orçamento e iremos em busca das peças que você precisa.</p>
      </div>

      <div class="col-12 col-md-3 conversao__contatos">
        <ul>
          <li>
            <a href="tel:31331912275">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z" />
              </svg>
              (31) 33191.2275
            </a>
          </li>
          <li>
            <a href="https://wa.me/+5531975326033" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
              </svg>
              (31) 97532.6033
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="localizacao" class="mapa">
  <iframe title="Mapa de como chegar" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15002.680571856581!2d-43.994284620707894!3d-19.938300385583947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa697bdd3f6acff%3A0x9e73c77c71a89a0f!2sMelhor%20Auto%20Pe%C3%A7as!5e0!3m2!1spt-BR!2sbr!4v1652831195786!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-5 mapa__box">
        <h3>Visite nossa loja</h3>
        <p>Av. Tereza Cristina, 5.600 . Nova Gameleira<br />
          Belo Horizonte/MG, CEP 30516-120<br />
          Dentro do posto Beija Flor . Ver mapa</p>

        <h3>Horário de funcionamento</h3>
        <p>Segunda a sexta de 8h às 18h<br />
          Sábado de 8h às 12h</p>

        <ul>
          <li>
            <a href="tel:31331912275">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z" />
              </svg>
              (31) 33191.2275
            </a>
          </li>
          <li>
            <a href="https://wa.me/+5531975326033" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
              </svg>
              (31) 97532.6033
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="cta">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 col-lg-8 cta__frase">
        <p>Solicite um orçamento sem compromisso agora mesmo, responderemos o mais breve possível.</p>
      </div>

      <div class="col-12 col-md-6 col-lg-4 cta__button">
        <a href="https://wa.me/+5531975326033" class="btn" target="_blank">
          <div class="btn__label">
            Fale com um consultor
          </div>

          <div class="btn__icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon">
              <path d="M504.3 273.6l-112.1 104c-6.992 6.484-17.18 8.218-25.94 4.406c-8.758-3.812-14.42-12.45-14.42-21.1L351.9 288H32C14.33 288 .0002 273.7 .0002 255.1S14.33 224 32 224h319.9l0-72c0-9.547 5.66-18.19 14.42-22c8.754-3.809 18.95-2.075 25.94 4.41l112.1 104C514.6 247.9 514.6 264.1 504.3 273.6z" />
            </svg>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<?php
require_once("footer.php");
?>