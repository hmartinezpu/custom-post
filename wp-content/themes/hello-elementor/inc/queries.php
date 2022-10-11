<?php

function lista_clases(){
  ?>
<ul class="lista-clases">
    <?php 

        $args= array(

            'post_type' =>'gymfitness_clases',
            'posts_per_page'=>10,
            'order'=>'ASC'
        );

       $clases = new WP_Query($args);
       while($clases -> have_posts()): $clases -> the_post(); ?> 
    <div style="width:50%;margin: 0 auto">
    <li class="clase card">
        <?php the_post_thumbnail( 'medium' );   ?> 
        <div class="contenido">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <?php
                        $hora_inicio = get_field('hora_de_inicio');
                        $hora_fin = get_field('hora_de_fin');
                    ?>
                    <p><?php the_field('dias_clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin; ?></p>
                </div>
    </li>
    </div>
    

    <?php endwhile;wp_reset_postdata(); ?>
</ul>


<?php
}