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
    console.log('List Submit Clicked');
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

    // PREPARING FORM DATA FOR REST API
    const name = $('#lister-name').val();
    const address = $('#lister-address').val();
    const description = $('#lister-description').val();
    const categoryId = `${currentMainId}, ${currentPrimoId}, ${currentSecondoId}, ${currentTerzoId}`

    console.log(`NAME: ${name}`);
    console.log(`ADDRESS: ${address}`);
    console.log(`DESCRIPTION: ${description}`);
    console.log(`CATEGORY: ${categoryId}`);

  }

  // DELETE ME LATER ... JUST EXAMPLE
  clickInsertHandler() {
    let name = $('#new-note-name').val();
    let address = $('#new-note-address').val();

    console.log(`NAME: ${name}`);
    console.log(`ADDRESS: ${address}`);

    let newPostData = {
      title: $('.new-note-title').val(),
      content: $('.new-note-body').val(),
      "fields[your_name]": name, // ACF Item
      "fields[your_address]": address, // ACF Item
      status: 'publish'
    }

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
  }

}

export default ListInsertEvents;
