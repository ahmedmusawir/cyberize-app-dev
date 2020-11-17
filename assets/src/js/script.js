import SelflistSearch from './_modules/SelflistSearch';
import SelflistCatSearch from './_modules/SelflistCatSearch';
import SelflistPostSearch from './_modules/SelflistPostSearch';
import SelflistMainCatInsertUI from './_modules/SelflistMainCatInsertUI';
import SelflistPrimoCatInsertUI from './_modules/SelflistPrimoCatInsertUI';
import SelflistSecondoCatInsertUI from './_modules/SelflistSecondoCatInsertUI';
import SelflistTerzoCatInsertUI from './_modules/SelflistTerzoCatInsertUI';
import CatInsertDataParent from './_modules/selflist-crud/CatInsertDataParent';
import CatSelectionEvents from './_modules/selflist-crud/CatSelectionEvents';
import CatInsertEvents from './_modules/selflist-crud/CatInsertEvents';
// TEST CODE HERE
import InsertPost from './_modules/_test/insertPost';
import TestGetJson from './_modules/_test/testGetJson';
import ListInsertEvents from './_modules/selflist-crud/ListInsertEvents';

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

    // Selflist Insert Main Category UI - List Insert Page
    new SelflistMainCatInsertUI();
    // Selflist Insert Primo Category UI - List Insert Page
    new SelflistPrimoCatInsertUI();
    // Selflist Insert Secondo Category UI - List Insert Page
    new SelflistSecondoCatInsertUI();
    // Selflist Insert Terzo Category UI - List Insert Page
    new SelflistTerzoCatInsertUI();

    // SELFLIST LIST INSERT PAGE CAT DROPDOWNS
    new CatInsertDataParent();
    new CatSelectionEvents();
    // LIST INSERT PAGE MAIN POST INSERT EVENTS
    new ListInsertEvents();
    // LIST INSERT PAGE CAT INSERT EVENTS
    // new CatInsertEvents();
  }

  runTestCode = () => {
    // new InsertPost();
    // new TestGetJson();
  }
}

const app = new App();
