<footer class="footer">
      <section class="footer__date">
        <div class="footer__date__text container-xxl">
          <ul> 
            <li> 
              <h5><?php the_field('trips_colum_1_text_h5', 18);?></h5>
              <h6><?php the_field('trips_colum_1_text_h6', 18);?></h6>
            </li>
            <li> 
            <h5><?php the_field('trips_colum_2_text_h5', 18);?></h5>
              <h6><?php the_field('trips_colum_2_text_h6', 18);?></h6>
            </li>
            <li> 
            <h5><?php the_field('trips_colum_3_text_h5', 18);?></h5>
              <h6><?php the_field('trips_colum_3_text_h6', 18);?></h6>
            </li>
          </ul>
        </div>
      </section>
      <section class="footer__quote_2 container-1440">
        <div class="footer__quote_2__text container">
          <h4>“</h4>
          <p><?php the_field('footer_quote_text_p', 18);?></p>
          <h6><?php the_field('footer_quote_text_h6', 18);?></h6>
          <div class="icon"><a href="<?php the_field('facebook', 18);?>"> <img src="<?php bloginfo('template_url');?>/assets/img/icon/icon_13_1.png"></a><a href="<?php the_field('twitter', 18);?>"> <img src="<?php bloginfo('template_url');?>/assets/img/icon/icon_13_2.png"></a><a href="<?php the_field('google+', 18);?>"> <img src="<?php bloginfo('template_url');?>/assets/img/icon/icon_13_3.png"></a><a href="<?php the_field('pinterest', 18);?>"> <img src="<?php bloginfo('template_url');?>/assets/img/icon/icon_13_4.png"></a><a href="<?php the_field('instagram', 18);?>"> <img src="<?php bloginfo('template_url');?>/assets/img/icon/icon_13_5.png"></a></div>
        </div>
      </section>
      <section class="footer__about">
        <div class="footer__about__text container-xxl">
          <ul> 
            <li class="main_text"> <a href="#">
                <h4><?php the_field('about_title', 18);?></h4>
                <p><?php the_field('about_text_p', 18);?></p></a></li>
            <li> <a href="#">
                <h5><?php the_field('about_2_h4', 18);?></h5>
                <h6><?php the_field('about_2_author_1', 18);?></h6>
                <h6><?php the_field('about_2_author_2', 18);?></h6>
                <h6><?php the_field('about_2_author_3', 18);?></h6>
                <h6><?php the_field('about_2_author_4', 18);?></h6></a>
              </li>
            <li> <a href="#">
                <h5><?php the_field('about_3_h4', 18);?></h5>
                <h6><?php the_field('about_3_author_1', 18);?></h6>
                <h6><?php the_field('about_3_author_2', 18);?></h6>
                <h6><?php the_field('about_3_author_3', 18);?></h6>
                <h6><?php the_field('about_3_author_4', 18);?></h6></a>
              </li>
            <li>	<a href="#">
                <h5><?php the_field('about_4_h4', 18);?></h5>
                <h6><?php the_field('about_4_author_1', 18);?></h6>
                <h6><?php the_field('about_4_author_2', 18);?></h6>
                <h6><?php the_field('about_4_author_3', 18);?></h6>
                <h6><?php the_field('about_4_author_4', 18);?></h6></a>
              </li>
          </ul><a href="http://www.freepik.com">Разработано Freepik</a>
        </div>
      </section>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>