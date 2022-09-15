<?php

function lista_clases(){
  ?>
<ul>
    <?php 

        $args= array(

            'post_type' =>'gymfitness_clases',
            'posts_per_page'=>10,
            'order'=>'ASC'
        );

       $clases = new WP_Query($args);
       while($clases -> have_posts()): $clases -> the_post(); ?> 
    <li>
        <h1><?php the_title(); ?></h1>
    </li>
    

    <?php endwhile;wp_reset_postdata(); ?>
</ul>


<?php
}