<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 12/07/2017
 * Time: 22:01
 */

namespace Redhatch\Banner\Model\ResourceModel;

class BannerItem extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    protected function _construct()
    {
        $this->_init('redhatch_banner_item', 'redhatch_banner_item_id');
    }

}