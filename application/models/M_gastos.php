<?php 
class m_gastos extends MY_Model 
{		
	protected $_tablename	= 'gastos';
	protected $_id_table	= 'id_gasto';
	protected $_order		= 'id_gasto';
	protected $_relation    =  array(
        'id_item' => array(
            'table'     => 'items',
            'subjet'    => 'item'
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