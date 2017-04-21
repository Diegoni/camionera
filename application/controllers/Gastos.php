<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gastos extends MY_Controller 
{
	protected $_subject = 'gastos';
    protected $_model   = 'm_gastos';
    
    function __construct()
    {
        parent::__construct(
            $subject    = $this->_subject,
            $model      = $this->_model 
        );
        
        $this->load->model($this->_model, 'model');  
        $this->load->model('m_viajes');
        $this->load->model('m_items');
    } 
    
    
/*--------------------------------------------------------------------------------- 
-----------------------------------------------------------------------------------  
            
       Ejemplo de abm
  
----------------------------------------------------------------------------------- 
---------------------------------------------------------------------------------*/   
    
    
    function abm($id = NULL)
    {                           
        $db['viajes']    = $this->m_viajes->getRegistros();
        $db['items']  = $this->m_items->getRegistros();
        
        
        $db['campos']   = array(
            array('select',   'id_item',  'item', $db['items'], 'required'),
            array('total',    'onlyChar', 'required'),
            array('comentario',    '', ''),
        );
        
        $this->armarAbm($id, $db);
    }
}
?>