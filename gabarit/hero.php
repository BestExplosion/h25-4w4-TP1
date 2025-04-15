<?php 
    $hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
    $hero_courriel = get_theme_mod('hero_courriel','Default Title');
    for ($k=0; $k<3; $k++){
    $hero_background[$k] = get_theme_mod('hero_background_' . $k, 'Default Title');
    }
    $couleur = substr(get_theme_mod('hero_icone', '#fff'),1);
    $couleur_texte = get_theme_mod('hero_texte', '#fff');
?>
<style>.hero{ 
    color: <?php echo $couleur_texte ?> ;
}
</style>

<section class="hero">
<!--////////// HERO__CARROUSEL //////////-->
    <div class="hero__carrousel" style="background-image: url('<?php echo $hero_background[0]?>');"></div>
    <div class="hero__carrousel" style="background-image: url('<?php echo $hero_background[1]?>');"></div>
    <div class="hero__carrousel" style="background-image: url('<?php echo $hero_background[2]?>');"></div>
    <div class="hero__radio">
        <input class="hero__radio__input" type="radio" name="carrousel" data-id_carrousel="0">
        <input class="hero__radio__input" type="radio" name="carrousel" data-id_carrousel="1">
        <input class="hero__radio__input" type="radio" name="carrousel" data-id_carrousel="2">
    </div>
<!--////////// HERO__CONTENU //////////-->
        <div class="hero__contenu global">
            <h1 class="hero__titre hero__couleur">
                <?php echo bloginfo('name') ?>
            </h1>
            <p class="hero__description hero__couleur">
                <?php echo bloginfo('description') ?>
            </p>
            <p class="hero__courriel" ><?php echo $hero_courriel ?>
            </p>
            <p class="hero__addresse">
                3800, rue Sherbrooke, Montreal
            </p>
            <p class="hero__numero">
                514-254-7131
            </p>
            <?php get_template_part('gabarit/icones') ?>
            
            <button class="hero__bouton">
                s'inscrire
            </button>
            <p class="hero__auteur"> Auteur: <?php echo $hero_auteur ?> </p>
        </div>
    </section>