import $ from 'jquery';

class SelflistSearch {
  constructor() {
    this.init();
    // COLLECTING BUTTON
    this.searchInput = $('#selflist-search-input');
    this.setEvents();
  }

  init = () => {
    console.log('SelfList Search Main ...');
  };

  setEvents = () => {
    this.searchInput.on('keyup', this.typingLogic);
  };

  typingLogic(e) {
    // console.log('clicked up from Sample Module ...');
    console.log(`${e.keyCode} ... this key was pressed!`);
  }
}

export default SelflistSearch;
