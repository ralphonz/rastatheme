<aside class="contact content-widgets d-sm-flex justify-content-sm-between">
  <section class="widget contact-widget address-container">
    <h3 class="widget-title">{{ _e('Write', 'rastatheme') }}</h3>
    <div class="address widget-content">
      @if( !empty( get_option('address') ) )
        {!! get_option('address') !!}
      @endif
    </div>
  </section>
  <section class="widget contact-widget phone-container">
    <h3 class="widget-title">{{ _e('Phone', 'rastatheme') }}</h3>
    <div class="phone widget-content">
      @if( !empty( get_option('phone1') ) )
        <div class="phone1">{{ get_option('phone1') }}</div>
      @endif
      @if( !empty( get_option('phone2') ) )
        <div class="phone2">{{ get_option('phone2') }}</div>
      @endif
    </div>
  </section>
  <section class="widget contact-widget connect-container">
    <h3 class="widget-title">{{ _e('Connect', 'rastatheme') }}</h3>
    <div class="connect widget-content">
      @if( !empty( get_option('facebook_url') ) )
        <a class="facebook_url" href="{{ get_option('facebook_url') }}" target="_blank" title="{{ get_bloginfo('name', 'display') }} {{ _e('Facebook Page', 'rastatheme') }}">{{ _e('Facebook Page', 'rastatheme') }}</a>
      @endif
      @if( !empty( get_option('twitter_url') ) )
        <a class="twitter_url" href="https://twitter.com/{{ get_option('twitter_url') }}" target="_blank" title="{{ get_bloginfo('name', 'display') }} {{ _e('Twitter Profile', 'rastatheme') }}">&commat;{{ get_option('twitter_url') }}</a>
      @endif
      @if( !empty( get_option('google_url') ) )
        <a class="google_url" href="{{ get_option('google_url') }}" target="_blank" title="{{ get_bloginfo('name', 'display') }} {{ _e('Google Plus Profile', 'rastatheme') }}">{{ get_option('google_url') }}</a>
      @endif
      @if( !empty( get_option('linkedin_url') ) )
        <a class="LinkedIn_url" href="{{ get_option('linkedin_url') }}" target="_blank" title="{{ get_bloginfo('name', 'display') }} {{ _e('LinkedIn Profile', 'rastatheme') }}">{{ get_option('linkedin_url') }}</a>
      @endif
      @if( !empty( get_option('pinterest_url') ) )
        <a class="Pinterest_url" href="{{ get_option('pinterest_url') }}" target="_blank" title="{{ get_bloginfo('name', 'display') }} {{ _e('Pinterest Page', 'rastatheme') }}">{{ get_option('pinterest_url') }}</a>
      @endif
      @if( !empty( get_option('instagram_url') ) )
        <a class="instagram_url" href="{{ get_option('instagram_url') }}" target="_blank" title="{{ get_bloginfo('name', 'display') }} {{ _e('Instagram Profile', 'rastatheme') }}">{{ get_option('instagram_url') }}</a>
      @endif
    </div>
  </section>
</aside>
