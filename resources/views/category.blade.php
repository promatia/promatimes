{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
@php
    $category = get_queried_object();

    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    $query = new WP_Query([
        'paged'         => $paged, 
        'category_name' => $category->name,
        'order'         => 'asc',
        'post_type'     => 'post',
        'post_status'   => 'publish',
        'limit'         => 20
    ]);
@endphp

<div class="main-content">
    <div class="inner-content">
        <h1 class="libre uppercase no-margin">{{ $category->name }}</h1>
        <div class="libre"><strong>Category</strong></div>

        <div>
        {!! get_field('content', $category) !!}
        </div>
        <hr>
        @while($query->have_posts()) @php $query->the_post() @endphp
        <a class="post" href="{{ get_the_permalink() }}">
        <div class="post-data">
            <div class="flex">
                <div class="category-title">{{ $category->name }}</div><div class="time-since">{{ human_time_diff(get_post_time()) }}</div>
            </div>
            <div class="post-info">
                <h2>{{ get_the_title() }}</h2>
                <div class="text">{{ get_the_excerpt() }}</div>
            </div>
        </div>
        @if(get_the_post_thumbnail_url())
            <div class="image">
                <img src="{{ get_the_post_thumbnail_url() }}" alt="{{ get_the_title() }}">
            </div>
        @endif
        </a>
        @endwhile 
    </div>
    @php
        wp_reset_postdata()
    @endphp
    

    @php
        next_posts_link( 'Older Entries' );
        previous_posts_link( 'Newer Entries' );
    @endphp 
</div>
@endsection
