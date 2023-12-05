<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Collegemodel;

class Collegeprince extends BaseController
{
    public function index()
    {
        $session=session();
        $data4menu=array();
        $data4page=array();
        $data4menu['selected_main_menu']='home';
        $data4menu['selected_sub_menu']='';
        $data4menu['college_name']=session()->get('college_name');
        $data4menu['college_id']=session()->get('college_id');
        $data['span1'] = view('college/menu_principal', $data4menu);
		$data['span2'] = view('college/home');
		$data['span3'] = view('college/right_menu');
		return view('template3', $data);
    }

    public function profile()
    {
        $session=session();
        $data4menu=array();
        $data4page=array();
        $colg_model=new Collegemodel();
        $data4menu['selected_main_menu']='profile';
        $data4menu['selected_sub_menu']='';
        $data4menu['college_name']=session()->get('college_name');
        $data4menu['college_id']=session()->get('college_id');
        $college_id=session()->get('college_id');
        
        $college_details=$colg_model->get_college($college_id);
        $data4page['college_details']=$college_details;
        $data['span1'] = view('college/menu_principal', $data4menu);
		$data['span2'] = view('college/profile',$data4page);
		$data['span3'] = view('college/right_menu');
		return view('template3', $data);

    }
}
