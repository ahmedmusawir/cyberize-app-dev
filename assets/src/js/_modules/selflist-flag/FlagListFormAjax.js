import $ from 'jquery';

class FlagListFormAjax {
  constructor() {
    this.init();
    // COLLECTING AJAX INFO
    this.ajaxUrl = selflistData.ajax_url;
    this.ajaxFunction = 'list_flag_ajax';
    // COLLECTING BUTTON
    this.flagListBtn = $('.flag-form-btn');
    this.flagAjaxSubmitBtn = $('#flag-ajax-submit-btn');
    this.flagTextArea = $('#flag-textarea');
    // SETTING EVENTS
    this.setEvents();
  }

  init = () => {
    console.log('Flag submit Ajax');
  };

  setEvents = () => {
    this.flagAjaxSubmitBtn.on('click', this.clickInsertHandler);
  };

  clickInsertHandler = (e) => {
    e.preventDefault();
    // console.log('flag clicked');
    const flagKey = this.flagAjaxSubmitBtn.data('key');
    const flagId = this.flagAjaxSubmitBtn.data('list-id');
    // console.log('flag key: ', flagKey);
    // console.log('list Id: ', flagId);
    const flagTitle = `Flagged List ID: ${flagId}`;

    let newPostData = {
      title: flagTitle,
      content: this.flagTextArea.val(),
    };
    $.ajax({
      url: this.ajaxUrl,
      type: 'POST',
      data: {
        action: this.ajaxFunction,
        newPostData,
      },
    })
      .done((response) => {
        console.info(response);
        console.log('Awesome! ... Ajax Success');
      })
      .fail((response) => {
        console.error('Sorry ... Ajax failed');
        console.error('[FlagListFormAjax.js]', response);
      })
      .always(() => {
        // console.info('Ajax finished as always...');
      });
  };
}

export default FlagListFormAjax;
