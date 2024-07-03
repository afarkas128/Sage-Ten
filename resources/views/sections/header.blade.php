<header class="main-header sps bg-white">
  <nav class="nav-primary navbar navbar-expand-xl">
    <div class="container">
      <a class="brand navbar-brand py-0" href="{{ home_url('/') }}">
        {{-- {!! $siteName !!} --}}
        {{-- <img class="img-fluid header-logo" src="@asset('images/logo.svg')" alt="{{ get_bloginfo('name', 'display') }}" width="235" height="31"
          loading="eager" /> --}}
        <svg width="154" height="40" xmlns="http://www.w3.org/2000/svg">
          <!-- Background -->
          <rect width="154" height="40" fill="#ffffff" />

          <!-- Narwhal Icon -->
          <g>
            <circle cx="20" cy="20" r="20" fill="#15b79e" />
            <polygon points="20,0 25,15 20,10 15,15" fill="#15b79e" />
            <ellipse cx="20" cy="20" rx="18" ry="10" fill="#15b79e" />
            <circle cx="14" cy="17" r="2" fill="#ffffff" />
          </g>

          <!-- Company Name -->
          <text x="60" y="28" font-size="24" fill="#15b79e">Narwall</text>
        </svg>
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

      <div class="topbar-right d-flex gap-3 align-items-center">
        <x-button>Primary button</x-button>
        <x-button type="outline">Outline button</x-button>
      </div>
    </div>
  </nav>
</header>
