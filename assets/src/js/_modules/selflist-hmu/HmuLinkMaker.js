import $ from 'jquery';

class HmuLinkMaker {
  constructor() {
    this.init();
    // SETTING GLOBALS
    this.hmuEmailArray = [];
    // COLLECTING ELEMENTS
    this.hmuStartBtn = $('#start-hmu-btn');
    this.hmuCheckbox = $('.list-hmu-checkbox');
    this.setEvents();
  }

  init = () => {
    console.log('HMU');
  };

  setEvents = () => {
    this.hmuCheckbox.on('change', this.clickCheckboxHandler);
  };

  clickCheckboxHandler = (e) => {
    if (e.target.checked) {
      let hmuEmail = $(e.target).data('hmu');
      // console.log('HMU Email: ', hmuEmail);

      // Adding collected email to Array
      this.hmuEmailArray.push(hmuEmail);
      // console.info('The Email Array: ', this.hmuEmailArray);
    } else {
      let hmuEmail = $(e.target).data('hmu');

      // Removing collected email to Array
      this.hmuEmailArray = $.grep(this.hmuEmailArray, (email) => {
        return email != hmuEmail;
      });
      console.info('The Email Array: ', this.hmuEmailArray);
      // Disabling the Start HMU when no email in the list
      if (this.hmuEmailArray.length === 0) {
        this.hmuStartBtn.addClass('disabled');
      }
    }

    this.makeGravityBtnUrl();
  };

  makeGravityBtnUrl = () => {
    const uniqueHmuEmails = this.hmuEmailArray.filter((email, i) => {
      return i == this.hmuEmailArray.indexOf(email);
    });
    // console.log('Unique Email Set: ', uniqueHmuEmails);
    // Creating comma separated string
    const readyHmuEmails = uniqueHmuEmails.join();

    // console.log('String: ', readyHmuEmails);
    const gravityHmuLink = `/list-hmu/?HMU_EMAIL_LIST=${readyHmuEmails}`;
    console.log('URL String: ', gravityHmuLink);
    // Updating the HMU Start button
    if (readyHmuEmails.length) {
      this.hmuStartBtn.attr('href', gravityHmuLink).removeClass('disabled');
    }
  };
}

export default HmuLinkMaker;
