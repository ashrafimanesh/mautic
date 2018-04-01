<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 3/29/18
 * Time: 8:23 PM.
 */

namespace MauticPlugin\AshrafiCoreBundle\EventListener;

use Mautic\CoreBundle\Controller\MauticController;
use Mautic\CoreBundle\CoreEvents;
use Mautic\CoreBundle\Event\CustomTemplateEvent;
use Mautic\CoreBundle\EventListener\CommonSubscriber;
use Mautic\CoreBundle\Helper\BundleHelper;
use Mautic\CoreBundle\Helper\CoreParametersHelper;
use Mautic\CoreBundle\Helper\UserHelper;
use Mautic\CoreBundle\Menu\MenuHelper;
use Mautic\CoreBundle\Templating\Helper\AssetsHelper;
use Mautic\UserBundle\Model\UserModel;
use MauticPlugin\AshrafiCoreBundle\Helper\SiteThemeHelper;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\SecurityContext;

class CoreSubscriber extends CommonSubscriber
{
    private $coreParametersHelper;
    private $userHelper;
    private $bundleHelper;
    private $menuHelper;
    private $assetsHelper;
    private $securityContext;
    private $userModel;

    public function __construct(
        BundleHelper $bundleHelper,
        MenuHelper $menuHelper,
        UserHelper $userHelper,
        AssetsHelper $assetsHelper,
        CoreParametersHelper $coreParametersHelper,
        SecurityContext $securityContext,
        UserModel $userModel
    ) {
        $this->bundleHelper         = $bundleHelper;
        $this->menuHelper           = $menuHelper;
        $this->userHelper           = $userHelper;
        $this->assetsHelper         = $assetsHelper;
        $this->securityContext      = $securityContext;
        $this->userModel            = $userModel;
        $this->coreParametersHelper = $coreParametersHelper;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => [
                ['onKernelController', 0],
            ],
            KernelEvents::REQUEST => [
                ['onKernelRequest', 0],
            ],
            CoreEvents::VIEW_INJECT_CUSTOM_TEMPLATE=> [['onTemplateInject', 0]],
        ];
    }

    /**
     * Populates namespace, bundle, controller, and action into request to be used throughout application.
     *
     * @param FilterControllerEvent $event
     */
    public function onKernelController(FilterControllerEvent $event)
    {
        $controller = $event->getController();

        if (!is_array($controller)) {
            return;
        }

        //only affect Mautic controllers
        if ($controller[0] instanceof MauticController) {
            SiteThemeHelper::i($this->coreParametersHelper);
        }
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
//        dd(get_class_methods(get_class($this->assetsHelper)));
    }

    public function onTemplateInject(CustomTemplateEvent $event)
    {
        if (in_array(SiteThemeHelper::i()->getCoreParametersHelper()->getParameter('locale'), ['fa_IR'])) {
            $e = explode(':', $event->getTemplate());
            if (sizeof($e) > 2 && strpos($e[0], 'Mautic') !== false) {
                $template = $e[0].':Theme1:'.$e[1];
                unset($e[0]);
                unset($e[1]);
                $template .= '/'.implode('/', $e);
                $event->setTemplate($template);
            }
        }
    }
}
