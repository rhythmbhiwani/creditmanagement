<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Credit_model extends CI_Model
{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }    

        public function get_users()
        {
            $query = $this->db->get("user");
            return $query;
        }

        public function txn_details()
        {
            $this->db->order_by('sno','desc');
            $query = $this->db->get("txn");
            return $query;
        }

        public function get_single_user($id)
        {
            $this->db->where("id",$id);
            $query = $this->db->get("user");
            return $query->row();
        }

        public function update_user_credit($id, $newamount)
        {
            $data = array
                    (
                        'credit' => $newamount
                    );
            $this->db->where('id',$id);
            $this->db->update('user', $data);
            return;
        }

        public function update_credit($data)
        {
            $now = date('Y-m-d H:i');
            $query = $this->db->get("user");
            $from_user = $this->get_single_user($data['from_id']);
            $to_user = $this->get_single_user($data['to_id']);
            $txn_insert = array(
                'txn_id' => "TSF".date('Y').date('s').date('d')."RB".mt_rand(date('s'),99).$to_user->id.$from_user->id.date('i'),
                'from_id' =>  $from_user->id,
                'from_name' => $from_user->name,
                'to_id' => $to_user->id,
                'to_name' => $to_user->name,
                'txn_amount' => $data['credit_amount'],
                'txn_date' => $now
                );
            if ($data['credit_amount'] > $from_user->credit) {
        ?>
                <script type="text/javascript">
                   alert("Insufficient Credits - Transaction Failed");
                </script>
        <?php
                    $txn_insert['txn_status'] = "Failed";
                }
                else
                {
                    $this->update_user_credit($from_user->id, $from_user->credit - $data['credit_amount']);
                    $this->update_user_credit($to_user->id, $to_user->credit + $data['credit_amount']);
                    $txn_insert['txn_status'] = "Success";
                    ?>
                        <script type="text/javascript">
                            alert("Transaction Successful");
                        </script>
                    <?php
                }

                $this->db->insert('txn',$txn_insert);
                return;
            
        }
}
?>