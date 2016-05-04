<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Interpro\QuickStorage\Laravel\QueryAgent;
use Illuminate\Http\Request;

class FrontController extends Controller {

	function __construct(QueryAgent $queryAgent)
	{
		$this->queryAgent = $queryAgent;

		$all_site = $this->queryAgent->getBlock('static_all_site',[],[]);

		view()->share('static_all_site',$all_site);
	}

	public function getIndex(){
		$slider  = $this->queryAgent->getBlock('slider_block',[],[]);
		$company = $this->queryAgent->getBlock('static_company',[],[]);
		$service = $this->queryAgent->getBlock('static_service',[],[]);
		$facts   = $this->queryAgent->getBlock('static_facts',[],[]);
		$clients = $this->queryAgent->getBlock('static_clients',[],[]);
		return view('front/index/index',[
			'slider'  => $slider,
			'company' => $company,
			'service' => $service,
			'facts'   => $facts,
			'clients' => $clients
		]);
	}
	public function getStudy(){
		$company = $this->queryAgent->getBlock('static_study',[],[]);
		$study = $this->queryAgent->getBlock('dom_study',[],[]);
		return view('front/study/study',[
			's_study' => $company,
			'study' => $study,
		]);
	}
	public function getServices(){
		$company = $this->queryAgent->getBlock('static_service',[],[]);
		$study = $this->queryAgent->getBlock('dom_service',[],[]);
		return view('front/service/service',[
			's_study' => $company,
			'service' => $study,
		]);
	}
	public function getNews(){
		$study = $this->queryAgent->getBlock('dom_news',[],[]);
		return view('front/service/service',[
			'news' => $study
		]);
	}

}
