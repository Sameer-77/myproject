<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeContent;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Footer;

class PageController extends Controller
{
    public function index()
    {
        $homeContents = HomeContent::all()->keyBy('key');
        return view('index', compact('homeContents'));
    }

    public function about()
    {
        $homeContents = HomeContent::all()->keyBy('key');
        return view('about', compact('homeContents'));
    }

    public function competitions()
    {
        return view('competitions');
    }

    public function marketplace()
    {
        return view('marketplace');
    }

    public function equineDirectory()
    {
        return view('equine-directory');
    }

    public function join()
    {
        return view('join');
    }

    public function sellHere()
    {
        return view('sell-here');
    }

    public function contact()
    {
        $contact = Contact::first();
        return view('contact', compact('contact'));
    }

    public function blogIndex()
    {
        $blogs = Blog::latest()->paginate(9);
        return view('blog', compact('blogs'));
    }

    public function blogShow($id)
    {
        $blog = Blog::findOrFail($id);
        $relatedBlogs = Blog::where('id', '!=', $id)->latest()->take(3)->get();
        return view('blog-single', compact('blog', 'relatedBlogs'));
    }
}
