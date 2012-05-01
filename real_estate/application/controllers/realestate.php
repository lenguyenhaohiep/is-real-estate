<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Realestate extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    /*
     * Author:
     * Summary: 
     * Parameter 1:
     * Parameter 2:
     * Return:
     */

    function index($realEstateId) {
        
    }

    /*
     * Author:
     * Summary: 
     * Parameter 1:
     * Parameter 2:
     * Return:
     */

    function GetCities() {
        
    }

    /*
     * Author:
     * Summary: 
     * Parameter 1:
     * Parameter 2:
     * Return:
     */

    function GetCategories() {
        
    }

    /*
     * Author:
     * Summary: 
     * Parameter 1:
     * Parameter 2:
     * Return:
     */

    function GetDistrictByCityID() {
        
    }

    /*
     * Author:
     * Summary: 
     * Parameter 1:
     * Parameter 2:
     * Return:
     */

    function AddNewItem() {
        $data['userdata'] = $this->session->userdata;
        $data['topBar'] = $this->load->view('topBar',$data,true);
		
		$this->load->model('city_Model');
		$data['cities'] = $this->city_Model->GetCities();
		
		$this->load->model('category_Model');
		$data['categories'] = $this->category_Model->GetCategories();
		
		$this->load->model('user_Model');
		$data['user'] = $this->user_Model->FindByID($this->session->userdata('user_id'));
		
		$this->load->view('createRealEstatePage',$data);
    }

    /*
     * Author:
     * Summary: 
     * Parameter 1:
     * Parameter 2:
     * Return:
     */

    function UpdateItem() {
        
    }

    /*
     * Author: VinhBSD
     * Summary: delete real estates
     * Return:
     */

    function DeleteItem() {
        $aRealEstateIds = $this->input->post('a_id');
		
		$this->load->model('realEstate_Model');
		$this->realEstate_Model->DeleteItem($aRealEstateIds);
		
		redirect(base_url('index.php/realestate/manage'));
    }

    /*
     * Author:
     * Summary: 
     * Parameter 1:
     * Parameter 2:
     * Return:
     */

    function Accept() {
        
    }

    /*
     * Author:
     * Summary: 
     * Parameter 1:
     * Parameter 2:
     * Return:
     */

    function Deny() {
        
    }

    /*
     * Author:
     * Summary: 
     * Parameter 1:
     * Parameter 2:
     * Return:
     */

    function GetDetailForReview() {
        
    }

    /*
     * Author:
     * Summary: 
     * Parameter 1:
     * Parameter 2:
     * Return:
     */

    function SendReviewEmail() {
        
    }
	
	 /*
	 * Author: VinhBSD
	 * Summary: load real estate management page
	 * Return:
	 */

    function Manage() {
    	$data['userdata'] = $this->session->userdata;
        $data['topBar'] = $this->load->view('topBar',$data,true);
		
		$this->load->model('realEstate_Model');
		$this->load->view('manageRealEstatePage',$data);
    }

	/*
     * Author: VinhBSD
     * Summary: update data for datatable in real estate management page
     * Return:
     */
    
    function UpdateDataTable() {
    	$iLimit = $this->input->get('iDisplayLength');
		$iOffset = $this->input->get('iDisplayStart');
		$sFilter = $this->input->get('sSearch');
		$iSort = null;
		$sSortDir = null;
		for ( $i=0 ; $i<intval($this->input->get('iSortingCols')) ; $i++ )
		{
			if ($this->input->get('bSortable_'.intval($this->input->get('iSortCol_'.$i))) == "true" )
			{
				$iSort = $this->input->get('iSortCol_'.$i);
				$sSortDir = $this->input->get('sSortDir_'.$i);
			}
		}
		$this->load->model('realEstate_Model');
		$result = $this->realEstate_Model->GetRealEstateForDataTable($sFilter, $iSort, $sSortDir, $iLimit, $iOffset);
		$result['sEcho'] = $this->input->get('sEcho');
		$this->output->set_output(json_encode($result));
	}
}

?>