import $ from 'jquery';
import CatFormValdationParent from './CatFormValidationParent';

class PrimoCatFromValidation extends CatFormValdationParent {
  constructor() {
    super();
    // COLLECTING ELEMENTS
    // This is the User Validation Button "Submit" on Main Cat Insert From
    this.primoCatUserValidationBtn = $('#primo-cat-user-validation-btn');
    // This is the Cancel button on the Use Validation Popup
    this.primoCatUserValidationCancelBtn = $('#primo-cat-insert-cancel-btn');
    // This is the User Validation popup box
    this.primoCatUserValidationBox = $('#primo-cat-user-validation-box');
    // This is the primo category insert form container
    this.primoCatInsertFormBox = $('#primo-cat-insert-box');

    // SETTING EVENTS
    this.setEvents();
  }

  setEvents = () => {
    this.mainCatUserValidationBtn.on('click', this.mainCatValicationHandler);
    this.mainCatUserValidationCancelBtn.on('click', this.mainCatUserValidationCancelHandler);
  }
}

export default PrimoCatFromValidation;