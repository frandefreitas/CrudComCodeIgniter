<?php

class Doadores extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
		$this->load->model('doadores_model');
	//carrega a model com seu nome //aqui é minuscula
	}

    public function index()
    {
    	$results = $this->doadores_model->get();         //pega o metódo pelo nome de sua model
     
        $this->load->view('template/header');     
        $this->load->view('doadores/index', ['doadores' => $results]);
        $this->load->view('template/footer');
    }

    public function view($id) {
        $doador = $this->doadores_model->get($id);
        $this->load->view('template/header');     
        $this->load->view('doadores/view', ['doador'=>$doador]);
        $this->load->view('template/footer');
    }


    public function new(){


    	$this->form_validation->set_rules('nome','Nome','required');  //nome do campo, o que vai aparecer se der uma mensagem de erro e a validação, required.
    	$this->form_validation->set_rules('endereco','Endereco','required');
    	$this->form_validation->set_rules('email','Email','required');
    	$this->form_validation->set_rules('sexo','Sexo','required');
    	$this->form_validation->set_rules('cpf','Cpf','required');
    	$this->form_validation->set_rules('prefixo','Prefixo','required');
    	$this->form_validation->set_rules('telefone','Telefone','required');
    	if ($this->form_validation->run()===false) {
    	$this->load->view('template/header');     
        $this->load->view('doadores/new');
        $this->load->view('template/footer');}
        else {
            $data['back'] = '../doadores';
                $dados = [
                'nome'=> $this->input->post('nome'),
                'endereco'=> $this->input->post('endereco'),
                'email'=> $this->input->post('email'),
                'sexo'=> $this->input->post('sexo'),
                'cpf'=> $this->input->post('cpf'),
                'prefixo'=> $this->input->post('prefixo'),  
                'telefone'=> $this->input->post('telefone')
        ];
            $this->doadores_model->new($dados);
            $this->load->view('template/success', $data);
            }
    }


    public function edit($id=null){

            $this->form_validation->set_rules('nome','Nome','required');  
            $this->form_validation->set_rules('endereco','Endereco','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('sexo','Sexo','required');
            $this->form_validation->set_rules('cpf','Cpf','required');
            $this->form_validation->set_rules('prefixo','Prefixo','required');
            $this->form_validation->set_rules('telefone','Telefone','required');
        
        if ($this->form_validation->run()===false) {
                $doador = $this->doadores_model->get($id);
                $this->load->view('template/header');     
                $this->load->view('doadores/edit', ['doador'=>$doador]);
                $this->load->view('template/footer'); }
        else {
            $dados = [
                'nome'=> $this->input->post('nome'),
                'endereco'=> $this->input->post('endereco'),
                'email'=> $this->input->post('email'),
                'sexo'=> $this->input->post('sexo'),
                'cpf'=> $this->input->post('cpf'),
                'prefixo'=> $this->input->post('prefixo'),  
                'telefone'=> $this->input->post('telefone')
            ];
            $data['back'] ='./'.$id;
            $this->doadores_model->update($id, $dados);
            $this->load->view('template/success', $data);
            }
    }

    public function delete($id){
            $data['back'] ='../';
            $this->doadores_model->delete($id);
            $this->load->view('template/success', $data);
        }






}