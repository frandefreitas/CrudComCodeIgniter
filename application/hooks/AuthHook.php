<?php 

/**
* 
*/
class AuthHook
{
	
	private $controller = [
		'auth'
		];                     //a rota que vai liberar
	
	public function check(){
		$CI =&  get_instance();
		if(!isset($CI->session)){
			$CI->load->library('session');
		};
			$CI->load->helper('url');   //o helper é o cara que dá acesso ao metodo de redirect
			$user = $CI->session->user ?? null;    //se tiver vazio retorna nulo caso contrario retorna ele mesmo
			$controller = $CI->uri->segment(1);    //vai pegar o primeiro item da uri
	
		if(!$user and !in_array($controller, $this->controller)){   //se não tiver o usuario logado e esse controller não tiver no array
			redirect('auth/login', 'location', 302);         //redireciona para o login com metodo location e header 302 de direcionamento temporário
			die();
		} 
	}	
}