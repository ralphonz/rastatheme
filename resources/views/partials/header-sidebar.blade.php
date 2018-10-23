@if(is_active_sidebar('sidebar-header'))
  <aside class="header-widgets">
    @php dynamic_sidebar('sidebar-header') @endphp
  </aside>
@endif
