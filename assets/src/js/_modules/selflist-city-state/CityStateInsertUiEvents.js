import $ from 'jquery';
import CatSelectDataParent from '../selflist-crud/CatSelectDataParent';

class CiteStateInsertUiEvents extends CatSelectDataParent {
  constructor() {
    super();
    this.init();
    // COLLECTING ELEMENTS
    this.cityNewBtn = $('#city-new-btn');
    this.cityCancelBtn = $('#city-name-cancel-btn');
    this.cityStateChoiceBox = $('#state-city-choice-box');
    this.cityInsertFormBox = $('#city-insert-form-box');
    // SETTING EVENTS
    this.setEvents();
  }

  init = () => {
    console.log('City & State INSERT Ui/Ux ...');
  };

  setEvents = () => {
    this.cityNewBtn.on('click', this.openCityFormHandler);
    this.cityCancelBtn.on('click', this.closeCityFormHandler);
  };

  openCityFormHandler = () => {
    // COLLECTING STATE SLUG ON SELECT
    const currentStateSlug = this.selectAllStateCtrl.getValue();
    if (!currentStateSlug) {
      alert('Please Choose A State...');
    } else {
      // MAKING THE CITY FORM VISIBLE
      this.cityStateChoiceBox.addClass('d-none');
      this.cityInsertFormBox.removeClass('d-none');
    }
  };

  closeCityFormHandler = () => {
    this.cityInsertFormBox.addClass('d-none');
    this.cityStateChoiceBox.removeClass('d-none');
  };
}

export default CiteStateInsertUiEvents;
