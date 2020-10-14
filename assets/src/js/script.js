import SelflistSearch from './_modules/SelflistSearch';
import SelflistCatSearch from './_modules/SelflistCatSearch';
import SelflistPostSearch from './_modules/SelflistPostSearch';
import SelflistCatInsertUI from './_modules/SelflistCatInsertUI';
import SelflistMainCatInsertUI from './_modules/SelflistMainCatInsertUI';
import SelflistPrimoCatInsertUI from './_modules/SelflistPrimoCatInsertUI';
import SelflistSecondoCatInsertUI from './_modules/SelflistSecondoCatInsertUI';
import SelflistTerzoCatInsertUI from './_modules/SelflistTerzoCatInsertUI';

class App {
  constructor() {
    console.info('ES6 Script Initialized!');

    // Selflist Search Module
    new SelflistSearch();
    // Selflist Category Search Filter - non REST
    new SelflistCatSearch();
    // Selflist Post Item Search Filter - non REST
    new SelflistPostSearch();
    // ORIGINAL: Selflist Insert Category UI - List Insert Page
    // new SelflistCatInsertUI();

    // Selflist Insert Main Category UI - List Insert Page
    new SelflistMainCatInsertUI();
    // Selflist Insert Primo Category UI - List Insert Page
    new SelflistPrimoCatInsertUI();
    // Selflist Insert Secondo Category UI - List Insert Page
    new SelflistSecondoCatInsertUI();
    // Selflist Insert Terzo Category UI - List Insert Page
    new SelflistTerzoCatInsertUI();
  }
}

const app = new App();
