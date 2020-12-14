import $ from 'jquery';
import CatUiParent from './catUIParent';

class TerzoCatInsertUi extends CatUiParent {
  constructor() {
    super();
    // COLLECTING ELEMENTS FROM PAGE
    // This is the new Main Category Insert button. Top input right button "New Catetory"
    this.terzoCatNewBtn = $('#terzo-cat-new-btn');
    // This is the terzo category insert form container
    this.terzoCatInsertFormBox = $('#terzo-cat-insert-box');
    // This is the Cancel button on the Main Cat Insert Form (at the bottom)
    this.terzoCatValidationCancelBtn = $('#terzo-cat-validation-cancel-btn');

    // SETTING EVENTS
    this.setEvents();
  }

  setEvents = () => {
    // this.terzoCatNewBtn.on('click', this.terzoCatNewHandler);
    this.terzoCatNewBtn.on('click', this.catNewHandler);
    this.terzoCatValidationCancelBtn.on('click', this.catValidationCancelHandler);
  };

}


export default TerzoCatInsertUi;