<?php
/**
 * The template for displaying all pages
 * Template Name: JSON Category Search Index
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyberize-app-dev
 */

if (is_user_logged_in()) {
    get_header();
} else {
    get_header('loggedout');
}
?>

<div id="primary" class="site-main container pt-5">

  <!-- <hr> -->

  <section id="selflist-search-input-box" class="selflist-search-input-box">

    <input type="text" id="cat-search-input-json" class="selflist-search-input">
    <i class="fas fa-search"></i>

  </section>


  <div id="category-search-json-result" class="card-columns">
    <a href="http://selflist-dev.local/category/app-dev/">
      <div class="card card-moose border-danger mb-3 animate__animated animate__zoomIn">
        <div class="card-header bg-danger">
          <span class="text-light">App Dev</span>
          <span class="badge badge-pill badge-light">
            4
          </span>
        </div>

        <div class="card-body text-danger">
          <ul class="primo">
            <li class="primo-item">
              <a href="http://selflist-dev.local/category/app-dev/easy/" class="btn btn-outline-danger btn-sm">&nbsp;
                Easy
                <span class="badge badge-pill badge-dark">2</span>
              </a>
            </li>

            <ul class="secondo">
              <li>
                <a href="http://selflist-dev.local/category/app-dev/easy/web-app/"
                  class="btn btn-outline-danger btn-sm">&nbsp;
                  Web App
                  <span class="badge badge-pill badge-dark">2</span>
                </a>
              </li>
            </ul>

            <div class="card-body text-danger">
              <ul class="primo">
                <li class="primo-item">
                  <a href="http://selflist-dev.local/category/app-dev/hard/"
                    class="btn btn-outline-danger btn-sm">&nbsp;
                    Hard
                    <span class="badge badge-pill badge-dark">1</span>
                  </a>
                </li>

                <ul class="secondo">
                  <li>
                    <a href="http://selflist-dev.local/category/app-dev/hard/desktop-application/"
                      class="btn btn-outline-danger btn-sm">&nbsp;
                      Desktop Application
                      <span class="badge badge-pill badge-dark">1</span>
                    </a>
                  </li>
                </ul>

                <ul class="terzo">
                  <li>
                    <a href="http://selflist-dev.local/category/app-dev/hard/desktop-application/jackson-heights-hard/"
                      class="btn btn-outline-danger btn-sm">&nbsp;
                      JACKSON HEIGHTS
                      <span class="badge badge-pill badge-dark">1</span>
                    </a>
                  </li>
                </ul>

              </ul> <!-- end of primo -->
            </div> <!-- end of card-body -->
        </div> <!-- end of card -->
      </div> <!-- end of card -->
    </a>

    <a href="https://selflist-dev.cyberizepartners.com/category/app-dev/">

      <div class="card card-moose border-danger mb-3 animate__animated animate__zoomIn">
        <!-- <div class="card border-danger mb-3 animate__animated"> -->
        <div class="card-header bg-danger">
          <span class="text-light">List Count:</span>
          <span class="badge badge-pill badge-light">
            4</span>
        </div>


        <div class="card-body text-danger">
          <h5 class="card-title text-danger">App Dev</h5>
          <section class="">
            <div class="">
              <ul class="primo">

                <li class="primo-item"><a href="https://selflist-dev.cyberizepartners.com/category/app-dev/easy/"
                    class="btn btn-outline-danger btn-sm">&nbsp;Easy<span class="badge badge-pill badge-dark">2</span>
                  </a></li>
                <ul class="secondo">
                  <li><a href="https://selflist-dev.cyberizepartners.com/category/app-dev/easy/web-app/"
                      class="btn btn-outline-danger btn-sm">&nbsp;Web App<span
                        class="badge badge-pill badge-dark">2</span>
                    </a></li>
                </ul>
                <li class="primo-item"><a href="https://selflist-dev.cyberizepartners.com/category/app-dev/hard/"
                    class="btn btn-outline-danger btn-sm">&nbsp;Hard<span class="badge badge-pill badge-dark">1</span>
                  </a></li>
                <ul class="secondo">
                  <li><a href="https://selflist-dev.cyberizepartners.com/category/app-dev/hard/desktop-application/"
                      class="btn btn-outline-danger btn-sm">&nbsp;Desktop Application<span
                        class="badge badge-pill badge-dark">1</span>
                    </a></li>
                </ul>
                <ul class="terzo">
                  <li><a
                      href="https://selflist-dev.cyberizepartners.com/category/app-dev/hard/desktop-application/jackson-heights-hard/"
                      class="btn btn-outline-danger btn-sm">&nbsp;JACKSON HEIGHTS<span
                        class="badge badge-pill badge-dark">1</span>
                    </a></li>
                </ul>
              </ul>
            </div>
          </section>
        </div>

      </div> <!-- END of card -->

    </a>
    <a href="https://selflist-dev.cyberizepartners.com/category/app-dev/">

      <div class="card card-moose border-danger mb-3 animate__animated animate__zoomIn">
        <!-- <div class="card border-danger mb-3 animate__animated"> -->
        <div class="card-header bg-danger">
          <span class="text-light">List Count:</span>
          <span class="badge badge-pill badge-light">
            4</span>
        </div>


        <div class="card-body text-danger">
          <h5 class="card-title text-danger">App Dev</h5>
          <section class="">
            <div class="">
              <ul class="primo">

                <li class="primo-item"><a href="https://selflist-dev.cyberizepartners.com/category/app-dev/easy/"
                    class="btn btn-outline-danger btn-sm">&nbsp;Easy<span class="badge badge-pill badge-dark">2</span>
                  </a></li>
                <ul class="secondo">
                  <li><a href="https://selflist-dev.cyberizepartners.com/category/app-dev/easy/web-app/"
                      class="btn btn-outline-danger btn-sm">&nbsp;Web App<span
                        class="badge badge-pill badge-dark">2</span>
                    </a></li>
                </ul>
                <li class="primo-item"><a href="https://selflist-dev.cyberizepartners.com/category/app-dev/hard/"
                    class="btn btn-outline-danger btn-sm">&nbsp;Hard<span class="badge badge-pill badge-dark">1</span>
                  </a></li>
                <ul class="secondo">
                  <li><a href="https://selflist-dev.cyberizepartners.com/category/app-dev/hard/desktop-application/"
                      class="btn btn-outline-danger btn-sm">&nbsp;Desktop Application<span
                        class="badge badge-pill badge-dark">1</span>
                    </a></li>
                </ul>
                <ul class="terzo">
                  <li><a
                      href="https://selflist-dev.cyberizepartners.com/category/app-dev/hard/desktop-application/jackson-heights-hard/"
                      class="btn btn-outline-danger btn-sm">&nbsp;JACKSON HEIGHTS<span
                        class="badge badge-pill badge-dark">1</span>
                    </a></li>
                </ul>
              </ul>
            </div>
          </section>
        </div>

      </div> <!-- END of card -->

    </a>
    <a href="https://selflist-dev.cyberizepartners.com/category/app-dev/">

      <div class="card card-moose border-danger mb-3 animate__animated animate__zoomIn">
        <!-- <div class="card border-danger mb-3 animate__animated"> -->
        <div class="card-header bg-danger">
          <span class="text-light">List Count:</span>
          <span class="badge badge-pill badge-light">
            4</span>
        </div>


        <div class="card-body text-danger">
          <h5 class="card-title text-danger">App Dev</h5>
          <section class="">
            <div class="">
              <ul class="primo">

                <li class="primo-item"><a href="https://selflist-dev.cyberizepartners.com/category/app-dev/easy/"
                    class="btn btn-outline-danger btn-sm">&nbsp;Easy<span class="badge badge-pill badge-dark">2</span>
                  </a></li>
                <ul class="secondo">
                  <li><a href="https://selflist-dev.cyberizepartners.com/category/app-dev/easy/web-app/"
                      class="btn btn-outline-danger btn-sm">&nbsp;Web App<span
                        class="badge badge-pill badge-dark">2</span>
                    </a></li>
                </ul>
                <li class="primo-item"><a href="https://selflist-dev.cyberizepartners.com/category/app-dev/hard/"
                    class="btn btn-outline-danger btn-sm">&nbsp;Hard<span class="badge badge-pill badge-dark">1</span>
                  </a></li>
                <ul class="secondo">
                  <li><a href="https://selflist-dev.cyberizepartners.com/category/app-dev/hard/desktop-application/"
                      class="btn btn-outline-danger btn-sm">&nbsp;Desktop Application<span
                        class="badge badge-pill badge-dark">1</span>
                    </a></li>
                </ul>
                <ul class="terzo">
                  <li><a
                      href="https://selflist-dev.cyberizepartners.com/category/app-dev/hard/desktop-application/jackson-heights-hard/"
                      class="btn btn-outline-danger btn-sm">&nbsp;JACKSON HEIGHTS<span
                        class="badge badge-pill badge-dark">1</span>
                    </a></li>
                </ul>
              </ul>
            </div>
          </section>
        </div>

      </div> <!-- END of card -->

    </a>






  </div> <!-- #main -->

  <?php
get_footer();