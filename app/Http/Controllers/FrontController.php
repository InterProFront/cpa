<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Interpro\QuickStorage\Laravel\QueryAgent;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    private $queryAgent;

    function __construct(QueryAgent $queryAgent)
    {
        $this->queryAgent = $queryAgent;

        $all_site = $this->queryAgent->getBlock('static_all_site', [], []);
        $st       = $this->queryAgent->getGroupFlat('dom_study', 'course', [], []);
        $sv       = $this->queryAgent->getGroupFlat('dom_service', 'service', [], []);

        view()->share('all_site', $all_site);
        view()->share('st', $st);
        view()->share('sv', $sv);
    }


    public function getIndex()
    {

        $study     = $this->queryAgent->getBlock('dom_study', [], []);
        $equipment = $this->queryAgent->getBlock('equipment', [], []);
        $service   = $this->queryAgent->getBlock('dom_service', [], []);
        $index     = $this->queryAgent->getBlock('static_index_page', [], []);

        $fact = $this->queryAgent->getGroupFlat('static_facts', 'fact', [], []);
        return view('front/index/index', [
            'fact'      => $fact,
            'study'     => $study,
            'service'   => $service,
            'equipment' => $equipment,
            'index'     => $index
        ]);
    }

    public function getStudy()
    {
        $study = $this->queryAgent->getBlock('dom_study',[],[]);

        return view('front/study/study', [
            'study' => $study
        ]);
    }

    public function getStudyItem( $slug ){
        $study = $this->queryAgent->getGroupItemBySlug('dom_study','course',$slug);
        return view('front/study/study-item/study_item', [
            'study_item' => $study
        ]);
    }

    public function getServices()
    {
        $service = $this->queryAgent->getBlock('dom_service', [], []);
        return view('front/service/service', [
            'service' => $service
        ]);
    }

    public function getServiceItem( $slug )
    {
        $service_item = $this->queryAgent->getGroupItemBySlug('dom_service','service',$slug);
        return view('front/service/service-item/service_item', [
            'study_item' => $service_item
        ]);
    }


    public function getContacts(  ){
        $contacts     = $this->queryAgent->getBlock('contacts', [], []);
        return view('front/contacts/contacts', [
            'contacts'     => $contacts
        ]);
    }

    public function getAbout() {
        $about     = $this->queryAgent->getBlock('about', [], []);
        return view('front/about/about',[
           'about' => $about
        ]);
    }
}
