<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vehiculos extends MY_Controller 
{
	protected $_subject = 'vehiculos';
    protected $_model   = 'm_vehiculos';
    
    function __construct()
    {
        parent::__construct(
            $subject    = $this->_subject,
            $model      = $this->_model 
        );
        
        $this->load->model($this->_model, 'model');  
        $this->load->model('m_vehiculos_tipos');
        $this->load->model('m_vehiculos_estados');
    } 
    
    
/*--------------------------------------------------------------------------------- 
-----------------------------------------------------------------------------------  
            
       Ejemplo de abm
  
----------------------------------------------------------------------------------- 
---------------------------------------------------------------------------------*/   
    
    
    function abm($id = NULL)
    {                           
        $db['tipos']    = $this->m_vehiculos_tipos->getRegistros();
        $db['estados']  = $this->m_vehiculos_estados->getRegistros();
        
        
        $db['campos']   = array(
            array('vehiculo',    '', 'required'),
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