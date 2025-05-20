<?php 
$erreur_titre = get_theme_mod('erreur_titre','Default Title');
$erreur_message = get_theme_mod('erreur_message','Default Title');
$erreurIntra_background = get_theme_mod('erreur_background', 'Default Title');
$erreur_texte = get_theme_mod('erreur_texte', '#fff');

?>
<style>.section_404 { 
    color: <?php echo $erreur_texte ?> ;
}
</style>

<?php get_header(); ?>
<!-- Section principale de la page 404 -->
<section class = section_404 style="background-image: url('<?php echo $erreurIntra_background ?>'); Background-repeat: no-repeat" <?php echo $erreur_texte ?>>
<div class = "erreur__contenu global" >

     <!-- Titre de l'erreur -->
    <h1 class="erreur__titre" >
        <?php echo $erreur_titre ?> 
    </h1>
     <!-- Message explicatif de l'erreur -->
    <p class="erreur__message" >
        <?php echo $erreur_message ?>
    </p>

     <!-- Bouton pour revenir à l'acceuil -->
    <div class="erreur_bouton">
            <a href="<?php echo home_url(); ?>" class="bouton-accueil">Retour à l'accueil</a>
    </div>
    <div class="erreur__menu">
    <?php wp_nav_menu(array(
                'menu'  => '404',
		        'container'  => 'div',
		        'container_class'=> '',
            )); ?>

    </div>

    <div class = "erreur__recherche">
        <?php get_search_form(); ?>
    </div>
    
</div>


</section>
<?php get_footer(); ?>
</body>
</html>