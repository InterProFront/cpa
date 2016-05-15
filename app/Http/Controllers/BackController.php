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

	public function getIndex(){
		return view('back.layout');
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

	public function getService(){
		$all =  $this->queryAgent->getBlock('static_service',[],[]);
		$images = $this->queryAgent->getBlock('dom_all_images',[],[]);
		$dom_service = $this->queryAgent->getBlock('dom_service',[],[]);
		return view('back.blocks.static_service',[
			'static_service' => $all,
			'dom_all_images'  => $images,
			'dom_service' => $dom_service
		]);
	}

	public function getFacts(){
		$all =  $this->queryAgent->getBlock('static_facts',[],[]);
		$images = $this->queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.static_facts',[
			'static_facts' => $all,
			'dom_all_images'  => $images
		]);
	}

	public function getClients(){
		$all =  $this->queryAgent->getBlock('static_clients',[],[]);
		$images = $this->queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.static_clients',[
			'static_clients' => $all,
			'dom_all_images'  => $images
		]);
	}

	public function getStudy(){
		$all =  $this->queryAgent->getBlock('static_study',[],[]);
		$images = $this->queryAgent->getBlock('dom_all_images',[],[]);
		$dom_study = $this->queryAgent->getBlock('dom_study',[],[]);
		return view('back.blocks.static_study',[
			'static_study' => $all,
			'dom_all_images'  => $images,
			'dom_study'  => $dom_study
		]);
	}

	public function getSafety(){
		$all =  $this->queryAgent->getBlock('safety_rules',[],[]);
		$images = $this->queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.safety_rules',[
			'safety_rules' => $all,
			'dom_all_images'  => $images
		]);
	}

	public function getNews(){
		$all =  $this->queryAgent->getBlock('dom_news',[],[]);
		$images = $this->queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.dom_news',[
			'dom_news' => $all,
			'dom_all_images'  => $images
		]);
	}

	public function getContacts(){
		$all =  $this->queryAgent->getBlock('static_contacts',[],[]);
		$images = $this->queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.static_contacts',[
			'static_contacts' => $all,
			'dom_all_images'  => $images
		]);
	}

	public function editService($id){
		$item =  $this->queryAgent->getGroupItem('dom_service','service',$id);
		$images = $this->queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.groupitems.dom_service.service_edit',[
			'item_service' => $item,
			'dom_all_images'  => $images
		]);
	}

	public function editCourse($id){
		$item =  $this->queryAgent->getGroupItem('dom_study','course',$id);
		$images = $this->queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.groupitems.dom_study.course_edit',[
			'item_course' => $item,
			'dom_all_images'  => $images
		]);
	}

	public function editNews($id){
		$item =  $this->queryAgent->getGroupItem('safety_rules','',$id);
		$images = $this->queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.groupitems.',[
			'' => $item,
			'dom_all_images'  => $images
		]);
	}


}
