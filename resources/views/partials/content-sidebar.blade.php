@if(is_active_sidebar('sidebar-content'))
  <aside class="content-widgets d-sm-flex flex-sm-wrap justify-content-sm-between">
    @php dynamic_sidebar('sidebar-content') @endphp
  </aside>
@endif
