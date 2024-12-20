<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property object $load 
 * @property object $db
 */

class Language_model extends CI_Model {

	public function __construct() {

        parent::__construct();
        $this->load->database();
    }
	
	var $column_order = array(null, 'L.lang_key','L.lang_value','L.language');
	var $column_search = array('L.lang_key','L.lang_value','L.language');
	var $order = array('L.sno' => 'DESC'); // default order
	var $request_details  = 'language_management L';

	var $app_column_order = array(null, 'L.lang_key','L.lang_value','L.language');
	var $app_column_search = array('L.lang_key','L.lang_value','L.language');
	var $app_order = array('L.sno' => 'DESC'); // default order
	var $app_request_details  = 'app_language_management L';
	var $users  = 'pages P';

	private function p_get_datatables_query()
	{


		$this->db->select('L.*');
		$this->db->from($this->request_details);
			$i = 0;

			foreach ($this->column_search as $item) // loop column
			{
					if($_POST['search']['value']) // if datatable send POST for search
					{

							if($i===0) // first loop
							{
									$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
									$this->db->like($item, $_POST['search']['value']);
							}
							else
							{

								if($item == 'status'){
									if(strtolower($_POST['search']['value'])=='active'){
										$search_val = 1;
										$this->db->or_like($item, $search_val);
									}
									if(strtolower($_POST['search']['value'])=='inactive'){
										$search_val = 0;
										$this->db->or_like($item, $search_val);
									}


									}else{
										$search_val = $_POST['search']['value'];
										$this->db->or_like($item, $search_val);
									}

							}

							if(count($this->column_search) - 1 == $i) //last loop
									$this->db->group_end(); //close bracket
					}
					$i++;
			}

			if(isset($_POST['order'])) // here order processing
			{
					$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			}
			else if(isset($this->order))
			{
					$order = $this->order;
					$this->db->order_by(key($order), $order[key($order)]);
			}
	}

    public function language_list(){
      $this->p_get_datatables_query();
        if($_POST['length'] != -1)
	    $this->db->limit($_POST['length'], $_POST['start']);
        $this->db->group_by(array('L.lang_key'));
        $query = $this->db->get();
        return $query->result_array();
    }

    public function language_list_all(){
	    $this->db->from($this->request_details);
        $this->db->group_by(array('L.lang_key'));
    	return $this->db->count_all_results();
    }

    public function language_list_filtered(){

          $this->p_get_datatables_query();
		  $this->db->group_by(array('L.lang_key'));
          $query = $this->db->get();
          return $query->num_rows();
    }
		public function currenct_page_key_value($inputs){ 
    	 
    	$my_keys = array();
    	if(!empty($inputs)){
    		foreach ($inputs as $input) {
    			$my_keys[] = $input['lang_key'];
    		}
    	}
     

    	$my_final_values = array();
    	if(!empty($my_keys)){
    		
    		$this->db->select('sno,lang_key,lang_value,language');
       		$this->db->from('language_management');
          	$this->db->where_in('lang_key',$my_keys);
          	$this->db->order_by('lang_key');
          	$my_final = $this->db->get()->result_array();
    		 if(!empty($my_final)){
    		 	foreach ($my_final as $keyvalue) {
    		 		$my_final_values[$keyvalue['lang_key']][$keyvalue['language']] = $keyvalue['lang_value'];
    		 	}
    		 }

    	}
     return $my_final_values;  
    } 

		

    public function languages_list()
    {
    	return $this->db->get('language')->result_array();
    }

     public function active_language()
    {

         return $this->db->where('status',1)->get('language')->result_array();
    }

    public function page_list()
	{
		return $this->db->get('pages')->result_array();
	}

	public function add_page()

	{ 

	        if (!empty($_POST['page_name'])) {

		        $data = array();

		        $page_name =trim($_POST['page_name']);

		        $page_key = str_replace(array(' ','!','&'),'_',strtolower($page_name));

		        $data['page_title'] = $page_name;

		        $data['page_key'] = $page_key;

		        $data['status'] = 1;

		         $this->db->where($data);

		        $record = $this->db->count_all_results('pages');

		        if($record >= 1)

		        {

		            return false;

		        }else{

		            $result = $this->db->insert('pages', $data);

		            return $result;

		       }

	    }
   

	}

	public function add_app_keywords()

	{ 

	        if (!empty($_POST['field_name'])) {

	            

	        $data = array();
	        $datas = array();

	        $field_name =trim($_POST['field_name']);

	        $data['lang_key'] = $field_name;
	        $data['page_key'] = $_POST['page_key'];
	        $data['language'] = 'en';

	        $this->db->where($data);

	        $record = $this->db->count_all_results('app_language_management');

	        if($record >= 1)

	        {

	            return false;

	        }else{

	        	$datas['lang_key'] = $field_name;
	        	$datas['lang_value'] = trim($_POST['name']);
	        	$datas['page_key'] = $_POST['page_key'];
	        	$datas['type'] = $_POST['type'];
	        	 $datas['language'] = 'en';

	            $result = $this->db->insert('app_language_management', $datas);

	            return $result;

	       }

	    }

	
	}



	
	private function app_get_datatables_query()
	{

		$this->db->select('L.*, P.page_title');
		$this->db->from($this->app_request_details);
		$this->db->join($this->users, 'P.page_key = L.page_key', 'left');
			$i = 0;

			foreach ($this->app_column_search as $item) // loop column
			{
					if($_POST['search']['value']) // if datatable send POST for search
					{

							if($i===0) // first loop
							{
									$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
									$this->db->like($item, $_POST['search']['value']);
							}
							else
							{

								if($item == 'status'){
									if(strtolower($_POST['search']['value'])=='active'){
										$search_val = 1;
										$this->db->or_like($item, $search_val);
									}
									if(strtolower($_POST['search']['value'])=='inactive'){
										$search_val = 0;
										$this->db->or_like($item, $search_val);
									}


									}else{
										$search_val = $_POST['search']['value'];
										$this->db->or_like($item, $search_val);
									}

							}

							if(count($this->app_column_search) - 1 == $i) //last loop
									$this->db->group_end(); //close bracket
					}
					$i++;
			}

			if(isset($_POST['order'])) // here order processing
			{
					$this->db->order_by($this->app_column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			}
			else if(isset($this->app_order))
			{
					$order = $this->app_order;
					$this->db->order_by(key($order), $order[key($order)]);
			}
	}

    public function app_language_list($page_key){
      $this->app_get_datatables_query();
        if($_POST['length'] != -1)
				$this->db->where('L.page_key', $page_key);
        $this->db->limit($_POST['length'], $_POST['start']);
        $this->db->group_by(array('L.page_key','L.lang_key'));
        $query = $this->db->get();
        return $query->result_array();
    }

    public function app_language_list_all($page_key){
			$this->db->where('L.page_key', $page_key);
      $this->db->from($this->app_request_details);
    	return $this->db->count_all_results();
    }

    public function app_language_list_filtered($page_key){

          $this->app_get_datatables_query();
					$this->db->where('L.page_key', $page_key);
          $this->db->group_by(array('L.page_key','L.lang_key'));
          $query = $this->db->get();
          return $query->num_rows();
    }


    public function app_currenct_page_key_value($inputs){ 
    	 
    	$my_keys = array();
    	$mypage_keys=array();
    	if(!empty($inputs)){
    		foreach ($inputs as $input) {
    			$my_keys[] = $input['lang_key'];
    			$mypage_keys[] = $input['page_key'];
    		}
    	}
     
	
    	$my_final_values = array();
    	if(!empty($my_keys)){
    		
    		$this->db->select('sno,lang_key,lang_value,language,type,page_key');
       		$this->db->from('app_language_management');
          	$this->db->where_in('lang_key',$my_keys);
          
            $this->db->where_in('page_key',$mypage_keys);
          	$this->db->order_by('lang_key');
          	
          	$my_final = $this->db->get()->result_array();

         
    		 if(!empty($my_final)){
    		 	foreach ($my_final as $keyvalue) {
    		 		//$my_final_values[$keyvalue['lang_key']][$keyvalue['language']] = $keyvalue['lang_value'];

    		 		$my_final_values[$keyvalue['lang_key']][$keyvalue['language']]['name'] = $keyvalue['lang_value'];
				    $my_final_values[$keyvalue['lang_key']][$keyvalue['language']]['type'] = $keyvalue['type'];
				    $my_final_values[$keyvalue['lang_key']][$keyvalue['language']]['lang_key'] = $keyvalue['lang_key'];

    		 		  		 	    
    		 	}
    		 }

    	}
    	// print_r($my_final_values);
    	// exit;
    		
     return $my_final_values;  
    } 





}
