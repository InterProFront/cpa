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
		$st = $this->queryAgent->getGroupFlat('dom_study','course',[],[]);
		$sv = $this->queryAgent->getGroupFlat('dom_service','service',[],[]);

		view()->share('all_site',$all_site);
		view()->share('st',$st);
		view()->share('sv',$sv);
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
		$news = $this->queryAgent->getGroupFlat('dom_news','news',[['news'=>['sorter' => 'DESC']]],[],['news'=>['take'=>9, 'skip'=>4]]);
		$news_big = $this->queryAgent->getGroupFlat('dom_news','news',[['news'=>['sorter' => 'DESC']]],[],['news'=>['take'=>3, 'skip'=>1]]);
		$agregators = config('rss')['links'];

		return view('front/news/news',[
			'news' => $study,
			'small_news' => $news,
			'news_big' => $news_big,
			'agr'  => $agregators
		]);
	}
	public function getNewsAgr($agr){
		$study = $this->queryAgent->getBlock('dom_news',[],[]);
		$news = $this->queryAgent->getGroupFlat('dom_news','news',[['news'=>['sorter' => 'DESC']]],['news'=>['agregator'=>$agr]],['news'=>['take'=>9, 'skip'=>4]]);
		$news_big = $this->queryAgent->getGroupFlat('dom_news','news',[['news'=>['sorter' => 'DESC']]],[],['news'=>['take'=>3, 'skip'=>1]]);
		$agregators = config('rss')['links'];
		return view('front/news/news_agr',[
			'news' => $study,
			'small_news' => $news,
			'news_big' => $news_big,
			'agr'  => $agregators
		]);
	}
	public  function getMore($id){
		$news = $this->queryAgent->getGroupFlat('dom_news','news',['news'=>['sorter' => 'DESC']],[],['news'=>['take'=>3, 'skip'=>$id]]);
		$rendered =  view('front/news/small_news',[ 'small_news' => $news])->render();
		return ['complhtml' => $rendered];
	}
	public  function getMoreAgr($agr,$id){
		$news = $this->queryAgent->getGroupFlat('dom_news','news',['news'=>['sorter' => 'DESC']],['news'=>['agregator'=>$agr]],['news'=>['take'=>3, 'skip'=>$id]]);
		$rendered =  view('front/news/small_news',[ 'small_news' => $news])->render();
		return ['complhtml' => $rendered];
	}
	public function getTb(){
		$rules = $this->queryAgent->getBlock('safety_rules',[],[]);
		$news = $this->queryAgent->getGroupFlat('dom_news','news',['news'=>['sorter'=>'DESC']],[],['news'=>['take'=>6,'skip'=>1]]);
		return view('front/tb/tb',[
			'rules' => $rules,
			'news'  => $news
		]);
	}
	public function getContacts(){
		$contacts = $this->queryAgent->getBlock('static_contacts',[],[]);

		return view('front.contacts.contacts',[
			'contact' => $contacts
		]);
	}

}
