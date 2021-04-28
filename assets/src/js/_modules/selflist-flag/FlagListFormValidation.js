import $ from 'jquery';
import 'jquery-validation';
import 'jquery-validation/dist/additional-methods.js';
import FlagListFormAjax from './FlagListFormAjax';

class FlagListFormValidation extends FlagListFormAjax {
  constructor() {
    super();
    this.init();
    // COLLECTING CITY FORM ELEMENT
    this.flagInsertForm = $('#flag-insert-form');
    // ADDING LETTERS & NUMBERS ONLY + NO NUMBER TO START -- METHOD TO JQ VALIDATION
    $.validator.addMethod(
      'lettersnumbersonly',
      function (value, element) {
        return this.optional(element) || /^[a-z\-d ][a-z0-9 ]+$/i.test(value);
      },
      'Letters and numbers only please ... cannot begin with numbers.'
    );
    // RUNNING VALIDATE
    this.validateFlagForm();
  }

  init = () => {
    console.log('TEST - Flag Validation');
  };

  // MAIN FORM VALIDATION
  validateFlagForm = () => {
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
        this.insertFlagAjaxHandler();
      },
    });
  };
}

export default FlagListFormValidation;
