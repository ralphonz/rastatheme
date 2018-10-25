<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">
      <span class="name">{{ get_bloginfo('name', 'display') }}</span>
      <span class="tagline"><span class="red">{{ _e('One Love', 'rastatheme' ) }},</span> <span class="gold">{{ _e('One Heart', 'rastatheme') }},</span> <span class="green">{{ _e('One People', 'rastatheme') }}.</span>
    </a>
    <div class="d-md-none mobile-header d-flex justify-content-between">

      @if (is_user_logged_in())
 	      <a class="btn btn-red" href="{{ get_permalink( get_option('woocommerce_myaccount_page_id') ) }}" title=" {{ _e('My Account','rastatheme') }}">{{ _e('Account','rastatheme') }} </a>
      @else
 	      <button type="button" class="btn btn-red login-toggle collapsed" data-toggle="collapse" data-target="#header-login" aria-expanded="false">
           {{ _e('Login','rastatheme') }}
        </button>
      @endif

      <button type="button" class="btn btn-gold moblie-cart-toggle collapsed" data-toggle="collapse" data-target="#header-cart" aria-expanded="false">{{ _e('Cart', 'rastatheme') }}</button>

      <button type="button" class="btn btn-green navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-primary" aria-expanded="false">
        <span class="sr-only">{{ _e('Toggle navigation', 'rastatheme') }}</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        {{ _e('Menu', 'rastatheme') }}
      </button>

    </div>
    <nav class="nav-primary collapse show navbar-toggleable-md navbar-expand-md" id="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'nav d-md-flex justify-content-md-between',
          'walker' => new WP_Bootstrap_Navwalker(),
          'depth'	=> 2,])
        !!}
      @endif
    </nav>
    <div class="header-login collapse show" id="header-login">
      @include('partials.login')
    </div>
    <div class="header-cart collapse show" id="header-cart">
      @include('partials.cart')
    </div>
  </div>
</header>
