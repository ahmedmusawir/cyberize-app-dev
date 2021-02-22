import $ from 'jquery';

class CityStateAjaxEvents {
  constructor() {
    this.init();
    // AJAX INFO
    this.ajaxUrl = selflistData.ajax_url;
    this.ajaxFunction = 'city_state_filter_ajax';
    // COLLECTING ELEMENTS
    this.listIndexContainer = $('#list-index-container');
    this.cityButton = $('.city-button');
    this.setEvents();
  }

  init = () => {
    console.log('City State Ajax Events ...');
  };

  setEvents = () => {
    this.cityButton.on('click', this.clickCityHandler);
  };

  clickCityHandler = () => {
    console.log('City Btn Clicked From Tax Menu ...');
    // SETTING VARIABLES
    const currentCatId = 39;
    const stateSlug = 'florida';
    const citySlug = 'miami';
    // AJAX FUNCTION FOR CITY STATE FILTERING
    $.ajax({
      url: this.ajaxUrl,
      type: 'post',
      data: {
        action: this.ajaxFunction,
        currentCatId,
        stateSlug,
        citySlug,
      },
    })
      .done((res) => {
        console.log(res);
        this.listIndexContainer.html(res);
      })
      .fail(() => {
        console.log('Ajax Failed! In ' + this.ajaxFunction);
      })
      .always(() => {
        // console.log('Ajax Dynamic Loaction Filter Complete');
      });
  };
}

export default CityStateAjaxEvents;
