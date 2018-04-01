<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 3/29/18
 * Time: 5:40 PM.
 */

namespace MauticPlugin\AshrafiCoreBundle\Helper;

class SiteThemeHelper
{
    /** @var SiteThemeHelper */
    private static $_instance;

    /** @var \Mautic\CoreBundle\Helper\CoreParametersHelper */
    private $coreParametersHelper;

    private function __construct($coreParametersHelper)
    {
        $this->coreParametersHelper = $coreParametersHelper;
    }

    public static function i()
    {
        if (!self::$_instance) {
            self::$_instance = new self(func_get_arg(0));
        }

        return self::$_instance;
    }

    public static function get()
    {
        return self::$_instance ? self::$_instance->coreParametersHelper->getParameter('site_theme') : 'Default';
    }

    public static function getAll()
    {
        return ['Default'=>'Default', 'Theme1'=>'Theme 1'];
    }

    /**
     * @return \Mautic\CoreBundle\Helper\CoreParametersHelper
     */
    public function getCoreParametersHelper()
    {
        return $this->coreParametersHelper;
    }
}
