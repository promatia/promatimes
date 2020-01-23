<div class="announcement-bar"><a href="/writers">PromaTimes is looking for writers</a></div>
<header class="mainheader">
  <div class="top-header">
    <div class="top-header-menu flex align-center center">
      Menu
    </div>
    <div class="top-header-brand flex align-center">
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    </div>
    <div class="top-header-search">
      Search
    </div>
  </div>
  <div class="bottom-header-wrapper">
    <div class="bottom-header">
      <nav class="bottom-header-menu">
        Bottom Nav
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
  </div>
</header>
