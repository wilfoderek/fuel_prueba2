<?php

namespace Fuel\Migrations;

class Create_personas_2
{
	public function up()
	{
		\DBUtil::create_table('personas_2', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'nombre' => array('constraint' => 255, 'type' => 'varchar'),
			'apellido' => array('constraint' => 255, 'type' => 'varchar'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('personas_2');
	}
}