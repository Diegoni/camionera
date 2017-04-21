<?php 
class m_items extends MY_Model 
{		
	protected $_tablename	= 'items';
	protected $_id_table	= 'id_item';
	protected $_order		= 'item';
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