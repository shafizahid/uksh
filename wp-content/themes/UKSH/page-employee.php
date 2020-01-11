<?php /* Template Name: Research */

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
              <?php $query = new WP_Query('page_id=22'); 
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
              <header class="entry-header">
              <h1 class="entry-title">Management</h1>
              </header>
              <div class="col-12">
                <div class="row  management-box">
                  <div class="col-4 p-0 manage-userBox">
                    <h3>Head of the institution</h3>
                    <div class="detailBox">
                      <div class="db-img">
                        <img src="http://localhost/uksh/wp-content/uploads/2019/11/Screenshot_1.png" alt="">
                      </div>
                      <div class="db-text">
                        <h4>Profesor</h4>
                        <span class="InstitudeDept">institute of Immunology</span>
                        <span class="db_postion">Director</span>
                        <span class="db_telephone">Telephone Keel: 00000000</span>
                        <span class="db_contact">>Email >Website</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 p-0 manage-userBox">
                    <h3>Head of the institution</h3>
                    <div class="detailBox">
                      <div class="db-img">
                        <img src="http://localhost/uksh/wp-content/uploads/2019/11/Screenshot_1.png" alt="">
                      </div>
                      <div class="db-text">
                        <h4>Profesor</h4>
                        <span class="InstitudeDept">institute of Immunology</span>
                        <span class="db_postion">Director</span>
                        <span class="db_telephone">Telephone Keel: 00000000</span>
                        <span class="db_contact">>Email >Website</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 p-0 manage-userBox">
                    <h3>Head of the institution</h3>
                    <div class="detailBox">
                      <div class="db-img">
                        <img src="http://localhost/uksh/wp-content/uploads/2019/11/Screenshot_1.png" alt="">
                      </div>
                      <div class="db-text">
                        <h4>Profesor</h4>
                        <span class="InstitudeDept">institute of Immunology</span>
                        <span class="db_postion">Director</span>
                        <span class="db_telephone">Telephone Keel: 00000000</span>
                        <span class="db_contact">>Email >Website</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            </div> 

            <div class="row">
            <div class="col-md-12 p-0">
                <!-- <h2>Tabs</h2> -->
                <ul id="tabsJustified" class="nav nav-tabs">
                    <li class="nav-item"><a href="" data-target="#student" data-toggle="tab" class="nav-link small active">Student</a></li>
                    <li class="nav-item"><a href="" data-target="#research" data-toggle="tab" class="nav-link small ">Research Staff</a></li>
                    <li class="nav-item"><a href="" data-target="#administration" data-toggle="tab" class="nav-link small ">Administration</a></li>
               </ul>
                <br>
                <div id="tabsJustifiedContent" class="tab-content membersTab">
                  <div id="student" class="tab-pane fade active show">
                  <div class="row">
                  <?php $query = new WP_Query('cat=11&showposts=6'); 
                  while ( $query->have_posts() ) : $query->the_post(); ?>  
                  <div class="col-md-3 memberBox">
                    <div class="row">
                      <div class="col-md-4">
                      <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
                      </div>
                      <div class="col-md-8">
                      <div class="second-section-right">
                      <a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
                      <div><?php echo substr(strip_tags($post->post_content), 0, 200);?></div>
                      <!-- <a href="<?php //the_permalink(); ?>">> Continue to the Working Group</a> -->
                       </div>
                      </div>

                    </div>
                    </div>
                    
                    <?php endwhile; ?>
                  </div>

                  </div>
                  <div id="research" class="tab-pane fade">
                  <div class="row">
                  <?php $query = new WP_Query('cat=10&showposts=6'); 
                  while ( $query->have_posts() ) : $query->the_post(); ?>  
                  <div class="col-md-3 memberBox">
                    <div class="row">
                      <div class="col-md-4">
                      <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
                      </div>
                      <div class="col-md-8">
                      <div class="second-section-right">
                      <a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
                      <div><?php echo substr(strip_tags($post->post_content), 0, 200);?></div>
                      <!-- <a href="<?php //the_permalink(); ?>">> Continue to the Working Group</a> -->
                       </div>
                      </div>

                    </div>
                    </div>
                    
                    <?php endwhile; ?>
                  </div>
                  </div>
                  <div id="administration" class="tab-pane fade">
                  <div class="row">
                  <?php $query = new WP_Query('cat=12&showposts=6'); 
                  while ( $query->have_posts() ) : $query->the_post(); ?>  
                  <div class="col-md-3 memberBox">
                    <div class="row">
                      <div class="col-md-4">
                      <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
                      </div>
                      <div class="col-md-8">
                      <div class="second-section-right">
                      <a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
                      <div><?php echo substr(strip_tags($post->post_content), 0, 200);?></div>
                      <!-- <a href="<?php //the_permalink(); ?>">> Continue to the Working Group</a> -->
                       </div>
                      </div>

                    </div>
                    </div>
                    
                    <?php endwhile; ?>
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
  
