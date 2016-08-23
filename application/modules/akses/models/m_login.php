<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Manggu Framework
 * Simple PHP Application Development
 * Kusnassriyanto S. Bahri
 * kusnassriyanto@gmail.com
 * 
 */

class m_login extends MY_Model
{
    var $fieldTypes;
    var $crudData;
    var $actionTypes;
    var $crudName;
    var $actionName;
    var $sessionData = array();
    var $userInfo = array();
    var $namespace = '';
    var $ismodal = true;
    var $defaultParams = array();
    var $mustache_loaded = false;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('user_agent');
    }
    
    
    
    
}



?>
