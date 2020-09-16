import SelflistSearch from './_modules/SelflistSearch';
import SelflistCatSearch from './_modules/SelflistCatSearch';
import SelflistPostSearch from './_modules/SelflistPostSearch';

class App {
  constructor() {
    console.info('ES6 Script Initialized!');

    // Selflist Search Module
    new SelflistSearch();
    // Selflist Category Search Filter - non REST
    new SelflistCatSearch();
    // Selflist Post Item Search Filter - non REST
    new SelflistPostSearch();
  }
}

const app = new App();
