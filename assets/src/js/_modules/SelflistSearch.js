import $ from 'jquery';

class SelflistSearch {
  constructor() {
    this.init();
    // COLLECTING BUTTON
    this.searchInput = $('#selflist-search-input');
    this.searchResultBox = $('#selflist-search-result-box');
    this.isSpinnerVisible = false;
    this.previousValue;
    this.typeTimer;
    this.setEvents();
  }

  init = () => {
    console.log('SelfList Search Main ...');
  };

  setEvents = () => {
    this.searchInput.on('keyup', this.typeTimeLogic.bind(this));
  };

  typeTimeLogic(e) {
    // console.log('clicked up from Sample Module ...');
    if (this.searchInput.val() != this.previousValue) {
      clearTimeout(this.typeTimer);

      if (this.searchInput.val()) {
        if (!this.isSpinnerVisible) {
          this.searchResultBox.html('<div class="spinner-loader"></div>');
          this.isSpinnerVisible = true;
        }

        this.typeTimer = setTimeout(this.getSearchResults.bind(this, e), 1000);
      } else {
        this.searchResultBox.html('');
        this.isSpinnerVisible = false;
      }
    }

    this.previousValue = this.searchInput.val();
  }

  getSearchResults(e) {
    console.log(`${e.keyCode} ... this key was pressed!`);
    this.searchResultBox.html(`Ajax results go here ...`);
    this.isSpinnerVisible = false;
  }
}

export default SelflistSearch;
