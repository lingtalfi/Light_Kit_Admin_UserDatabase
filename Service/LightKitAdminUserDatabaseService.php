<?php


namespace Ling\Light_Kit_Admin_UserDatabase\Service;


use Ling\BabyYaml\BabyYamlUtil;
use Ling\Light\ServiceContainer\LightServiceContainerInterface;
use Ling\Light_BMenu\DirectInjection\BMenuDirectInjectorInterface;
use Ling\Light_BMenu\Menu\LightBMenu;
use Ling\Light_Kit_Admin\Realist\ActionHandler\LightKitAdminRealistActionHandler;
use Ling\Light_Kit_Admin\Realist\ListActionHandler\LightKitAdminListActionHandler;
use Ling\Light_Kit_Admin\Realist\ListGeneralActionHandler\LightKitAdminListGeneralActionHandler;
use Ling\Light_Kit_Admin\Realist\Rendering\LightKitAdminRealistListRenderer;
use Ling\Light_Kit_Admin\Realist\Rendering\LightKitAdminRealistRowsRenderer;
use Ling\Light_PluginInstaller\PluginInstaller\PluginInstallerInterface;
use Ling\Light_Realist\Service\LightRealistCustomServiceInterface;
use Ling\Light_Realist\Service\LightRealistService;
use Ling\UniverseTools\PlanetTool;

/**
 * The LightKitAdminUserDatabaseService class.
 */
class LightKitAdminUserDatabaseService implements PluginInstallerInterface, BMenuDirectInjectorInterface, LightRealistCustomServiceInterface
{


    /**
     * This property holds the container for this instance.
     * @var LightServiceContainerInterface
     */
    protected $container;


    /**
     * Builds the LightKitAdminUserDataService instance.
     */
    public function __construct()
    {
        $this->container = null;
    }

    /**
     * Sets the container.
     *
     * @param LightServiceContainerInterface $container
     */
    public function setContainer(LightServiceContainerInterface $container)
    {
        $this->container = $container;
    }




    //--------------------------------------------
    // PLUGIN INSTALLER
    //--------------------------------------------
    /**
     * @implementation
     */
    public function install()
    {
        /**
         * Nothing to install, the Light_UserDatabase plugin already installs the tables...
         */
    }


    /**
     * @implementation
     */
    public function uninstall()
    {
        /**
         * Nothing to uninstall
         */
    }

    /**
     * @implementation
     */
    public function isInstalled(): bool
    {
        return true;
    }


    /**
     * @implementation
     */
    public function getDependencies(): array
    {
        return [
            "Light_Kit_Admin",
            "Light_UserDatabase",
        ];
    }

    //--------------------------------------------
    // BMENU
    //--------------------------------------------
    /**
     * @implementation
     */
    public function inject(string $menuStructureId, LightBMenu $menu)
    {

        $appDir = $this->container->getApplicationDir();
        $allItems = BabyYamlUtil::readFile($appDir . "/config/data/Light_Kit_Admin_UserDatabase/bmenu/admin_main_menu-items.byml");
        $userItems = $allItems['user'];
        $adminItems = $allItems['admin'];

        $parentPath = "lka-user";
        foreach ($userItems as $item) {
            $menu->appendItem($item, $parentPath);
        }


        $parentPath = "lka-admin";
        foreach ($adminItems as $item) {
            $menu->appendItem($item, $parentPath);
        }
    }



    //--------------------------------------------
    // LightRealistCustomServiceInterface
    //--------------------------------------------
    /**
     * @implementation
     */
    public function registerByRequestId(string $requestId)
    {

        list($galaxy, $planet) = PlanetTool::getGalaxyPlanetByClassName(get_class($this));

        /**
         * @var $realist LightRealistService
         */
        $realist = $this->container->get("realist");
        $realist->registerListRenderer($planet, new LightKitAdminRealistListRenderer());
        $realist->registerRealistRowsRenderer($planet, new LightKitAdminRealistRowsRenderer());
        $realist->registerActionHandler(new LightKitAdminRealistActionHandler());
        $realist->registerListActionHandler($planet, new LightKitAdminListActionHandler());
        $realist->registerListGeneralActionHandler($planet, new LightKitAdminListGeneralActionHandler());
    }

}