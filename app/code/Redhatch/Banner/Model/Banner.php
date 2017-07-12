<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 12/07/2017
 * Time: 22:00
 */

namespace Redhatch\Banner\Model;

/**
 * @method \Redhatch\Banner\Model\ResourceModel\Banner getResource()
 * @method \Redhatch\Banner\Model\ResourceModel\Banner\Collection getCollection()
 */
class Banner extends \Magento\Framework\Model\AbstractModel implements \Redhatch\Banner\Api\Data\BannerInterface,
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'redhatch_banner_banner';
    protected $_cacheTag = 'redhatch_banner_banner';
    protected $_eventPrefix = 'redhatch_banner_banner';

    protected function _construct()
    {
        $this->_init('Redhatch\Banner\Model\ResourceModel\Banner');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}