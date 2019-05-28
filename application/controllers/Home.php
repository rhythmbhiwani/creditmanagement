<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('main');
	}

	public function txn_show()
	{
		$this->load->model('credit_model');
		$data["fetch_data"] = $this->credit_model->txn_details();
		$this->load->view('txn' , $data);
	}

	public function transfer_credits()
	{
		$this->load->model('credit_model');
		$data["fetch_user"] = $this->credit_model->get_users();
		$data["uid"] = $this->input->post('uid');
		$this->load->view('transfer' , $data);
	}

	public function show_user()
	{
		$this->load->model('credit_model');
		$data["fetch_user"] = $this->credit_model->get_users();
		$this->load->view('show_users' , $data);
	}

	public function verify_details()
	{
		$this->load->model('credit_model');
		$data['from_id'] = $this->input->post('from_id');
		$data['to_id'] = $this->input->post('to_id');
		$data['credit_amount'] = $this->input->post('credit_amount');
		if ($data['from_id'] === $data['to_id']) {
			?>
				<script type="text/javascript">
					alert("Cannot transfer credits to itself");
				</script>
			<?php
			$this->transfer_credits();
		}
		elseif (empty($data['credit_amount']) || $data['credit_amount']<=0 || !is_numeric($data['credit_amount'])) {
			?>
				<script type="text/javascript">
					alert("Not a valid credit amount");
				</script>
			<?php
			$this->transfer_credits();
		}
		else {
			$query = $this->credit_model->update_credit($data);
			$this->txn_show();
		}
		
	}
}
