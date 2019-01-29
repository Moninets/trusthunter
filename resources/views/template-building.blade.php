{{--
  Template Name: Link Building Page Template
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.content-building')
    @include('partials.acquaintance-page')
    @endwhile
@endsection