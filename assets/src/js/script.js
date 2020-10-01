import SelflistSearch from './_modules/SelflistSearch';
import SelflistCatSearch from './_modules/SelflistCatSearch';
import SelflistPostSearch from './_modules/SelflistPostSearch';
import SelflistCatInsertUI from './_modules/SelflistCatInsertUI';

class App {
  constructor() {
    console.info('ES6 Script Initialized!');

    // Selflist Search Module
    new SelflistSearch();
    // Selflist Category Search Filter - non REST
    new SelflistCatSearch();
    // Selflist Post Item Search Filter - non REST
    new SelflistPostSearch();
    // Selflist Insert Category UI - List Insert Page
    new SelflistCatInsertUI();
  }
}

const app = new App();
