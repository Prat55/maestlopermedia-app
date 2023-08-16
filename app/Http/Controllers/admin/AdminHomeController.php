<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    protected function index()
    {
        return view('admin.dashboard');
    }

    protected function allposts()
    {
        $posts = Post::all();
        return view('admin.allposts')->with('posts', $posts);
    }

    protected function addpost()
    {
        $posts = Post::all();
        return view('admin.addpost')->with('posts', $posts);
    }

    public function store(Request $request)
    {
        if ($request->hasFile("media")) {
            $file = $request->file("media");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("posts/"), $imageName);

            $post = new Post([
                "title" => $request->title,
                "author" => $request->author,
                "media" => $imageName,
            ]);
            $post->save();
        }
        return redirect("/admin/all-posts");
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
