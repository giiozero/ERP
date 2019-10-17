<?PHP
class MLogin extends CI_Model{
	public function __construct()
    {
		$this->load->database();
	}

	public function login_user($POST){
		$this->db->where('nome', $this->input->post('username'));
		$this->db->where('senha', $this->input->post('password'));
		return $this->db->get('usuarios');
	}
}