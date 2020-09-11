<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function post(Request $request)
    {
        $title = $request->title;
        $description = $request->description;
        $content = $request->content;
        $slug = str_replace(' ', '', $title);

        post::create([
            'title' => $title,
            'description' => $description,
            'content' => $content,
            'slug' => $slug,
        ]);
        return redirect('/blog');
    }
    public function delete($id)
    {
        $post = post::find($id);
        $post->delete();
        return redirect('blog');
    }

    public function edit($id)
    {
        $post = post::find($id);
        return view('edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $post = post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->save();
        return redirect('blog');
    }

    public function berita()
    {
        
        $api = "http://newsapi.org/v2/top-headlines?country=id&apiKey=94225fcc961d4ff3a69b08f453b1f6cc";
        $berita =  Http::get($api);
        $berita = $berita->json();
        session(['category' => 'general']);
        $category_default = session('category');
        return view('berita', ['beritas' => $berita['articles'], 'category_default' => $category_default]);
        
    }

    public function kategori(Request $request)
    {
        $api = "http://newsapi.org/v2/top-headlines?country=id&category=" . (string)$request->category . "&apiKey=94225fcc961d4ff3a69b08f453b1f6cc";
        $berita =  Http::get($api);
        $berita = $berita->json();
        session(['category' => $request->category]);
        $category_default = session('category');
        return view('berita', ['beritas' => $berita['articles'], 'category_default' => $category_default]);
    }
}
