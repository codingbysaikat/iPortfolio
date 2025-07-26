 <?php get_header();?>
 <main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Portfolio Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?php echo site_url();?>"><?php echo esc_html__('Home');?></a></li>
            <li class="current"><?php echo esc_html__('Portfolio Details');?></li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-8">
            <?php $galleries = carbon_get_post_meta(get_the_ID(), 'crb_portfolio_gallery'); if(!empty($galleries)):?>
            <div class="portfolio-details-slider swiper init-swiper">

              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">
                <?php foreach ($galleries as $gallary): $image_url = wp_get_attachment_url($gallary, 'medium');?>
                <div class="swiper-slide">
                  <img src="<?php echo $image_url?>" alt="">
                </div>
                <?php endforeach;?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <?php endif;?>
          </div>


          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3><?php echo esc_html__('Project information');?></h3>
              <ul>
                <li><strong><?php echo esc_html__('Category : ')?></strong> Web design</li>
                <?php if(!empty(carbon_get_post_meta( get_the_ID(), 'crb_client' ))):?>
                <li><strong><?php echo esc_html__('Client : ')?></strong> <?php echo carbon_get_post_meta( get_the_ID(), 'crb_client' );?></li>
                <?php endif; if(!empty(carbon_get_post_meta( get_the_ID(), 'crb_project_date' ))):?>
                <li><strong><?php echo esc_html__('Project date : ');?></strong><?php echo carbon_get_post_meta( get_the_ID(), 'crb_project_date' ) ;?></li>
                <?php endif; if(!empty(carbon_get_post_meta( get_the_ID(), 'crb_project_url' ))):?>
                <li><strong><?php echo esc_html__('Project URL : ')?></strong> <a href="#"><?php echo  carbon_get_post_meta( get_the_ID(), 'crb_project_url' );?></a></li>
                <?php endif;?>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2><?php the_title();?></h2>
              <?php the_content();?>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>
<?php get_footer();?>