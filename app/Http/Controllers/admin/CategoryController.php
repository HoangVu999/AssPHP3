<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\SaveCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    public function index(Request $request){
        if($request->keyword){
            $cates = Category::where(
                    'name', 'like', "%".$request->keyword."%"
                )->paginate(5);
            $cates->withPath('?keyword=' . $request->keyword);
        }else{
            $cates = Category::paginate(10);
        }
        $cates->load('posts');
        return view('admin.cate.index', [
            'cates' => $cates,
            'keyword' => $request->keyword
        ]);
    }

    public function remove($id){
        Category::destroy($id);
        return redirect(route('cate.index'));
    }

    public function removeCate($id){
        Post::where('cate_id', $id)->delete();
        Category::destroy($id);
        return true;
    }

    public function addForm(){
        return view('admin.cate.add-form');
    }

    public function saveAdd(SaveCategoryRequest $request)
    {
        $model = new Category();
        $model->name = $request->name;
        if($request->hasFile('logo')){
            $fileName = uniqid().'_'.$request->logo->getClientOriginalName();
            $filePath = $request->file('logo')->storeAs('cateImage', $fileName, 'public');
            $model->logo =$fileName;
        }
        $model->save();
        return redirect(route('cate.index'));
     }

    public function editForm($id){
        $model = Category::find($id);
        if(!$model) return redirect(route('cate.index'));
        return view('admin.cate.edit-form', ['model' => $model]);
    }

    public function saveEdit(EditCategoryRequest $request)
    {
        $newCate = Category::find($request->id);
        $newCate->name = $request->name;
        if($request->hasFile('logo')){
            $fileName = uniqid().'_'.$request->logo->getClientOriginalName();
            $filePath = $request->file('logo')->storeAs('cateImage', $fileName, 'public');
            $newCate->logo =$fileName;
        }
        $newCate->save();
        return redirect(route('cate.index'));
    }
}