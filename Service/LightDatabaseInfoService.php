<?php


namespace Ling\Light_DatabaseInfo\Service;


use Ling\Light\ServiceContainer\LightServiceContainerInterface;
use Ling\SimplePdoWrapper\SimplePdoWrapperInterface;
use Ling\SimplePdoWrapper\Util\MysqlInfoUtil;

/**
 * The LightDatabaseInfoService class.
 */
class LightDatabaseInfoService
{

    /**
     * This property holds the cacheDir for this instance.
     * @var string
     */
    protected $cacheDir;

    /**
     * This property holds the container for this instance.
     * @var LightServiceContainerInterface
     */
    protected $container;

    /**
     * This property holds the database for this instance.
     * @var string
     */
    protected $database;


    /**
     * Builds the LightDatabaseInfoService instance.
     */
    public function __construct()
    {
        $this->cacheDir = null;
        $this->container = null;
        $this->database = null;
    }


    /**
     * Returns the info array for the given table.
     * The info array contains the following entries:
     *
     * - columns: an array of the column names
     * - primary: an array of the column names of the primary key (empty if no primary key)
     *
     *
     * If the reload flag is set to true, the cache will be refreshed before the result is returned.
     * Otherwise, if reload=false, the cached result will be returned.
     *
     *
     * @param string $table
     * @param bool $reload
     * @return array
     * @throws \Exception
     */
    public function getTableInfo(string $table, bool $reload = false): array
    {
        $ret = [];
        /**
         * @var $db SimplePdoWrapperInterface
         */
        $pdoWrapper = $this->container->get("database");
        $util = new MysqlInfoUtil($pdoWrapper);
        $databaseHasChanged = false;
        $currentDb = $util->getDatabase();
        if (null !== $this->database && $this->database !== $currentDb) {
            $util->changeDatabase($this->database);
            $databaseHasChanged = true;
        }


        $colNames = $util->getColumnNames($table);
        $ret['columns'] = $colNames;

        $primary = $util->getPrimaryKey($table);
        $ret['primary'] = $primary;

        $ric = $util->getRic($table);
        $ret['ric'] = $ric;

        /**
         * Note: as for now, I didn't implement cache, because the perfs didn't ask for it.
         * But to implement it, just add the cache layer exactly here (i.e. cache the ret array)
         */

        if (true === $databaseHasChanged) {
            $util->changeDatabase($currentDb);
        }
        return $ret;
    }


    //--------------------------------------------
    //
    //--------------------------------------------
    /**
     * Sets the cacheDir.
     *
     * @param string $cacheDir
     */
    public function setCacheDir(string $cacheDir)
    {
        $this->cacheDir = $cacheDir;
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

    /**
     * Sets the database.
     *
     * @param string $database
     */
    public function setDatabase(string $database)
    {
        $this->database = $database;
    }
}