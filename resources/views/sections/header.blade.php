<header class="header main-header py-4">
  <section class="header__container container d-flex justify-content-between align-items-center">
    <a class="brand navbar-brand" href="{{ $home_url }}" title="{{ $site_name }}">{!! $siteName !!}</a>

    <nav class="nav-primary navbar navbar-expand-xl" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      <div class="collapse navbar-collapse justify-content-lg-start" id="menu-collapse-main">
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
              'menu_class' => 'nav navbar-nav mb-3 mb-xl-0 mx-auto',
              'walker' => new \App\wp_bootstrap5_navwalker(),
          ]) !!}
        @endif

        <div class="navigation-actions navbar-footer d-xl-none py-5">
          <div class="header-icon-nav d-flex justify-content-end align-items-center gap-3">
            <span class="header-search" id="mobile-search-trigger">
              @svg('images.icons.icon-magnifying-glass')
            </span>
          </div>
        </div>
      </div>

      <button class="navbar-toggler collapsed" type="button" title="{{ __('mobile menu icon', 'sage') }}" data-bs-toggle="collapse"
        data-bs-target="#menu-collapse-main" aria-controls="menu-collapse-main" aria-expanded="false" tabindex="1">
        <svg width="24" height="24" aria-hidden="true" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
          <rect width="18" height="1.5" fill=red ry="0.75" x="3" y="6.25" />
          <rect width="18" height="1.5" fill=red ry="0.75" x="3" y="11.25" />
          <rect width="18" height="1.5" fill=red ry="0.75" x="3" y="16.25" />
        </svg>
      </button>
    </nav>
  </section>
</header>
