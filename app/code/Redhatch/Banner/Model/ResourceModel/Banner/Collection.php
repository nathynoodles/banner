<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 12/07/2017
 * Time: 22:00
 */

namespace Redhatch\Banner\Model\ResourceModel\Banner;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'redhatch_banner_id';


    protected function _construct()
    {
        $this->_init('Redhatch\Banner\Model\Banner', 'Redhatch\Banner\Model\ResourceModel\Banner');
    }

}