<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    @if (App\display_sidebar())
      @include('partials.header-sidebar')
    @endif
    <div class="wrap container" role="document">
      <div class="content">
        <main class="main clearfix">
          @yield('content')
        </main>
      </div>
      @if (App\display_sidebar())
        <aside class="sidebar">
          @include('partials.sidebar')
        </aside>
      @endif
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
