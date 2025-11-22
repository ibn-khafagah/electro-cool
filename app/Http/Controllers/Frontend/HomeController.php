<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Feedback;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Team;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data   =   [
            'blogs'     =>  Blog::latest()->limit(5)->get(),
            'banners'   =>  Banner::latest()->limit(5)->get(),
            'services'  =>  Service::latest()->limit(3)->get(),
            'features'   =>  Feature::latest()->limit(4)->get(),
            'feedbacks'  =>  Feedback::latest()->limit(3)->get(),
            'teams'      =>  Team::latest()->limit(4)->get(),
            'partners'   =>  Partner::latest()->limit(10)->get(),
        ];
        return view('frontend.index', $data);
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    public function storeContact(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->name  =   $request->name;
        $contact->email =   $request->email;
        $contact->phone =   $request->phone;
        $contact->notes =   $request->notes;
        $contact->save();
        ToastMagic::success('message', trans('dev.contact_sent'));
        return redirect()->back();
    }
}
