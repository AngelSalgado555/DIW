<?php
   while( have_posts(  )): the_post(  ); //Extrae el atributo del post actual
?>
   <h1><?php the_title(  ); ?></h1> //Accede al contenido
   <p><?php the_content(  ); ?></p>
   <?php endwhile; ?>
