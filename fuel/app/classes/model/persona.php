<?php

class Model_Persona extends \Orm\Model {

    protected static $_properties = array(
        'id',
        'nombre' => array(
            'data_type' => 'string',
            'label' => 'Nombre',
            'validation' =>  array('required', 'max_length'=>array(45), 'min_length'=>array(2))
        ),
        'apellido' => array(
            'data_type' => 'string',
            'label' => 'Apellido',
            'validation' =>  array('required', 'max_length'=>array(45), 'min_length'=>array(2))
        ),
        'created_at',
        'updated_at',
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
    protected static $_table_name = 'personas';
    protected static $_primary_key = array('id');
    protected static $_has_one = array(
        'detalle_persona' => array(
            'key_from' => 'id',
            'model_to' => 'Model_Detalleper',
            'key_to' => 'id_persona'
        )
    );

    public static function getPersona() {
        $query = DB::select()->from('personas')->execute()->as_array();
        return $query;
        // return static::find('all');
        // return static::find('all');
        // return static::find('all');
        // return static::find('all');
        //se hizo un cambio ahora útimo
    }

}
