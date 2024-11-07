<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
      <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="40px" data-xl-stick-up-offset="40px" data-xxl-stick-up-offset="40px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
        <div class="rd-navbar-main">
          <!-- RD Navbar Panel-->
          <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-outer"><span></span></button>
            <!-- RD Navbar Brand-->
            <div class="rd-navbar-brand"><a class="brand" href="/"><img class="brand-logo-dark" src="assets/images/logo/fx_logo.svg" alt="" width="125" height="45" srcset="assets/images/logo-default-210x76.png 2x"/><img class="brand-logo-light" src="assets/images/logo-inverse-125x45.png" alt="" width="125" height="45" srcset="assets/images/logo-inverse-210x76.png 2x"/></a>
            </div>
          </div>
          <div class="rd-navbar-nav-outer">
            <!-- RD Navbar Nav-->
            <ul class="rd-navbar-nav">
              <li class="rd-nav-item active"><a class="rd-nav-link" href="/">{{ __('home') }}</a>
              </li>
              <li class="rd-nav-item"><a class="rd-nav-link" href="https://user.fxtrado.com/register">{{ __('register') }}</a>
              </li>
              <li class="rd-nav-item"><a class="rd-nav-link" href="https://user.fxtrado.com/login">{{ __('login') }}</a>
              </li>
              <li class="rd-nav-item"><a class="rd-nav-link" href="#">{{ __('language') }}</a>
                <!-- RD Navbar Dropdown-->
                <ul class="rd-menu rd-navbar-dropdown">
                  <li class="rd-dropdown-item">
                    <a class="rd-dropdown-link" href="{{ route('switch.language', ['lang' => 'en']) }}">English</a>
                  </li>
                  <li class="rd-dropdown-item">
                      <a class="rd-dropdown-link" href="{{ route('switch.language', ['lang' => 'cn']) }}">简体中文</a>
                  </li>
                  <li class="rd-dropdown-item">
                      <a class="rd-dropdown-link" href="{{ route('switch.language', ['lang' => 'tw']) }}">繁体中文</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>