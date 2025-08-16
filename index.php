<?php
get_header();
?>
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="<?php echo get_theme_file_uri()."/assets/img/hero-bg.jpg"?>" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <h2><?php display_first_user_name() ?></h2>
        <p>I'm <span class="typed" data-typed-items="<?php  display_the_taglines(); ?>"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo esc_html__( 'About', 'port' ); ?></h2>
        
       <p> <?php echo display_first_user_description();?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="<?php echo get_theme_file_uri()."/assets/img/my-profile-img.jpg"?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2><?php echo display_carbon_text_meta('crb_title')?></h2>
            <p class="fst-italic py-3"> <?php echo display_carbon_text_meta('crb_about_tagline');?></p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <?php if(carbon_get_theme_option('crb_birthday')):?><li><i class="bi bi-chevron-right"></i><strong>Birthday:</strong> <span><?php $raw_date = carbon_get_theme_option('crb_birthday'); if(!empty($raw_date)): $date = DateTime::createFromFormat('Y-m-d', $raw_date); echo $date->format('j F Y'); endif;?></span></li><?php endif;?>
                  <?php if(carbon_get_theme_option('crb_website_url')):?><li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?php echo carbon_get_theme_option('crb_website_url'); ?></span></li><?php endif;?>
                  <?php if(carbon_get_theme_option('crb_phone_number')):?><li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo carbon_get_theme_option('crb_phone_number'); ?></span></li><?php endif;?>
                  <?php if(carbon_get_theme_option('crb_city')):?><li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo carbon_get_theme_option('crb_city'); ?></span></li><?php endif;?>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <?php if(carbon_get_theme_option('crb_age')):?><li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo carbon_get_theme_option('crb_age');?></span></li><?php endif;?>
                  <?php if(carbon_get_theme_option('crb_degree')):?><li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo carbon_get_theme_option('crb_degree');?></span></li><?php endif;?>
                  <?php if(carbon_get_theme_option('crb_email')):?><li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo carbon_get_theme_option('crb_email');?></span></li><?php endif;?>
                  <?php if(carbon_get_theme_option('crb_freelance')):?><li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><?php echo carbon_get_theme_option('crb_freelance')?></span></li><?php endif;?>
                </ul>
              </div>
            </div>
            <?php if(carbon_get_theme_option('crb_description')):?>
            <p class="py-3">
              <?php echo carbon_get_theme_option('crb_description');?>
            </p>
            <?php endif;?>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->
 <?php $hide_content = carbon_get_theme_option('crb_hide_content'); if($hide_content != true):?>
    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <?php if(carbon_get_theme_option('crb_happy_clients')):?>
          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo esc_html__(carbon_get_theme_option('crb_happy_clients'),'port');?>" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong><?php echo esc_html__( 'Happy Clients', 'port' ); ?></strong> <span><?php echo esc_html__( 'consequuntur quae', 'port' ); ?></span></p>
            </div>
          </div><!-- End Stats Item -->
          <?php endif; if(carbon_get_theme_option('crb_happy_projects')):?>
          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo esc_html__(carbon_get_theme_option('crb_happy_projects'),'port');?>" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong><?php echo esc_html__( 'Projects', 'port' ); ?></strong> <span><?php echo esc_html__( 'adipisci atque cum quia aut', 'port' ); ?></span></p>
            </div>
          </div><!-- End Stats Item -->
          <?php endif; if(carbon_get_theme_option('crb_support')):?>
          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo esc_html__(carbon_get_theme_option('crb_support'),'port');?>" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong><?php echo esc_html__( 'Hours Of Support', 'port' ); ?></strong> <span><?php echo esc_html__( 'aut commodi quaerat', 'port' ); ?></span></p>
            </div>
          </div><!-- End Stats Item -->
          <?php endif; if(carbon_get_theme_option('crb_members')):?>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo esc_html__(carbon_get_theme_option('crb_members'),'port');?>" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong><?php echo esc_html__( 'Hard Workers', 'port' ); ?></strong> <span><?php echo esc_html__( 'rerum asperiores dolor', 'port' ); ?></span></p>
            </div>
          </div><!-- End Stats Item -->
          <?php endif;?>

        </div>

      </div>

    </section><!-- /Stats Section -->
    <?php endif; $hide_content = carbon_get_theme_option('crb_hide_skills'); if($hide_content != true):?>
    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo esc_html__( 'Skills', 'port' ); ?></h2>
         <?php echo display_the_widget('skill_ds');?>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">
            <?php echo display_first_part_skill_items();?>
          </div>
          <div class="col-lg-6">
            <?php echo display_second_part_skill_items();?>
          </div>          
        </div>
      </div>

    </section><!-- /Skills Section -->
<?php endif; $hide_resume = carbon_get_theme_option('crb_hide_resume'); if ($hide_resume !== true): $resume_summary = carbon_get_theme_option('crb_resume_sumary'); $summary = $resume_summary[0]; ?>
    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo esc_html__( 'Resume', 'port' ); ?></h2>
        <?php echo display_the_widget('resume_ds');?>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title"><?php echo esc_html__( 'Sumary', 'port' ); ?></h3>

            <div class="resume-item pb-0">
              <?php if($summary['crb_summary_title'] != " "):?>
              <h4><?php echo esc_html($summary['crb_summary_title']);?></h4>
              <?php endif; if($summary['crb_summary_description']): ?>
              <p><em><?php echo esc_html($summary['crb_summary_description']);?></em></p>
              <?php endif;?>
              <ul>
                <?php if($summary['crb_summary_address'] != " "): ?>
                <li><?php echo esc_html($summary['crb_summary_address']);?></li>
                <?php endif; if($summary['crb_summary_phone'] != " "): ?>
                <li><?php echo esc_html($summary['crb_summary_phone']);?></li>
                <?php endif; if($summary['crb_summary_email']):?>
                <li><?php echo esc_html($summary['crb_summary_email']);?></li>
                <?php endif;?>
              </ul>
            </div><!-- Edn Resume Item -->
            <h3 class="resume-title"><?php echo esc_html__( 'Education', 'port' ); ?></h3>
            <?php $education_entries = carbon_get_theme_option('crb_resume_education'); if (!empty($education_entries)): 
            foreach ($education_entries as $education):
            ?>
            <div class="resume-item">
              <?php if($education['crb_degree'] != " " ):?>
              <h4><?php echo esc_html($education['crb_degree']);?></h4>
              <?php endif; if($education['crb_degree_year'] != " " ):?>
              <h5><?php echo esc_html($education['crb_degree_year']); ?></h5>
              <?php endif; if($education['crb_degree_instutite']):?>
              <p><em><?php echo esc_html($education['crb_degree_instutite']);?></em></p>
              <?php endif; if($education['crb_degree_description'] != " "):?>
              <p><?php echo esc_html($education['crb_degree_description']);?></p>
              <?php endif;?>
            </div><!-- Edn Resume Item -->
            <?php endforeach; endif;?>
          </div>
          <?php $professional_entries = carbon_get_theme_option('crb_resume_professional'); if(!empty($professional_entries)):?>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <h3 class="resume-title"><?php echo esc_html__( 'Professional Experience', 'port' ); ?></h3>
          <?php foreach($professional_entries as $professional):?>
            <div class="resume-item">
              <?php if($professional['crb_professional_ex_title']): ?>
              <h4><?php echo esc_html($professional['crb_professional_ex_title']);?></h4>
              <?php endif; if($professional['crb_professional_ex_year']):?>
              <h5><?php echo esc_html($professional['crb_professional_ex_year']);?></h5>
              <?php endif; if($professional['crb_professional_ex_address']):?>
              <p><em><?php echo esc_html($professional['crb_professional_ex_address']);?></em></p>
              <?php endif; if($professional['crb_professional_ex_description']):
              echo wp_kses_post( $professional['crb_professional_ex_description'], true );
              endif;
              ?>
            </div><!-- Edn Resume Item -->
            <?php endforeach;?>
          </div>
          <?php endif;?>
        </div>
      </div>

    </section><!-- /Resume Section -->
    <?php endif; $port_query = new WP_Query(['post_type'=>'portfolio','post_status' => 'publish','posts_per_page' => -1]); if($port_query->have_posts()):?>
    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo esc_html__( 'Portfolio', 'port' ); ?></h2>
        <?php echo display_the_widget('portfolio_ds');?>
      </div><!-- End Section Title -->
      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <?php $terms = get_terms(['taxonomy'=>'portfolios_category', 'hide_empty'=>true]); if(!empty($terms) && !is_wp_error($terms)):?>
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <?php  foreach ($terms as $term):?>
            <li data-filter="<?php echo '.filter-'.esc_html($term->name);?>"><?php echo esc_html($term->name); ?></li>
            <?php endforeach;?>
          </ul><!-- End Portfolio Filters -->
          <?php endif;?>
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
          <?php while($port_query->have_posts()): $port_query->the_post();?>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?php echo prot_get_term_name();?>">
              <div class="portfolio-content h-100">
                <?php $gallaries = carbon_get_post_meta(get_the_ID(), 'crb_portfolio_gallery'); if(!empty($gallaries)):?>
                <img src="<?php echo wp_get_attachment_url($gallaries[0]);?>" class="img-fluid" alt="">
                <?php endif;?>
                <div class="portfolio-info">
                  <h4><?php echo prot_get_term_name();?></h4>
                  <p><?php the_title();?></p>
                  <?php foreach($gallaries as $gallary):?>
                  <a href="<?php echo wp_get_attachment_url($gallary);?>" title="<?php the_title();?>" data-gallery="<?php echo 'portfolio-gallery-'.get_the_ID();?>" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <?php endforeach;?>
                  <a href="<?php the_permalink();?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <?php endwhile;?>
          </div><!-- End Portfolio Container -->
        </div>

      </div>

    </section><!-- /Portfolio Section -->
    <?php wp_reset_postdata(); endif;?>
<?php $show_content = carbon_get_theme_option('crb_show_content'); if( $show_content == "yes"):?>
    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo esc_html__( 'Services', 'port' ); ?></h2>
        <?php echo display_the_widget('services_ds');?>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <?php $services =  carbon_get_theme_option('crb_services'); if(is_array($services)): foreach($services as $service):?>
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <?php $icon = $service['crb_bootstrap_icon']; if(!empty($icon)):?>
            <div class="icon flex-shrink-0"><?php echo wp_kses_post($icon);?></div>
            <?php endif;?>
            <div>
              <?php $service_title = $service['crb_service_title']; if(!empty($service_title)):?>
              <h4 class="title"><a href="<?php echo !empty($service['crb_service_page']) ? $service['crb_service_page'] : '#'; ?>" class="stretched-link"><?php echo wp_kses_post($service_title);?></a></h4>
              <?php endif; $service_description = $service['crb_service_description']; if(!empty($service_description)):?>
              <p class="description"><?php echo wp_kses_post($service_description);?></p>
              <?php endif;?>
            </div>
          </div>
          <?php endforeach; endif; ?>
          <!-- End Service Item -->
        </div>
      </div>
    </section><!-- /Services Section -->
    <?php endif;?>
<?php $show_content = carbon_get_theme_option('crb_show_testimonial_content'); if( $show_content == "yes"):?>
    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo esc_html__( 'Testimonials', 'port' ); ?></h2>
         <?php echo display_the_widget('testimonials_ds');?>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
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
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <?php $testimonials = carbon_get_theme_option('crb_testimonials'); if(is_array($testimonials)): foreach($testimonials as $testimonial):?>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <?php $comment = $testimonial['crb_testimonial_comment']; if(!empty($comment)):?>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span><?php echo $comment; ?></span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <?php endif;?>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->
            <?php endforeach; endif;?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->
<?php endif; $show_content = carbon_get_theme_option('crb_show_contact_content'); if( $show_content == "yes"): ?>
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo esc_html__( 'Contact', 'port' ); ?></h2>
         <?php echo display_the_widget('contact_ds');?>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <?php if ($address = carbon_get_theme_option("crb_address")):?>
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3><?php echo esc_html__("Address");?></h3>
                  <p><?php echo $address ?></p>
                </div>
              </div><!-- End Info Item -->
              <?php endif; if ($phone = carbon_get_theme_option("crb_call")):?>

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3><?php echo esc_html__("Call Us")?></h3>
                  <p><?php echo $phone;?></p>
                </div>
              </div><!-- End Info Item -->
              <?php endif; if($email = carbon_get_theme_option("crb_contact_email")):?>

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3><?php echo esc_html__("Email Us")?></h3>
                  <p><?php echo $email;?></p>
                </div>
              </div><!-- End Info Item -->
              <?php endif; if($map = carbon_get_theme_option("crb_embed_map")):?>
              <?php echo $map;  endif;?>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->
    <?php endif;?>

  </main>

  <?php get_footer();?>