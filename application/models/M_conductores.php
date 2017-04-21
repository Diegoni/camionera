<?php 
class m_conductores extends MY_Model 
{		
	protected $_tablename	= 'conductores';
	protected $_id_table	= 'id_conductor';
	protected $_order		= 'conductor';
	protected $_relation    =  array(
        'id_tipo' => array(
            'table'     => 'conductores_tipos',
            'subjet'    => 'tipo'
        ),
        'id_estado' => array(
            'table'     => 'conductores_estados',
            'subjet'    => 'estado'
        ),
        'id_forma_juridica' => array(
            'table'     => 'formas_juridicas',
            'subjet'    => 'forma_juridica'
        ),
        'id_localidad' => array(
            'table'     => 'localidades',
            'subjet'    => 'localidad'
        ),
        'id_provincia' => array(
            'table'     => 'provincias',
            'subjet'    => 'provincia'
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