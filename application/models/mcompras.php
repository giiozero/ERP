<?PHP
class MCompras extends CI_Model{
	public function __construct()
    {
		$this->load->database();
	}
	function showFornecedores(){
		return $this->db->get('fornecedores');
	}
	function showFornecedor($cnpj){
		$this->db->where('cnpj', $cnpj);
		return $this->db->get('fornecedores')->row();
	}
}