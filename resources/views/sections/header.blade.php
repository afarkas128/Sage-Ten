<header class="main-header sps bg-white">
  <nav class="nav-primary navbar navbar-expand-xl">
    <div class="container">
      <a class="brand navbar-brand py-0" href="{{ home_url('/') }}">
        <img class="img-fluid header-logo" src="@asset('images/logo.svg')" alt="{{ get_bloginfo('name', 'display') }}" width="235" height="31"
          loading="eager" />
      </a>

      <button class="navbar-toggler" data-toggle="collapse" data-target="#menu-collapse-main" type="button"
        aria-controls="menu-collapse-main" aria-expanded="false" aria-label="Toggle navigation">
        <svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
          <rect width="18" height="1.5" fill=red ry="0.75" x="3" y="6.25" />
          <rect width="18" height="1.5" fill=red ry="0.75" x="3" y="11.25" />
          <rect width="18" height="1.5" fill=red ry="0.75" x="3" y="16.25" />
        </svg>
      </button>

      <div class="navbar-collapse collapse" id="menu-collapse-main">
        {{-- @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
              'theme_location' => 'primary_navigation',
              'id' => 'menu-main-menu',
              'menu_class' => 'nav navbar-nav mb-3 mb-xl-0 mx-auto',
              'container' => '',
              'walker' => new \App\Walkers\BootstrapNavwalker(),
          ]) !!}
        @endif --}}

        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
              'theme_location' => 'primary_navigation',
              'menu_class' => 'navbar-nav',
              'walker' => new \App\wp_bootstrap5_navwalker(),
          ]) !!}
        @endif
      </div>
    </div>
  </nav>
</header>
