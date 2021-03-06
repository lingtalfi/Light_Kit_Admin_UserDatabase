[Back to the Ling/Light_Kit_Admin_UserDatabase api](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase/blob/master/doc/api/Ling/Light_Kit_Admin_UserDatabase.md)



The LightKitAdminUserDatabasePluginInstaller class
================
2020-06-25 --> 2021-03-15






Introduction
============

The LightKitAdminUserDatabasePluginInstaller class.



Class synopsis
==============


class <span class="pl-k">LightKitAdminUserDatabasePluginInstaller</span> extends [LightKitAdminBasePortPluginInstallerWithDatabase](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Light_PluginInstaller/LightKitAdminBasePortPluginInstallerWithDatabase.md) implements [PluginInstallerInterface](https://github.com/lingtalfi/Light_PluginInstaller/blob/master/doc/api/Ling/Light_PluginInstaller/PluginInstaller/PluginInstallerInterface.md), [LightServiceContainerAwareInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerAwareInterface.md), [TableScopeAwareInterface](https://github.com/lingtalfi/Light_PluginInstaller/blob/master/doc/api/Ling/Light_PluginInstaller/TableScope/TableScopeAwareInterface.md) {

- Inherited properties
    - protected [Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md) [LightUserDatabaseBasePluginInstaller::$container](#property-container) ;

- Inherited methods
    - public LightKitAdminBasePortPluginInstallerWithDatabase::__construct() : void
    - public LightKitAdminBasePortPluginInstallerWithDatabase::install() : void
    - public LightKitAdminBasePortPluginInstallerWithDatabase::isInstalled() : bool
    - public LightKitAdminBasePortPluginInstallerWithDatabase::uninstall() : void
    - public LightKitAdminBasePortPluginInstallerWithDatabase::getDependencies() : array
    - protected LightKitAdminBasePortPluginInstallerWithDatabase::error(string $msg) : void
    - public LightUserDatabaseBasePluginInstaller::setContainer([Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md) $container) : void
    - public LightUserDatabaseBasePluginInstaller::getTableScope() : array
    - protected LightUserDatabaseBasePluginInstaller::debugMsg(string $msg) : void
    - protected LightUserDatabaseBasePluginInstaller::infoMsg(string $msg) : void
    - protected LightUserDatabaseBasePluginInstaller::warningMsg(string $msg) : void
    - protected LightUserDatabaseBasePluginInstaller::message(string $msg, ?string $type = null) : void
    - protected LightUserDatabaseBasePluginInstaller::synchronizeDatabase() : void
    - protected LightUserDatabaseBasePluginInstaller::extractPlanetDotName() : void
    - protected LightUserDatabaseBasePluginInstaller::removeLightStandardPermissions() : void
    - protected LightUserDatabaseBasePluginInstaller::dropTables(array $tables) : void
    - protected LightUserDatabaseBasePluginInstaller::hasTable(string $table) : bool

}






Methods
==============

- LightKitAdminBasePortPluginInstallerWithDatabase::__construct &ndash; Builds the LightKitAdminBasePluginInstallerWithDatabase instance.
- LightKitAdminBasePortPluginInstallerWithDatabase::install &ndash; Installs the plugin in the light application.
- LightKitAdminBasePortPluginInstallerWithDatabase::isInstalled &ndash; Returns whether the core install phase of the plugin is fully completed.
- LightKitAdminBasePortPluginInstallerWithDatabase::uninstall &ndash; Uninstalls the plugin.
- LightKitAdminBasePortPluginInstallerWithDatabase::getDependencies &ndash; Returns the array of dependencies.
- LightKitAdminBasePortPluginInstallerWithDatabase::error &ndash; Throws an exception.
- LightUserDatabaseBasePluginInstaller::setContainer &ndash; Sets the container.
- LightUserDatabaseBasePluginInstaller::getTableScope &ndash; Returns the [table scope](https://github.com/lingtalfi/TheBar/blob/master/discussions/table-scope.md) for this planet.
- LightUserDatabaseBasePluginInstaller::debugMsg &ndash; Writes a message to the debug channel of the plugin installer planet.
- LightUserDatabaseBasePluginInstaller::infoMsg &ndash; Writes a message to the info channel of the plugin installer planet.
- LightUserDatabaseBasePluginInstaller::warningMsg &ndash; Writes a message to the warning channel of the plugin installer planet.
- LightUserDatabaseBasePluginInstaller::message &ndash; Writes a message to the channel of the plugin installer planet.
- LightUserDatabaseBasePluginInstaller::synchronizeDatabase &ndash; Synchronizes the database with the create file (if any) of this planet.
- LightUserDatabaseBasePluginInstaller::extractPlanetDotName &ndash; Returns an array containing the galaxy name and the planet name of the current instance.
- LightUserDatabaseBasePluginInstaller::removeLightStandardPermissions &ndash; Removes the [light standard permissions](https://github.com/lingtalfi/TheBar/blob/master/discussions/light-standard-permissions.md) for this plugin.
- LightUserDatabaseBasePluginInstaller::dropTables &ndash; Drop the given tables, if they exist.
- LightUserDatabaseBasePluginInstaller::hasTable &ndash; Returns whether the given table exists in the database.





Location
=============
Ling\Light_Kit_Admin_UserDatabase\Light_PluginInstaller\LightKitAdminUserDatabasePluginInstaller<br>
See the source code of [Ling\Light_Kit_Admin_UserDatabase\Light_PluginInstaller\LightKitAdminUserDatabasePluginInstaller](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase/blob/master/Light_PluginInstaller/LightKitAdminUserDatabasePluginInstaller.php)



SeeAlso
==============
Previous class: [LightKitAdminUserDatabasePlanetInstaller](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase/blob/master/doc/api/Ling/Light_Kit_Admin_UserDatabase/Light_PlanetInstaller/LightKitAdminUserDatabasePlanetInstaller.md)<br>Next class: [LightKitAdminUserDatabaseService](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase/blob/master/doc/api/Ling/Light_Kit_Admin_UserDatabase/Service/LightKitAdminUserDatabaseService.md)<br>
