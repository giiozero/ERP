<?PHP
class MHome extends CI_Model{
	public function __construct()
    {
		$this->load->database();
	}

	function listCategorias()
	{
		return $this->db->get('categorias');
	}
	function listCategoriasByID($id)
	{
	  $this->db->where('categoria',$id)
			   ->select('count(id) AS conta');
	  $query = $this->db->get('produtos');
	  return $result=$query->row();
	  
	
	}
}