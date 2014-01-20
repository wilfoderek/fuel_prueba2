<?php

class Model_Detalleper extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'id_persona',
		'num_hijo',
		'direccion'
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);
	protected static $_table_name = 'detallepers';
        protected static $_belongs_to = array(
        'personas' => array(
            'key_from' => 'id_persona',
            'model_to' => 'Model_Persona',
            'key_to' => 'id'
        )
       );

}
