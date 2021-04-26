import $ from 'jquery';

class TestFlagPost {
  constructor() {
    this.init();
    // COLLECTING AJAX INFO
    this.ajaxUrl = selflistData.ajax_url;
    this.ajaxFunction = 'test_flag_ajax';
    // COLLECTING BUTTON
    // this.button = $('.flag-form-btn');
    // SETTING EVENTS
    this.setEvents();
  }

  init = () => {
    console.log('TEST - Insert Flag');
  };

  setEvents = () => {
    // this.button.on('click', this.clickInsertHandler);
  };

  clickInsertHandler = () => {
    console.log('flag clicked');
    let newPostData = {
      // title: $('.new-note-title').val(),
      // content: $('.new-note-body').val(),
      title: 'A Test Flag - non-logged in',
      content: 'Test Flag Static Content by non-logged in user',
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
        console.error(response);
      })
      .always(() => {
        // console.info('Ajax finished as always...');
      });
  };
}

export default TestFlagPost;
