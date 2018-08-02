<?php
/**
 * tank-blog
 *
 * @author    liu hao<liu546hao@163.com>
 * @copyright liu hao<liu546hao@163.com>
 */

namespace root\models;


use engine\application\base\Component;
use root\database\mongodb\MongoDB;

class BaseModel extends Component
{
    public $collection = '';

    /**
     * @return \MongoDB\Collection
     */
    public function getDb()
    {
        $collection = $this->collection;
        if (empty($collection)) {
            throw new \InvalidArgumentException("集合未指定");
        }

        return MongoDB::instance()->$collection;
    }


    /**
     * @param array $conditions
     * @param array $options
     * @return \MongoDB\Driver\Cursor
     */
    public function find(array $conditions = [], array $options = [])
    {
        $collection = $this->getDb();
        return $collection->find($conditions, $options);
    }


    /**
     * @param $data
     * @param array $options
     * @return \MongoDB\InsertOneResult
     */
    public function insertOne($data, array $options = [])
    {
        $collection = $this->getDb();
        return $collection->insertOne($data, $options);
    }


    /**
     * @param array $conditions
     * @param array $update
     * @param array $options
     * @return \MongoDB\UpdateResult
     */
    public function updateOne(array $conditions, array $update, array $options = [])
    {
        $collection = $this->getDb();
        return $collection->updateOne($conditions, $update, $options);
    }
}