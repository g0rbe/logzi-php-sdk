<?php

/**
 * Delivery_note_out
 *
 * @link https://www.logzi.com/erp-rendszer/szallitas-4/szallitolevel-24
 * @author info@numinc.com
**/

class Delivery_note_out_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'delivery-note-out/get', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'delivery-note-out/list', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'delivery-note-out/save', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'delivery-note-out/delete', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function close($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'delivery-note-out/close', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}
	
	function download($params = array()){
		try {            
			return $this->call('GET', $this->get_api_endpoint().'delivery-note-out/download', $params);	
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


