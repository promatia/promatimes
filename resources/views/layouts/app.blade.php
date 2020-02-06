<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body {!! body_class() !!}>
    {!! do_action('get_header') !!}
    @include('partials.header')
    <div class="page-content">
        @yield('content')
    </div>
    {!! do_action('get_footer') !!}
    @include('partials.footer')
    {!! wp_footer() !!}
  </body>
</html>
