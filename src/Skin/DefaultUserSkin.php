<?php
/**
 * ExternalPage user skin
 *
 * PHP version 5
 *
 * @category    ExternalPage
 * @package     Xpressengine\Plugins\ExternalPage
 * @author      XE Team (develop) <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 * @link        http://www.xpressengine.com
 */
namespace Xpressengine\Plugins\ExternalPage\Skin;

use Xpressengine\Skin\AbstractSkin;
use View;

/**
 * ExternalPage user skin
 *
 * @category    ExternalPage
 * @package     Xpressengine\Plugins\ExternalPage
 * @author      XE Team (develop) <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 * @link        http://www.xpressengine.com
 */
class DefaultUserSkin extends AbstractSkin
{
    /**
     * @var string|null
     */
    protected static $type = 'page';

    /**
     * @var string
     */
    protected $frame = '_frame';

    /**
     * render
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $view = View::file($this->getViewFilePath('show'), $this->data);

        return $view;
    }

    /**
     * getViewFilePath
     *
     * @param $view
     *
     * @return string
     */
    protected function getViewFilePath($view)
    {
        return __DIR__ . '/../../views/defaultSkin/' . $view . '.blade.php';
    }

    /**
     * boot
     *
     * @return void
     */
    public static function boot()
    {
    }

    /**
     * getSettingsURI
     *
     * @return void
     */
    public static function getSettingsURI()
    {
    }
}
