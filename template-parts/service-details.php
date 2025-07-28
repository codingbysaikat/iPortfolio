<?php
/*
Template Name: Service page
*/
get_header();
?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Service Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Service Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
              <a href="#" class="active">Web Design</a>
              <a href="#">Software Development</a>
              <a href="#">Product Management</a>
              <a href="#">Graphic Design</a>
              <a href="#">Marketing</a>
            </div>
            <?php
             if(is_active_sidebar('service_page-deatils')):
               dynamic_sidebar( 'service_page-deatils' );
             endif;
            ?>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
            <h3><?php the_title();?></h3>
            <?php the_content();?>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>
<?php get_footer();?>