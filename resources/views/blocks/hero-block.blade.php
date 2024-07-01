{{--
  Title: Hero Block
  Description: Page header / Hero block
  Category: theme-blocks
  Icon: align-pull-right
  Keywords: hero, banner
  Mode: auto
  Align: full
  PostTypes: page
  SupportsAlign: false
  SupportsMode: true
  SupportsMultiple: true
--}}

<section class="section section-{{ $block['classes'] }}" id="{{ $block['id'] }}">
  <div class="bg-container position-relative">
    <div class="bg-container__inner position-relative">
      <div class="bg-image">
        @if (isset($block['data']['background_image']) && $block['data']['background_image'])
          {!! wp_get_attachment_image($block['data']['background_image'], 'full', '', [
              'alt' => 'banner',
              'class' => 'img-fluid w-100',
              'loading' => 'eager',
          ]) !!}
        @endif
      </div>

      <div class="container absolute-inset d-flex flex-column justify-content-center">
        @hasfield('eyebrow')
          <h6 class="eyebrow">
            @field('eyebrow')
          </h6>
        @endfield

        @hasfield('title')
          <h1 class="header-title">
            @field('title')
          </h1>
        @endfield
      </div>
    </div>
  </div>
</section>