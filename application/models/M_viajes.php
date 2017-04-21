<?php 
class m_viajes extends MY_Model 
{		
	protected $_tablename	= 'viajes';
	protected $_id_table	= 'id_viaje';
	protected $_order		= 'id_viaje';
	protected $_relation    =  array(
        'id_conductor' => array(
            'table'     => 'conductores',
            'subjet'    => 'conductor'
        ),
        'id_vehiculo' => array(
            'table'     => 'vehiculos',
            'subjet'    => 'vehiculo'
        ),
        'id_tipo' => array(
            'table'     => 'viajes_tipos',
            'subjet'    => 'tipo'
        ),  
        'id_estado' => array(
            'table'     => 'viajes_estados',
            'subjet'    => 'estado'
        ),  
    );
		
	function __construct()
	{
		parent::__construct(
			$tablename		= $this->_tablename, 
			$id_table		= $this->_id_table, 
			$order			= $this->_order,
			$relation		= $this->_relation
		);
	}
} 
?>