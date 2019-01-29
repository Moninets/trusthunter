{{--
  Template Name: Blog Page Template
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.blog-content')
    @endwhile
@endsection