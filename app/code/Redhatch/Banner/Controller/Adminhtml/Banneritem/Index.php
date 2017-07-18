<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 18/07/2017
 * Time: 20:53
 */

namespace Redhatch\Banner\Controller\Adminhtml\Banneritem;
class Index extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Redhatch_Banner::banneritem';

    public function execute()
    {
        exit('banneritem');
        $this->_view->loadLayout();
        $this->_setActiveMenu('Redhatch_banner::banneritem');
        $this->_addBreadcrumb(__('Banner Manager'), __('Banner Items'));
        $this->_view->renderLayout();
    }

}