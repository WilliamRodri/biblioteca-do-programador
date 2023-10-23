<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Testes Controller
 *
 */
class TestesController extends AppController
{
	public function index(){
		$this->render('index');
	}
}
