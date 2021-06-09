<?php


namespace Overdose\Testimonials\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallSchema implements \Magento\Framework\Setup\InstallDataInterface
{

    const TBL_TESTIMONIALS = 'testimonial';

    /**
     * {@inheritDoc}
     */
    public function install(
        \Magento\Framework\Setup\ModuleDataSetupInterface $setup,
        \Magento\Framework\Setup\ModuleContextInterface $context
    ) {
        $setup->startSetup();
        $table = $setup->getConnection()->newTable($setup->getTable(self::TBL_TESTIMONIALS));
        $table->addColumn(
            'entity_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Testimonial Id'
        )->addColumn(
            'title',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            \Magento\Framework\DB\Ddl\Table::DEFAULT_TEXT_SIZE,
            [],
            'Testimonial Title'
        )->addColumn(
            'image',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            \Magento\Framework\DB\Ddl\Table::DEFAULT_TEXT_SIZE,
            [],
            'Testimonial Image'
        )->addColumn('message',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            \Magento\Framework\DB\Ddl\Table::DEFAULT_TEXT_SIZE,
            [],
            'Testimonial Message'
        )->addColumn(
            'created_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
            'Creation Time'
        )->addColumn(
            'updated_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
            'Update Time'
        )->addIndex(
            $setup->getIdxName(self::TBL_TESTIMONIALS, ['entity_id']),
            ['entity_id']
        )->setComment('Testimonial Table');

        $setup->endSetup();
    }
}