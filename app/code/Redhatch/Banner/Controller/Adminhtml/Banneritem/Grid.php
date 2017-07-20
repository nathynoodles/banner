<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 18/07/2017
 * Time: 20:53
 */

namespace Redhatch\Banner\Controller\Adminhtml\Banneritem;
class Grid extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Redhatch_Banner::banneritem';

    /**
     * @return void
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_setActiveMenu('Redhatch_banner::banneritem');
        $this->_addBreadcrumb(__('Banner Manager'), __('Banners'));
        $this->_view->renderLayout();
    }
}
