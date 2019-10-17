<?PHP
class MProdutos extends CI_Model{
	public function __construct()
    {
		$this->load->database();
	}

	function listProdutos()
	{
		$this->db->select("produtos.*, categorias.nome")
		   ->join("categorias", "categorias.id=produtos.id_categoria");
		return $this->db->get('produtos')->result();
	}
	function listProdutoByID($id)
	{
	  $this->db->where('codigo',$id);
	  $query = $this->db->get('produtos');
	  return $result=$query->row();
	}
	
	function listCategorias()
	{
		return $this->db->get('categorias');
	}
	function addCategoria($data)
	{
	  $data = array('nome' => $data);
	  $this->db->insert('categorias', $data);
		if($this->db->trans_status() === true){
			$this->db->trans_commit();
			$this->session->set_flashdata('dbResult', "Data Inserted Successfully");
			return true;
		} else {
			$this->db->trans_rollback();
			$this->session->set_flashdata('dbResult', 'Error message:'.$this->db->_error_message());
			return false;
		}
	}
	
	function addProduto($data)
	{
	  $this->db->insert('produtos', $data);
		if($this->db->trans_status() === true){
			$this->db->trans_commit();
			$this->session->set_flashdata('dbResult', "Data Inserted Successfully");
			return true;
		} else {
			$this->db->trans_rollback();
			$this->session->set_flashdata('dbResult', 'Error message:'.$this->db->_error_message());
			return false;
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