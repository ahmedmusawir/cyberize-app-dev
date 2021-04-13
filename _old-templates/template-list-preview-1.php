<?php
/**
 * The template for displaying all pages
 * Template Name: List Preview
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyberize-app-dev
 */

get_header();
?>
<header id="header-list-preview" class="site-header container py-2 text-center">

  <figure class="logo-container">

    <!-- <a href="/list-index" class="list-links display-4 d-block">LISTINGS</a> -->

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img class="mx-auto d-block w-25 mt-4" src="/wp-content/uploads/2020/07/SelfListLogo.png" alt="">
    </a>

  </figure>

</header><!-- #masthead -->
<hr>

<section class="category">
  <main id="list-preview" class="site-main container category">

    <article id="post-481"
      class="post-item animate__animated post-481 post type-post status-publish format-standard hentry category-app-dev category-atlanta category-easy category-web-app">
      <header class="entry-header">

        <section class="post-item-cat-list"><a href="http://selflist-dev.local/category/app-dev/"
            title="Top Category">App
            Dev</a>&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;
          <a href="http://selflist-dev.local/category/app-dev/easy/" title="Child of App Dev">Easy</a>&nbsp;<i
            class="fas fa-arrow-right"></i>&nbsp;
          <a href="http://selflist-dev.local/category/app-dev/easy/web-app/" title="Child of App Dev -> Easy">Web
            App</a>&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;
          <a href="http://selflist-dev.local/category/app-dev/easy/web-app/atlanta/"
            title="Child of AppDev -> Easy -> WebApp">Atlanta</a>&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;
        </section>
        <div class="entry-meta">
          <span class="posted-on"> <time class="entry-date published" datetime="2021-01-14T03:09:33+00:00">January 14,
              2021</time></span>
        </div><!-- .entry-meta -->
      </header><!-- .entry-header -->


      <div id="post-content" class="entry-content">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
          dolore magna This is 140 charac</p>
      </div><!-- .entry-content -->

      <footer class="entry-footer">
        <section class="flex-icon-five">

          <div class="flex-icon-item">
            <a href="#">
              <img title="Your Facebook Page" src="/wp-content/uploads/fb-icon.png" alt="Facebook Link">
            </a>
          </div>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Your Twitter Page" src="/wp-content/uploads/Twitter-Icon.png" alt="Twitter Link">
            </a>
          </div>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Your Yelp Page" src="/wp-content/uploads/Yelp-icon.png" alt="Yelp Link">
            </a>
          </div>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Your Instagram Page" src="/wp-content/uploads/Instagram-icon.png" alt="Instagram Link">
            </a>
          </div>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Your Linkedin Page" src="/wp-content/uploads/Linkedin-Icon.png" alt="Linkedin Link">
            </a>
          </div>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Your Google Plus Page" src="/wp-content/uploads/Google-icon.png" alt="Google Plus Link">
            </a>
          </div>

        </section>

        <section class="flex-icon-five">

          <div class="flex-icon-item">
            <a href="tel:404-321-1234">
              <img title="Phone: 404-321-1234" src="/wp-content/uploads/Cell-icon.png" alt="Phone Number">
            </a>
          </div>
          <div class="flex-icon-item">
            <a href="mailto:webmaster@example.com">
              <img title="your@email.com" src="/wp-content/uploads/Email-icon.png" alt="Email Address">
            </a>
          </div>
          <div class="flex-icon-item">
            <a href="#">
              <img title="http://website.com" src="/wp-content/uploads/Website-icon.png" alt="Website Link">
            </a>
          </div>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Hit Me Up" src="/wp-content/uploads/HMU-icon.png" alt="HMU Link">
            </a>
          </div>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Your Chat Page" src="/wp-content/uploads/Instant-Messaging-icon.png" alt="Chat Link">
            </a>
          </div>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Flag This List" src="/wp-content/uploads/Screen-Shot-2021-01-26-at-1.50.39-PM.png"
                alt="Flag Link">
            </a>
          </div>

        </section>

      </footer><!-- .entry-footer -->
    </article>

  </main><!-- #main -->

</section>

<section id="test-ajax-data" class="p-5 bg-light"></section>

<?php
get_footer();