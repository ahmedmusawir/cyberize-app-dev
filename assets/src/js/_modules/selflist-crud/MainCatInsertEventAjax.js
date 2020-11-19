import $ from 'jquery';
import { selectize } from 'selectize';
import CatInsertDataParent from './CatInsertDataParent';

// LOOK INTO SelflistCatInsertUI.js FILE ... THIS IS NOTHING
class MainCatInsertEventAjax extends CatInsertDataParent {
  constructor() {
    super();
    this.init();
    // COLLECTING SUBMIT BUTTON
    this.submitMainCatBtn = $('#main-cat-insert-submit-btn');
    // COLLECTING AJAX INFO
    this.ajaxUrl = selflistData.ajax_url;
    console.log(this.ajaxUrl);
    this.ajaxFunction = 'selflist_main_cat_insert_ajax';
    console.log(this.ajaxFunction);
    this.setEvents();
  }

  init = () => {
    console.log('Main Cat Insert Events ...');
  };

  setEvents = () => {
    this.submitMainCatBtn.on('click', this.mainCatSubmitHandler);
  };

  mainCatSubmitHandler = (e) => {
    console.log('Main Cat Submit Clicked');
    const mainCat = $('#main-input-main-cat').val();
    const primoCat = $('#main-input-primo-cat').val();
    const secondoCat = $('#main-input-secondo-cat').val();
    const terzoCat = $('#main-input-terzo-cat').val();

    console.log(mainCat);
    console.log(primoCat);
    console.log(secondoCat);
    console.log(terzoCat);

    e.stopImmediatePropagation();

    $.ajax({
      url: this.ajaxUrl,
      type: 'post',
      data: {
        mainCat: mainCat,
        primoCat: primoCat,
        secondoCat: secondoCat,
        terzoCat: terzoCat,
        action: this.ajaxFunction,
      },
    })
      .done(function (res) {
        $('#main-cat-insert-box').append(res);
        console.log('Ajax Main Cat Insert Success!');

      })
      .fail(function () {
        console.log('Ajax Failed!');
      })
      .always(function () {
        console.log('Ajax Main Cat Insert Complete');
      });
  }

}

export default MainCatInsertEventAjax;
