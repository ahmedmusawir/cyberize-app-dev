import $ from 'jquery';
import ListInsertUiDataParent from './ListInsertUiDataParent';
require('jquery-validation');

class ListInsertValidationEvents extends ListInsertUiDataParent {
  constructor() {
    super();
    this.init();
    // The Form Submit button is now list-user-validation-button
    this.userValidationButton = $('#list-user-validation-button');
    // The Cancel button
    this.userValidationCancellButton = $('#list-insert-cancel-btn');
    // Setting up events
    this.setEvents();
    // ADDING LETTERS & SPACES ONLY METHOD TO JQ VALIDATION
    $.validator.addMethod(
      'lettersonly',
      function (value, element) {
        return this.optional(element) || /^[a-z ]+$/i.test(value);
      },
      'Letters and spaces only please'
    );
  }

  init = () => {
    console.log('LIST Form Validation New Loaded ...');
  };

  setEvents = () => {
    this.userValidationButton.on('click', this.validateMainInsertForm);
    this.userValidationCancellButton.on('click', this.goBackToFormBox);
  };

  // MAIN FORM VALIDATION
  validateMainInsertForm = () => {
    console.log('validation function clicked new file ...');

    $('#list-insert-main-form').validate({
      rules: {
        'lister-description': {
          required: true,
          maxlength: 140,
          minlength: 3,
        },
        'lister-name': {
          required: true,
          maxlength: 20,
          minlength: 3,
        },
      },
      submitHandler: (form, event) => {
        event.preventDefault();
        // OPEN THE USER VALIDATION SCREEN
        this.displayValidationBox();
      },
    });
  };

  goBackToFormBox = () => {
    // SCROLL TO TOP
    window.scrollTo(0, 0);
    // REMOVING LIST FORM BOX
    this.listInsertFormBox.removeClass('d-none');
    // DISPLAYING USER VALIDATION BOX
    this.userValidationBox.addClass('d-none');
  };
}

export default ListInsertValidationEvents;
