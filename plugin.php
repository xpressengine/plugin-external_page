<?php
/**
 * ExternalPagePlugin.php
 *
 * This file is part of the Xpressengine package.
 *
 * PHP version 5
 *
 * @category    ExternalPage
 * @package     Xpressengine\Plugins\ExternalPage
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html LGPL-2.1
 * @link        http://www.xpressengine.com
 */

namespace Xpressengine\Plugins\Page;

use XeConfig;
use Xpressengine\Plugin\AbstractPlugin;

/**
 * ExternalPagePlugin
 *
 * @category    ExternalPage
 * @package     Xpressengine\Plugins\ExternalPage
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html LGPL-2.1
 * @link        http://www.xpressengine.com
 */
class ExternalPagePlugin extends AbstractPlugin
{
    /**
     * install
     *
     * @return void
     */
    public function install()
    {
        $this->setDefaultConfig();
    }

    /**
     * check updated
     *
     * @return bool
     */
    public function checkUpdated()
    {
        if ($this->hasDefaultConfig() === false) {
            return false;
        }

        return parent::checkUpdated(); // TODO: Change the autogenerated stub
    }

    /**
     * update
     *
     * @return void
     */
    public function update()
    {
        if ($this->hasDefaultConfig() === false) {
            $this->setDefaultConfig();
        }
    }

    /**
     * has default config
     *
     * @return bool
     */
    protected function hasDefaultConfig()
    {
        $config = XeConfig::get('module/externalPage@externalPage');
        if ($config === null) {
            return false;
        }
        return true;
    }

    /**
     * set default config
     *
     * @return void
     */
    protected function setDefaultConfig()
    {
        XeConfig::add('module/externalPage@externalPage', []);
    }

    /**
     * activate
     *
     * @param null $installedVersion installed version
     *
     * @return void
     */
    public function activate($installedVersion = null)
    {
    }

    /**
     * boot
     *
     * @return void
     */
    public function boot()
    {
    }
}
