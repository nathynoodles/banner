<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 12/07/2017
 * Time: 22:01
 */

namespace Redhatch\Banner\Model\ResourceModel\BannerItem;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'redhatch_banner_item_id';


    protected function _construct()
    {
        $this->_init('Redhatch\Banner\Model\BannerItem', 'Redhatch\Banner\Model\ResourceModel\BannerItem');
    }

}