import $ from 'jquery';
import CatSelectDataParent from '../selflist-crud/CatSelectDataParent';

class CityLoadRestApiEvents extends CatSelectDataParent {
  constructor() {
    super();
    this.init();
    // AJAX DATA
    this.cityData;
    // LOAD CITY DATA
    this.loadCityDataAjax();
    this.setEvents();
  }

  init = () => {
    console.log('City Load Events...');
  };

  loadCityDataAjax = () => {
    // LOAD CITY DATA FROM REST API
    $.ajax({
      url: selflistData.root_url + '/wp-json/selflist/v1/cities',
      type: 'GET',
    })
      .done((response) => {
        console.info(response);
        this.cityData = response;
        console.log('Awesome! ... Ajax Success');
        // ADDING INSERTED DATA INTO LOCALSTORAGE FOR PREVIEW PAGE
        // localStorage.setItem('newListData', JSON.stringify(response));
      })
      .fail((response) => {
        console.error('Sorry ... Ajax failed');
        console.error(response);
      })
      .always(() => {
        console.info('Ajax finished as always...');
      });
  };

  setEvents = () => {
    if (this.selectAllStateCtrl) {
      this.selectAllStateCtrl.on('change', this.stateSelectHandler);
    }
  };

  stateSelectHandler = () => {
    // RESETTING CITY SELECTIZE ELEMENT
    this.selectAllCityCtrl.clear(); // Resets all selected items from selectize
    this.selectAllCityCtrl.clearOptions(); // Removes all options from selectize

    // COLLECTING STATE SLUG ON SELECT
    const currentStateSlug = this.selectAllStateCtrl.getValue();
    // console.log(currentStateSlug);

    // GETTING THE INNER TEXT OF THE CURRENT SELECTED OPTION
    // const selectedState = this.selectAllStateCtrl.getItem(currentStateSlug);
    // console.log(selectedState[0].innerText);

    // FILTERING CITY DATA BY CURRENT STATE SLUG
    if (currentStateSlug) {
      // console.log(this.cityData);
      const selected = this.cityData.filter(
        (state) => state.state_slug == currentStateSlug
      );
      // console.info(selected);
      // console.info(selected[0].cities);
      const currentCityList = selected[0].cities;

      // LOADING DATA INTO SELECTIZE ELEMENT
      currentCityList.map((city) => {
        // ADDING ITEMS DYNAMICALLY
        const selectOptions = {
          value: city.city_name,
          text: city.city_slug,
        };
        this.selectAllCityCtrl.addOption(selectOptions);
        this.selectAllCityCtrl.refreshItems();
      });
    }
  };
}

export default CityLoadRestApiEvents;
