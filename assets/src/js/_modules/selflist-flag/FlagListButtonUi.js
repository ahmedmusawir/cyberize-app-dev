import $ from 'jquery';
import { get, set } from 'idb-keyval';
import Bootstrap from 'bootstrap';

class FlagListButtonUi {
  constructor() {
    this.init();
    // COLLECTING AJAX INFO
    this.ajaxUrl = selflistData.ajax_url;
    this.ajaxFunction = 'test_flag_ajax';
    // GLOBALS
    this.flagKey;
    this.flagListId;
    this.flagEmail;
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
    this.flagKey = $(e.target).data('key');
    this.flagListId = $(e.target).data('list-id');
    this.flagEmail = $(e.target).data('flag-email');
    // console.log('flag key: ', flagKey);
    // console.log('list Id: ', flagId);

    // BUILDING FLAG INFO OBJECT
    const flaggedList = {
      listId: this.flagListId,
      email: this.flagEmail,
    };

    // ADDING INFO TO INDEX DB
    set(this.flagKey, flaggedList)
      .then(() => {
        console.log('saved: ', this.flagKey);
      })
      .catch(console.error);

    // OPENING THE MODAL
    this.theFlagModal.modal({
      // backdrop: 'static',
      keyboard: false,
    });

    // ADDING THE DATA ATTRS DYNAMICALLY FOR INDEX DB
    // To maintain flag button status. One person should only be
    // able to Flag a List once.
    $('#flag-ajax-submit-btn').attr('data-key', this.flagKey);
  };
}

export default FlagListButtonUi;
