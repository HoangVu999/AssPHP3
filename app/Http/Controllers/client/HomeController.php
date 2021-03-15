<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\View;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Pow;

class HomeController extends Controller
{
    public function homepage(){
        $cateItem = Category::orderBy('id', 'desc')->get();
        $postItemNew = Post::orderBy('id', 'desc')->take(4)->get();
        $totalViews = View::where('post_id')->sum('views');
        $postItemNew = Post::paginate(10);
        $cateItem = Category::orderBy('id', 'desc')->get();
        return view('client.default.index', compact('cateItem','postItemNew'));
    }

    public function detail($id,Request $request){
        $cateItem = Category::orderBy('id', 'desc')->get();
        $post = Post::find($id);
        $totalViews = View::where('post_id', $id)->sum('views');
        $postCate = Post::where('cate_id', $id)->get();
        // post view         
        $today = Carbon::yesterday()->format('Y-m-d');
        $postView = View::where('post_id', $request->id)
                                ->where('created_at', '>=', $today . " 00:00:00")
                                ->where('created_at', '<=', $today . " 23:59:59")
                                ->first();
        if($postView){
            $postView->views += 1;
        }else{
            $postView = new View;
            $postView->post_id = $request->id;
            $postView->views = 1;
        }
        $postView->save();
        return view('client.post.detail', compact('post','totalViews', 'cateItem', 'postCate'));
    }
    public function postList($id){
        $cateItem = Category::orderBy('id', 'desc')->get();
        $postCate = Post::where('cate_id', $id)->get();
        $cateItem = Post::paginate(10);
        return view('client.post.postList', compact('cateItem', 'postCate'));
    }
    public function search(Request $request){
        if($request->keyword){
            $post = Category::where(
                    'title', 'like', "%".$request->keyword."%"
                )->paginate(5);
            $post->withPath('?keyword=' . $request->keyword);
        }else{
            $post = Post::paginate(10);
        }
        $post->load('posts');
        return view('client.post.search', [
            'post' => $post,
            'keyword' => $request->keyword
        ]);
    }
}
