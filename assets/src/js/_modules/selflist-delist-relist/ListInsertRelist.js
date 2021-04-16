import $ from 'jquery';
import CatSelectDataParent from '../selflist-crud/CatSelectDataParent';

class ListInsertRelist extends CatSelectDataParent {
  constructor() {
    super();
    this.init();
    // COLLECTING ELEMENTS
    this.relistDetails;
    this.relistMainCatId;
    this.relistMainCatText;
    this.relistPrimoCatId;
    this.relistPrimoCatText;
    this.relistSecondoCatId;
    this.relistSecondoCatText;
    this.relistTerzoCatId;
    this.relistTerzoCatText;
    this.relistDetailsBox = $('#lister-description');
    //METHODS
    this.getRelistData();
  }

  init = () => {
    // console.log('ListInsertRelist ...');
  };

  getRelistData = () => {
    // READING FROM SESSION STORAGE
    const relistData = JSON.parse(sessionStorage.getItem('relistData'));
    console.log(relistData);
    // LOAD UP RELIST DATA INTO VARS
    if (relistData) {
      this.relistDetails = relistData.list_content;
      this.relistMainCatId = relistData.list_cats.mainCatId;
      this.relistMainCatText = relistData.list_cats.mainCatName;
      this.relistPrimoCatId = relistData.list_cats[0].primo[0].primoId;
      this.relistPrimoCatText = relistData.list_cats[0].primo[0].primoName;
      this.relistSecondoCatId = relistData.list_cats[0].secondo[0].secondoId;
      this.relistSecondoCatText =
        relistData.list_cats[0].secondo[0].secondoName;
      this.relistTerzoCatId = relistData.list_cats[0].terzo[0].terzoId;
      this.relistTerzoCatText = relistData.list_cats[0].terzo[0].terzoName;

      // FILL THE INSERT FORM WITH RELIST DATA
      this.displayRelistDataToForm();
    } else {
      console.info('No Relist Data Found. [ListInsertRelist.js] ');
    }
  };

  displayRelistDataToForm = () => {
    // ADDING LIST DETAILS
    this.relistDetailsBox.text(this.relistDetails);
    // SELECTIZE MAIN
    if (this.selectizeMain) {
      // ADD OPTIONS FOR MAIN SELECT NEED TO RE-DECLARE CUZ ...
      // The dropdown options are not loaded until the input is clicked. So,
      // the setValue() function cannot find any options to display
      const selectMainOptions = {
        value: this.relistMainCatId,
        text: this.relistMainCatText,
      };
      this.selectizeMain.addOption(selectMainOptions);
      // SETTING THE VALUES TO MAIN SELECT
      // The 'true' means in silent mode which doesn't invoke any selectize event
      // When I used it without the 'true' it caused error by invoking CatSelectionEvents.js
      this.selectizeMain.setValue(this.relistMainCatId, true);
    }

    // SELECTIZE PRIMO
    if (this.selectizePrimo) {
      // ADD OPTIONS FOR PRIMO SELECT NEED TO RE-DECLARE CUZ ...
      const selectPrimoOptions = {
        value: this.relistPrimoCatId,
        text: this.relistPrimoCatText,
      };
      this.selectizePrimo.addOption(selectPrimoOptions);
      // SETTING THE VALUES TO PRIMO SELECT
      this.selectizePrimo.setValue(this.relistPrimoCatId, true);
    }

    // SELECTIZE SECONDO
    if (this.selectizePrimo) {
      // ADD OPTIONS FOR SECONDO SELECT NEED TO RE-DECLARE CUZ ...
      const selectSecondoOptions = {
        value: this.relistSecondoCatId,
        text: this.relistSecondoCatText,
      };
      this.selectizeSecondo.addOption(selectSecondoOptions);
      // SETTING THE VALUES TO SECONDO SELECT
      this.selectizeSecondo.setValue(this.relistSecondoCatId, true);
    }

    // SELECTIZE TERZO
    if (this.selectizeTerzo) {
      // ADD OPTIONS FOR TERZO SELECT NEED TO RE-DECLARE CUZ ...
      const selectTerzoOptions = {
        value: this.relistTerzoCatId,
        text: this.relistTerzoCatText,
      };
      this.selectizeTerzo.addOption(selectTerzoOptions);
      // SETTING THE VALUES TO TERZO SELECT
      this.selectizeTerzo.setValue(this.relistTerzoCatId, true);
    }
  };
}

export default ListInsertRelist;
