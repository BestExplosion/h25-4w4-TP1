<?php  
$erreur_404 = get_theme_mod('erreur_404', '404');
$erreur_message = get_theme_mod('erreur_message', 'Désolé, la page demandée n\'existe pas ou a été déplacée. Veuillez vérifier l\'URL ou revenir à l\'accueil.');
$background_404 = get_theme_mod('background_404', '');

?>

<?php get_header(); ?>

<div class ="contenu_erreur">
<h1><?php echo $erreur_404; ?></h1>
<p><?php echo $erreur_message; ?></p>
<?php get_template_part('gabarit/icones'); ?>
</div>

<div class="conteneur_erreur" style="background-image: url(<?php echo $background_404 ?>); background-size: 50%; background-repeat: no-repeat; background-position: center; height: 50vh;">
</div>
<div class="bouton-retour">
            <a href="<?php echo home_url(); ?>" class="bouton-accueil">Retourner à l'accueil</a>
        </div>

<?php get_footer(); ?>
</body>
</html>