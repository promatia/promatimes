@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
<div class="main-content">
  <div class="inner-content">
    <div class="article-categories">
      @foreach (get_the_category() as $category)
          <a class="category-title" href="{{ get_category_link($category) }}">{{ $category->name }}</a>
      @endforeach
    </div>
    <h1 class="article-title">{{ get_the_title() }}</h1>
    <div class="article-info">
      <div>
        Written by {{ get_author_name() }}
      </div>
      <div class="margin-left">
        Created
      </div>
    </div>
    <div class="content">
      {!! get_the_content() !!}
    </div>
  </div>
</div>
@endwhile
@endsection
