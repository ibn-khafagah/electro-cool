<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Traits\ImageTraits;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
use ImageTraits;
    protected $data = [
                 'folder' => 'backend.',
                 'var' => 'home.',
                 'Models' => 'App\Models\HomePage',
                 'folderBlade' => 'home',
                 'imageName1' => 'why_image',
                 'imageName2' => 'book_service_image',
             ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =   [
                'data' => $this->data['Models']::first(),
            ];
         return view($this->data['folder'] . $this->data['folderBlade'] . '.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [

                ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->data['var'] = new $this->data['Models']();
        $this->uploadImage($this->data['var'], $this->data['folderBlade'],$request,$this->data['imageName1']);

        $this->data['var']->save();
        ToastMagic::success('message', 'تم الأضافة بنجاح !');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
                  'data' => $this->data['Models']::findorfail(decrypt($id)),
                 ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
                  'data' => $this->data['Models']::findorfail(decrypt($id)),
                 ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->data['var']=$this->data['Models']::findorfail(decrypt($id));
        $this->uploadImage($this->data['var'], $this->data['folderBlade'],$request,$this->data['imageName1']);

        $this->data['var']->service_sub_title               =   ['en'   =>  $request->service_sub_title, 'ar'   =>  $request->service_sub_title_ar];
        $this->data['var']->service_title                   =   ['en'   =>  $request->service_title, 'ar'   =>  $request->service_title_ar];
        $this->data['var']->counter_sub_title               =   ['en'   =>  $request->counter_sub_title, 'ar'   =>  $request->counter_sub_title_ar];
        $this->data['var']->counter_title                   =   ['en'   =>  $request->counter_title, 'ar'   =>  $request->counter_title_ar];
        $this->data['var']->fun1                            =   ['en'   =>  $request->fun1, 'ar'   =>  $request->fun1_ar];
        $this->data['var']->fun2                            =   ['en'   =>  $request->fun2, 'ar'   =>  $request->fun2_ar];
        $this->data['var']->fun3                            =   ['en'   =>  $request->fun3, 'ar'   =>  $request->fun3_ar];
        $this->data['var']->fun4                            =   ['en'   =>  $request->fun4, 'ar'   =>  $request->fun4_ar];
        $this->data['var']->why_sub_title                   =   ['en'   =>  $request->why_sub_title, 'ar'   =>  $request->why_sub_title_ar];
        $this->data['var']->why_title                       =   ['en'   =>  $request->why_title, 'ar'   =>  $request->why_title_ar];
        $this->data['var']->why_notes                       =   ['en'   =>  $request->why_notes, 'ar'   =>  $request->why_notes_ar];
        $this->data['var']->why_option1                     =   ['en'   =>  $request->why_option1, 'ar'   =>  $request->why_option1_ar];
        $this->data['var']->why_option2                     =   ['en'   =>  $request->why_option2, 'ar'   =>  $request->why_option2_ar];
        $this->data['var']->why_option3                     =   ['en'   =>  $request->why_option3, 'ar'   =>  $request->why_option3_ar];
        $this->data['var']->why_progress_number_title1      =   ['en'   =>  $request->why_progress_number_title1, 'ar'   =>  $request->why_progress_number_title1_ar];
        $this->data['var']->why_progress_number_title2      =   ['en'   =>  $request->why_progress_number_title2, 'ar'   =>  $request->why_progress_number_title2_ar];
        $this->data['var']->why_progress_main_title         =   ['en'   =>  $request->why_progress_main_title, 'ar'   =>  $request->why_progress_main_title_ar];
        $this->data['var']->service_future_sub_title        =   ['en'   =>  $request->service_future_sub_title, 'ar'   =>  $request->service_future_sub_title_ar];
        $this->data['var']->service_future_title            =   ['en'   =>  $request->service_future_title, 'ar'   =>  $request->service_future_title_ar];
        $this->data['var']->service_future_notes            =   ['en'   =>  $request->service_future_notes, 'ar'   =>  $request->service_future_notes_ar];
        $this->data['var']->book_service_title              =   ['en'   =>  $request->book_service_title, 'ar'   =>  $request->book_service_title_ar];
        $this->data['var']->book_service_notes              =   ['en'   =>  $request->book_service_notes, 'ar'   =>  $request->book_service_notes_ar];
        $this->data['var']->feedback_sub_title              =   ['en'   =>  $request->feedback_sub_title, 'ar'   =>  $request->feedback_sub_title_ar];
        $this->data['var']->feedback_title                  =   ['en'   =>  $request->feedback_title, 'ar'   =>  $request->feedback_title_ar];
        $this->data['var']->cll_to_action_title             =   ['en'   =>  $request->cll_to_action_title, 'ar'   =>  $request->cll_to_action_title_ar];
        $this->data['var']->team_sub_title                  =   ['en'   =>  $request->team_sub_title, 'ar'   =>  $request->team_sub_title_ar];
        $this->data['var']->team_title                      =   ['en'   =>  $request->team_title, 'ar'   =>  $request->team_title_ar];
        $this->data['var']->contact_sub_title               =   ['en'   =>  $request->contact_sub_title, 'ar'   =>  $request->contact_sub_title_ar];
        $this->data['var']->contact_title                   =   ['en'   =>  $request->contact_title, 'ar'   =>  $request->contact_title_ar];
        $this->data['var']->cll_to_action_main_title        =   ['en'   =>  $request->cll_to_action_main_title, 'ar'   =>  $request->cll_to_action_main_title_ar];
        $this->data['var']->blog_sub_title                  =   ['en'   =>  $request->blog_sub_title, 'ar'   =>  $request->blog_sub_title_ar];
        $this->data['var']->blog_title                      =   ['en'   =>  $request->blog_title, 'ar'   =>  $request->blog_title_ar];
        $this->data['var']->why_progress_number1            =   $request->why_progress_number1;
        $this->data['var']->why_progress_number2            =   $request->why_progress_number2;
        $this->data['var']->cll_to_action_video             =   $request->cll_to_action_video;
        $this->data['var']->update();
        ToastMagic::success('message', 'تم التحديث بنجاح !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->data['var']=$this->data['Models']::findorfail(decrypt($id));
        $this->data['var']->destroy(decrypt($id));
        ToastMagic::error('message', 'تم الحذف بنجاح !');
        return redirect()->back();
    }
}
