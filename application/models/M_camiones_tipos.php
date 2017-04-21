<?php 
class m_camiones_tipos extends MY_Model 
{		
	protected $_tablename	= 'camiones_tipos';
	protected $_id_table	= 'id_tipo';
	protected $_order		= 'tipo';
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