{{--
  Template Name: Contact Header
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.contact')
    @include('partials.content-page')
  @endwhile
@endsection
