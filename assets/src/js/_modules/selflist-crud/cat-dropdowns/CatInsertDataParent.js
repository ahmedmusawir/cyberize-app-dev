import $ from 'jquery';
import { selectize } from 'selectize';

class CatInsertDataParent {
  constructor() {
    this.init();
    // COLLECTION DATA
    this.url = 'http://selflist-dev.local/wp-content/uploads/categories.json';
    this.thePromise = this.getData(this.url);
    this.loadMainCatData(this.thePromise);

    // SETTING UP SELECTIZE
    this.selectMainCats = $('#select-main-cats').selectize({
      sortField: 'text'
    });
    this.selectPrimoCats = $('#select-primo-cats').selectize({
      sortField: 'text'
    });
    this.selectSecondoCats = $('#select-secondo-cats').selectize({
      sortField: 'text'
    });
    this.selectTerzoCats = $('#select-terzo-cats').selectize({
      sortField: 'text'
    });
    // ADDING ITEMS DYNAMICALLY
    // this.selectize = this.selectMainCats[0].selectize;
    this.selectizeMain = this.selectMainCats[0].selectize;
    this.selectizePrimo = this.selectPrimoCats[0].selectize;
    this.selectizeSecondo = this.selectSecondoCats[0].selectize;
    this.selectizeTerzo = this.selectTerzoCats[0].selectize;
  }

  init = () => {
    console.log('Cat Data Parent ...');
  };

  async getData(url) {
    try {
      let response = await fetch(url);
      let data = await response.json();
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
        this.selectizeMain.addOption(selectOptions);
        this.selectizeMain.addItem(1);
      })
    });
  }
}

export default CatInsertDataParent;
