<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anticipos extends MY_Controller 
{
	protected $_subject = 'anticipos';
    protected $_model   = 'm_anticipos';
    
    function __construct()
    {
        parent::__construct(
            $subject    = $this->_subject,
            $model      = $this->_model 
        );
        
        $this->load->model($this->_model, 'model');  
        $this->load->model('m_conductores');
        $this->load->model('m_items');        
        $this->load->model('m_anticipos_tipos');
    } 
    
    
/*--------------------------------------------------------------------------------- 
-----------------------------------------------------------------------------------  
            
       Ejemplo de abm
  
----------------------------------------------------------------------------------- 
---------------------------------------------------------------------------------*/   
    
    
    function abm($id = NULL)
    {                           
        $db['conductores']  = $this->m_conductores->getRegistros();
        $db['items']        = $this->m_items->getRegistros();
        $db['tipos']        = $this->m_anticipos_tipos->getRegistros();
        
        $db['campos']   = array(
            array('select',   'id_conductor',  'conductor', $db['conductores'], 'required'),
            array('select',   'id_item',  'item', $db['items'], 'required'),
            array('fecha',    '', 'required'),
            array('total',    'onlyFloat', 'required'),
            array('select',   'id_tipos',  'tipo', $db['tipos']),
            array('comentario',    '', ''),
        );
        
        $this->armarAbm($id, $db);
    }
}
?>