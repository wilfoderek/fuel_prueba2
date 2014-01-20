<?php

namespace Fuel\Migrations;

class Create_test
{
	public function up()
	{
		\DBUtil::create_table('test', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'nombre' => array('constraint' => 255, 'type' => 'varchar'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('test');
	}
}