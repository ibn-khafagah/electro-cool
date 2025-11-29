<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Album;
use App\Models\AlbumImages;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\Feedback;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Service;
use App\Models\Team;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
            'albums'    =>  AlbumImages::latest()->limit(10)->get(),
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

    public function about()
    {
        return view('frontend.about');
    }

    public function faqs()
    {
        $faqs = Faq::all();
        return view('frontend.faq', compact('faqs'));
    }

    public function blogs()
    {
        $blogs = Blog::paginate(12);
        return view('frontend.blogs', compact('blogs'));
    }

    public function blog($slug)
    {
        $lang = App::getLocale();
        $blog = Blog::whereJsonContains("slug->{$lang}", $slug)->first();
        if (!$blog) {
            $fallbackType = Blog::where(function ($query) use ($slug) {
                $query->whereJsonContains("slug->ar", $slug)
                    ->orWhereJsonContains("slug->en", $slug);
            })->first();
            if ($fallbackType) {
                return redirect()->route('web_blog',$fallbackType->slug);
            }
            abort(404);
        }
        return view('frontend.blog', compact('blog'));
    }

    public function services()
    {
        $services = Service::paginate(12);
        return view('frontend.services', compact('services'));
    }
    public function service($slug)
    {
        $lang = App::getLocale();
        $service = Service::whereJsonContains("slug->{$lang}", $slug)->first();
        if (!$service) {
            $fallbackType = Service::where(function ($query) use ($slug) {
                $query->whereJsonContains("slug->ar", $slug)
                    ->orWhereJsonContains("slug->en", $slug);
            })->first();
            if ($fallbackType) {
                return redirect()->route('web_service',$fallbackType->slug);
            }
            abort(404);
        }
        return view('frontend.service', compact('service'));
    }

    public function gallery()
    {
        $albums = Album::all();
        return view('frontend.gallery', compact('albums'));
    }

    public function products()
    {
        $categories     =   Category::all();
        return view('frontend.products', compact('categories'));
    }
    public function product($slug)
    {
        $lang = App::getLocale();
        $product = Product::whereJsonContains("slug->{$lang}", $slug)->first();
        if (!$product) {
            $fallbackType = Product::where(function ($query) use ($slug) {
                $query->whereJsonContains("slug->ar", $slug)
                    ->orWhereJsonContains("slug->en", $slug);
            })->first();
            if ($fallbackType) {
                return redirect()->route('web_product',$fallbackType->slug);
            }
            abort(404);
        }
        return view('frontend.product', compact('product'));
    }
}
