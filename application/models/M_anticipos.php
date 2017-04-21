<?php 
class m_anticipos extends MY_Model 
{		
	protected $_tablename	= 'anticipos';
	protected $_id_table	= 'id_anticipo';
	protected $_order		= 'id_anticipo';
	protected $_relation    =  array(
        'id_conductor' => array(
            'table'     => 'conductores',
            'subjet'    => 'conductor'
        ),
        'id_item' => array(
            'table'     => 'items',
            'subjet'    => 'item'
        ),
        'id_sueldo' => array(
            'table'     => 'sueldos',
            'subjet'    => 'sueldo'
        ),
        'id_estado' => array(
            'table'     => 'anticipos_estados',
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