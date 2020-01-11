<?php /* Template Name: Cytometry */

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
              <?php $query = new WP_Query('page_id=27'); 
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
            	<?php $query = new WP_Query('category_name=cytometry&showposts=4&order=ASC');
                    while ($query->have_posts()) :
                    $query->the_post(); ?>
                     <div class="col-md-3 pl-0 memberBox">
               <div class="productbox">
               	<div class="entry-content">
                <h4><?php the_title();?></h4>
                <button type="button" data-toggle="modal" data-target="#table1">
                <?php the_post_thumbnail(); ?></button>
                  <!-- Modal -->
                <div id="table1" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <?php the_content();?>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
           </div>
               </div>
             <?php endwhile; ?>
        </div>
         </div> 

      </section>
  </div>

    


<!-- Modal -->
<div id="table2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <?php $query = new WP_Query('p=187'); 
          while ( $query->have_posts() ) : $query->the_post(); ?>  
        <?php the_post_thumbnail(); ?>
        <?php endwhile; ?>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="table3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <?php $query = new WP_Query('p=195'); 
          while ( $query->have_posts() ) : $query->the_post(); ?>  
        <?php the_post_thumbnail(); ?>
        <?php endwhile; ?>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="table4" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <?php $query = new WP_Query('p=199'); 
          while ( $query->have_posts() ) : $query->the_post(); ?>  
        <?php the_post_thumbnail(); ?>
        <?php endwhile; ?>
      </div>
    </div>

  </div>
</div>


</main>



<?php get_footer(); ?>
  
