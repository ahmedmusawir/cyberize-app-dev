import $ from 'jquery';

class ListPreviewEvents {
  constructor() {
    // COLLECTING AJAX INFO
    this.ajaxUrl = selflistData.ajax_url;
    this.ajaxFunction = 'list_preview_ajax';
    this.previewDisplayBox = $('#list-preview-ajax-data');
    this.init();
  }

  init = () => {
    // console.log('List Preview Ajax ...');
    const listObject = JSON.parse(localStorage.getItem('newListData'));
    // console.log('List Obj: ', listObject);
    console.log('The New List ID', listObject.id);

    if (this.previewDisplayBox.length) {
      $.ajax({
        url: this.ajaxUrl,
        type: 'POST',
        data: {
          post_id: listObject.id,
          action: this.ajaxFunction,
        },
      })
        .done((res) => {
          // console.log(res);
          this.previewDisplayBox.html(res);
        })
        .fail((res) => {
          console.error(res);
        });
    }
  };
}

export default ListPreviewEvents;
