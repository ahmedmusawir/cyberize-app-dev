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
// import MainCatInsertEventAjax from './_modules/selflist-crud/MainCatInsertEventAjax';
// import MainCatFormValdation from './_modules/_old/MainCatFormVaidation';C
// CATEGORY INSERT UI RELATED
import CatInsertUiParent from './_modules/selflist-crud/cat-curd/CatInsertUiParent';
import MainCatInsertUi from './_modules/selflist-crud/cat-curd/MainCatInsertUi';
import PrimoCatInsertUi from './_modules/selflist-crud/cat-curd/PrimoCatInsertUi';
import SecondoCatInsertUi from './_modules/selflist-crud/cat-curd/SecondoCatInsertUi';
import TerzoCatInsertUi from './_modules/selflist-crud/cat-curd/TerzoCatInsertUi';
// CATEGORY FORM VALIDATION RELATED
import CatFormValidationParent from './_modules/selflist-crud/cat-curd/CatFormValidationParent';
import MainCatFormValidation from './_modules/selflist-crud/cat-curd/MainCatFormValidation';
import PrimoCatFormValidation from './_modules/selflist-crud/cat-curd/PrimoCatFormValidation';
import SecondoCatFormValidation from './_modules/selflist-crud/cat-curd/SecondoCatFormValidation';
import TerzoCatFormValidation from './_modules/selflist-crud/cat-curd/TerzoCatFormValidation';
// CATEGORY INSERT EVENT AJAX RELATED
import CatInsertEventAjaxParent from './_modules/selflist-crud/cat-curd/CatInsertEventAjaxParent';
import MainCatInsertEvent from './_modules/selflist-crud/cat-curd/MainCatInsertEvent';
import PrimoCatInsertEvent from './_modules/selflist-crud/cat-curd/PrimoCatInsertEvent';
import SecondoCatInsertEvent from './_modules/selflist-crud/cat-curd/SecondoCatInsertEvent';
import TerzoCatInsertEvent from './_modules/selflist-crud/cat-curd/TerzoCatInsertEvent';

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
    // new MainCatInsertEventAjax();

    /**
     * CATEGORY RELATED CLASSES
     */
    // Category UI/UX
    new CatInsertUiParent();
    new MainCatInsertUi();
    new PrimoCatInsertUi();
    new SecondoCatInsertUi();
    new TerzoCatInsertUi();

    // Category Form Validation
    new CatFormValidationParent();
    new MainCatFormValidation();
    new PrimoCatFormValidation();
    new SecondoCatFormValidation();
    new TerzoCatFormValidation();

    // Category Insert Ajax
    new CatInsertEventAjaxParent();
    new MainCatInsertEvent();
    new PrimoCatInsertEvent();
    new SecondoCatInsertEvent();
    new TerzoCatInsertEvent();
  }

  runTestCode = () => {
    // new InsertPost();
    // new TestGetJson();
    // new FormValdationTest();
  };
}

const app = new App();
