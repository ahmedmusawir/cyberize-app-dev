import $ from 'jquery';

class SelflistMainCatInsertUI {
  constructor() {
    // COLLECTING ELEMENTS FROM PAGE
    // This is the new Main Category Insert button. Top input right button "New Catetory"
    this.mainCatNewBtn = $('#main-cat-new-btn');
    // This is the main list insert form container
    this.listInsertFormBox = $('#create-new-list-box');
    // This is the main category insert form container
    this.mainCatInsertFormBox = $('#main-cat-insert-box');
    // This is the Cancel button on the Main Cat Insert Form (at the bottom)
    this.mainCatValidationCancelBtn = $('#main-cat-validation-cancel-btn');

    // SETTING EVENTS
    this.setEvents();
    this.init();
  }

  init = () => {
    // console.log('Selflist Main cat INSERT UI...');
  };

  setEvents = () => {
    this.mainCatNewBtn.on('click', this.mainCatNewHandler);
    this.mainCatValidationCancelBtn.on('click', this.mainCatValidationCancelHandler);
  };

  mainCatNewHandler = () => {
    // console.log('new main cat btn clicked');
    this.listInsertFormBox.addClass('d-none');
    this.mainCatInsertFormBox.removeClass('d-none');
  }

  mainCatValidationCancelHandler = () => {
    this.listInsertFormBox.removeClass('d-none');
    this.mainCatInsertFormBox.addClass('d-none');
  }

}

export default SelflistMainCatInsertUI;
