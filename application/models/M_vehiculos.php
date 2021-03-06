<?php 
class m_vehiculos extends MY_Model 
{		
	protected $_tablename	= 'vehiculos';
	protected $_id_table	= 'id_vehiculo';
	protected $_order		= 'vehiculo';
	protected $_relation    =  array(
        'id_tipo' => array(
            'table'     => 'vehiculos_tipos',
            'subjet'    => 'tipo'
        ),
        'id_estado' => array(
            'table'     => 'vehiculos_estados',
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