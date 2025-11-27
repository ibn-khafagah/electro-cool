<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\AlbumDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\AlbumRequest;
use App\Traits\ImageTraits;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
use ImageTraits;
    protected $data = [
                 'folder' => 'backend.',
                 'var' => 'album.',
                 'Models' => 'App\Models\Album',
                 'Models2' => 'App\Models\AlbumImages',
                 'folderBlade' => 'album',
                 'imageName1' => 'image',
             ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AlbumDatatable $dataTable)
    {
         return $dataTable->render($this->data['folder'] . $this->data['folderBlade'] . '.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function images($id)
    {
        $data = [
                    'data'  =>  $this->data['Models']::findOrFail(decrypt($id)),
                ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.image', $data);
    }

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
    public function store(AlbumRequest $request)
    {
        $this->data['var'] = new $this->data['Models']();
        $this->data['var']->name = ['en' => $request->name, 'ar' => $request->name_ar];
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
    public function update(AlbumRequest $request, $id)
    {
        $this->data['var']=$this->data['Models']::findorfail(decrypt($id));
        $this->data['var']->name = ['en' => $request->name, 'ar' => $request->name_ar];
        $this->data['var']->update();
        ToastMagic::success('message', 'تم التحديث بنجاح !');
        return redirect()->back();
    }
    public function uploadImages(Request $request, $id)
    {
        $this->data['var']  =   $this->data['Models']::findOrFail(decrypt($id));
        $this->multipleImage($this->data['var'], $this->data['folderBlade'],$request,$this->data['imageName1'], $this->data['Models2'], 'album_id');
        ToastMagic::success('message', 'تم رفع الصور بنجاح !');
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
    public function destroyImage($id)
    {
        $this->data['var']=$this->data['Models2']::findorfail(decrypt($id));
        $this->data['var']->destroy(decrypt($id));
        ToastMagic::error('message', 'تم الحذف بنجاح !');
        return redirect()->back();
    }
}
