<?php
/**
 * tank-blog
 *
 * @author    liu hao<liu546hao@163.com>
 * @copyright liu hao<liu546hao@163.com>
 */

namespace engine\application\db;


interface QueryInterface
{
    public function find();

    public function select();

    public function from();

    public function where();

    public function leftJoin();

    public function rightJoin();

    public function groupBy();

    public function having();

    public function orderBy();

    public function limit();

    public function offset();
}