[Back to the Ling/Light_DatabaseInfo api](https://github.com/lingtalfi/Light_DatabaseInfo/blob/master/doc/api/Ling/Light_DatabaseInfo.md)



The LightDatabaseInfoService class
================
2019-09-12 --> 2019-09-12






Introduction
============

The LightDatabaseInfoService class.



Class synopsis
==============


class <span class="pl-k">LightDatabaseInfoService</span>  {

- Properties
    - protected string [$cacheDir](#property-cacheDir) ;
    - protected Ling\Light\ServiceContainer\LightServiceContainerInterface [$container](#property-container) ;
    - protected string [$database](#property-database) ;

- Methods
    - public [__construct](https://github.com/lingtalfi/Light_DatabaseInfo/blob/master/doc/api/Ling/Light_DatabaseInfo/Service/LightDatabaseInfoService/__construct.md)() : void
    - public [getTableInfo](https://github.com/lingtalfi/Light_DatabaseInfo/blob/master/doc/api/Ling/Light_DatabaseInfo/Service/LightDatabaseInfoService/getTableInfo.md)(string $table, bool $reload = false) : array
    - public [setCacheDir](https://github.com/lingtalfi/Light_DatabaseInfo/blob/master/doc/api/Ling/Light_DatabaseInfo/Service/LightDatabaseInfoService/setCacheDir.md)(string $cacheDir) : void
    - public [setContainer](https://github.com/lingtalfi/Light_DatabaseInfo/blob/master/doc/api/Ling/Light_DatabaseInfo/Service/LightDatabaseInfoService/setContainer.md)(Ling\Light\ServiceContainer\LightServiceContainerInterface $container) : void
    - public [setDatabase](https://github.com/lingtalfi/Light_DatabaseInfo/blob/master/doc/api/Ling/Light_DatabaseInfo/Service/LightDatabaseInfoService/setDatabase.md)(string $database) : void

}




Properties
=============

- <span id="property-cacheDir"><b>cacheDir</b></span>

    This property holds the cacheDir for this instance.
    
    

- <span id="property-container"><b>container</b></span>

    This property holds the container for this instance.
    
    

- <span id="property-database"><b>database</b></span>

    This property holds the database for this instance.
    
    



Methods
==============

- [LightDatabaseInfoService::__construct](https://github.com/lingtalfi/Light_DatabaseInfo/blob/master/doc/api/Ling/Light_DatabaseInfo/Service/LightDatabaseInfoService/__construct.md) &ndash; Builds the LightDatabaseInfoService instance.
- [LightDatabaseInfoService::getTableInfo](https://github.com/lingtalfi/Light_DatabaseInfo/blob/master/doc/api/Ling/Light_DatabaseInfo/Service/LightDatabaseInfoService/getTableInfo.md) &ndash; Returns the info array for the given table.
- [LightDatabaseInfoService::setCacheDir](https://github.com/lingtalfi/Light_DatabaseInfo/blob/master/doc/api/Ling/Light_DatabaseInfo/Service/LightDatabaseInfoService/setCacheDir.md) &ndash; Sets the cacheDir.
- [LightDatabaseInfoService::setContainer](https://github.com/lingtalfi/Light_DatabaseInfo/blob/master/doc/api/Ling/Light_DatabaseInfo/Service/LightDatabaseInfoService/setContainer.md) &ndash; Sets the container.
- [LightDatabaseInfoService::setDatabase](https://github.com/lingtalfi/Light_DatabaseInfo/blob/master/doc/api/Ling/Light_DatabaseInfo/Service/LightDatabaseInfoService/setDatabase.md) &ndash; Sets the database.





Location
=============
Ling\Light_DatabaseInfo\Service\LightDatabaseInfoService<br>
See the source code of [Ling\Light_DatabaseInfo\Service\LightDatabaseInfoService](https://github.com/lingtalfi/Light_DatabaseInfo/blob/master/Service/LightDatabaseInfoService.php)



