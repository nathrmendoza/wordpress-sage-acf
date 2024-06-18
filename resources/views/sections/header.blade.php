<header class="banner">
  <div class="main-wrapper">
    <div class="header-logo">
      <a href="{{home_url('/')}}">
        @if(!empty(get_field('header_logo', 'option')))
          @php($hdrLogo = get_field('header_logo', 'option'))
          <img 
            src="{{$hdrLogo['url']}}" 
            alt="{{$hdrLogo['alt']}}" 
            width="240" 
            height="auto" />
        @else 
          HEADER LOGO PLACEHOLDER
        @endif
      </a>
    </div>
    @if (has_nav_menu('main_nav'))
    <nav class="main-nav">
      {!! wp_nav_menu(['theme_location' => 'main_nav', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
    @endif
  </div>
</header>
