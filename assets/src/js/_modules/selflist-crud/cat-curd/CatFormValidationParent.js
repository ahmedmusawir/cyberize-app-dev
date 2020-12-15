import $ from 'jquery';
require('jquery-validation');

class CatFormValdationParent {
  constructor() {
    // this.init();
    // ADDING LETTERS & SPACES ONLY METHOD TO JQ VALIDATION
    $.validator.addMethod("lettersonly", function (value, element) {
      return this.optional(element) || /^[a-z ]+$/i.test(value);
    }, "Letters and spaces only please");
  }

  init = () => {
    console.log('MAIN CAT Form Val Test Loaded ...');
  };

  mainCatUserValidationCancelHandler = () => {

    if (this.mainCatInsertFormBox) {
      // Displaying the insert form
      this.mainCatInsertFormBox.removeClass('d-none');
      // Maing the main cat user validation popup invisible
      this.mainCatUserValidationBox.addClass('d-none');
    }

  }

  mainCatValicationHandler = (e) => {

    if (this.mainCatInsertFormBox) {
      this.validateMainCatForm();
    }

  }

  validateMainCatForm = () => {

    $('#main-cat-insert-form').validate({
      rules: {
        'main-input-main-cat': { lettersonly: true, maxlength: 25, minlength: 3 },
        'main-input-primo-cat': { lettersonly: true, maxlength: 20, minlength: 3 },
        'main-input-secondo-cat': { lettersonly: true, maxlength: 20, minlength: 3 },
        'main-input-terzo-cat': { lettersonly: true, maxlength: 20, minlength: 3 }
      },
      submitHandler: (form, event) => {
        event.preventDefault();
        // OPEN THE USER VALIDATION SCREEN
        this.getUserValidationScreen();
      }
    });

  }


  getUserValidationScreen = () => {
    // Hiding the insert form
    this.mainCatInsertFormBox.addClass('d-none');
    // Maing the main cat user validation popup visible
    this.mainCatUserValidationBox.removeClass('d-none');

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
    // CLEANING UP AJAX ERROR MESSAGES
    $('#ajax-failed-message').html('');
  }

}

export default CatFormValdationParent;
