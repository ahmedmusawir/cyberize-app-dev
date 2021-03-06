import $ from 'jquery';
import { get, set } from 'idb-keyval';
import 'jquery-validation';
import 'jquery-validation/dist/additional-methods.js';
// import FlagListFormValidation from './FlagListFormValidation';

// class FlagListFormAjax extends FlagListFormValidation {
class FlagListFormAjax {
  constructor() {
    // super();
    this.init();
    // GLOBALS
    this.flagKey;
    this.flagListId;
    this.flagEmail;
    this.flagTitle;
    this.flagContent;
    // COLLECTING AJAX INFO
    this.ajaxUrl = selflistData.ajax_url;
    this.ajaxFunction = 'list_flag_ajax';
    // COLLECTING BUTTON
    this.flagListBtn = $('.flag-form-btn');
    this.flagAjaxSubmitBtn = $('.flag-ajax-submit-btn');
    this.flagTextArea = $('#flag-textarea');
    // COLLECTING CITY FORM ELEMENT
    this.flagInsertForm = $('#flag-insert-form');
    // SETTING EVENTS
    this.setEvents();
    this.validateFlagForm();
  }

  init = () => {
    console.log('Flag submit Ajax');
  };

  setEvents = () => {
    // this.flagAjaxSubmitBtn.on('click', this.clickFlagAjaxHandler);
  };

  clickFlagAjaxHandler = (e) => {
    e.preventDefault();

    this.flagKey = e.target.dataset.key;
    // JQUERY BUG!!
    // the following doesn't work! Use JS
    // let flagKey = $(e.target).data('key');
    console.log('Flag Key: ', this.flagKey);

    // CALLING VALIDATION
    // this.testApp();
    // this.validateFlagForm();
  };

  // MAIN FORM VALIDATION
  validateFlagForm = () => {
    this.flagInsertForm.css('border', '10px dotted green');

    this.flagInsertForm.validate({
      onkeyup: function (element, event) {
        if (event.keyCode === 9 && this.elementValue(element) === '') {
          return;
        } else {
          this.element(element);
        }
      },
      rules: {
        'flag-textarea': {
          lettersonly: true,
          maxlength: 140,
          minlength: 10,
        },
      },
      submitHandler: (form, event) => {
        event.preventDefault();
        // INSERT CITY WITH AJAX
        // this.insertFlagAjaxHandler();
        alert('Running Validation ... remove me');
      },
    });
  };

  insertFlagDataAjax = () => {
    // GET FLAG INFO DATA FROM INDEXED DB
    get(this.flagKey)
      .then((data) => {
        // PREPING LIST DATA
        this.flagTitle = `Flagged List ID: ${this.flagListId}`;
        this.flagContent = this.flagTextArea.val();
        this.flagListId = data.listId;
        this.flagEmail = data.email;

        // SETTING FLAG BTN STATUS FOR INDEX DB
        const flaggedList = {
          listId: this.flagListId,
          email: this.flagEmail,
          disabled: true,
        };

        // GETTING DATA READY FOR AJAX
        let newListData = {
          title: this.flagTitle,
          content: this.flagContent,
          email: this.flagEmail,
          listId: this.flagListId,
        };
        // AJAX CALL TO WP DB BEGINS
        $.ajax({
          url: this.ajaxUrl,
          type: 'POST',
          data: {
            action: this.ajaxFunction,
            newListData,
          },
        })
          .done((response) => {
            console.info(response);
            console.log('Awesome! ... Ajax Success');
            // ADDING INFO TO INDEX DB
            set(this.flagKey, flaggedList)
              .then(() => {
                console.log('Updated Disabled Status: ', this.flagKey);
                location.reload();
              })
              .catch(console.error);
          })
          .fail((response) => {
            console.error('Sorry ... Ajax failed');
            console.error('[FlagListFormAjax.js]', response);
          })
          .always(() => {
            // console.info('Ajax finished as always...');
          });
      })
      .catch(console.error);
  };
}

export default FlagListFormAjax;
