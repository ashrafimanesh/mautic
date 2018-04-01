<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

$mauticContent = $view['slots']->get(
    'mauticContent',
    isset($mauticTemplateVars['mauticContent']) ? $mauticTemplateVars['mauticContent'] : ''
);
?>

<script>
    var mauticBasePath    = '<?php echo $app->getRequest()->getBasePath(); ?>';
    var mauticBaseUrl     = '<?php echo $view['router']->path('mautic_base_index'); ?>';
    var mauticAjaxUrl     = '<?php echo $view['router']->path('mautic_core_ajax'); ?>';
    var mauticAjaxCsrf    = '<?php echo $view['security']->getCsrfToken('mautic_ajax_post'); ?>';
    var mauticAssetPrefix = '<?php echo $view['assets']->getAssetPrefix(true); ?>';
    var mauticContent     = '<?php echo $mauticContent; ?>';
    var mauticEnv         = '<?php echo $app->getEnvironment(); ?>';
    var mauticLang        = <?php echo $view['translator']->getJsLang(); ?>;
</script>
<?php
/** @var \Mautic\CoreBundle\Templating\Helper\AssetsHelper $assets */
$assets = $view['assets'];
$assets->outputSystemScripts(true); 

echo "<link rel='stylesheet' href='/github/opensources/mautic/media/plugins/persian-date-picker/css/persianDatepicker-default.css'>";
// echo "<script src='/github/opensources/mautic/media/plugins/persian-date-picker/js/persianDatepicker.js'></script>";
?>
