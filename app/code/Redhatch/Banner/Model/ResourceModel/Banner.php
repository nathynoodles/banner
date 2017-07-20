<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 12/07/2017
 * Time: 22:00
 */

namespace Redhatch\Banner\Model\ResourceModel;

class Banner extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    protected function _construct()
    {
        $this->_init('redhatch_banner', 'entity_id');
    }

}