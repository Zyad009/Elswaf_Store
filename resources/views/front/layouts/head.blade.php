@push("front-css")
<link rel="stylesheet" href="{{ asset('front/assets2/css/custom.css') }}">
@endpush

<div class="header-top">
  <div class="container">
    <div class="header-left">
      <ul class="top-menu top-link-menu d-none d-md-block">
        <li>
          {{-- رقم الهاتف --}}
          <ul>
            <li>
              <i class="icon-phone">
              </i>Call: +01114656758 / +01555131167
            </li>
          </ul>

        </li>
      </ul><!-- End .top-menu -->
    </div><!-- End .header-left -->

    <div class="header-right">
      <div class="social-icons social-icons-color">
        <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i
            class="icon-facebook-f"></i></a>
        <a href="#" class="social-icon social-linkedin" title="linkedin" target="_blank"><i
            class="icon-linkedin"></i></a>
      </div><!-- End .soial-icons -->

    </div><!-- End .header-right -->
  </div>
</div>
<div class="header-middle">
  <div class="container">

    {{-- لوجو الموقع --}}
    <div class="header-center">
      <a href="{{route('home')}}" class="logo">
        <img src="{{ asset('front/assets2') }}/images/logo/my-logo.png" alt="Molla Logo" width="82" height="20">
      </a>
    </div><!-- End .header-left -->

    <div class="header-right">
      {{-- السله --}}
      @unless (request()->is('cart'))
      <livewire:front.cart.view-cart-component />
      @endunless
      {{-- البحث --}}
    </div>
  </div><!-- End .container -->
</div><!-- End .header-middle -->