<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Note');
	}
	public function index_html()
	{
		$data["notes"] = $this->Note->all();
		$this->load->view("partials/notes", $data);
	}
	public function create()
	{
		$new_note = $this->input->post();
		$this->Note->create($new_note);
		$data["notes"] = $this->Note->all();
		$this->load->view("partials/notes", $data);
	}
	public function destroy($id)
	{
		$this->Note->destroy($id);
		$data["notes"] = $this->Note->all();
		$this->load->view("partials/notes", $data);
	}
	public function update($id)
	{
		$this->Note->update($this->input->post('note'), $id);
		$data["notes"] = $this->Note->all();
		$this->load->view("partials/notes", $data);
		// redirect("/");
	}
	public function index()
	{
		$this->load->view('index');
	}
}

//end of main controller