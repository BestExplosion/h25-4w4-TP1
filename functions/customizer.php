<?php


function theme_31w_customize_register($wp_customize) {
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  $wp_customize->add_section('hero_section', array(
    'title' => __('Hero Section', 'theme_31w'),
    'priority' => 30,
  ));
  /**Titre principal */
  $wp_customize->add_setting('hero_auteur', array(
    'default' => __('Johnny Tan', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  
  $wp_customize->add_control('hero_auteur', array(
    'label' => __('Auteur', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'text',
  ));
    /**Courriel */
    $wp_customize->add_setting('hero_courriel', array(
        'default' => __('Johnny Tan', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
      ));
      
      $wp_customize->add_control('hero_courriel', array(
        'label' => __('Courriel', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
      ));
      
  
  /**Image d’arrière-plan */
  
  $wp_customize->add_setting('hero_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
    'label' => __('Image en background', 'theme_31w'),
    'section' => 'hero_section',
  )));
  /**Nouvelle section footer */
  $wp_customize->add_section('footer_section', array(
    'title' => __('Section pied de page', 'theme_31w'),
    'priority' => 30,
  ));
  /**Champ mission */
  $wp_customize->add_setting('footer_mission', array(
    'default' => __('Mission du club de voyage', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  
  $wp_customize->add_control('footer_mission', array(
    'label' => __('Mission', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text',
  ));
   /**Champ adresse */
   $wp_customize->add_setting('footer_adresse', array(
    'default' => __('Adresse', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  
  $wp_customize->add_control('footer_adresse', array(
    'label' => __('Adresse', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text',
  ));
    /**Champ telephone */
    $wp_customize->add_setting('footer_telephone', array(
        'default' => __('Telephone', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
      ));
      
      $wp_customize->add_control('footer_telephone', array(
        'label' => __('Telephone', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
      ));
  /**Couleur du texte de la zone hero */
  $wp_customize->add_setting('hero_icone', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_icone', array(
    'label' => __('Couleur du texte', 'theme_31w'),
    'section' => 'hero_section',
  )));
  /**Couleur du texte  */
  $wp_customize->add_setting('hero_texte', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_texte', array(
    'label' => __('Couleur du texte', 'theme_31w'),
    'section' => 'hero_section',
  )));

/**Nouvelle Section page 404 */

/*$wp_customize->add_section('erreur_section', array(
  'title' => __('Section Erreur', 'theme_4w4'),
  'priority' => 30,
));

// Ajouter l'erreur texte
$wp_customize->add_setting('erreur_404', array(
  'default' => __('Texte d\'erreur', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('erreur_404', array(
  'label' => __('Erreur', 'theme_31w'),
  'section' => 'erreur_section',
  'type' => 'text',
));

$wp_customize->add_setting('background_404', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));
// Ajouter du contrôle de la donnée
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background_404', array(
  'label' => __('Image en arrière plan', 'theme_4w4'),
  'section' => 'erreur_section',
)));*/


$wp_customize->add_section('section_404', array(
  'title' => __('Erreur Section', 'theme_31w'),
  'priority' => 30,
));
/**Titre principal */
$wp_customize->add_setting('erreur_titre', array(
  'default' => __('OOPS, vous avez échoué sur l\'île 404! ', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('erreur_titre', array(
  'label' => __('Auteur', 'theme_31w'),
  'section' => 'section_404',
  'type' => 'text',
));

/**Titre principal */
$wp_customize->add_setting('erreur_message', array(
  'default' => __('message ', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('erreur_message', array(
  'label' => __('Message d\'erreur', 'theme_31w'),
  'section' => 'section_404',
  'type' => 'text',
));
 
/**Image d’arrière-plan */

$wp_customize->add_setting('erreur_background', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_background', array(
  'label' => __('Image en background', 'theme_31w'),
  'section' => 'section_404',
)));


  /**Couleur du texte  */
  $wp_customize->add_setting('erreur_texte', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur_texte', array(
    'label' => __('Couleur du texte', 'theme_31w'),
    'section' => 'section_404',
  )));


  }
  
  
  add_action('customize_register', 'theme_31w_customize_register');
  



?>
