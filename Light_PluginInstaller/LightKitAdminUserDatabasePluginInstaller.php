<?php


namespace Ling\Light_Kit_Admin_UserDatabase\Light_PluginInstaller;


use Ling\Light_Kit_Admin\Light_PluginInstaller\LightKitAdminBasePortPluginInstallerWithDatabase;


/**
 * The LightKitAdminUserDatabasePluginInstaller class.
 */
class LightKitAdminUserDatabasePluginInstaller extends LightKitAdminBasePortPluginInstallerWithDatabase
{



    //--------------------------------------------
    // PluginInstallerInterface
    //--------------------------------------------
    /**
     * @overrides
     */
    public function install()
    {
        /**
         * Nothing to install, the Light_UserDatabase plugin already installs the tables...
         */
    }


    /**
     * @overrides
     */
    public function uninstall()
    {
        /**
         * Nothing to uninstall
         */
    }

    /**
     * @overrides
     */
    public function isInstalled(): bool
    {
        return true;
    }


    /**
     * @overrides
     */
    public function getDependencies(): array
    {
        return [
            "Ling.Light_Kit_Admin",
            "Ling.Light_UserDatabase",
        ];
    }


}