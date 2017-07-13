<?php
/**
 * Created by Nathan Chick.
 * User: nathan
 * Date: 12/07/2017
 * 
 * Time: 21:57
 */

namespace Redhatch\Banner\Setup;

class Uninstall implements \Magento\Framework\Setup\UninstallInterface
{
    public function uninstall(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        if ( ! $installer->tableExists( $installer->getTable('redhatch_banner_item') ) ) {
            $installer->getConnection()->dropTable($installer->getTable('redhatch_banner_item'));
        }

        if ( ! $installer->tableExists( $installer->getTable('redhatch_banner') ) ) {
            $installer->getConnection()->dropTable($installer->getTable('redhatch_banner'));
        }

        $installer->endSetup();
    }
}