import $ from 'jquery';
import CityFormValidationEvents from './CityFormValidationEvents';

class CityInsertAjaxEvents extends CityFormValidationEvents {
  constructor() {
    super();
    this.init();
    // COLLECTING ELEMENTS
    this.button = $('#univ-load-more-btn');
    this.setEvents();
  }

  init = () => {
    console.log('Univ Load More ...');
  };

  setEvents = () => {
    this.button.on('click', this.clickHandler);
  };

  clickHandler = () => {
    // console.log('clicked up from Sample Module ...');
    const page = $(this).data('page');
    console.log(page);
  };
}

export default CityInsertAjaxEvents;
