<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 12/07/2017
 * Time: 21:57
 */

namespace Redhatch\Banner\Setup;

class Uninstall implements \Magento\Framework\Setup\UninstallInterface
{
    public function uninstall(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        // $installer->getConnection()->dropTable($installer->getTable(SOME TABLE TO DROP));

        $installer->endSetup();
    }
}