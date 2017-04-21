<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conductores extends MY_Controller 
{
	protected $_subject = 'conductores';
    protected $_model   = 'm_conductores';
    
    function __construct()
    {
        parent::__construct(
            $subject    = $this->_subject,
            $model      = $this->_model 
        );
        
        $this->load->model($this->_model, 'model');  
        $this->load->model('m_formas_juridicas');
        $this->load->model('m_conductores_tipos');        
        $this->load->model('m_conductores_estados');
        $this->load->model('m_provincias');
        $this->load->model('m_localidades');
    } 
    
    
/*--------------------------------------------------------------------------------- 
-----------------------------------------------------------------------------------  
            
       Ejemplo de abm
  
----------------------------------------------------------------------------------- 
---------------------------------------------------------------------------------*/   
    
    
    function abm($id = NULL)
    {                           
        $db['formas_juridicas']    = $this->m_formas_juridicas->getRegistros();
        $db['tipos']    = $this->m_conductores_tipos->getRegistros();
        $db['estados']    = $this->m_conductores_estados->getRegistros();
        $db['provincias']   = $this->m_provincias->getRegistros();
                
        if($id != NULL)
        {
            $registros = $this->model->getRegistros($id);
            foreach ($registros as $registro) 
            {
                $id_provincia = $registro->id_provincia;    
            }
            
            $db['localidades'] = $this->m_localidades->getRegistros($id_provincia, 'id_provincia');
        }else
        {
            $db['localidades'] = '';
        }
        
        $db['campos']   = array(
            array('conductor', 'onlyChar', 'required'),
            array('sueldo',    'onlyFloat', 'required'),
            array('email',    '', ''),
            array('telefono',    '', ''),
            array('telefono_alternativo',    '', ''),
            array('select',   'id_forma_juridica',  'forma_juridica', $db['formas_juridicas']),
            array('calle',    '', ''),
            array('calle_numero',    'onlyInt', ''),
            array('select',   'id_provincia',  'provincia', $db['provincias'], 'onchange="provincias_activas()"'),
            array('select',   'id_localidad',  'localidad', $db['localidades']),
            array('dni',    '[99.999.999]', ''),
            array('cuit',    '[99-99999999-9]', ''),
            array('select',   'id_tipo',  'tipo', $db['tipos']),
            array('select',   'id_estado',  'estado', $db['estados']),
            array('comentario',    '', ''),
        );
        
        $this->armarAbm($id, $db);
    }
}
?>