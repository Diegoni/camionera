<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Viajes extends MY_Controller 
{
	protected $_subject = 'viajes';
    protected $_model   = 'm_viajes';
    
    function __construct()
    {
        parent::__construct(
            $subject    = $this->_subject,
            $model      = $this->_model 
        );
        
        $this->load->model($this->_model, 'model');  
        $this->load->model('m_conductores');
        $this->load->model('m_vehiculos');
        $this->load->model('m_viajes_tipos');
    } 
    
    
/*--------------------------------------------------------------------------------- 
-----------------------------------------------------------------------------------  
            
       Ejemplo de abm
  
----------------------------------------------------------------------------------- 
---------------------------------------------------------------------------------*/   
    
    
    function abm($id = NULL)
    {
        $db['conductores'] = $this->m_conductores->getRegistros();
        $db['vehiculos'] = $this->m_vehiculos->getRegistros();
        $db['tipos'] = $this->m_viajes_tipos->getRegistros();
                                   
        $db['campos']   = array(
            array('select',    'id_conductor', 'conductor', $db['conductores']),
            array('select',    'id_vehiculo', 'vehiculo', $db['vehiculos']),
            array('destino',    '', ''),
            array('fecha_salida',    '', ''),
            array('fecha_llegada',    '', ''),
            array('caja_inicial',    '', ''),
            array('select',    'id_tipo', 'tipo', $db['tipos']),
            array('comentario',    '', ''),
        );
        
        $this->armarAbm($id, $db);
    }
}
?>