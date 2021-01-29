[Back to the Ling/Light_Kit_Admin_UserDatabase api](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase/blob/master/doc/api/Ling/Light_Kit_Admin_UserDatabase.md)



The LightKitAdminUserDatabasePluginInstaller class
================
2020-06-25 --> 2021-01-29






Introduction
============

The LightKitAdminUserDatabasePluginInstaller class.



Class synopsis
==============


class <span class="pl-k">LightKitAdminUserDatabasePluginInstaller</span> extends [LightKitAdminBasePortPluginInstallerWithDatabase](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Light_PluginInstaller/LightKitAdminBasePortPluginInstallerWithDatabase.md) implements [PluginInstallerInterface](https://github.com/lingtalfi/Light_PluginInstaller/blob/master/doc/api/Ling/Light_PluginInstaller/PluginInstaller/PluginInstallerInterface.md), [LightServiceContainerAwareInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerAwareInterface.md), [TableScopeAwareInterface](https://github.com/lingtalfi/Light_PluginInstaller/blob/master/doc/api/Ling/Light_PluginInstaller/TableScope/TableScopeAwareInterface.md) {

- Inherited properties
    - protected [Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md) [LightBasePluginInstaller::$container](#property-container) ;

- Methods
    - public [install](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase/blob/master/doc/api/Ling/Light_Kit_Admin_UserDatabase/Light_PluginInstaller/LightKitAdminUserDatabasePluginInstaller/install.md)() : void
    - public [uninstall](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase/blob/master/doc/api/Ling/Light_Kit_Admin_UserDatabase/Light_PluginInstaller/LightKitAdminUserDatabasePluginInstaller/uninstall.md)() : void
    - public [isInstalled](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase/blob/master/doc/api/Ling/Light_Kit_Admin_UserDatabase/Light_PluginInstaller/LightKitAdminUserDatabasePluginInstaller/isInstalled.md)() : bool
    - public [getDependencies](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase/blob/master/doc/api/Ling/Light_Kit_Admin_UserDatabase/Light_PluginInstaller/LightKitAdminUserDatabasePluginInstaller/getDependencies.md)() : array

- Inherited methods
    - public LightKitAdminBasePortPluginInstallerWithDatabase::__construct() : void
    - protected LightKitAdminBasePortPluginInstallerWithDatabase::error(string $msg) : void
    - private LightKitAdminBasePortPluginInstallerWithDatabase::prepareTheNames() : void
    - public LightBasePluginInstaller::setContainer([Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md) $container) : void
    - public LightBasePluginInstaller::getTableScope() : array
    - protected LightBasePluginInstaller::debugMsg(string $msg) : void
    - protected LightBasePluginInstaller::infoMsg(string $msg) : void
    - protected LightBasePluginInstaller::warningMsg(string $msg) : void
    - protected LightBasePluginInstaller::message(string $msg, ?string $type = null) : void
    - protected LightBasePluginInstaller::synchronizeDatabase() : void
    - protected LightBasePluginInstaller::extractPlanetDotName() : void
    - protected LightBasePluginInstaller::removeLightStandardPermissions() : void
    - protected LightBasePluginInstaller::dropTables(array $tables) : void
    - protected LightBasePluginInstaller::hasTable(string $table) : bool

}






Methods
==============

- [LightKitAdminUserDatabasePluginInstaller::install](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase/blob/master/doc/api/Ling/Light_Kit_Admin_UserDatabase/Light_PluginInstaller/LightKitAdminUserDatabasePluginInstaller/install.md) &ndash; Installs the plugin in the light application.
- [LightKitAdminUserDatabasePluginInstaller::uninstall](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase/blob/master/doc/api/Ling/Light_Kit_Admin_UserDatabase/Light_PluginInstaller/LightKitAdminUserDatabasePluginInstaller/uninstall.md) &ndash; Uninstalls the plugin.
- [LightKitAdminUserDatabasePluginInstaller::isInstalled](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase/blob/master/doc/api/Ling/Light_Kit_Admin_UserDatabase/Light_PluginInstaller/LightKitAdminUserDatabasePluginInstaller/isInstalled.md) &ndash; Returns whether the core install phase of the plugin is fully completed.
- [LightKitAdminUserDatabasePluginInstaller::getDependencies](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase/blob/master/doc/api/Ling/Light_Kit_Admin_UserDatabase/Light_PluginInstaller/LightKitAdminUserDatabasePluginInstaller/getDependencies.md) &ndash; Returns the array of dependencies.
- LightKitAdminBasePortPluginInstallerWithDatabase::__construct &ndash; Builds the LightKitAdminBasePluginInstallerWithDatabase instance.
- LightKitAdminBasePortPluginInstallerWithDatabase::error &ndash; Throws an exception.
- LightKitAdminBasePortPluginInstallerWithDatabase::prepareTheNames &ndash; prepareTheNames names used by this class.
- LightBasePluginInstaller::setContainer &ndash; Sets the container.
- LightBasePluginInstaller::getTableScope &ndash; Returns the [table scope](https://github.com/lingtalfi/TheBar/blob/master/discussions/table-scope.md) for this planet.
- LightBasePluginInstaller::debugMsg &ndash; Writes a message to the debug channel of the plugin installer planet.
- LightBasePluginInstaller::infoMsg &ndash; Writes a message to the info channel of the plugin installer planet.
- LightBasePluginInstaller::warningMsg &ndash; Writes a message to the warning channel of the plugin installer planet.
- LightBasePluginInstaller::message &ndash; Writes a message to the channel of the plugin installer planet.
- LightBasePluginInstaller::synchronizeDatabase &ndash; Synchronizes the database with the create file (if any) of this planet.
- LightBasePluginInstaller::extractPlanetDotName &ndash; Returns an array containing the galaxy name and the planet name of the current instance.
- LightBasePluginInstaller::removeLightStandardPermissions &ndash; Removes the [light standard permissions](https://github.com/lingtalfi/TheBar/blob/master/discussions/light-standard-permissions.md) for this plugin.
- LightBasePluginInstaller::dropTables &ndash; Drop the given tables, if they exist.
- LightBasePluginInstaller::hasTable &ndash; Returns whether the given table exists in the database.





Location
=============
Ling\Light_Kit_Admin_UserDatabase\Light_PluginInstaller\LightKitAdminUserDatabasePluginInstaller<br>
See the source code of [Ling\Light_Kit_Admin_UserDatabase\Light_PluginInstaller\LightKitAdminUserDatabasePluginInstaller](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase/blob/master/Light_PluginInstaller/LightKitAdminUserDatabasePluginInstaller.php)



SeeAlso
==============
Previous class: [LightKitAdminUserDatabaseControllerHubHandler](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase/blob/master/doc/api/Ling/Light_Kit_Admin_UserDatabase/Light_ControllerHub/Generated/LightKitAdminUserDatabaseControllerHubHandler.md)<br>Next class: [LightKitAdminUserDatabaseService](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase/blob/master/doc/api/Ling/Light_Kit_Admin_UserDatabase/Service/LightKitAdminUserDatabaseService.md)<br>
