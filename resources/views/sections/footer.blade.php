@php
  // Footer additional information
  $copyright_text = get_field('copyright_text', 'option');

  // Footer socials
  $xtwitter_url = get_field('xtwitter_url', 'option');
  $linkedin_url = get_field('linkedin_url', 'option');
  $facebook_url = get_field('facebook_url', 'option');
  $instagram_url = get_field('instagram_url', 'option');
  $footer_info_text_under_logo = get_field('footer_info_text_under_logo', 'option');
@endphp

<footer class="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-4 col-xl-4 pb-5 pb-lg-0">
          <div class="footer-logo">
            <a href="{{ home_url('/') }}">
              <img class="img-fluid" src="@asset('images/logo.svg')" alt="{{ get_bloginfo('name', 'display') }}" width="185" height="32"
                loading="lazy">
            </a>
          </div>

          @if ($footer_info_text_under_logo)
            <div class="footer-description mt-4">{!! $footer_info_text_under_logo !!}</div>
          @endif
        </div>

        <div class="col-12 col-lg-8 col-xl-8">
          <div class="row footer-menus footer-widget-wrapper justify-content-lg-end">
            @php dynamic_sidebar('footer-widget') @endphp
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-md-7 col-lg">
          <div class="copyright d-flex">
            &copy;{!! date('Y') !!} @if ($copyright_text)
              {!! $copyright_text !!}
            @else
              Narwall - All rights reserved.
            @endif
          </div>
        </div>

        <div class="col-12 col-md-5 col-lg">
          @if ($linkedin_url || $facebook_url || $xtwitter_url || $instagram_url)
            <ul class="list-unstyled social-links d-flex align-items-center justify-content-md-end flex-wrap m-0">
              @if ($xtwitter_url)
                <li><a href="{!! $xtwitter_url !!}" target="_blank"><img class="img-fluid" src="@asset('images/icons/icon-x-gray.svg')" alt="Twitter/X"
                      loading="lazy" width="24" height="24"></a></li>
              @endif
              @if ($linkedin_url)
                <li><a href="{!! $linkedin_url !!}" target="_blank"><img class="img-fluid" src="@asset('images/icons/icon-linkedin.svg')" alt="LinkedIn"
                      loading="lazy" width="24" height="24"></a></li>
              @endif
              @if ($facebook_url)
                <li><a href="{!! $facebook_url !!}" target="_blank"><img class="img-fluid" src="@asset('images/icons/icon-facebook.svg')" alt="Facebook"
                      loading="lazy" width="24" height="24"></a></li>
              @endif
              @if ($instagram_url)
                <li><a href="{!! $instagram_url !!}" target="_blank"><img class="img-fluid" src="@asset('images/icons/icon-instagram-gray.svg')" alt="LinkedIn"
                      loading="lazy" width="24" height="24"></a></li>
              @endif
            </ul>
          @endif
        </div>
      </div>
    </div>
  </div>
</footer>
