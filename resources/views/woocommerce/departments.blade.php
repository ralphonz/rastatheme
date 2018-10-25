@php
$terms = get_terms(array(
  'taxonomy'    => 'department',
  'hide_empty'  => false,
  'orderby'     => 'menu_order'
) );
@endphp

<section class="departments d-sm-flex flex-sm-wrap justify-content-md-between">
  @foreach ($terms as $term)
    <div class="department">
      <h2 class="department-title">  <a href="{{ get_term_link($term->term_id) }}" title="{{ $term->name }}">{{ $term->name }}</a></h2>
      @if (function_exists('z_taxonomy_image'))
        <a href="{{ get_term_link($term->term_id) }}" title="{{ $term->name }}">{!! z_taxonomy_image($term->term_id) !!}</a>
      @endif
    </div>
  @endforeach
</section>
