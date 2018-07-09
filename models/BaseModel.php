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
    public function getCollection()
    {
        $collection = $this->collection;
        if (empty($collection)) {
            throw new \InvalidArgumentException("集合未指定");
        }

        return MongoDB::instance()->$collection;
    }
}