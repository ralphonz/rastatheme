{{--
  Template Name: Departments
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('woocommerce.departments')
    @include('partials.content-page')
    @include('partials.content-sidebar')
  @endwhile
@endsection
