<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\View;

class PostController extends Controller
{
    public function index(Request $request){
        if($request->keyword){
            $post = Post::where(
                    'title', 'like', "%".$request->keyword."%"
                )->paginate(10);
            $post->withPath('?keyword=' . $request->keyword);
        }else{
            $post = Post::paginate(10);
        }
        $post->load('category');
        return view('admin.post.index', compact('post') ,[
            'post' => $post,
            'keyword' => $request->keyword
        ]);
    }

    public function remove($id){
        Post::destroy($id);
        return redirect(route('post.index'));
    }

    public function addForm(){
        $category = Category::all();
        return view('admin.post.add-form',compact('category'));
    }

    public function saveAdd(SavePostRequest $request)
    {
        $model = new Post();
        $model->title = $request->title;
        $model->cate_id = $request->cate_id;
        $model->short_desc = $request->short_desc;
        $model->author = $request->author;
        $model->content = $request->content;
        if($request->file('image')){
            $fileName = uniqid().'_'.$request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('postImage', $fileName, 'public');
            $model->image =$fileName;
        }
        $model->save();
        $view = new View ;
        $view->post_id = $model->id;
        $view->views = 0;
        $view->save();
        return redirect(route('post.index'));
     }

    public function editForm($id){
        $model = Post::find($id);
        $category = Category::all();
        if(!$model) return redirect(route('post.index'));
        return view('admin.post.edit-form', ['model' => $model], compact('category'));
    }

    public function saveEdit(Request $request)
    {
        $newPost = Post::find($request->id);
        $newPost->title = $request->title;
        $newPost->cate_id = $request->cate_id;
        $newPost->short_desc = $request->short_desc;
        $newPost->author = $request->author;
        $newPost->content = $request->content;
        if($request->file('image')){
            $fileName = uniqid().'_'.$request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('postImage', $fileName, 'public');
            $newPost->image =$fileName;
        }
        $newPost->save();
        return redirect(route('post.index'));
    }
}
