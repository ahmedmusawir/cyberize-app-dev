import $ from 'jquery';

class ListPreviewEvents {
  constructor() {
    this.init();
    // COLLECTING AJAX INFO
    this.ajaxUrl = selflistData.ajax_url;
    this.ajaxFunction = 'list_preview_ajax';
    this.previewDisplayBox = $('#list-preview-ajax-data');
    this.showListPreview();
  }

  init = () => {
    // console.log('List Preview Ajax ...');
  };

  showListPreview = () => {
    const listObject = JSON.parse(localStorage.getItem('newListData'));
    // console.log('List Obj: ', listObject);
    // console.log('The New List ID', listObject.id);

    if (this.previewDisplayBox.length && listObject.id) {
      $.ajax({
        url: this.ajaxUrl,
        type: 'POST',
        data: {
          post_id: listObject.id,
          action: this.ajaxFunction,
        },
      })
        .done((res) => {
          this.previewDisplayBox.html(res);
        })
        .fail((res) => {
          console.error(res);
        });
    } else {
      console.info('Did not find the new List ID: ListPreviewEvents.js');
    }
  };
}

export default ListPreviewEvents;
