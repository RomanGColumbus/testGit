<?php

use Phinx\Migration\AbstractMigration;

class TestMigration2 extends AbstractMigration
{
 /**
     * Migrate Up.
     */
    public function up()
    {
        $posts = $this->table('table2');
        $posts->addColumn('title', 'string', array('limit' => 40))
              ->addColumn('body', 'text')
              ->addColumn('created', 'datetime')
              ->save();
    }
    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('table2');
    }
}
