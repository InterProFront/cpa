<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Interpro\QuickStorage\Concept\QueryAgent;

use Illuminate\Http\Request;

class BackController extends Controller {

	private $queryAgent;

	function __construct(QueryAgent $queryAgent)
	{
		$this->queryAgent = $queryAgent;
	}

	public function getAll(){
		$all =  $this->queryAgent->getBlock('static_all_site',[],[]);
		$images = $this->queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.static_all_site',[
			'static_all_site' => $all,
			'dom_all_images'  => $images
		]);
	}

	public function getSlider(){
		$all =  $this->queryAgent->getBlock('slider_block',[],[]);
		$images = $this->queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.slider_block',[
			'slider_block' => $all,
			'dom_all_images'  => $images
		]);
	}

	public function getAbout(){
		$all =  $this->queryAgent->getBlock('static_company',[],[]);
		$images = $this->queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.static_company',[
			'static_company' => $all,
			'dom_all_images'  => $images
		]);
	}







}
