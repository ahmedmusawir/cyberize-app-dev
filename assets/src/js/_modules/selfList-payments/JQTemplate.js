import $ from 'jquery';

class PaymentSummaryUiEvents {
  constructor() {
    this.init();
    // COLLECTING BUTTON
    this.button = $('#univ-load-more-btn');
    this.setEvents();
  }

  init = () => {
    console.log('Payment Summary UI Events ...');
  };

  setEvents = () => {
    this.button.on('click', this.clickHandler);
  };

  clickHandler() {
    // console.log('clicked up from Sample Module ...');
    const page = $(this).data('page');
    console.log(page);
  }
}

export default PaymentSummaryUiEvents;
