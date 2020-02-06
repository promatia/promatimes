@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
<div class="main-content">
  <div class="inner-content">
    <h1>{{ get_the_title() }}</h1>
    <div class="post-info">
      <div>
        Written by {{ get_author_name() }}
      </div>
      <div class="margin-left">
        Created
      </div>
    </div>
    <div class="categories">
      @foreach (get_the_category() as $category)
          <a class="category-title">{{ $category->name }}</a>
      @endforeach
    </div>
    <div class="content">
      {!! get_the_content() !!}
    </div>
  </div>
</div>
@endwhile
@endsection
