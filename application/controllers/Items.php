<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items extends MY_Controller 
{
	protected $_subject = 'items';
    protected $_model   = 'm_items';
    
    function __construct()
    {
        parent::__construct(
            $subject    = $this->_subject,
            $model      = $this->_model 
        );
        
        $this->load->model($this->_model, 'model');  
    } 
    
    
/*--------------------------------------------------------------------------------- 
-----------------------------------------------------------------------------------  
            
       Ejemplo de abm
  
----------------------------------------------------------------------------------- 
---------------------------------------------------------------------------------*/   
    
    
    function abm($id = NULL)
    {                           
        $db['campos']   = array(
            array('item',    'onlyChar', 'required'),
        );
        
        $this->armarAbm($id, $db);
    }
}
?>