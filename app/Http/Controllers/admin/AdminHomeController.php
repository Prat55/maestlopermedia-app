<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
        $services = Service::all();
        return view('admin.addpost')->with('posts', $posts)->with('services', $services);
    }

    public function editpost($id)
    {
        $posts = Post::findOrFail($id);
        $services = Service::all();
        return view('admin.editpost')->with('posts', $posts)->with('services', $services);
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
                "service_id" => $request->service,
                "link" => $request->link,
            ]);
            $post->save();
        }
        return redirect("/admin/all-posts");
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        if ($request->hasFile("media")) {
            if (file::exists("posts/" . $post->media)) {
                File::delete("posts/" . $post->media);
            }
            $file = $request->file("media");
            $post->media = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/posts"), $post->media);
            $request['media'] = $post->media;
        }

        $post->update([
            "title" => $request->title,
            "author" => $request->author,
            "media" => $post->media,
            "service_id" => $request->service,
            "link" => $request->link,
        ]);
        return redirect("/admin/all-posts");
    }

    public function destroy($id)
    {
        $posts = Post::findOrFail($id);

        if (File::exists("media/" . $posts->media)) {
            File::delete("media/" . $posts->media);
        }
        $posts->delete();
        return back();
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
