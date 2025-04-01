<?php 
$erreur_titre = get_theme_mod('erreur_titre','Default Title');
$erreur_message = get_theme_mod('erreur__message','Default Title');
$erreurIntra_background = get_theme_mod('erreur_background', 'Default Title');
$erreur_texte = get_theme_mod('erreur_texte', '#fff');

?>
<style>.section_404 { 
    color: <?php echo $erreur_texte ?> ;
}
</style>

<?php get_header(); ?>
<section class = section_404 style="background-image: url('<?php echo $erreurIntra_background ?>'); Background-repeat: no-repeat" <?php echo $erreur_texte ?>>
<div class = "erreur__contenu global" >

    <h1 class="erreur__titre" >
        <?php echo $erreur_titre ?> 
    </h1>

    <p class="erreur__message" >
        <?php echo $erreur_message ?>
    </p>

    <div class = "erreur__recherce">
        <?php get_search_form(); ?>
    </div>
    
</div>




</section>
<?php get_footer(); ?>
</body>
</html>