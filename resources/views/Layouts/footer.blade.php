<footer class="section footer-classic context-dark">
    <div class="container">
      <div class="footer-classic__main">
        <div class="row row-50">
          <div class="col-lg-6">
            <div class="unit unit-spacing-sm flex-column flex-sm-row align-items-sm-center">
              <div class="unit-left"><a class="brand" href="/"><img class="" src="assets/images/logo/fx_logo_white.svg" alt="" width="125" height="45" /></a>
              </div>
              <div class="unit-body">
                <p><span style="max-width: 380px;">{{ __('blockchain_is_the_lead') }}</span></p>
              </div>
            </div>
            <div class="group group-lg group-middle">
              <p class="large">{{ __('connect_with_community') }}</p>
              <div class="group-item">
                <ul class="list-inline list-inline-sm">
                  <li><a class="icon icon-lg link-default mdi mdi-facebook" href="#"></a></li>
                  <li><a class="icon icon-lg link-default mdi mdi-twitter" href="#"></a></li>
                  <li><a class="icon icon-lg link-default mdi mdi-youtube-play" href="#"></a></li>
                  <li><a class="icon icon-lg link-default mdi mdi-instagram" href="#"></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box-inset-3">
              <h4>{{ __('signup_for_our') }}</h4>
              <!-- RD Mailform-->
              <form class="form form-lg form_light rd-mailform form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <input class="form-input" id="footer-subscribe-form-email" type="email" name="email" data-constraints="">
                  <label class="form-label" for="footer-subscribe-form-email">{{ __('enter_email') }}</label>
                </div>
                <div class="form-button">
                  <button class="button button-color-2" type="submit">{{ __('subscribe') }}</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="footer-classic__aside">
        <div class="list-wrap">
          <ul class="list-nav">
            <li><a href="https://user.fxtrado.com/login">{{ __('login') }}</a></li>
            <li><a href="https://user.fxtrado.com/register">{{ __('register') }}</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>