{{--
  Template Name: Home Page Template
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.banner-section')
    @include('partials.founders-section')
    @include('partials.advantages-section')
    @include('partials.international-section')
    @include('partials.about-section')
    @include('partials.blog-section')
    @include('partials.acquaintance-section')
    @endwhile
@endsection