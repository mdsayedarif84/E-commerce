<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.add-category');
    }
    public function saveCategoryInfo(Request $request){
        //return $request->all();
        $category                           =   new Category();
        $category->category_name            =   $request->category_name;
        $category->category_description     =   $request->category_description;
        $category->publication_status       =   $request->publication_status;
        $category->save();
        return redirect('/category/add-category')->with('message','Category Info Save Successfully');
    }
    public function manageCategoryInfo(){
        $categories     =   Category::all();
        return view('admin.category.manage-category',['categories'=>$categories]);
    }
    public function unpublishedCategoryInfo($id){
        $category   =   Category::find($id);
        $category->publication_status   =   0;
        $category->save();
        return redirect('/category/manage-category')->with('message','Category info unpublished successfully');
    }
    public function publishedCategoryInfo($id){
        $category   =   Category::find($id);
        $category->publication_status   =   1;
        $category->save();
        return redirect('/category/manage-category')->with('message','Category info published successfully');
    }
    public function editCategoryInfo($id){
        $category        =   Category::find($id);
        return view('admin.category.edit-category',['category'=>$category]);
    }
    public function updateCategoryInfo(Request $request){
        $categoryById                           =   Category::find($request->category_id);
        $categoryById->category_name            =   $request->category_name;
        $categoryById->category_description     =   $request->category_description;
        $categoryById->publication_status       =   $request->publication_status;
        $categoryById->save();
        return redirect('/category/manage-category')->with('message','Category info update successfully');
    }
    public function deleteCategoryInfo($id){
        $category        =   Category::find($id);
        $category->delete();
        return redirect('/category/manage-category')->with('message','Category info delete successfully');
    }
}
