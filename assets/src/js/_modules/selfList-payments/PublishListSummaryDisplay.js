import $ from 'jquery';

class PublishListSummaryDisplay {
  constructor() {
    this.init();
    // STATUS VARS
    this.listPointStatus;
    this.listPublishStatus;
    // COLLECTING ELEMENTS
    this.publishedPostIdBox = $('.published-post-id');
    this.listPointStatusBox = $('#list-point-status');
    this.listPublishStatusBox = $('#list-publish-status');
    // DISPLAY SUMMARY ON PAGE
    this.displaySummary();
  }

  init = () => {
    console.log('Display Publish Summary ...');
  };

  displaySummary = () => {
    const publishObject = JSON.parse(
      localStorage.getItem('newListPublishData')
    );
    // console.log('Publish Obj: ', publishObject);

    // DISPLAY POST ID
    // if (this.publishedPostIdBox.length && publishObject.post_id) {
    this.publishedPostIdBox.html(publishObject.post_id);
    // }

    // VERIFY POINT UPDATE STATUS
    if (publishObject.points_update_success === true) {
      this.listPointStatus = '<span class="text-success"> Success!</span>';
    } else {
      this.listPointStatus = '<span class="text-danger"> Failed!</span>';
    }
    // DISPLAY PONT STATUS
    if (this.listPointStatusBox.length && publishObject.points_update_success) {
      this.listPointStatusBox.html(this.listPointStatus);
    }

    // VERIFY PUBLISH UPDATE STATUS
    if (publishObject.post_id == publishObject.post_update_status) {
      this.listPublishStatus = '<span class="text-success"> Success!</span>';
    } else {
      this.listPublishStatus = '<span class="text-danger"> Failed!</span>';
    }
    // DISPLAY PUBLISH STATUS
    if (this.listPublishStatusBox.length && publishObject.post_id) {
      this.listPublishStatusBox.html(this.listPublishStatus);
    }
  };
}

export default PublishListSummaryDisplay;
