<?php 
class m_camiones extends MY_Model 
{		
	protected $_tablename	= 'camiones';
	protected $_id_table	= 'id_camion';
	protected $_order		= 'camion';
	protected $_relation    =  array(
        'id_tipo' => array(
            'table'     => 'camiones_tipos',
            'subjet'    => 'tipo'
        ),
        'id_estado' => array(
            'table'     => 'camiones_estados',
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