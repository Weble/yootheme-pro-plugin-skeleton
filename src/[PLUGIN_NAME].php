<?php

defined('_JEXEC') or die('Restricted access');

require_once __DIR__ . '/vendor/autoload.php';

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\Cms\Uri\Uri;
use YOOtheme\Application;
use YOOtheme\Path;

if (interface_exists('\\Joomla\\Event\\SubscriberInterface')) {
    interface SubscriberInterfaceWrapper extends \Joomla\Event\SubscriberInterface {}
} else {
    interface SubscriberInterfaceWrapper {
        public static function getSubscribedEvents(): array;
    }
}

class plgSystem[PLUGIN_NAME] extends CMSPlugin implements SubscriberInterfaceWrapper
{
    protected $autoloadLanguage = true;

    public function onAfterInitialise()
    {
        if (!class_exists(Application::class, false)) {
            return;
        }

        $app = Application::getInstance();

        $root = __DIR__;
        $rootUrl = Uri::root(true);

        // set alias
        Path::setAlias('~[PLUGIN_NAME]', $root);
        Path::setAlias('~[PLUGIN_NAME]_url', $rootUrl . '/plugins/system/[PLUGIN_NAME]');

        // bootstrap modules
        $app->load('~[PLUGIN_NAME]/builder/bootstrap.php');
    }

    public static function getSubscribedEvents(): array
    {
        return [
            'onAfterInitialise' => 'onAfterInitialise',
        ];
    }

}
