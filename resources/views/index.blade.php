@extends('Layouts.master')
@section('contents')
          <!-- Slider -->
          <section class="section bg-gray-800">
            <div class="slick-group-slider bg-gray-700">
              <div class="carousel-parent-outer">
                <svg class="carousel-parent-shape" width="1216px" height="625px" viewBox="0 0 1216 625" preserveAspectRatio="none">
                  <path fill-rule="evenodd" d="M-0.000,311.382 C-0.000,311.382 62.999,372.037 102.727,273.078 C118.498,233.793 168.280,306.657 186.342,249.138 C203.245,195.310 231.848,195.447 246.067,143.801 C266.856,68.285 291.661,3.867 310.569,0.159 C341.089,-5.826 374.891,182.287 422.852,134.224 C468.160,88.821 511.245,170.842 535.135,177.317 C545.468,180.117 579.312,194.321 613.972,189.287 C635.941,186.097 655.397,155.251 678.475,172.529 C726.537,208.512 730.880,342.989 781.202,397.567 C807.168,425.730 831.757,373.189 862.428,356.869 C890.078,342.156 923.937,365.255 946.043,356.869 C975.409,345.727 998.875,341.716 1015.324,294.624 C1027.442,259.931 1032.880,184.101 1048.770,155.771 C1068.789,120.077 1110.838,156.070 1129.996,129.436 C1169.461,74.571 1216.000,43.251 1216.000,43.251 L1216.000,624.999 L-0.000,624.999 L-0.000,311.382 Z"></path>
                </svg>
                <div class="parallax-scene parallax-scene-js" data-scalar-x="5" data-scalar-y="10">
                  <div class="layer-1">
                    <div class="layer" data-depth=".55"><img src="assets/images/bitcoin-415x415.png" alt="" width="415" height="415"/>
                    </div>
                  </div>
                  <div class="layer-2">
                    <div class="layer" data-depth=".25"><img src="assets/images/ethereum-100x100.png" alt="" width="100" height="100"/>
                    </div>
                  </div>
                  <div class="layer-3">
                    <div class="layer" data-depth=".2"><img src="assets/images/ripple-80x80.png" alt="" width="80" height="80"/>
                    </div>
                  </div>
                  <div class="layer-4">
                    <div class="layer" data-depth=".25"><img src="assets/images/dach-80x80.png" alt="" width="80" height="80"/>
                    </div>
                  </div>
                  <div class="layer-5">
                    <div class="layer" data-depth=".45"><img src="assets/images/lightcoin-180x181.png" alt="" width="180" height="181"/>
                    </div>
                  </div>
                  <div class="layer-6">
                    <div class="layer" data-depth=".2"><img src="assets/images/zcash-120x120.png" alt="" width="120" height="120"/>
                    </div>
                  </div>
                </div>
                <div class="slick-slider carousel-parent" data-arrows="true" data-loop="true" data-dots="true" data-swipe="true" data-items="1" data-fade="true" data-child="#slider-child-carousel" data-for="#slider-child-carousel" data-autoplay="true">
                  {{-- <div>
                    <div class="slick-slide-caption">
                      <h6>Your #1 bitcoin resource</h6>
                      <h1>Crypto Currency </h1>
                      <h3 class="decoration-heading-1">That Changed the World</h3>
                      <p>Bitcoin and other cryptocurrencies have completely changed the financial world. We are here to help you find out how it works.</p>
                      <div class="slick-slide-caption__footer"><a class="button button-primary" href="about-us.html">Read More</a></div>
                    </div>
                  </div> --}}
                  <div>
                    <div class="slick-slide-caption">
                      <h6>{{ __('leading_bitcoin_excahnge') }}</h6>
                      <h1>{{ __('easy_exchange') }}</h1>
                      <h3 class="decoration-heading-1">{{ __('for_everyone_worldwide') }}</h3>
                      <p>{{ __('our_website_has') }}</p>
                    </div>
                  </div>
                  {{-- <div>
                    <div class="slick-slide-caption">
                      <h6>A perfect payment tool</h6>
                      <h1>Pay everywhere</h1>
                      <h3 class="decoration-heading-1">For Goods and Services</h3>
                      <p>Like any other modern currency, Bitcoin is available everywhere at any time for transactions and payments.</p>
                      <div class="slick-slide-caption__footer"><a class="button button-primary" href="about-us.html">Read More</a></div>
                    </div>
                  </div> --}}
                </div>
              </div>
              <div class="slick-slider carousel-child" id="slider-child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="true" data-dots="false" data-swipe="false" data-fade="true" data-items="1" data-slide-to-scroll="1" data-autoplay="true">
                <div class="item" style="background-image: url(assets/images/slider-slide-1.jpg);"></div>
                <div class="item" style="background-image: url(assets/images/slider-slide-2.jpg);"></div>
                <div class="item" style="background-image: url(assets/images/slider-slide-3.jpg);"></div>
              </div>
            </div>
          </section>
    
          <section class="crypto-currency-wrap"></section>
          <!-- What bitcoin offers you-->
          <section class="section section-md bg-white text-center">
            <div class="container">
              <h6>{{ __('what_bitcoin_offer') }}</h6>
              <h2>{{ __('no_idea') }}<strong> {{ __('whats') }}</strong>{{ __('going_on') }} </h2>
              <p><span style="max-width: 430px;">{{ __('bitcoin_is_receive') }}</span></p>
              <div class="row row-30">
                <div class="col-lg-6 wow fadeInUpSmall">
                  <!-- Link Box--><a class="link-box" href="#"><span class="icon link-box__icon linearicons-mouse-right"></span>
                    <div class="link-box__main">
                      <h4>{{ __('download_a_wallet') }}</h4>
                      <p>{{ __('easily_gain') }}</p>
                    </div></a>
                </div>
                <div class="col-lg-6 wow fadeInUpSmall" data-wow-delay=".02s">
                  <!-- Link Box--><a class="link-box" href="#"><span class="icon link-box__icon linearicons-cart-exchange"></span>
                    <div class="link-box__main">
                      <h4>{{ __('use_bitcoin') }}</h4>
                      <p>{{ __('you_can_use_your_bitcoin') }}</p>
                    </div></a>
                </div>
                <div class="col-lg-6 wow fadeInUpSmall" data-wow-delay=".1s">
                  <!-- Link Box--><a class="link-box" href="#"><span class="icon link-box__icon linearicons-bag-dollar"></span>
                    <div class="link-box__main">
                      <h4>{{ __('time_to_buy_bitcoin') }}</h4>
                      <p>{{ __('every_registered') }}</p>
                    </div></a>
                </div>
                <div class="col-lg-6 wow fadeInUpSmall" data-wow-delay=".12s">
                  <!-- Link Box --><a class="link-box" href="#"><span class="icon link-box__icon linearicons-folder-search"></span>
                    <div class="link-box__main">
                      <h4>{{ __('knowledge_base') }}</h4>
                      <p>{{ __('find_an_answer') }}</p>
                    </div></a>
                </div>
              </div>
            </div>
          </section>
    
          <!-- A few words about bitcoin-->
          <section class="section bg-gray-100">
            <div class="range">
              <div class="cell-lg-6 height-fill">
                <div class="thumbnail-video context-dark"><img class="thumbnail-video__image" src="assets/images/video-preview-1-961x598.jpg" alt="" width="961" height="598"/>
                </div>
              </div>
              <div class="cell-lg-6 align-self-center">
                <div class="cell-inner">
                  <div class="box-inset-1">
                    <h6 class="wow fadeInRightSmall">{{ __('a_few_words_about') }}</h6>
                    <h2 class="wow fadeInRightSmall" data-wow-delay=".1s"><strong>{{ __('bitcoin') }}</strong>{{ __('is_different_than') }}  </h2>
                    <!-- Bootstrap tabs-->
                    <div class="tabs-custom tabs-horizontal tabs-line wow fadeInRightSmall" id="tabs-about" data-wow-delay=".2s">
                      <!-- Nav tabs-->
                      <ul class="nav nav-tabs">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-about-1" data-toggle="tab">{{ __('about') }}</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-about-2" data-toggle="tab">{{ __('how_it_works') }}</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-about-3" data-toggle="tab">{{ __('mission') }}</a></li>
                      </ul>
                      <!-- Tab panes-->
                      <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs-about-1">
                          <p>{{ __('bitcoin_differs') }}</p>
                        </div>
                        <div class="tab-pane fade" id="tabs-about-2">
                          <p>{{ __('bitcoin_is_based_on') }}</p>
                        </div>
                        <div class="tab-pane fade" id="tabs-about-3">
                          <p>{{ __('our_mission_as') }}</p>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </section>
    
          <!-- Be one step ahead-->
          <section class="section bg-gray-700 particles-js-outer">
            <div id="particles-js"></div>
            <div class="container">
              <div class="row justify-content-center justify-content-xl-between align-items-end">
                <div class="col-md-10 col-lg-6">
                  <div class="section-lg">
                    <h6 class="wow fadeInLeftSmall">{{ __('be_one_step_ahead') }}</h6>
                    <h2 class="wow fadeInLeftSmall" data-wow-delay=".1s">{{ __('learning') }} <strong>80%</strong>{{ __('of_what_the_expert') }} </h2>
                    <p class="lead wow fadeInLeftSmall" data-wow-delay=".15s">{{ __('join_our_free_day') }}</p>
                    <!-- RD Mailform-->
                    <form class="form form-lg rd-mailform form-inline wow fadeInLeftSmall" data-wow-delay=".2s" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="{{ route('submitEmail') }}">
                      @csrf
                      <div class="form-wrap">
                        <input class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="">
                        <label class="form-label" for="subscribe-form-email">{{ __('enter_your_email') }}</label>
                      </div>
                      <div class="form-button">
                        <button class="button button-primary" type="submit">{{ __('send') }}</button>
                      </div>
                    </form>
                    <p class="wow fadeInLeftSmall" data-wow-delay=".25s"><span style="opacity: .25;">*{{ __('we_promise_not_to_send_spam') }}</span></p>
                  </div>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-5">
                  <div class="bitcoin-widget bitcoin-widget_windowed bitcoin-widget_windowed-1"><img class="bitcoin-widget__top-panel" src="assets/images/decoration-browser-panel-564x36.png" alt="" width="564" height="36"/>
                    <div class="btcwdgt-chart" data-bw-theme="dark"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    
          <!-- How it works-->
          <section class="section section-lg bg-white text-center">
            <div class="container container-md-smaller">
              <div class="row justify-content-center">
                <div class="col-sm-10 col-md-12">
                  <h6 class="wow fadeInUpSmall">{{ __('how_it_work') }}</h6>
                  <h2 class="wow fadeInUpSmall" data-wow-delay=".1s">
                    @if (App::getLocale() === 'en')
                      <h2 class="wow fadeInUpSmall" data-wow-delay=".1s"><span class="d-inline-block" style="max-width: 570px;">{{ __('the_way_to') }}<strong>{{ __('bitcoins') }}</strong>{{ __('is_not_as_complex_as') }}</span></h2>
                    @else
                      <span class="d-inline-block" style="max-width: 570px;">
                        {{ __('the_way_to') }}
                        <div style="display: flex;flex-direction:column">
                          <span><strong>{{ __('bitcoins') }}</strong></span>
                          <span>{{ __('is_not_as_complex_as') }}</span>
                        </div>
                      </span></h2>
                    @endif
                </div>
              </div>
              <ul class="list-steps">
                <li class="list-steps__item wow fadeInLeftSmall" data-wow-delay=".1s">
                  <div class="list-steps__item-counter"></div>
                  <div class="list-steps__item-divider"></div>
                  <div class="list-steps__item-main">
                    <h4><a href="#">{{ __('download_bitcoin_wallet') }}</a></h4>
                    <p>{{ __('download_bitcoin_wallet2') }}</p>
                  </div>
                </li>
                <li class="list-steps__item wow fadeInLeftSmall" data-wow-delay=".2s">
                  <div class="list-steps__item-counter"></div>
                  <div class="list-steps__item-divider"></div>
                  <div class="list-steps__item-main">
                    <h4><a href="#">{{ __('add_coin_to') }}</a></h4>
                    <p>{{ __('once_the_app_is') }}</p>
                  </div>
                </li>
                <li class="list-steps__item wow fadeInLeftSmall" data-wow-delay=".3s">
                  <div class="list-steps__item-counter"></div>
                  <div class="list-steps__item-divider"></div>
                  <div class="list-steps__item-main">
                    <h4><a href="#">{{ __('send_receive_with') }}</a></h4>
                    <p>{{ __('the_process_of_sending_bitcoin') }}</p>
                  </div>
                </li>
              </ul>
            </div>
          </section>
    
          <!-- CTA-->
          <section class="section parallax-container section-md bg-gray-700 text-center section-overlay-1 text-lg-left" data-parallax-img="assets/images/home-parallax-1.jpg">
            <div class="parallax-content">
              <div class="container">
                <div class="row row-30 align-items-center">
                  <div class="col-lg-9 wow fadeInLeftSmall">
                    <h2>{{ __('get_fully') }} <strong>{{ __('featured') }}</strong>, {{ __('convenient_wallet') }}</h2>
                    <p class="big">{{ __('bitcoin_wallet') }}</p>
                  </div>
                  <div class="col-lg-3 wow fadeInRightSmall text-lg-right">
                    <a href="https://user.fxtrado.com/register">
                    <button class="button button-default-outline">{{ __('register_now') }}</button></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
    
    
          <!-- Features-->
          <section class="section bg-white">
            <div class="container">
              <div class="row row-bordered-1">
                <div class="col-sm-6 col-lg-4 wow fadeIn">
                        <!-- Box Minimal-->
                        <article class="box-minimal"><span class="icon box-minimal__icon linearicons-lock"></span>
                          <h4 class="box-minimal__title">{{ __('safe') }} &amp; {{ __('secure') }}</h4>
                          <div class="box-minimal__divider"></div>
                          <p>{{ __('be_sure_in_your_account') }}</p>
                        </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".1s">
                        <!-- Box Minimal-->
                        <article class="box-minimal"><span class="icon box-minimal__icon linearicons-cloud-upload"></span>
                          <h4 class="box-minimal__title">{{ __('instant_exchange') }}</h4>
                          <div class="box-minimal__divider"></div>
                          <p>{{ __('exchange_yout_bitcoin') }}</p>
                        </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".2s">
                        <!-- Box Minimal-->
                        <article class="box-minimal"><span class="icon box-minimal__icon linearicons-umbrella2"></span>
                          <h4 class="box-minimal__title">{{ __('expert_support') }}</h4>
                          <div class="box-minimal__divider"></div>
                          <p>{{ __('we_provide_expert') }}</p>
                        </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn">
                        <!-- Box Minimal-->
                        <article class="box-minimal"><span class="icon box-minimal__icon linearicons-tablet2"></span>
                          <h4 class="box-minimal__title">{{ __('mobile_app') }}</h4>
                          <div class="box-minimal__divider"></div>
                          <p>{{ __('perfectly_developed') }}</p>
                        </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".1s">
                        <!-- Box Minimal-->
                        <article class="box-minimal"><span class="icon box-minimal__icon linearicons-credit-card"></span>
                          <h4 class="box-minimal__title">{{ __('personal_wallet') }}</h4>
                          <div class="box-minimal__divider"></div>
                          <p>{{ __('our_easy_to_user') }}</p>
                        </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".2s">
                        <!-- Box Minimal-->
                        <article class="box-minimal"><span class="icon box-minimal__icon linearicons-sync"></span>
                          <h4 class="box-minimal__title">{{ __('recurring_buy') }}</h4>
                          <div class="box-minimal__divider"></div>
                          <p>{{ __('bitcoin_allow') }}</p>
                        </article>
                </div>
              </div>
            </div>
          </section>
    
          <!-- News-->
          <section class="section parallax-container section-md bg-gray-700 section-overlay-2 text-center text-lg-left" data-parallax-img="assets/images/home-parallax-2.jpg">
            <div class="parallax-content">
              <div class="container">
                <div class="row row-30 flex-lg-row-reverse justify-content-center align-items-center">
                  <div class="col-sm-10 col-lg-5">
                    <div class="box-inset-2">
                      <h6 class="wow fadeInRightSmall">{{ __('in_the_spotlight') }}</h6>
                      <h2 class="wow fadeInRightSmall" data-wow-delay=".1s">{{ __('latest_bitcoin') }} <strong>{{ __('news') }}</strong>{{ __('stories') }} </h2>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="post-minimal-group">
                      <!-- 1-->
                      <!-- Owl Carousel-->
                      <div class="owl-carousel" data-items="1" data-dots="false" data-nav="false" data-loop="true" data-margin="10" data-autoplay="true" data-mouse-drag="false" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay-timeout="4012">
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>{{ __('pr_uservice') }}</p>
                        </article>
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>{{ __('major_exchange') }}</p>
                        </article>
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>{{ __('american_programmer') }}</p>
                        </article>
                      </div>
                      <!-- 2-->
                      <!-- Owl Carousel-->
                      <div class="owl-carousel" data-items="1" data-dots="false" data-nav="false" data-loop="true" data-margin="10" data-autoplay="true" data-mouse-drag="false" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay-timeout="5017">
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>{{ __('a_hacker_gained_access') }}</p>
                        </article>
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>{{ __('market_update') }}</p>
                        </article>
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>{{ __('vietname_investigate') }}</p>
                        </article>
                      </div>
                      <!-- 3-->
                      <!-- Owl Carousel-->
                      <div class="owl-carousel" data-items="1" data-dots="false" data-nav="false" data-loop="true" data-margin="10" data-autoplay="true" data-mouse-drag="false" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay-timeout="6035">
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>{{ __('hong_kong') }}</p>
                        </article>
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>{{ __('bitcoin_network') }}</p>
                        </article>
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>{{ __('data_over_drama') }}</p>
                        </article>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    
    
          <!-- Feedback-->
          <section class="section bg-gray-100 slider-group_testimonials">
            <div class="slick-slider carousel-child wow fadeIn" id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="true" data-dots="false" data-swipe="false" data-fade="true" data-swiper="true" data-items="1">
              <div class="item"><img src="assets/images/home-testimonials-1-744x623.png" alt="" width="744" height="623"/>
              </div>
              <div class="item"><img src="assets/images/home-testimonials-2-744x623.png" alt="" width="744" height="623"/>
              </div>
              <div class="item"><img src="assets/images/home-testimonials-3-744x623.png" alt="" width="744" height="623"/>
              </div>
            </div>
            <div class="container">
              <div class="row justify-content-end">
                <div class="col-md-8 col-lg-7">
                  <h2><strong>{{ __('what') }}</strong>{{ __('people_say') }} </h2>
                  <div class="slick-slider carousel-parent" data-arrows="false" data-loop="false" data-dots="true" data-swipe="false" data-items="1" data-fade="true" data-child="#child-carousel" data-for="#child-carousel">
                    <div class="item">
                      <blockquote class="quote-classic">
                        <div class="quote-classic__text">
                          <p>{{ __('i_choose_this_website') }}</p>
                        </div>
                        <div class="quote-classic__meta">
                          <cite class="quote-classic__cite">Bryan Thompson </cite>
                          <p class="quote-classic__info">{{ __('businessman') }} </p>
                        </div>
                      </blockquote>
                    </div>
                    <div class="item">
                      <blockquote class="quote-classic">
                        <div class="quote-classic__text">
                          <p>{{ __('as_an_expert_in_finance') }}</p>
                        </div>
                        <div class="quote-classic__meta">
                          <cite class="quote-classic__cite">Joan McMillan</cite>
                          <p class="quote-classic__info">{{ __('finance_expert') }}</p>
                        </div>
                      </blockquote>
                    </div>
                    <div class="item">
                      <blockquote class="quote-classic">
                        <div class="quote-classic__text">
                          <p>{{ __('i_started_bitcoin') }}</p>
                        </div>
                        <div class="quote-classic__meta">
                          <cite class="quote-classic__cite">Sam Wilson</cite>
                          <p class="quote-classic__info">{{ __('designer') }}           </p>
                        </div>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-extra-large">{{ __('feedback') }}</p>
          </section>
    
          
@endsection