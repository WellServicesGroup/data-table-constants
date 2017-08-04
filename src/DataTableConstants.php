<?php

namespace WellServicesGroup\DataTableConstants;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

class DataTableConstants
{
    protected $tableDefinitions;

    public function __construct()
    {
        foreach (File::files(__DIR__ . '/definitions') as $file) {
            $this->addDefinition(
                pathinfo($file, PATHINFO_FILENAME),
                require($file)
            );
        }
    }

    /**
     * @param $tableName
     * @return array
     */
    public function getColumnNames($tableName = null)
    {
        if (array_key_exists($tableName, $this->tableDefinitions)) {
            return $this->tableDefinitions[$tableName]['columns'];
        }

        return array_reduce($this->tableDefinitions, function ($result, $table) {
            $result = array_merge($result, array_keys($table['columns']));
            return $result;
        }, []);
    }

    /**
     * @param $tableName
     * @return array
     */
    public function getOrder($tableName)
    {
        if (array_key_exists($tableName, $this->tableDefinitions)
            && array_key_exists('order', $this->tableDefinitions[$tableName])
        ) {
            return $this->tableDefinitions[$tableName]['order'];
        }

        return [
            [
                0,
                'asc',
            ],
        ];
    }

    /**
     * @param $tableName
     * @return bool
     */
    public function isAjax($tableName)
    {
        return array_key_exists($tableName, $this->tableDefinitions)
            && array_key_exists('ajax', $this->tableDefinitions[$tableName])
            && array_key_exists('url', $this->tableDefinitions[$tableName]['ajax']);
    }

    /**
     * @param $tableName
     * @return array
     */
    public function getAjaxColumns($tableName)
    {
        if ($this->isAjax($tableName)
            && key_exists('columns', $this->tableDefinitions[$tableName]['ajax'])
        ) {
            return $this->tableDefinitions[$tableName]['ajax']['columns'];
        }

        return [];
    }

    /**
     * @param        $tableName
     * @param string $type
     * @return null
     */
    public function getAjaxUrl($tableName, $type = 'route')
    {
        if ($this->isAjax($tableName)
            && key_exists('url', $this->tableDefinitions[$tableName]['ajax'])
        ) {
            $url = $this->tableDefinitions[$tableName]['ajax']['url'];

            switch ($type) {
                case 'route':
                    return URL::route($url);
                    break;
                case 'string':
                    return $url;
                    break;
            }
        }

        return null;
    }

    /**
     * @param $table
     * @param $definition
     */
    public function addDefinition($table, $definition)
    {
        $this->tableDefinitions[$table] = $definition;
    }
}
