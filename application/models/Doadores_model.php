<?php

	class Doadores_model extends CI_Model
	{
		private $table_name = 'doador';

	//	public function __construct(){
	//		parent::__construct();//para não chamar duas vezes
	//		$this->load->database();
	//	}
		public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }



		public function get($id=null)
		{
			if ($id===null) {
			$query = $this->db->get($this->table_name); //fica disponivel o db só depois da linha 8
			return $query->result();
			} else
			$query = $this->db->get_where($this->table_name, ['id'=>$id]); 
			return $query->first_row(); //para retornar só o primeiro registro, bom que é por id

			
			
		}

		public function new($dados){

			
			 //dash para poder fazer com tracinhos e true para deixar tudo minusculo
        return $this->db->insert($this->table_name, $dados);
    }


    	public function update($id, $dados){        
        	$this->db->where('id', $id);           //a condição para ocorrer a linha 53
        	return $this->db->update($this->table_name, $dados);    //primeiro parametro a tabela segundo o que sera setado
    	}


    	public function delete($id){
    		return $this->db->delete($this->table_name, ['id'=>$id]);
    	}

    	

}