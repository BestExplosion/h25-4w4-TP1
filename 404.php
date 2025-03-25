<?php  
$erreur_background = get_theme_mod('erreur_background', 'Default Title');
$erreur_404 = get_theme_mod('erreur_404', '404');
$erreur_message = get_theme_mod('erreur_message', 'Désolé, la page demandée n\'existe pas ou a été déplacée. Veuillez vérifier l\'URL ou revenir à l\'accueil.');

?>

<?php get_header(); ?>
<div class = "erreur_404" style="background-image: url('<?php echo $erreur_background ?>'); Background-repeat: no-repeat">

<h1><h1><?php echo $erreur_404; ?></h1></h1>
<p><?php echo $erreur_message; ?></p>

<?php get_template_part('gabarit/icones'); ?>
</div>

<?php get_footer(); ?>
</body>
</html>