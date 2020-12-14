// TEST CODE HERE
import InsertPost from './_modules/_test/insertPost';
import TestGetJson from './_modules/_test/testGetJson';
import FormValdationTest from './_modules/_test/formVaidationTest';
// PRODUCTION CODE HERE
import SelflistSearch from './_modules/SelflistSearch';
import SelflistCatSearch from './_modules/SelflistCatSearch';
import SelflistPostSearch from './_modules/SelflistPostSearch';
import CatSelectDataParent from './_modules/selflist-crud/CatSelectDataParent';
import CatSelectionEvents from './_modules/selflist-crud/CatSelectionEvents';
import ListInsertEventsAjax from './_modules/selflist-crud/ListInsertEventsAjax';
import MainCatInsertEventAjax from './_modules/selflist-crud/MainCatInsertEventAjax';
import MainCatFormValdation from './_modules/selflist-crud/MainCatFormVaidation';
import CatUiParent from './_modules/selflist-crud/cat-curd/CatUiParent';
import MainCatInsertUi from './_modules/selflist-crud/cat-curd/MainCatInsertUi';
import PrimoCatInsertUi from './_modules/selflist-crud/cat-curd/PrimoCatInsertUi';
import SecondoCatInsertUi from './_modules/selflist-crud/cat-curd/SecondoCatInsertUi';
import TerzoCatInsertUi from './_modules/selflist-crud/cat-curd/TerzoCatInsertUi';

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
    new CatSelectDataParent();
    new CatSelectionEvents();
    // LIST INSERT PAGE MAIN POST INSERT EVENTS
    new ListInsertEventsAjax();
    // CAT INSERT PAGE AJAX
    new MainCatInsertEventAjax();
    // CAT INSERT PAGE FORM VALIDATION
    new MainCatFormValdation();
    // CAT INSERT UI/UX
    // new SelflistMainCatInsertUI();

    /**
    * CATEGORY RELATED CLASSES
    */
    new CatUiParent();
    new MainCatInsertUi();
    new PrimoCatInsertUi();
    new SecondoCatInsertUi();
    new TerzoCatInsertUi();
  }

  runTestCode = () => {
    // new InsertPost();
    // new TestGetJson();
    new FormValdationTest();
  }
}

const app = new App();
