<?PHP
class MFornecedores extends CI_Model{
	public function __construct()
    {
		$this->load->database();
	}
	
	function addFornecedor($data){
		$this->db->insert('fornecedores', $data);
		if($this->db->trans_status() === true){
			$this->db->trans_commit();
			$this->session->set_flashdata('dbResult', "Data Inserted Successfully");
		}else{
			$this->db->trans_rollback();
			$this->session->set_flashdata('dbResult', 'Error message:'.$this->db->_error_message());
		}
	}
	function editFornecedor($data){
		$this->db->where('cnpj', $data['Cnpj']);
		$this->db->update('fornecedores', $data);
		//return $this->db->affected_rows();
		if($this->db->trans_status() === true){
			$this->db->trans_commit();
			$this->session->set_flashdata('dbResult', "Data Inserted Successfully");
		}else{
			$this->db->trans_rollback();
			$this->session->set_flashdata('dbResult', 'Error message:'.$this->db->_error_message());
		}
	}
	function showFornecedores(){
		return $this->db->get('fornecedores');
	}
	function showFornecedor($cnpj){
		$this->db->where('cnpj', $cnpj);
		return $this->db->get('fornecedores')->row();
	}

}