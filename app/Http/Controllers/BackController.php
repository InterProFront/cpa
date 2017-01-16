<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Interpro\QuickStorage\Concept\QueryAgent;

use Illuminate\Http\Request;

class BackController extends Controller
{

    private $queryAgent;

    function __construct(QueryAgent $queryAgent)
    {
        $this->queryAgent = $queryAgent;
        $images = $this->queryAgent->getBlock('dom_all_images', [], []);
        view()->share('images', $images);
    }

    public function getIndex()
    {
        return view('back.layout');
    }

    public function getIndexPage(){
        $index_page = $this->queryAgent->getBlock('static_index_page',[],[]);
        return view('back.blocks.static_index_page',[
            'static_index_page' => $index_page
        ]);
    }
    public function getStudy()
    {
        $dom_study = $this->queryAgent->getBlock('dom_study', [], []);
        return view('back.blocks.dom_study', [
            'dom_study'      => $dom_study
        ]);
    }
    public function getServices()
    {
        $service = $this->queryAgent->getBlock('dom_service', [], []);
        return view('back.blocks.dom_service', [
            'dom_service'      => $service
        ]);
    }
    public function getEquipment(){
        $equip = $this->queryAgent->getBlock('equipment', [], []);
        return view('back.blocks.equipment', [
           'equipment' => $equip
        ]);
    }
    public function getAll()
    {
        $all    = $this->queryAgent->getBlock('static_all_site', [], []);
        $images = $this->queryAgent->getBlock('dom_all_images', [], []);
        return view('back.blocks.static_all_site', [
            'static_all_site' => $all,
        ]);
    }




    public function getFacts()
    {
        $all    = $this->queryAgent->getBlock('static_facts', [], []);
        $images = $this->queryAgent->getBlock('dom_all_images', [], []);
        return view('back.blocks.static_facts', [
            'static_facts'   => $all,
        ]);
    }
    public function editService($id)
    {
        $item   = $this->queryAgent->getGroupItem('dom_service', 'service', $id);
        return view('back.blocks.groupitems.dom_service.service_edit', [
            'item_service'   => $item,
        ]);
    }

    public function editCourse($id)
    {
        $item   = $this->queryAgent->getGroupItem('dom_study', 'course', $id);
        return view('back.blocks.groupitems.dom_study.course_edit', [
            'item_course'    => $item,
        ]);
    }

    public function getAbout()
    {
        $all    = $this->queryAgent->getBlock('about', [], []);
        return view('back.blocks.about', [
            'about' => $all,
        ]);
    }


    public function getContacts()
    {
        $all    = $this->queryAgent->getBlock('contacts', [], []);
        return view('back.blocks.contacts', [
            'contacts' => $all,
        ]);
    }

}
