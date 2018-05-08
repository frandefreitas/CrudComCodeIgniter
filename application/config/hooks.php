<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
$hook['post_controller_constructor'] = [ //esse cara será chamada depois que o construtor do controller for recarregado
'class' => 'AuthHook',
'function' => 'check', //metodo da classe
'filename' => 'AuthHook.php',   //nome do arquivo da classe
'filepath' => 'hooks' ];   //tem como base o diretorio app mas vai por para o diretório hooks