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

        span.nav-item-name.text.pull-right{
            margin-right: .3em;
        }


        .app-sidebar .nav-sidebar > .nav > li > a .arrow{
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .app-sidebar .nav-sidebar > .nav > li.open > a .arrow{
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
        }

        .app-sidebar .nav-sidebar > .nav > li > .nav-submenu{
            padding-right: 50px;
            padding-left: 0;
        }

        .app-sidebar .nav-sidebar > .nav > li > .nav-submenu > li:after{
            left: auto;
            right: 0px;
        }

        .app-sidebar .nav-sidebar > .nav > li > .nav-submenu:after{

            left: auto;
            right: 52px;
        }

        .app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu > li > a{
            text-align: right;
        }

        .list-group-item > a{
            text-align: right;
        }

        .bg-auto.bg-light-xs, .bg-auto .bg-light-xs{
            text-align: right;
        }

        .row{
            clear: both;
        }

        .form-group label{
            float: right;
        }

        [class^=col-sm-]{
            float: right;
        }

        input.form-control {
            direction: rtl;
        }

        select.form-control {
            direction: rtl;
        }

        .chosen-container{
            direction: rtl;
        }

        input[data-toggle^="date"]{
            direction: ltr;
        }

        .chosen-container-single .chosen-single div{
            right: auto;
            left: 5px;;
        }

        .chosen-container-single .chosen-single abbr{
            right: auto;
            left: 26px;

        }

        .input-group{
            clear: both;
        }

        input[type=file]{
            clear: both;
        }


        .app-sidebar.sidebar-left ~ #app-footer {
            margin-left: 0;
        }
        @media (min-width: 768px) {

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

            .app-sidebar.sidebar-left ~ #app-footer{
                margin-right: 230px;
            }
        }


    </style>
</head>
