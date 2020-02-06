<footer class="footer">
  <div class="inner-footer">
    <div>
      <p>
        <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      </p>
      <p>Your home of Promatia conversations,  stories and events that shape our nation</p>
      <p><a href="/about">More about PromaTimes</a></p>
      <p>PromaTimes is Promatia’s official independent government newsletter created to help keep citizens updated on national developments</p>
    </div>
    <div>
      <h2>Sections</h2>
      <div class="sections uppercase">
        @foreach(get_field('footer-sections', 'options') as $category)
        <a class="section" href="{{ get_category_link($category) }}">{{ $category->name }}</a>
        @endforeach
      </div>
    </div>
    <div>
      <h2>Links</h2>
      <div class="links">
        <a href="//promatia.com">Promatia</a>
        <a href="https://twitter.com/PromaTimes">PromaTimes Twitter</a>
        <a href="https://twitter.com/promatiagov">Promatia Twitter</a>
      </div>

    </div>
  </div>
  <div class="bottom-footer">

  </div>
</footer>
