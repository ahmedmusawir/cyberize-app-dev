import $ from 'jquery';
import { selectize } from 'selectize';
import CatInsertDataParent from './CatInsertDataParent';

class ListInsertEvents extends CatInsertDataParent {
  constructor() {
    super();
    this.init();
    // COLLECTING BUTTON
    this.button = $('#list-insert-button');
    // SETTING EVENTS
    this.setEvents();
  }

  init = () => {
    console.log('ListInsertEvents - Insert Post');
  };

  setEvents = () => {
    this.button.on('click', this.clickInsertListHandler);
    // this.button.on('click', this.clickInsertHandler);
  };

  clickInsertListHandler = () => {
    // console.log('List Submit Clicked');
    // COLLECTING FORM DATA
    // COLLECTING MAIN CAT SELECTED ID
    const currentMainId = this.selectizeMain.getValue();
    console.log('Current Main Cat ID: ', currentMainId);

    // COLLECTED PRIMO CAT SELECTED ID
    const currentPrimoId = this.selectizePrimo.getValue();
    console.log('Current Primo ID: ', currentPrimoId);

    // COLLECTING SECONDO CAT SELECTED ID
    const currentSecondoId = this.selectizeSecondo.getValue();
    console.log('Current Secondo Cat ID: ', currentSecondoId);

    // COLLECTED TERZO CAT SELECTED ID
    const currentTerzoId = this.selectizeTerzo.getValue();
    console.log('Current Terzo ID: ', currentTerzoId);

    // COLLECTING FORM DATA
    const name = $('#lister-name').val();
    const listTitle = `This List Posted by: ${name}`;
    const address = $('#lister-address').val();
    const description = $('#lister-description').val();
    const categoryIds = `${currentMainId}, ${currentPrimoId}, ${currentSecondoId}, ${currentTerzoId}`;

    console.log(`NAME: ${name}`);
    console.log(`ADDRESS: ${address}`);
    console.log(`DESCRIPTION: ${description}`);
    console.log(`CATEGORY: ${categoryIds}`);

    // PREPARING FORM DATA FOR REST API
    let newPostData = {
      title: listTitle,
      content: description,
      categories: categoryIds,
      "fields[your_name]": name, // ACF Item
      "fields[your_address]": address, // ACF Item
      status: 'publish'
    }

    // AJAX POST INSERT
    $.ajax({
      beforeSend: (xhr) => {
        xhr.setRequestHeader('X-WP-Nonce', selflistData.nonce);
      },
      url: selflistData.root_url + '/wp-json/wp/v2/posts',
      type: 'POST',
      data: newPostData
    })
      .done((response) => {
        console.info(response);
        console.log('Awesome! ... Ajax Success');
      })
      .fail((response) => {
        console.error('Sorry ... Ajax failed');
        console.error(response);
      })
      .always(() => {
        console.info('Ajax finished as always...');
      });

    // RESET FORM
    this.selectizeMain.clear();
    this.selectizePrimo.clear();
    this.selectizeSecondo.clear();
    this.selectizeTerzo.clear();

  }


}

export default ListInsertEvents;
