import $ from 'jquery';
import ListInsertUiEvents from './ListInsertUiEvents';
require('jquery-validation');

class ListInsertValidationEvents extends ListInsertUiEvents {
  constructor() {
    super();
    this.init();
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
    console.log('LIST Form Val Test Loaded ...');
  };

  // MAIN FORM VALIDATION
  validateMainInsertForm = () => {
    console.log('validation function clicked ...');

    $('#main-cat-insert-form').validate({
      rules: {
        'lister-description': {
          maxlength: 140,
          minlength: 3,
        },
        'lister-name': {
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
}

export default ListInsertValidationEvents;
