<?php /* Template Name: HomePage */

get_header(); ?>


<main id="main">
<!--==========================
      About Us Section
    ============================-->
    <section class="category-working-groups page">
      <?php if (is_category('working-groups')) : ?>
		<main id="main" class="site-main" role="main">
    <section class="first-section wow fadeIn"  data-aos="fade-up" data-aos-duration="750" data-aos-once="true" data-aos-offset="100">
        <div class="container"> 
            <div class="row">
              <div class="col-md-12 p-0">
              <?php $query = new WP_Query('page_id=16'); 
                while ( $query->have_posts() ) : $query->the_post(); ?>  
              <header class="entry-header">
              <h1 class="entry-title"><?php the_title(); ?></h1>
              </header>
              <div class="first-section-left">
              <?php the_content(); ?>
              </div>
              <?php endwhile; ?>
            </div> 
            </div> 

            <div class="row">
            <div class="col-md-12 p-0">
                <!-- <h2>Tabs</h2> -->
                <ul id="tabsJustified" class="nav nav-tabs">
                    <li class="nav-item"><a href="" data-target="#workingroup" data-toggle="tab" class="nav-link small text-uppercase active">Working Groups</a></li>
                    <li class="nav-item"><a href="" data-target="#current" data-toggle="tab" class="nav-link small text-uppercase">Current</a></li>
                 </ul>
                <br>
                <div id="tabsJustifiedContent" class="tab-content membersTab">
                  <div id="workingroup" class="tab-pane fade active show">
                  <h2>Working Groups</h2>
                  <div class="row">
                  <?php $query = new WP_Query('cat=7&showposts=6'); 
                  while ( $query->have_posts() ) : $query->the_post(); ?>  
                  <div class="col-md-4 memberBox">
                    <div class="row">
                      <div class="col-md-4">
                      <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
                      </div>
                      <div class="col-md-8">
                      <div class="second-section-right">
                      <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                      <div><?php //echo substr(strip_tags($post->post_content), 0, 200);?></div>
                      <a href="<?php the_permalink(); ?>">> Continue to the Working Group</a>
                       </div>
                      </div>

                    </div>
                    </div>
                    
                    <?php endwhile; ?>
                  </div>

                  </div>
                  <div id="current" class="tab-pane fade">
                  <h2>Current</h2>
                  </div>
                </div>
            </div>
        </div>
         </div> 
      </section>
  </div>

    


</main>
      <?php endif; ?>
    </section> </div>
<div>


<?php get_footer(); ?>
  
