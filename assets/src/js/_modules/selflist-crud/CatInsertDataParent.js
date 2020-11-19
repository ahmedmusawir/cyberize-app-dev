import $ from 'jquery';
import { selectize } from 'selectize';

class CatInsertDataParent {
  constructor() {
    this.init();
    // SITE ROOT URL FROM WP LOCALIZE SCRIPT
    this.siteRoot = selflistData.root_url;
    // console.log(selflistData.root_url);
    // COLLECTION DATA
    this.url = this.siteRoot + '/wp-content/uploads/categories.json';
    this.thePromise = this.getData(this.url);
    this.loadMainCatData(this.thePromise);
    // INITIALIZE UP SELECTIZE
    if ($('#select-main-cats').length) {
      this.selectMainCats = $('#select-main-cats').selectize({
        sortField: 'text'
      });

      // ADDING ITEMS DYNAMICALLY & SETTING UP THE CONTROL ELEMENT
      this.selectizeMain = this.selectMainCats[0].selectize;

    }
    if ($('#select-primo-cats').length) {
      this.selectPrimoCats = $('#select-primo-cats').selectize({
        sortField: 'text'
      });

      // ADDING ITEMS DYNAMICALLY & SETTING UP THE CONTROL ELEMENT
      this.selectizePrimo = this.selectPrimoCats[0].selectize;

    }
    if ($('#select-secondo-cats').length) {
      this.selectSecondoCats = $('#select-secondo-cats').selectize({
        sortField: 'text'
      });

      // ADDING ITEMS DYNAMICALLY & SETTING UP THE CONTROL ELEMENT
      this.selectizeSecondo = this.selectSecondoCats[0].selectize;

    }
    if ($('#select-terzo-cats').length) {
      this.selectTerzoCats = $('#select-terzo-cats').selectize({
        sortField: 'text'
      });

      // ADDING ITEMS DYNAMICALLY & SETTING UP THE CONTROL ELEMENT
      this.selectizeTerzo = this.selectTerzoCats[0].selectize;

    }

  }

  init = () => {
    // console.log('Cat Data Parent ...');
  };

  async getData(url) {
    try {
      let response = await fetch(url);
      let data = await response.json();
      // console.log(data);
      return data;

    } catch (e) {
      console.log(e);
    }
  }

  loadMainCatData = (thePromise) => {
    thePromise.then((d) => {
      let data = d.mainCat;
      data.map(catData => {
        // ADDING ITEMS DYNAMICALLY
        const selectOptions = { value: catData.mainCatId, text: catData.mainCatName };
        if (this.selectizeMain) {
          this.selectizeMain.addOption(selectOptions);
          // this.selectizeMain.addItem(selectOptions);
        }
      })
    });
  }
}

export default CatInsertDataParent;
