<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 12/07/2017
 * Time: 22:01
 */

namespace Redhatch\Banner\Model;

/**
 * @method \Redhatch\Banner\Model\ResourceModel\BannerItem getResource()
 * @method \Redhatch\Banner\Model\ResourceModel\BannerItem\Collection getCollection()
 */
class BannerItem extends \Magento\Framework\Model\AbstractModel implements \Redhatch\Banner\Api\Data\BannerItemInterface,
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'redhatch_banner_banneritem';
    protected $_cacheTag = 'redhatch_banner_banneritem';
    protected $_eventPrefix = 'redhatch_banner_banneritem';

    protected function _construct()
    {
        $this->_init('Redhatch\Banner\Model\ResourceModel\BannerItem');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}