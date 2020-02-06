@extends('layouts.app')

@section('content')

<div class="front-page">
  <div class="latest">
    <h1 class="libre withline">Latest Stories</h1>
    <div class="posts-container">
      @php
        $latest = new WP_Query(['posts_per_page' => 20]);
        while($latest->have_posts()): $latest->the_post();
      @endphp
      <a class="post" href="{{ get_the_permalink() }}">
        <div class="post-data">
          <div class="flex">
            <div class="category-title">{{ get_the_category()[0]->name }}</div><div class="time-since">{{ human_time_diff(get_post_time()) }}</div>
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
  </div>
  <div class="categories">
    <div class="posts-container">
      @foreach(get_field('categories', 'options') as $category)
        @php
            $posts = new WP_Query(['posts_per_page' => 1, 'category_name' => $category->slug]);
            $posts->the_post();
        @endphp
        <a class="post" href="{{ get_the_permalink() }}">
          <div class="post-data">
            <div class="flex">
              <div class="category-title">{{ $category->name }}</div><div class="time-since">{{ human_time_diff(get_post_time()) }}</div>
            </div>
            <div class="post-info">
              <h2>{{ get_the_title() }}</h2>
            </div>
          </div>
          @if(get_the_post_thumbnail_url())
            <div class="image">
              <img src="{{ get_the_post_thumbnail_url() }}" alt="{{ get_the_title() }}">
            </div>
          @endif
        </a>
      @endforeach
    </div>
  </div>
</div>
<div class="hot-area">
  <div class="hot">
    <h2 class="libre withline">Sections</h2>
    <div class="categories-list">
      @foreach(get_field('main-categories', 'options') as $category)
        <a href="{{ get_category_link($category) }}" class="category">
          {{ $category -> name }}
        </a>
      @endforeach
    </div>
  </div>
</div>
@endsection
