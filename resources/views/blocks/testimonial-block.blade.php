{{--
Title: Testimonial Block
Description: Customer testimonial
Category: formatting
Icon: admin-comments
Keywords: testimonial quote
Mode: edit
Align: full
PostTypes: page post
SupportsAlign: left right
SupportsMode: false
SupportsMultiple: false
EnqueueStyle: styles/style.css
EnqueueScript: scripts/script.js
EnqueueAssets: path/to/asset
--}}

<section class="section section-{{ $block['classes'] }}" id="{{ $block['slug'] }}" data-{{ $block['slug'] }}>
  <div class="container">
    <div class="row">
      @hasfield('testimonial')
      <div class="col-lg-6">
        <blockquote data-{{ $block['id'] }} class="{{ $block['classes'] }}">
          <p>@field('testimonial')</p>
        </blockquote>
      </div>
      @endfield

      @hasfield('testimonial')
      <div class="col-lg-6">
        <cite><span>@field('author')</span></cite>
      </div>
      @endfield
    </div>
  </div>
</section>