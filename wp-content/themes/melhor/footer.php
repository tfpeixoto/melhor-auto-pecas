<footer>
  <div class="container footer">
    <div class="row">
      <div class="col col-2 footer__brand">
        <img src="#" alt="#" />
      </div>

      <div class="col col-3 footer__contact">
        <ul>
          <li><a href="tel:31331912275">Telefone</a></li>
          <li><a href="https://wa.me/+5531975326033">Whatsapp</a></li>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Instagram</a></li>
        </ul>
      </div>

      <?php
      wp_nav_menu(array(
        'theme_location'  => 'main-menu',
        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse footer__menu',
        'container_id'    => 'bs-example-navbar-collapse-1',
        'menu_class'      => 'navbar-nav mr-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
      ));
      ?>

      <div class="col col-3 footer__copy">
        <p>© 2022 Copyright. Todos os direitos reservados.
          <a href="#">Melhor Auto Peças</a>
        </p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>