<?php
/**
 * The template for displaying all pages
 * 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyberize-app-dev
 */

get_header();
?>
<style>
.xdsoft_datetimepicker {
  border: 1px solid red !important;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_today {
  color: red !important;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_default,
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box>div>div.xdsoft_current {
  background: red !important;
  box-shadow: #178fe5 0 1px 3px 0 !important;
  color: #fff !important;
  font-weight: 700;
}

.xdsoft_datetimepicker .xdsoft_calendar td:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box>div>div:hover {
  color: #fff !important;
  background-color: red !important;
  box-shadow: none !important;
}
</style>
<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css"
  integrity="sha512-f0tzWhCwVFS3WeYaofoLWkTP62ObhewQ1EZn65oSYDZUg1+CyywGKkWzm8BxaJj5HGKI72PnMH9jYyIFz+GH7g=="
  crossorigin="anonymous" />
<main id="primary" class="site-main container">

  <header id="header-list-preview" class="site-header container py-2 text-center">

    <figure class="logo-container">

      <!-- <a href="/list-index" class="list-links display-4 d-block">LISTINGS</a> -->

      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <img class="mx-auto d-block w-25 mt-4" src="/wp-content/uploads/2020/07/SelfListLogo.png" alt="">
      </a>

    </figure>

  </header><!-- #masthead -->
  <hr class="bg-danger">

  <section class="datepicker-range-box text-center">
    <h3 class="text-uppercase my-5"><small class="font-weight-bold">List Payment Summary</small></h3>
    <div class="row">
      <div class="col-sm-6">
        <h6 class="text-uppercase"><small class="font-weight-bold">Please Pick a Start Date:</small></h6>
        <div class="outputFromDateTime"></div>
        <input type="text" id="list-from-date-time-input">
        <section class="message-display-box p-2">
          <h6><small class="font-weight-bold text-uppercase">List Starts on: </small> <span
              class="list-start-date text-danger">_______</span></h6>
        </section>
      </div>
      <div class="col-sm-6">
        <h6 class="text-uppercase"><small class="font-weight-bold">Please Pick a End Date:</small></h6>
        <div class="outputToDateTime"></div>
        <input type="text" id="list-to-date-time-input">
        <section class="message-display-box p-2">
          <h6><small class="font-weight-bold text-uppercase">List Ends on: </small> <span
              class="list-end-date text-danger">_______</span></h6>
        </section>
      </div>
    </div>
  </section>

  <section class="payment-display-box text-center p-4">
    <h6 class="text-uppercase"><small class="font-weight-bold">Your List will be published for: </small>&nbsp;<span
        class="list-publish-days text-danger font-weight-bold">_______</span> &nbsp;<small
        class="font-weight-bold">Days</small></h6>
    <p class="text-uppercase"><small class="font-weight-bold">Your Payment Amount (1 day x .25C): &nbsp;$</small><span
        class="list-payment-amount text-danger font-weight-bold">_______</span></p>
  </section>
  <section class="btn-holder mt-5">
    <a href="#" class="btn btn-outline-danger float-left">Go Back</a>
    <a href="#" id="paypal-form-link" class="btn btn-outline-danger float-right">Go to PayPal</a>
    <!-- <a href="/payment-form-page/?POST_ID=[post_id]&PAYMENT_TYPE=SINGLE&NUMBER_OF_LISTS=[number_of_days]" type="button"
        class="btn btn-outline-danger float-right">Go to PayPal</a> -->
  </section>





</main><!-- #main -->

<?php
get_footer();