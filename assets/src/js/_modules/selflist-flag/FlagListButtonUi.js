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
    // COLLECTING ELEMENTS
    this.flagListBtn = $('.flag-form-btn');
    this.theFlagModal = $('#the-flag-modal');
    this.flagTextArea = $('#flag-textarea');

    // CALLING METHODS
    this.setEvents();
    this.flagStatus();
  }

  init = () => {
    console.log('Flag flagListBtn ui');
  };

  setEvents = () => {
    this.flagListBtn.on('click', this.clickInsertHandler);
  };

  flagStatus = () => {
    // console.log(this.flagBtn);
    this.flagListBtn.map((indx, btn) => {
      // console.log(indx, btn.dataset.listId);
      // console.log(indx, btn.dataset.key);
      // FROM INDEX DB
      get(btn.dataset.key)
        .then((data) => {
          // console.info(data.listId);
          if (data) {
            if (data.listId == btn.dataset.listId && data.disabled == true) {
              $(btn).addClass('disabled').off('click');
              // btn.classList.add('disabled');
            }
          }
        })
        .catch(console.error);
    });
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
      disabled: false,
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

    // EMPTY OUT THE FLAG TEXT BOX
    // This way validation will work properly, otherwize
    // it acts crazy ...
    this.flagTextArea.val('');

    // ADDING THE DATA ATTRS DYNAMICALLY FOR INDEX DB
    // To maintain flag button status. One person should only be
    // able to Flag a List once. Had to replace the button with
    // [Form]cuz in Validation code [event.target] is the whole Form,
    // not the submit button as I hoped for
    // $('#flag-ajax-submit-btn').attr('data-key', this.flagKey);

    // ADDING [flagKey] TO THE FLAG FORM ELEMENT
    $('#flag-insert-form').attr('data-key', this.flagKey);
  };
}

export default FlagListButtonUi;
