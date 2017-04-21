<?php 
class m_sueldos_estados extends MY_Model 
{		
	protected $_tablename	= 'sueldos_estados';
	protected $_id_table	= 'id_estado';
	protected $_order		= 'estado';
	protected $_relation    = '';
		
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