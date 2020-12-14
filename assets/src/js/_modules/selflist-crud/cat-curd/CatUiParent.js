import $ from 'jquery';

class CatUiParent {
  constructor() {
    // this.init();
    // This is the main list insert form container. 
    // Common for all Category insert UI/UX
    this.listInsertFormBox = $('#create-new-list-box');
  }

  init = () => {
    console.log('OOP Cat INSERT UI...');
  };

  catNewHandler = () => {
    // console.log('new main cat btn clicked');
    this.listInsertFormBox.addClass('d-none');
    if (this.mainCatInsertFormBox) {
      this.mainCatInsertFormBox.removeClass('d-none');
    }
    if (this.primoCatInsertFormBox) {
      this.primoCatInsertFormBox.removeClass('d-none');
    }
    if (this.secondoCatInsertFormBox) {
      this.secondoCatInsertFormBox.removeClass('d-none');
    }
    if (this.terzoCatInsertFormBox) {
      this.terzoCatInsertFormBox.removeClass('d-none');
    }
  }

  catValidationCancelHandler = () => {
    this.listInsertFormBox.removeClass('d-none');

    if (this.mainCatInsertFormBox) {
      this.mainCatInsertFormBox.addClass('d-none');
    }
    if (this.primoCatInsertFormBox) {
      this.primoCatInsertFormBox.addClass('d-none');
    }
    if (this.secondoCatInsertFormBox) {
      this.secondoCatInsertFormBox.addClass('d-none');
    }
    if (this.terzoCatInsertFormBox) {
      this.terzoCatInsertFormBox.addClass('d-none');
    }
  }

}

export default CatUiParent;
