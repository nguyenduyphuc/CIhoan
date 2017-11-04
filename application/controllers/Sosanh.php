<?php
class Sosanh extends MY_Controller
{
	function __construst()
	{
		parent::__construst();
	}	
	
	function sosanhvoi()
	{
		$id_product=$this->uri->rsegment('3');
		$this->load->model('product_model');	
		$info= $this->product_model->get_info($id_product);
		$this->data['info'] = $info;

		$list= $this->product_model->get_list();
		$this->data['list'] = $list;


		$this->data['temp']='site/sosanh/sosanhvoi';
		$this->load->view('site/layout', $this->data);

	}
	function index()
	{
		$id1=$this->uri->rsegment('3');
		$id2=$this->uri->rsegment('4');

		$this->load->model('product_model');
		$info1= $this->product_model->get_info($id1);
		$this->data['info1'] = $info1;

		$info2= $this->product_model->get_info($id2);
		$this->data['info2'] = $info2;

		$this->data['temp']='site/sosanh/index';
		$this->load->view('site/layout', $this->data);

	}
}
?>
