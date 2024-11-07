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
                      <h6>Leading bitcoin exchange</h6>
                      <h1>Easy exchange</h1>
                      <h3 class="decoration-heading-1">For Everyone Worldwide</h3>
                      <p>Our website has been a leading cryptocurrency exchange since day one of Bitcoin distribution. The whole process is easy and secure.</p>
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
              <h6>What bitcoin offers you</h6>
              <h2>No idea <strong>what’s</strong> going on?</h2>
              <p><span style="max-width: 430px;">Bitcoin is received, stored, and sent using software known as Bitcoin Wallet, which is available for free.</span></p>
              <div class="row row-30">
                <div class="col-lg-6 wow fadeInUpSmall">
                  <!-- Link Box--><a class="link-box" href="#"><span class="icon link-box__icon linearicons-mouse-right"></span>
                    <div class="link-box__main">
                      <h4>Download a Wallet</h4>
                      <p>Easily gain access to your own wallet in a few clicks.</p>
                    </div></a>
                </div>
                <div class="col-lg-6 wow fadeInUpSmall" data-wow-delay=".02s">
                  <!-- Link Box--><a class="link-box" href="#"><span class="icon link-box__icon linearicons-cart-exchange"></span>
                    <div class="link-box__main">
                      <h4>Use Bitcoin</h4>
                      <p>You can use your Bitcoins for all kinds of transactions.</p>
                    </div></a>
                </div>
                <div class="col-lg-6 wow fadeInUpSmall" data-wow-delay=".1s">
                  <!-- Link Box--><a class="link-box" href="#"><span class="icon link-box__icon linearicons-bag-dollar"></span>
                    <div class="link-box__main">
                      <h4>Time to Buy Bitcoins</h4>
                      <p>Every registered user can buy or exchange bitcoins.</p>
                    </div></a>
                </div>
                <div class="col-lg-6 wow fadeInUpSmall" data-wow-delay=".12s">
                  <!-- Link Box --><a class="link-box" href="#"><span class="icon link-box__icon linearicons-folder-search"></span>
                    <div class="link-box__main">
                      <h4>Knowledge Base</h4>
                      <p>Find an answer to any Bitcoin-related question.</p>
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
                    <h6 class="wow fadeInRightSmall">A few words about bitcoin</h6>
                    <h2 class="wow fadeInRightSmall" data-wow-delay=".1s"><strong>Bitcoin</strong> is different than any currency </h2>
                    <!-- Bootstrap tabs-->
                    <div class="tabs-custom tabs-horizontal tabs-line wow fadeInRightSmall" id="tabs-about" data-wow-delay=".2s">
                      <!-- Nav tabs-->
                      <ul class="nav nav-tabs">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-about-1" data-toggle="tab">About</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-about-2" data-toggle="tab">How it works</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-about-3" data-toggle="tab">Mission</a></li>
                      </ul>
                      <!-- Tab panes-->
                      <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs-about-1">
                          <p>Bitcoin differs from any currency you’ve used before, so it's important to understand some key points including the fact that this currency is not anonymous and can’t be regulated.</p>
                        </div>
                        <div class="tab-pane fade" id="tabs-about-2">
                          <p>Bitcoin is based on a protocol known as the blockchain, which allows to create, transfer and verify ultra-secure financial data without interference of third parties.</p>
                        </div>
                        <div class="tab-pane fade" id="tabs-about-3">
                          <p>Our mission as an official partner of Bitcoin Foundation is to help you enter and better understand the world of #1 cryptocurrency and avoid any issues you may encounter.</p>
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
                    <h6 class="wow fadeInLeftSmall">Be one step ahead</h6>
                    <h2 class="wow fadeInLeftSmall" data-wow-delay=".1s">Learning <strong>80%</strong> of what the experts know is easy</h2>
                    <p class="lead wow fadeInLeftSmall" data-wow-delay=".15s">Join our FREE 10-day email course and start today.</p>
                    <!-- RD Mailform-->
                    <form class="form form-lg rd-mailform form-inline wow fadeInLeftSmall" data-wow-delay=".2s" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                      <div class="form-wrap">
                        <input class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="">
                        <label class="form-label" for="subscribe-form-email">Enter your e-mail</label>
                      </div>
                      <div class="form-button">
                        <button class="button button-primary" type="submit">Send</button>
                      </div>
                    </form>
                    <p class="wow fadeInLeftSmall" data-wow-delay=".25s"><span style="opacity: .25;">*We promise not to send spam</span></p>
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
                  <h6 class="wow fadeInUpSmall">How it works</h6>
                  <h2 class="wow fadeInUpSmall" data-wow-delay=".1s"><span class="d-inline-block" style="max-width: 570px;">The way to <strong>bitcoins</strong> is not as complex as it seems</span></h2>
                </div>
              </div>
              <ul class="list-steps">
                <li class="list-steps__item wow fadeInLeftSmall" data-wow-delay=".1s">
                  <div class="list-steps__item-counter"></div>
                  <div class="list-steps__item-divider"></div>
                  <div class="list-steps__item-main">
                    <h4><a href="#">Download Bitcoin Wallet</a></h4>
                    <p>Download Bitcoin Wallet app for your PC, Android, or iOS to create, send and receive bitcoins. You can create multiple wallets for one account.</p>
                  </div>
                </li>
                <li class="list-steps__item wow fadeInLeftSmall" data-wow-delay=".2s">
                  <div class="list-steps__item-counter"></div>
                  <div class="list-steps__item-divider"></div>
                  <div class="list-steps__item-main">
                    <h4><a href="#">Add Coins to Your Wallet</a></h4>
                    <p>Once the app is downloaded you can add the bitcoins you’ve already created or exchanged via credit card.</p>
                  </div>
                </li>
                <li class="list-steps__item wow fadeInLeftSmall" data-wow-delay=".3s">
                  <div class="list-steps__item-counter"></div>
                  <div class="list-steps__item-divider"></div>
                  <div class="list-steps__item-main">
                    <h4><a href="#">Send/Receive with Wallet</a></h4>
                    <p>The process of sending bitcoins is very easy. In two words, you need to enter receiver's Bitcoin address, specify the amount, confirm address and send.</p>
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
                    <h2>Get fully <strong>featured</strong>, convenient wallet</h2>
                    <p class="big">Bitcoin wallet is a perfect solution for your cryptocurrency storage needs.</p>
                  </div>
                  <div class="col-lg-3 wow fadeInRightSmall text-lg-right">
                    <a href="https://user.fxtrado.com/register">
                    <button class="button button-default-outline">Register now</button></a>
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
                          <h4 class="box-minimal__title">Safe &amp; Secure</h4>
                          <div class="box-minimal__divider"></div>
                          <p>Be sure in your account security and your funds safety.</p>
                        </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".1s">
                        <!-- Box Minimal-->
                        <article class="box-minimal"><span class="icon box-minimal__icon linearicons-cloud-upload"></span>
                          <h4 class="box-minimal__title">Instant Exchange</h4>
                          <div class="box-minimal__divider"></div>
                          <p>Exchange your bitcoins instantly without any extra payments.</p>
                        </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".2s">
                        <!-- Box Minimal-->
                        <article class="box-minimal"><span class="icon box-minimal__icon linearicons-umbrella2"></span>
                          <h4 class="box-minimal__title">Expert Support</h4>
                          <div class="box-minimal__divider"></div>
                          <p>We provide 24/7 expert support for our registered clients.</p>
                        </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn">
                        <!-- Box Minimal-->
                        <article class="box-minimal"><span class="icon box-minimal__icon linearicons-tablet2"></span>
                          <h4 class="box-minimal__title">Mobile Apps</h4>
                          <div class="box-minimal__divider"></div>
                          <p>Perfectly developed mobile apps will open you new opportunities.</p>
                        </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".1s">
                        <!-- Box Minimal-->
                        <article class="box-minimal"><span class="icon box-minimal__icon linearicons-credit-card"></span>
                          <h4 class="box-minimal__title">Personal Wallet</h4>
                          <div class="box-minimal__divider"></div>
                          <p>Our easy-to-use personal wallet system will keep your bitcoins safe.</p>
                        </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".2s">
                        <!-- Box Minimal-->
                        <article class="box-minimal"><span class="icon box-minimal__icon linearicons-sync"></span>
                          <h4 class="box-minimal__title">Recurring Buys</h4>
                          <div class="box-minimal__divider"></div>
                          <p>Bitcoin allows you to set up recurring transactions in just two clicks.</p>
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
                      <h6 class="wow fadeInRightSmall">In the spotlight</h6>
                      <h2 class="wow fadeInRightSmall" data-wow-delay=".1s">Latest Bitcoin <strong>News</strong> Stories</h2>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="post-minimal-group">
                      <!-- 1-->
                      <!-- Owl Carousel-->
                      <div class="owl-carousel" data-items="1" data-dots="false" data-nav="false" data-loop="true" data-margin="10" data-autoplay="true" data-mouse-drag="false" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay-timeout="4012">
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>PR: Uservice Is a Global Decentralized Blockchain Platform for the Auto Industry</p>
                        </article>
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>Major Exchanges Don’t Want Forked Coins but Smaller Platforms Can’t Get Enough of Them</p>
                        </article>
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>American Programmer Arrested Over $20 Million Bitcoin Theft</p>
                        </article>
                      </div>
                      <!-- 2-->
                      <!-- Owl Carousel-->
                      <div class="owl-carousel" data-items="1" data-dots="false" data-nav="false" data-loop="true" data-margin="10" data-autoplay="true" data-mouse-drag="false" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay-timeout="5017">
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>A Hacker Gained Access to the Bitcoin Gold Windows Wallet Github</p>
                        </article>
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>Markets Update: Bitcoin Price Moves Sideways During the Holidays</p>
                        </article>
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>Vietnam Investigates Merchants for Accepting Bitcoin Despite Warnings</p>
                        </article>
                      </div>
                      <!-- 3-->
                      <!-- Owl Carousel-->
                      <div class="owl-carousel" data-items="1" data-dots="false" data-nav="false" data-loop="true" data-margin="10" data-autoplay="true" data-mouse-drag="false" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay-timeout="6035">
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>Hong Kong Company Set to Build Crypto Mining Farm and Museum</p>
                        </article>
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>Bitcoin Network Fees Are Irritating Cryptocurrency Proponents</p>
                        </article>
                        <article class="post-minimal">
                          <time class="post-minimal__time" datetime="2018">Nov 20, 2018</time>
                          <p>Data Over Drama: Bitcoin Cash Versus Bitcoin Core Transactions</p>
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
                  <h2><strong>What</strong> People Say</h2>
                  <div class="slick-slider carousel-parent" data-arrows="false" data-loop="false" data-dots="true" data-swipe="false" data-items="1" data-fade="true" data-child="#child-carousel" data-for="#child-carousel">
                    <div class="item">
                      <blockquote class="quote-classic">
                        <div class="quote-classic__text">
                          <p>I chose this website to trade Blockchain and a few other currencies. They have clear trading venue with good reputation over the past years and  many exchange directions. Most people I know are using it. I hope to work with Blockchain more in the future and I will recommend this site to all my colleagues and friends.</p>
                        </div>
                        <div class="quote-classic__meta">
                          <cite class="quote-classic__cite">Bryan Thompson </cite>
                          <p class="quote-classic__info">Businessman </p>
                        </div>
                      </blockquote>
                    </div>
                    <div class="item">
                      <blockquote class="quote-classic">
                        <div class="quote-classic__text">
                          <p>As an expert in finance, I truly believe that cryptocurrencies are the future. I’m glad to say that your website is a perfect source for both newbies and professionals in bitcoin trading and exchange as it allows to better understand how it works. What’s more important, your team is always ready to help if a user has any questions.</p>
                        </div>
                        <div class="quote-classic__meta">
                          <cite class="quote-classic__cite">Joan McMillan</cite>
                          <p class="quote-classic__info">Finance Expert</p>
                        </div>
                      </blockquote>
                    </div>
                    <div class="item">
                      <blockquote class="quote-classic">
                        <div class="quote-classic__text">
                          <p>I started bitcoin trading as a hobby and your website was the only source I found on the Internet to be completely reliable. Your Support Team helped me avoid all twists and turns that appeared to be risky and now I can successfully exchange and trade my bitcoins on your website. Thank you for your help and understanding!</p>
                        </div>
                        <div class="quote-classic__meta">
                          <cite class="quote-classic__cite">Sam Wilson</cite>
                          <p class="quote-classic__info">Designer           </p>
                        </div>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-extra-large">Feedback</p>
          </section>
    
          <!-- Easily convert bitcoin into any currency-->
          <section class="section section-md bg-white">
            <div class="container">
              <div class="row row-30 justify-content-center justify-content-lg-between align-items-end">
                <div class="col-md-10 col-lg-6">
                  <div class="box-inset-4">
                    <h2 class="wow fadeInLeftSmall">Easily <strong>convert</strong> bitcoin into any currency</h2>
                    <p class="wow fadeInLeftSmall" data-wow-delay=".1s">Millions of people have made a fortune with bitcoins! Check current exchange rates and make your profit from buying/selling bitcoins.</p>
                  </div>
                  <form class="form form-lg form-calculator form-btc-calculator wow fadeInLeftSmall" data-wow-delay=".2s">
                    <input class="form-input" name="btc-calculator-value" value="1">
                    <div class="form-info">BTC =</div>
                    <input class="form-input form-input-result" name="btc-calculator-result">
                    <div class="form-wrap">
                      <select class="form-input select-currency select-primary" name="btc-calculator-currency" data-dropdown-class="select-primary-dropdown"></select>
                    </div>
                  </form>
                  <p class="wow fadeInLeftSmall" data-wow-delay=".2s"><span style="opacity: .5;">*Info updates every 15 minutes</span></p>
                </div>
                <div class="col-md-10 col-lg-6 wow fadeInUpSmall" data-wow-delay=".1s">
                  <!-- Slick Carousel -->
                  <div class="slick-slider_profiles">
                    <div class="slick-slider" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-vertical="true" data-items="1">
                      <div class="item">
                        <div class="profile-item">
                          <!-- Profile Minimal-->
                          <article class="profile-minimal"><img class="profile-minimal__image" src="assets/images/user-1-101x101.jpg" alt="" width="101" height="101"/>
                            <div class="profile-minimal__main">
                              <p class="profile-minimal__name">Marcel Vossen</p>
                              <p class="profile-minimal__position">Trader</p>
                              <ul class="profile-minimal__list">
                                <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                              </ul>
                            </div>
                          </article>
                        </div>
                        <div class="profile-item">
                          <!-- Profile Minimal-->
                          <article class="profile-minimal"><img class="profile-minimal__image" src="assets/images/user-2-101x101.jpg" alt="" width="101" height="101"/>
                            <div class="profile-minimal__main">
                              <p class="profile-minimal__name">Ryan Johnson</p>
                              <p class="profile-minimal__position">Trader</p>
                              <ul class="profile-minimal__list">
                                <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                              </ul>
                            </div>
                          </article>
                        </div>
                      </div>
                      <div class="item">
                        <div class="profile-item">
                          <!-- Profile Minimal-->
                          <article class="profile-minimal"><img class="profile-minimal__image" src="assets/images/user-2-101x101.jpg" alt="" width="101" height="101"/>
                            <div class="profile-minimal__main">
                              <p class="profile-minimal__name">Ryan Johnson</p>
                              <p class="profile-minimal__position">Trader</p>
                              <ul class="profile-minimal__list">
                                <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                              </ul>
                            </div>
                          </article>
                        </div>
                        <div class="profile-item">
                          <!-- Profile Minimal-->
                          <article class="profile-minimal"><img class="profile-minimal__image" src="assets/images/user-1-101x101.jpg" alt="" width="101" height="101"/>
                            <div class="profile-minimal__main">
                              <p class="profile-minimal__name">Marcel Vossen</p>
                              <p class="profile-minimal__position">Trader</p>
                              <ul class="profile-minimal__list">
                                <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                              </ul>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
@endsection