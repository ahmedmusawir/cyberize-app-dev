import $ from 'jquery';
import ProfileDataToDbAjax from './ProfileDataToDbAjax';

class ProfileDataToIndexDb extends ProfileDataToDbAjax {
  constructor() {
    super();
    this.init();
  }

  init = () => {
    console.log('ProfileDataToDbAjax - Insert Social');
    // LOADING INITIAL DATA INTO INDX DB AS SOON AS THE PROFILE PAGE LOADS
    // This is mainly to keep the data handy in case there is no data update.
    // Data will be ready to be loaded into the List Insert Page automatically.

    // Contact Info Vars
    const name = this.contactName.text();
    const email = this.contactEmail.text();
    const phone = this.contactPhone.val();
    const site = this.contactWebsite.val();

    // Social Media URLs
    const facebook = this.socialFacebook.val();
    const yelp = this.socialYelp.val();
    const instagram = this.socialInstagram.val();
    const linkedin = this.socialLinkedin.val();
    const googlePlus = this.socialGooglePlus.val();
    const twitter = this.socialTwitter.val();

    // UNIT TESTNG Debugging Output
    console.log(`NAME: ${name}`);
    console.log(`PHONE: ${phone}`);
    console.log(`EMAIL: ${email}`);
    console.log(`WEBSITE: ${site}`);
    console.log(`FACEBOOK: ${facebook}`);
    console.log(`YELP: ${yelp}`);
    console.log(`INSTAGRAM: ${instagram}`);
    console.log(`LINKEDIN: ${linkedin}`);
    console.log(`GOOGLEPLUS: ${googlePlus}`);
    console.log(`TWITTER: ${twitter}`);
  };
}

export default ProfileDataToIndexDb;
