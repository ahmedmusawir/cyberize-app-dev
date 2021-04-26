import $ from 'jquery';
import Bootstrap from 'bootstrap';

class FlagListButtonUi {
  constructor() {
    this.init();
    // COLLECTING AJAX INFO
    this.ajaxUrl = selflistData.ajax_url;
    this.ajaxFunction = 'test_flag_ajax';
    // COLLECTING BUTTON
    this.flagListBtn = $('.flag-form-btn');
    this.theFlagModal = $('#the-flag-modal');
    // SETTING EVENTS
    this.setEvents();
  }

  init = () => {
    console.log('Flag flagListBtn ui');
  };

  setEvents = () => {
    this.flagListBtn.on('click', this.clickInsertHandler);
  };

  clickInsertHandler = (e) => {
    const flagKey = $(e.target).data('key');
    const flagId = $(e.target).data('post-id');
    // console.log('flag key: ', flagKey);
    // console.log('list Id: ', flagId);

    this.theFlagModal.modal({
      // backdrop: 'static',
      keyboard: false,
    });

    // ADDING THE DATA ATTRS DYNAMICALLY FOR INDEX DB
    // To maintain flag button status. One person should only be
    // able to Flag a List once.
    $('#flag-ajax-submit-btn').attr('data-key', flagKey);

    $('#flag-ajax-submit-btn').attr('data-list-id', flagId);
  };
}

export default FlagListButtonUi;
