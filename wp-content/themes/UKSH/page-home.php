<?php /* Template Name: HomePage */

get_header(); ?>

<!--==========================
    Intro Section
  ============================-->
<section id="intro" class="content-area intro">
    <?php echo do_shortcode('[smartslider3 slider=2]') ?>
</section><!-- #intro -->

<main id="main">

<div class="body-border">
   <!--==========================
      Intro Section
    ============================-->
    <section class="IntroBottomSection">
      <div class="container">
        <div class="row">
          <div class="col-md-12 lightblueSection">
            <div class="introTextArea">
              <h2>Institute of Immunology</h2>
              <p>As one of the largest European health centers, the University Medical Centers Schleswig-Holstein (UKSH) has more than 80 clinics and institutes in which the experts work across disciplines for the health of the people entrusted to their care.</p>
            </div>  
          </div>
          <!-- <div class="col-md-4">
            <div class="introInfoArea lightblueSection">
             <ul>
             <li><span>320</span> staff, Students and academic visitors</li> 
             <li><span>20</span> Nationalities</li> 
             <li><span>50M+</span> in Reseach Income</li> 
             <ul>
            </div> 
          </div> -->
        </div>
      </div>
    </section>

    <!--==========================
      About Us Section
    ============================-->
    <section class="updatesSection">
      <div class="container">

        <div class="row">
          <div class="col-md-4 wow fadeInUp">
            <div class="newsBox">
            <h4>Select Publications</h4>
            <ul>
             <?php $query = new WP_Query('category_name=select-publications&showposts=5');
                    while ($query->have_posts()) :
                    $query->the_post(); ?>
              <li>
              <a href="<?php remove_filter ('the_content', 'wpautop'); the_content(); ?>" target="_blank"><?php the_title(); ?></a></a>
              <span><?php echo get_the_date(); ?></span>
              </li>
              <?php endwhile; ?> </ul>
            <a class="btnBG" href="<?php bloginfo('url');?>/?cat=4">All Publications</a>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="newsBox">
            <h4>Latest News</h4>
            <ul class="postList">
            <?php $query = new WP_Query('category_name=latestnews&showposts=4');
                    while ($query->have_posts()) :
                    $query->the_post(); ?>
             <li class="row mx-0">
               <div class="col-4 p-0"><span class="thumb"><a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a></span></div>
               <div class="col-8"><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a><span><?php echo get_the_date(); ?></span></span></div>
             </li>
             <?php endwhile; ?>
            </ul>
            <a class="btnBG" href="<?php bloginfo('url');?>/?cat=5">More News</a>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="newsBox eventList">
            <h4>Talks and Seminars</h4>
            <ul>
             <?php $query = new WP_Query('category_name=talks-and-seminars&showposts=4');
                    while ($query->have_posts()) :
                    $query->the_post(); ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <i class="date_icon"> <img src="<?php bloginfo('template_url'); ?>/img/date_icon.png" alt=""></i></a>
              <span><?php echo substr(strip_tags($post->post_content), 0, 200);?></span>
              <span><b><?php the_excerpt();?></b></span>
              </li>
              <?php endwhile; ?> </ul>
            <a class="btnBG" href="<?php bloginfo('url');?>/?cat=6">More Events</a>
            </div>
          </div>

        </div>

      </div>
    </section>

    


</main>
</div>
<!--==========================
      About Us Section
    ============================-->
    <section class="ContactSection">
      <div class="container">
        <h4 class="title">Approach</h4>
        <div class="row">
          <div class="col-md-6 wow fadeInUp">
           <div class="addresbox">
            <span>Campus Kiel</span>
            <img src="<?php bloginfo('template_url'); ?>/img/map.png"  class="img-fluid" alt="">
            <div class="address">
            <address>
                
            University Hospital Schleswig-Holstein <br>
                <strong>Campus Kiel</strong><br>
                Arnold-Heller-Strasse 3 <br>
                24105 Kiel<br>
            </address>
            <a href="">> Directions to the Campus</a>
            </div>
           </div>

        </div>

        <div class="col-md-6 wow fadeInUp">
          <div class="addresbox">
            <span>Map</span>
            <img src="<?php bloginfo('template_url'); ?>/img/map2.png"  class="img-fluid" alt="">
            <div class="address">
            <address>
            <address>
            Institute of Immunology<br>
            Arnold-Heller-Strabe<br>
            24105 Kiel <br>
            </address>
            <a href="">> Approach</a>
            </div>
           </div>
          </div>
      </div>
    </section>
<div>


<?php get_footer(); ?>
  
