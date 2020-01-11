<?php /* Template Name: Teacher */

get_header(); ?>


<main id="main">

<div class="research">
    <!--==========================
      First Section
    ============================-->
    <main id="main" class="site-main" role="main">
    <section class="first-section wow fadeIn"  data-aos="fade-up" data-aos-duration="750" data-aos-once="true" data-aos-offset="100">
        <div class="container"> 
            <div class="row">
              <div class="col-md-12 p-0">
              <?php $query = new WP_Query('page_id=18'); 
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
                    <li class="nav-item"><a href="" data-target="#one" data-toggle="tab" class="nav-link small active">Courses immunology</a></li>
                    <li class="nav-item"><a href="" data-target="#two" data-toggle="tab" class="nav-link small">Molecular Immunology Lecture</a></li>
                    <li class="nav-item"><a href="" data-target="#three" data-toggle="tab" class="nav-link small">Basic Immunology Lecture</a></li>
                 </ul>
                <br>
                <div id="tabsJustifiedContent" class="tab-content membersTab">
                  <div id="one" class="tab-pane fade active show">
                  <div class="row">
                  <?php $query = new WP_Query('cat=13&showposts=6'); 
                  while ( $query->have_posts() ) : $query->the_post(); ?>  
                  <div class="col-md-12 memberBox">
                    <div class="row">
                      <div class="col-md-12">
                      <div class="second-section-right">
                      <a href="<?php remove_filter ('the_content', 'wpautop'); the_content(); ?>" target="_blank"><h6><?php the_title(); ?></h6></a> 
                      <div><?php echo the_excerpt();?></div>
                      <div><?php //echo substr(strip_tags($post->post_content), 0, 200);?></div>
                      <!-- <a href="<?php //the_permalink(); ?>">> Continue to the Working Group</a> -->
                       </div>
                      </div>

                    </div>
                    </div>
                    
                    <?php endwhile; ?>
                  </div>

                  </div>
                  <div id="two" class="tab-pane fade">
                  <div class="row">
                    <div class="col-md-12 p-0">
                    <?php $query = new WP_Query('page_id=260'); 
                      while ( $query->have_posts() ) : $query->the_post(); ?>  
                    <header class="entry-header">
                    <!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->
                    </header>
                    <div class="first-section-left">
                    <?php the_content(); ?>
                    </div>
                    <?php endwhile; ?>
                  </div> 
                  </div> 
                  </div>
                  <div id="three" class="tab-pane fade">
                  <div class="row">
                    <div class="col-md-12 p-0">
                    <?php $query = new WP_Query('page_id=257'); 
                      while ( $query->have_posts() ) : $query->the_post(); ?>  
                    <header class="entry-header">
                    <!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->
                    </header>
                    <div class="first-section-left">
                    <?php the_content(); ?>
                    </div>
                    <?php endwhile; ?>
                  </div> 
                  </div> 
                  </div>
                </div>
            </div>
        </div>
         </div> 
      </section>
  </div>

    


</main>



<?php get_footer(); ?>
  
