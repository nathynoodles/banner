<?php

namespace Redhatch\Banner\Block\Adminhtml;

class Banner extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_blockGroup = 'Redhatch_Banner';
        $this->_controller = 'adminhtml_banner';
        $this->_headerText = __('Banners');
        $this->_addButtonLabel = __('Add New Banner');
        parent::_construct();

    }
}
