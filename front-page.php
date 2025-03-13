<?php 

/**
 * modèle front-page.php permet d'afficher la pae d'acceuil
 * 
 */
?>

<?php get_header() ?>
<?php 
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
    $hero_background = get_theme_mod('hero_background', 'Default Title');
    $couleur = substr(get_theme_mod('hero_icone-app', '#fff'), 0, 7);
?>
<style>.hero__couleur { 
    color: blue
}
</style>
    <section class="hero" style="background-image: url('<?php echo $hero_background ?>'); Background-repeat: no-repeat">
        <div class="hero__contenu global">
            <h1 class="hero__titre hero__couleur">
                <?php echo bloginfo('name') ?>
            </h1>
            <p class="hero__description">
                <?php echo bloginfo('description') ?>
            </p>
            <p class="hero__courriel" >
                info@cmaisonneuve.qc.ca
            </p>
            <p class="hero__addresse">
                3800, rue Sherbrooke, Montreal
            </p>
            <p class="hero__numero">
                514-254-7131
            </p>
            <div class="hero__icone-app">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?php echo $couleur; ?>" width="20" height="20" >
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=<?php echo $couleur; ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=<?php echo $couleur; ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=<?php echo $couleur; ?>" width="20" height="20">
            </div>
            
            <button class="hero__bouton">
                s'inscrire
            </button>
            <p> Auteur: <?php echo $hero_auteur ?> </p>
        </div>
    </section>
    
    <section class="form__formulaire">
        <div class="formulaire">
            <form>
                <div class="form__reponse">
                    <label for="nom">Nom:</label><br>
                    <input type="text" class="formulaire__input" name="nom" placeholder="Écrivez votre nom"><br>
                </div>
                <div class="form__reponse">
                    <label for="prenom">Prénom:</label><br>
                    <input type="text" class="formulaire__input" name="prenom"placeholder="Écrivez votre prénom"><br>
                </div>
                <div class="form__reponse">
                    <label for="courriel">Courriel:</label><br>
                    <input type="text" class="formulaire__input" name="courriel" placeholder="Écrivez votre courriel"><br>
                </div>
                <div class="form__reponse">
                    <label for="telephone">Téléphone:</label><br>
                    <input type="text" class="formulaire__input" name="telephone"placeholder="Écrivez votre téléphone" ><br>
                </div>
                    <button class="formulaire__button">S'inscrire</button>                
            </form>
        </div>
    </section>

    <section class="populaire">
        <div class="boiteflex global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
            <?php if(in_category('galerie')){
                the_content();
            } else {?>
            <?php get_template_part("gabarit/carte"); ?>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
   <?php get_footer(); ?>
</body>
</html>