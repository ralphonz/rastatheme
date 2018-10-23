<footer class="content-info">
  <div class="container">
    <nav class="nav-secondary">
      @if (has_nav_menu('footer_navigation'))
        {!! wp_nav_menu([
          'theme_location' => 'footer_navigation',
          'menu_class' => 'nav d-md-flex justify-content-md-around',
          'walker' => new WP_Bootstrap_Navwalker(),
          'depth'	=> 2,]) !!}
      @endif
    </nav>
    <div class="social-networks d-flex justify-content-around">
      <a class="icon facebook-icon red-icon" title="Rastafaries Facebook Page" href="{{ get_option('facebook_url') }}" target="_blank">
        @include('icons.facebook')
      </a>
      <a class="icon twitter-icon gold-icon" title="Rastafaries Twitter Profile" href="{{ get_option('twitter_url') }}" target="_blank">
        @include('icons.twitter')
      </a>
      <a class="icon mail-icon green-icon" title="Contact the Rastafaries" href="{{ get_permalink(get_option('quick_contact_url')) }}" target="_blank">
        @include('icons.mail')
      </a>
    </div>
    <p class="copyright tiny">Website designed and powered with renewable energy &commat; <a href="https://blueleafstudio.net" target="_blank"><span class="red">Blueleaf</span> <span class="gold">Studio</span> <span class="green">.net</span></a>. &copy;  <?php echo date("Y"); ?> Rasta Fairies – Reggae Clothes, Jewelry and Gifts. <span class="red">All</span> <span class="gold">Rights</span> <span class="green">Reserved</span></p>
    <p class="backtotop hidden-md-up"><span class="up-arrow">&raquo;</span>{{ _e("Back To Top", 'rastatheme') }}</p>
  </div>
</footer>
