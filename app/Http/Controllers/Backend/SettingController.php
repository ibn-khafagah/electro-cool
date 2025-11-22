<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Traits\ImageTraits;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;

class SettingController extends Controller
{
use ImageTraits;
    protected $data = [
                 'folder' => 'backend.',
                 'var' => 'setting.',
                 'Models' => 'App\Models\Setting',
                 'folderBlade' => 'setting',
                 'imageName1' => 'logo',
                 'imageName2' => 'favicon',
                 'imageName3' => 'bg',
             ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data   =   [
            'data'  =>  $this->data['Models']::first(),
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
    public function update(SettingRequest $request, $id)
    {
        $this->data['var']=$this->data['Models']::findorfail(decrypt($id));
        $this->uploadImage($this->data['var'], $this->data['folderBlade'],$request,$this->data['imageName1']);
        $this->uploadImage($this->data['var'], $this->data['folderBlade'],$request,$this->data['imageName2']);
        $this->uploadImage($this->data['var'], $this->data['folderBlade'],$request,$this->data['imageName3']);
        $this->data['var']->name            =   ['en' => $request->name, 'ar' => $request->name_ar];
        $this->data['var']->address         =   ['en' => $request->address, 'ar' => $request->address_ar];
        $this->data['var']->notes           =   ['en' => $request->notes, 'ar' => $request->notes_ar];
        $this->data['var']->phone           =   $request->phone;
        $this->data['var']->phone1          =   $request->phone1;
        $this->data['var']->email           =   $request->email;
        $this->data['var']->email1          =   $request->email1;
        $this->data['var']->opening_hour    =   $request->opening_hour;
        $this->data['var']->location        =   $request->location;
        $this->data['var']->facebook        =   $request->facebook;
        $this->data['var']->x               =   $request->x;
        $this->data['var']->instagram       =   $request->instagram;
        $this->data['var']->linkedin        =   $request->linkedin;
        $this->data['var']->snapchat        =   $request->snapchat;
        $this->data['var']->tiktok          =   $request->tiktok;
        $this->data['var']->youtube         =   $request->youtube;
        $this->data['var']->whatsapp        =   $request->whatsapp;
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
