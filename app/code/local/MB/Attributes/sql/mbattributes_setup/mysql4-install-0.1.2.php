<?php

$installer = $this;
$installer->startSetup();

$installer->getConnection()
    ->addColumn($installer->getTable('salesrule'),
        'coupon_cost',
        array(
            'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
            'length'    => '10,2',
            'nullable' => false,
            'default'   => 0.00,
            'comment' => 'coupon_cost'
        )
    );

$installer->endSetup();