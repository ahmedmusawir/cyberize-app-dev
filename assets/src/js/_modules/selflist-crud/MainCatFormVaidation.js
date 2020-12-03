import $ from 'jquery';
require('jquery-validation');

class MainCatFormValdation {
  constructor() {
    this.init();
    // COLLECTING BUTTON
    this.button = $('#main-cat-insert-validation-btn');
    this.setEvents();
    // ADDING LETTERS & SPACES ONLY METHOD TO JQ VALIDATION
    $.validator.addMethod("lettersonly", function (value, element) {
      return this.optional(element) || /^[a-z ]+$/i.test(value);
    }, "Letters and spaces only please");
  }

  init = () => {
    console.log('MAIN CAT Form Val Test Loaded ...');
  };

  setEvents = () => {
    this.button.on('click', this.clickHandler);
  };

  clickHandler = (e) => {
    console.log("Form Val Test clicked");
    const $this = this;

    $('#main-cat-insert-form').validate({
      rules: {
        'main-input-main-cat': { lettersonly: true, maxlength: 25, minlength: 3 },
        'main-input-primo-cat': { lettersonly: true, maxlength: 20, minlength: 3 },
        'main-input-secondo-cat': { lettersonly: true, maxlength: 20, minlength: 3 },
        'main-input-terzo-cat': { lettersonly: true, maxlength: 20, minlength: 3 }
      },
      submitHandler: function (form, event) {
        event.preventDefault();
        // OPEN THE USER VALIDATION SCREEN
        $this.getUserValidationScreen();
      }
    });
  }

  getUserValidationScreen = () => {
    // COLLECTING CAT INPUT DATA
    const mainCatInputValue = $('#main-input-main-cat').val();
    const primoCatInputValue = $('#main-input-primo-cat').val();
    const secondoCatInputValue = $('#main-input-secondo-cat').val();
    const terzoCatInputValue = $('#main-input-terzo-cat').val();

    // INSERTING INTO USER VALIDATION PAGE
    $('#main-input').text(mainCatInputValue);
    $('#primo-input').text(primoCatInputValue);
    $('#secondo-input').text(secondoCatInputValue);
    $('#terzo-input').text(terzoCatInputValue);
  }

}

export default MainCatFormValdation;
