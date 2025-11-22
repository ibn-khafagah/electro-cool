<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\ProductDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Traits\ImageTraits;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;

class ProductController extends Controller
{
use ImageTraits;
    protected $data = [
                 'folder' => 'backend.',
                 'var' => 'product.',
                 'Models' => 'App\Models\Product',
                 'Models2' => 'App\Models\ProductImage',
                 'folderBlade' => 'product',
                 'imageName1' => 'front_image',
                 'imageName2' => 'image',
             ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductDatatable $dataTable)
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
                    'categories'    =>  Category::all(),
                ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $this->data['var'] = new $this->data['Models']();
        $this->uploadImage($this->data['var'], $this->data['folderBlade'],$request,$this->data['imageName1']);
        $this->data['var']->name    =   ['en' => $request->name, 'ar' => $request->name_ar];
        $this->data['var']->notes   =   ['en' => $request->notes, 'ar' => $request->notes_ar];
        $this->data['var']->short_notes   =   ['en' => $request->short_notes, 'ar' => $request->short_notes_ar];
        $this->data['var']->category_id   =   $request->category_id;
        $this->data['var']->save();
        $this->multipleImage($this->data['var'], $this->data['folderBlade'],$request,$this->data['imageName2'], $this->data['Models2'], 'product_id');
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
                    'categories'    =>  Category::all(),
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
    public function update(ProductRequest $request, $id)
    {
        dd($request->all());
        $this->data['var']=$this->data['Models']::findorfail(decrypt($id));
        $this->uploadImage($this->data['var'], $this->data['folderBlade'],$request,$this->data['imageName1']);
        $this->data['var']->name    =   ['en' => $request->name, 'ar' => $request->name_ar];
        $this->data['var']->notes   =   ['en' => $request->notes, 'ar' => $request->notes_ar];
        $this->data['var']->short_notes   =   ['en' => $request->short_notes, 'ar' => $request->short_notes_ar];
        $this->data['var']->category_id   =   $request->category_id;
        if (isset($request->image))
        {
            $this->multipleImage($this->data['var'], $this->data['folderBlade'],$request,$this->data['imageName2'], $this->data['Models2'], 'product_id');
        }
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
    public function destroyImage($id)
    {
        $this->data['var']=$this->data['Models2']::findorfail(decrypt($id));
        $this->data['var']->destroy(decrypt($id));
        ToastMagic::error('message', 'تم الحذف بنجاح !');
        return redirect()->back();
    }
}
