<a href="{{ get_field('announcement', 'options')['link'] }}" class="announcement-bar">
  {{ get_field('announcement', 'options')['text'] }}
</a>
<header class="mainheader">
  <div class="top-header">
    <div class="top-header-menu flex align-center center">
      <i class="material-icons md-48">menu</i>
    </div>
    <div class="top-header-brand flex align-center">
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    </div>
    <a href="/search" class="top-header-search flex align-center center">
      <i class="material-icons md-48">search</i>
    </a>
  </div>
  <div class="bottom-header-wrapper">
    <div class="bottom-header">
      <nav class="bottom-header-menu">
        @php
            while(have_rows('bottom_navigation', 'options')) : the_row();
        @endphp
        <a class="bottom-nav-link" href="{{ get_sub_field('link') }}">{{ get_sub_field('link_name') }}</a>
        @php
            endwhile;
        @endphp
      </nav>
    </div>
  </div>
</header>
