<?php

namespace Fuel\Migrations;

class Create_detalle_personas
{
	public function up()
	{
		\DBUtil::create_table('detalle_personas', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'id_persona' => array('constraint' => 11, 'type' => 'int'),
			'num_hijo' => array('constraint' => 11, 'type' => 'int'),
			'direccion' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('detalle_personas');
	}
}