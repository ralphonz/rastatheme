<form class="login-form" method="post">

  <label for="username" class="sr-only">{{ esc_html_e( 'Username or email address', 'rastatheme' ) }}</label>
  <input type="text" class="woocommerce-Input woocommerce-Input--text input-text input-green" name="username" id="username" autocomplete="username" placeholder="{{ esc_html_e( 'Username or email address', 'rastatheme' ) }}..." value="{{ ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : '' }}" />

  <label for="password" class="sr-only">{{ esc_html_e( 'Password', 'rastatheme' ) }}</label>
  <input class="woocommerce-Input woocommerce-Input--text input-text input-gold" type="password" name="password" id="password" autocomplete="current-password" placeholder="{{ esc_html_e( 'Password', 'rastatheme' ) }}..." />

  @php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ) @endphp
  <button type="submit" class="btn btn-red " name="login" value="{{ esc_attr_e( 'Log in', 'rastatheme' ) }}"> {{ esc_html_e( 'Log in', 'rastatheme' ) }}</button>

  <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>{{ esc_html_e( 'Remember me', 'rastatheme' ) }}</span>
  </label>

  <a class="lost_password" href="{{ wp_lostpassword_url() }}">{{ esc_html_e( 'Lost your password?', 'rastatheme' ) }}</a>

</form>
