<?php

namespace App\Http\Controllers;

class OlaController extends Controller{

	public function ola($nome){
		return "Olá desse controller {$nome} !";
	}

}

?>