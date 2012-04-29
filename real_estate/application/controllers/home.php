<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    /*
     * Author: VinhBSD
     * Summary: display main page
     * Return:
     */
    function index() {
    	$data['userdata'] = $this->session->userdata;
        $data['topBar'] = $this->load->view('topBar',$data,true);
		
		$this->load->model('realEstate_Model');
		$data['realEstates'] = $this->realEstate_Model->GetNewRealEstates();
		
		$this->load->view('mainPage',$data);
    }
	
	/*
     * Author: VinhBSD
     * Summary: get near real estates with specific location.
     * Return: 
     */
    function GetNear() {
    	$lat = $this->input->get('lat');
		$lng = $this->input->get('lng');
		$distance = $this->input->get('distance');
		
		$this->load->model('realEstate_Model');
		$realEstates = $this->realEstate_Model->GetNearRealEstates($lat, $lng, $distance);
		$this->output->set_output(json_encode($realEstates));
	}
}

?>
