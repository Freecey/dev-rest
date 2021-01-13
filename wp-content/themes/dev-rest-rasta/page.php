




<?php 

    if( have_rows('opening_sections') ):
       // loop through the rows of data
      while ( have_rows('opening_sections') ) : the_row();
            // display a sub field value
        echo '<h2>' . get_sub_field('section_title') . '</h2>';
        if ( have_rows('sections_items'));?>
          <table>
            <thead>
              <tr>
                <td class="">Name</td>
                <td class="">Description</td>
                <td class="">Price</td>
              </tr>
            </thead>  
          <?php while (have_rows('section_items') ): the_row(); ?>
            <tr>
              <td><?php the_sub_field('opening_days'); ?></td>
              <td><?php the_sub_field('opening_hours'); ?></td>
            </tr>
          <?php endwhile;?>
          </table> <?php 
      endwhile;
     else :  
       // no rows found
    endif; ?>



<h1>hello world</h1>