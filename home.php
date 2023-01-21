<?php
/* 
Template Name: home
*/
?>


    <?php get_header("header.php") ?>
    
    <main class="main">
      <section class="main__guests container-1440">
        <div class="main__guests__content container"><img src="<?php bloginfo('template_url');?>/assets/img/icon/decorations_2.png">
          <h4><?php the_field('special_guests_title_text_h4', 18);?></h4>
          <p><?php the_field('special_guests_text_p', 18);?> </p>
        </div>
      </section>
      <section class="main__new">
        <div class="main__new__content container">
          <div class="main__new_col"><img src="<?php bloginfo('template_url');?>/assets/img/icon/decorations_3.png">
            <h6><?php the_field('new_title_text_h4_left', 18);?></h6>
            <p><?php the_field('new_text_p_left', 18);?></p>
          </div>
          <div class="main__new_col"><img src="<?php bloginfo('template_url');?>/assets/img/icon/decorations_3.png">
            <h6><?php the_field('new_title_text_h4_middle', 18);?></h6>
            <p><?php the_field('new_text_p_middle', 18);?></p>
          </div>
          <div class="main__new_col"><img src="<?php bloginfo('template_url');?>/assets/img/icon/decorations_3.png">
            <h6><?php the_field('new_title_text_h4_right', 18);?></h6>
            <p><?php the_field('new_text_p_right', 18);?></p>
          </div>
        </div>
      </section>
      <section class="main__priorities container-1440">
        <div class="main__priorities__text container">
          <h5><?php the_field('priorities_go_first_title_text_h5', 18);?></h5>
          <p><?php the_field('priorities_go_first__text_p', 18);?></p>
        </div>
        <div class="main__priorities__content container">
          <div class="main__priorities__colums">
            <h5><?php the_field('priorities_go_first__title_text_h5_colums_1', 18);?></h5>
            <p><?php the_field('priorities_go_first_text_p_colums_1', 18);?></p>
            <div class="main__priorities__people">	<img src="<?php bloginfo('template_url');?>/assets/img/icon/decorations_4.png">
              <div class="text">
                <h6><?php the_field('author_colums_1', 18);?></h6>
                <p><?php the_field('role_colums_1', 18);?></p>
              </div>
            </div>
          </div>
          <div class="main__priorities__colums">
            <h5><?php the_field('priorities_go_first__title_text_h5_colums_2', 18);?></h5>
            <p><?php the_field('priorities_go_first_text_p_colums_2', 18);?></p>
            <div class="main__priorities__people">	<img src="<?php bloginfo('template_url');?>/assets/img/icon/decorations_4.png">
              <div class="text">
                <h6><?php the_field('author_colums_2', 18);?></h6>
                <p><?php the_field('role_colums_2', 18);?></p>
              </div>
            </div>
          </div>
          <div class="main__priorities__colums">
            <h5><?php the_field('priorities_go_first__title_text_h5_colums_3', 18);?></h5>
            <p><?php the_field('priorities_go_first_text_p_colums_3', 18);?></p>
            <div class="main__priorities__people">	<img src="<?php bloginfo('template_url');?>/assets/img/icon/decorations_4.png">
              <div class="text">
                <h6><?php the_field('author_colums_3', 18);?></h6>
                <p><?php the_field('role_colums_3', 18);?></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="main__img_stars container-1440"></section>
      <section class="main__what_do container-1440">
        <div class="main__what_do__text container">
          <h4><?php the_field('what_exactly_do_we_do_title_text_h4', 18);?></h4>
          <p><?php the_field('what_exactly_do_we_do_text_p', 18);?></p>
          <ul> 
            <li><?php the_field('autor_1', 18);?></li>
            <li><?php the_field('autor_2', 18);?></li>
            <li><?php the_field('autor_3', 18);?></li>
            <li><?php the_field('autor_4', 18);?></li>
          </ul>
        </div>
      </section>
      <section class="main__img_smoke container-1440"></section>
      <section class="main__quote container-1440">
        <div class="main__quote__text container">
          <h4>“</h4>
          <p><?php the_field('quote_text_p', 18);?></p>
          <h6><?php the_field('quote_author', 18);?></h6>
        </div>
      </section>
      <section class="main__nature container-1440">
        <div class="main__nature__text container">
          <h4><?php the_field('nature_is_above_all__title_text_h4', 18);?></h4>
          <p><?php the_field('nature_is_above_all__text_p', 18);?></p>
        </div>
      </section>
      <section class="main__numbers container-1440">
        <div class="main__numbers__text container">
          <h4><?php the_field('some_of_our_numbers_text_h4', 18);?></h4>
          <ul> 
            <li> 
              <p><?php the_field('some_of_our_numbers__colum_1_text_p', 18);?></p>
              <h6><?php the_field('some_of_our_numbers__colum_1_text_h5', 18);?></h6>
              <h5><?php the_field('some_of_our_numbers_colum_1_text_h6', 18);?></h5>
            </li>
            <li> 
              <p><?php the_field('some_of_our_numbers__colum_2_text_p', 18);?></p>
              <h6><?php the_field('some_of_our_numbers__colum_2_text_h5', 18);?></h6>
              <h5><?php the_field('some_of_our_numbers_colum_2_text_h6', 18);?></h5>
            </li>
            <li> 
              <p><?php the_field('some_of_our_numbers__colum_3_text_p', 18);?></p>
              <h6><?php the_field('some_of_our_numbers__colum_3_text_h5', 18);?></h6>
              <h5><?php the_field('some_of_our_numbers_colum_3_text_h6', 18);?></h5>
            </li>
          </ul>
        </div>
      </section>
      <section class="main__something_new container-1440">
        <div class="main__something_new__text container-xxl">
          <ul> 
            <li> 
              <div class="text"> 
                <h6><?php the_field('something_new_colum_1_h6', 18);?></h6>
                <h5><?php the_field('something_new_colum_1_h5', 18);?></h5>
                <p><?php the_field('something_new_colum_1_p', 18);?></p>
              </div>
              <img src="<?php bloginfo('template_url');?>/assets/img/11_img_1.jpg">

            </li>
            <li> <img src="<?php bloginfo('template_url');?>/assets/img/11_img_2.jpg">
              <div class="text"> 
                <h6><?php the_field('something_new_colum_2_h6', 18);?></h6>
                <h5><?php the_field('something_new_colum_2_h5', 18);?></h5>
                <p><?php the_field('something_new_colum_2_p', 18);?></p>
              </div>
            </li>
            <li> 
              <div class="text"> 
                <h6><?php the_field('something_new_colum_3_h6', 18);?></h6>
                <h5><?php the_field('something_new_colum_3_h5', 18);?></h5>
                <p><?php the_field('something_new_colum_3_p', 18);?></p>
              </div>
              
              <img src="<?php bloginfo('template_url');?>/assets/img/11_img_3.jpg">
            </li>
          </ul>
        </div>
      </section>
    </main>

    <?php get_footer("footer.php"); ?>
