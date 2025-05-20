<?php 
/*
gabarit permettant d'afficher une carte
*/

?>
<article class="carte carte--grande">
                    
                    <div class="carte__contenu">
                        <?php
                        if(has_post_thumbnail()){
                            //Permet d'affichr la petite image associé à l'article (image mise en avant)
                            the_post_thumbnail('thumbnail'); }
                        ?>
                    <h2 class="carte__titre"><?php the_title(); ?> </h2>
                    <?php 
                        $categories = get_the_category();
                        $filtered_categories = array_filter($categories, function($cat) {
                            return strtolower($cat->name) !== 'populaire';
                        });

                        if (!empty($filtered_categories)) {
                            echo '<div class="carte__categorie">';
                            foreach ($filtered_categories as $cat) {
                                echo '<a href="' . esc_url(get_category_link($cat->term_id)) . '">' . esc_html($cat->name) . '</a>';
                            }
                            echo '</div>';
                        }
                        ?>
                    <p>Température minimum <?php  echo the_field('temperature_minimum'); ?>&#8451; </p>
                    <p>Température maximum <?php echo the_field('temperature_maximum'); ?>&#8451; </p>
                    <p class="carte__description"><?php echo wp_trim_words(get_the_excerpt(), 20, "..."); ?></p>
                    <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink() ?>">Suite...</a>
                    
                </div>
</article>