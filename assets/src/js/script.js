import SelflistSearch from './_modules/SelflistSearch';
import SelflistCatSearch from './_modules/SelflistCatSearch';
import SelflistPostSearch from './_modules/SelflistPostSearch';
import SelflistMainCatInsertUI from './_modules/SelflistMainCatInsertUI';
import SelflistPrimoCatInsertUI from './_modules/SelflistPrimoCatInsertUI';
import SelflistSecondoCatInsertUI from './_modules/SelflistSecondoCatInsertUI';
import SelflistTerzoCatInsertUI from './_modules/SelflistTerzoCatInsertUI';
import CatInsertDataParent from './_modules/selflist-crud/cat-dropdowns/CatInsertDataParent';
import CatInsertEvents from './_modules/selflist-crud/cat-dropdowns/CatInsertEvents';
// TEST CODE HERE
import InsertPost from './_modules/_test/insertPost';
import TestGetJson from './_modules/_test/testGetJson';

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

    // SELFLIST CAT INSERT DROPDOWNS
    new CatInsertDataParent();
    new CatInsertEvents();
  }

  runTestCode = () => {
    // new InsertPost();
    // new TestGetJson();
  }
}

const app = new App();
