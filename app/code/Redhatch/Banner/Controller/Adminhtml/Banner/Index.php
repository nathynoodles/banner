<?php
/**
 *
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Redhatch\Banner\Controller\Adminhtml\Banner;

class Index extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Redhatch_Banner::banner';

    /**
     * @return void
     */
    public function execute()
    {
        exit('banner');
        $this->_view->loadLayout();
        $this->_setActiveMenu('Redhatch_banner::banner');
        $this->_addBreadcrumb(__('Banner Manager'), __('Banners'));
        $this->_view->renderLayout();
    }
}
