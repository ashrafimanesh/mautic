<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>
<head>
    <meta charset="UTF-8" />
    <title><?php if (!empty($view['slots']->get('headerTitle', ''))): ?>
        <?php echo strip_tags(str_replace('<', ' <', $view['slots']->get('headerTitle', ''))); ?> | 
    <?php endif; ?>
	<?php echo $view['slots']->get('pageTitle', 'Mautic'); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="<?php echo $view['assets']->getUrl('media/images/favicon.ico') ?>" />
    <link rel="icon" sizes="192x192" href="<?php echo $view['assets']->getUrl('media/images/favicon.ico') ?>">
    <link rel="apple-touch-icon" href="<?php echo $view['assets']->getUrl('media/images/apple-touch-icon.png') ?>" />

    <?php echo $view['assets']->outputSystemStylesheets(); ?>

    <?php echo $view->render('MauticCoreBundle:Default:script.html.php'); ?>
    <?php $view['assets']->outputHeadDeclarations(); ?>
    <style>
        .app-sidebar.sidebar-left ~ #app-header.navbar{
            right: 230px;
            left: 0;
        }

        .app-sidebar.sidebar-right {
            left: -230px;
            right: auto;
        }


        .app-sidebar.sidebar-left{
            right: 0;
            left: auto;
        }

        .app-sidebar.sidebar-left ~ #app-content{
            margin-left: 0;
            margin-right: 230px;
        }

        ul.nav.navbar-nav.navbar-right{
            padding-right: 20px;
        }



        .csstransforms3d.sidebar-open-rtl .app-sidebar.sidebar-right{
            -webkit-transform: translate3d(230px, 0, 0);
            transform: translate3d(230px, 0, 0);
        }

        .csstransforms3d.sidebar-open-rtl .app-sidebar.sidebar-left{
            -webkit-transform: translate3d(230px, 0, 0);
            transform: translate3d(230px, 0, 0);
        }

        .csstransforms3d.sidebar-open-rtl #app-header.navbar {
            -webkit-transform: translate3d(230px, 0, 0);
            transform: translate3d(230px, 0, 0);
        }

        .csstransforms3d.sidebar-open-rtl #app-content{
            -webkit-transform: translate3d(230px, 0, 0);
            transform: translate3d(230px, 0, 0);
        }

        .csstransforms3d.sidebar-open-rtl #app-footer{
            -webkit-transform: translate3d(230px, 0, 0);
            transform: translate3d(230px, 0, 0);
        }
    </style>
</head>
