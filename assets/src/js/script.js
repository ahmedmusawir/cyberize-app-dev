// TEST CODE HERE
import InsertPost from './_modules/_test/insertPost';
import TestGetJson from './_modules/_test/testGetJson';
import FormValdationTest from './_modules/_test/formVaidationTest';
// PRODUCTION CODE HERE
import SelflistSearch from './_modules/SelflistSearch';
import SelflistCatSearch from './_modules/SelflistCatSearch';
import SelflistPostSearch from './_modules/SelflistPostSearch';
import CatInsertDataParent from './_modules/selflist-crud/CatInsertDataParent';
import CatSelectionEvents from './_modules/selflist-crud/CatSelectionEvents';
import ListInsertEvents from './_modules/selflist-crud/ListInsertEvents';
import MainCatInsertEventAjax from './_modules/selflist-crud/MainCatInsertEventAjax';
import MainCatFormValdation from './_modules/selflist-crud/MainCatFormVaidation';
import SelflistMainCatInsertUI from './_modules/selflist-crud/SelflistMainCatInsertUI';

class App {
  constructor() {
    console.info('ES6 Script Initialized!');

    this.runTestCode();

    // Selflist Search Module
    new SelflistSearch();
    // Selflist Category Search Filter - non REST
    new SelflistCatSearch();
    // Selflist Post Item Search Filter - non REST
    new SelflistPostSearch();

    // SELFLIST LIST INSERT PAGE CAT DROPDOWNS
    new CatInsertDataParent();
    new CatSelectionEvents();
    // LIST INSERT PAGE MAIN POST INSERT EVENTS
    new ListInsertEvents();
    // CAT INSERT PAGE AJAX
    new MainCatInsertEventAjax();
    // CAT INSERT PAGE FORM VALIDATION
    new MainCatFormValdation();
    // CAT INSERT UI/UX
    new SelflistMainCatInsertUI();

  }

  runTestCode = () => {
    // new InsertPost();
    // new TestGetJson();
    new FormValdationTest();
  }
}

const app = new App();
