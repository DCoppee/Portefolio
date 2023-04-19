<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!--définir automatiquement la langue du doc-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>"> <!--définir l’encodage du site-->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?> <!--déclarer le chargement des scripts et des styles. Attention, différent de get_header!-->
</head>

<body <?php body_class(); ?>> <!--obtenir des noms de classe CSS en fonction de la page visitée-->
    
    <?php wp_body_open(); ?> <!--permettre à des extensions d’écrire du code au début du body-->

    <header class="header">
        <a href="<?php echo home_url( '/' ); ?>"> <!--au clic, retour à l'accueil du site-->
            <!--<img class="banner" src="<?php echo get_template_directory_uri(); ?>/img/banner.png" alt="Logo">--> <!--fonction indispensable à l'affichage du logo, pour obtenir son adresse absolue-->
        </a>  
    </header>