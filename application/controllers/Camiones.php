<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Camiones extends MY_Controller 
{
	protected $_subject = 'camiones';
    protected $_model   = 'm_camiones';
    
    function __construct()
    {
        parent::__construct(
            $subject    = $this->_subject,
            $model      = $this->_model 
        );
        
        $this->load->model($this->_model, 'model');  
        $this->load->model('m_camiones_tipos');
        $this->load->model('m_camiones_estados');
    } 
    
    
/*--------------------------------------------------------------------------------- 
-----------------------------------------------------------------------------------  
            
       Ejemplo de abm
  
----------------------------------------------------------------------------------- 
---------------------------------------------------------------------------------*/   
    
    
    function abm($id = NULL)
    {                           
        $db['tipos']    = $this->m_camiones_tipos->getRegistros();
        $db['estados']  = $this->m_camiones_estados->getRegistros();
        
        
        $db['campos']   = array(
            array('camion',    '', 'required'),
            array('patente',   '', 'required'),
            array('modelo',   '', ''),
            array('chasis',   '', ''),
            array('select',   'id_tipo',  'tipo', $db['tipos']),
            array('select',   'id_estado',  'estado', $db['estados']),
            array('comentario',    '', ''),
        );
        
        $this->armarAbm($id, $db);
    }
}
?>