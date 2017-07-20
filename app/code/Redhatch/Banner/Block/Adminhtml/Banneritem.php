<?php

namespace Redhatch\Banner\Block\Adminhtml;

class Banneritem extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_blockGroup = 'Redhatch_Banner';
        $this->_controller = 'adminhtml_banneritem';
        $this->_headerText = __('Banner Items');
        $this->_addButtonLabel = __('Add New Banner Item');
        parent::_construct();

    }
}
