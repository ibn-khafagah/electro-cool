<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Traits\ImageTraits;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;

class AboutController extends Controller
{
use ImageTraits;
    protected $data = [
                 'folder' => 'backend.',
                 'var' => 'admin.',
                 'Models' => 'App\Models\Hotel',
                 'folderBlade' => 'hotel',
                 'imageName1' => 'image',
             ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CurrencyDataTable $dataTable)
    {
         return $dataTable->render($this->data['folder'] . $this->data['folderBlade'] . '.index');
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
