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
      <div class="col col-4 hero__puv">
        <h1>As peças para o seu FIAT estão aqui</h1>
        <p>Encontre os melhores preços em peças novas e acessórios para o seu carro aqui na <strong>MELHOR</strong>. Consulte-nos para itens multimarcas.</p>
        <a href="#">Solicite um orçamento</a>
      </div>

      <div class="col col-8 hero__image">
        <img src="<?= get_template_directory_uri(); ?>/images/carro-melhor-auto-pecas.png" alt="#" />
      </div>
    </div>
  </div>
</section>

<section class="destaque">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Peças em destaque</h2>
      </div>
    </div>

    <div class="row">
      Peças
    </div>

    <div class="row">
      <p>Não encontrou o que procura? Podemos te ajudar! Solicite um orçamento e iremos em busca das peças que você precisa.</p>
      <a href="#">Solicite um orçamento</a>
    </div>

    <div class="row">
      <div class="col">
        <h2>Aqui você encontra todas as peças que o seu Fiat precisa</h2>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <img src="#" alt="#" />
        <p>Amortecedores</p>
      </div>

      <div class="col">
        <img src="#" alt="#" />
        <p>Molas</p>
      </div>

      <div class="col">
        <img src="#" alt="#" />
        <p>Pastilhas</p>
      </div>

      <div class="col">
        <img src="#" alt="#" />
        <p>Embreagens</p>
      </div>

      <div class="col">
        <img src="#" alt="#" />
        <p>Velas</p>
      </div>

      <div class="col">
        <img src="#" alt="#" />
        <p>Cabos</p>
      </div>

      <div class="col">
        <img src="#" alt="#" />
        <p>Filtros</p>
      </div>

      <div class="col">
        <img src="#" alt="#" />
        <p>Óleos</p>
      </div>

      <div class="col">
        <img src="#" alt="#" />
        <p>Mangueiras</p>
      </div>

      <div class="col">
        <img src="#" alt="#" />
        <p>Direção</p>
      </div>

      <div class="col">
        <img src="#" alt="#" />
        <p>Lubrificantes</p>
      </div>

      <div class="col">
        <img src="#" alt="#" />
        <p>Equipamentos</p>
      </div>
    </div>
  </div>
</section>

<section class="institucional">
  <div class="container">
    <div class="row">
      <div class="col">
        <img src="#" alt="#" />
      </div>

      <div class="col">
        <h2>Melhor auto peças</h2>
        <p>Somos referência em preço e peças para o seu Fiat! Aqui na Melhor Auto Peças, você encontra tudo o que precisa para o seu carro Fiat, com garantia de procedência e os melhores preços da região.</p>
        <p>Aceitamos pagamento em dinheiro, PIX, cartões de crédito e débito.</p>
        <img src="#" alt="#" />
        <a href="#">Solicite um orçamento</a>
      </div>
    </div>

    <div class="row">
      <div class="col col-7">
        <h3>Não encontrou o que procurava?</h3>
        <p>Podemos te ajudar! Solicite um orçamento e iremos em busca das peças que você precisa.</p>
      </div>

      <div class="col col-3">
        <ul>
          <li><a href="tel:31331912275">(31) 33191.2275</a></li>
          <li><a href="https://wa.me/+5531975326033">(31) 97532.6033</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="mapa">
  <div class="container">
    <div class="row">
      <div class="col col-5">
        <h3>Visite nossa loja</h3>
        <p>Av. Tereza Cristina, 5.600 . Nova Gameleira
          Belo Horizonte/MG, CEP 30516-120
          Dentro do posto Beija Flor . Ver mapa</p>

        <h3>Horário de funcionamento</h3>
        <p>Segunda a sexta de 8h às 18h
          Sábado de 8h às 12h</p>

        <ul>
          <li><a href="tel:31331912275">(31) 33191.2275</a></li>
          <li><a href="https://wa.me/+5531975326033">(31) 97532.6033</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="cta">
  <div class="container">
    <div class="row">
      <div class="col col-6">
        <p>Solicite um orçamento sem compromisso agora mesmo, responderemos o mais breve possível.</p>
      </div>

      <div class="col col-4">
        <a href="#">Solicite um orçamento</a>
      </div>
    </div>
  </div>
</section>

<?php
require_once("footer.php");
?>