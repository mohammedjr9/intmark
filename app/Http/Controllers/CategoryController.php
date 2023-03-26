<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{

    public function index()
    {
        $category=Category::latest()->paginate(5);

        return view('admin.Category.index',compact('category'));

    }


    public function create()
    {

        return view('admin.Category.add');
    }


    public function store(Request $request)
    {
        $validator = Validator($request->all(),[
            'imagee'=>'required|image',
            'name'=>'required',
            'description'=>'required',


        ]);
        if ($validator->fails()){
            toastr()->error($validator->getMessageBag()->first(), 'Category');
            return redirect()->route('Category.index');
        }
        $imagename='category'.rand().time().$request->file('imagee')->getClientOriginalName();
        $request->file('imagee')->move(public_path('upload/images/category'),$imagename);

        $request->merge([
            'image'=>$imagename
        ]);
        $data=$request->except('imagee');
        Category::create($data);
        toastr()->success('Data has been saved successfully!', 'Category');
        return redirect()->route('Category.index');



    }


    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
        $validator = Validator($request->all(),[
            'imagee'=>'nullable|image',
            'name'=>'required',
            'description'=>'required',
        ]);
        if ($validator->fails()){
            toastr()->error($validator->getMessageBag()->first(), 'Category');
            return redirect()->route('Category.index');
        }

        $Category=Category::findOrFail($id);
        $imagename=$Category->image;
        if($request->hasFile('imagee')){
            File::delete(public_path('upload/images/category/'.$Category->image));
            $imagename='category'.rand().time().$request->file('imagee')->getClientOriginalName();
            $request->file('imagee')->move(public_path('upload/images/category'),$imagename);
        }

        $request->merge([
            'image'=>$imagename
        ]);
        $data=$request->except('imagee');
        $Category->update($data);
        toastr()->success('Data has been updated successfully!', 'Category');
        return redirect()->route('Category.index');
    }


    public function destroy($id)
    {
        $Category=Category::findOrFail($id);
        if ($Category){
            File::delete(public_path('upload/images/category/'.$Category->image));
            $Category->delete();
            toastr()->success('Data has been Deleted successfully!', 'Category');
            return redirect()->route('Category.index');
        }else{
            toastr()->success('Data has been Deleted Faild!', 'Category');
            return redirect()->route('Category.index');
        }

    }

    public function service(Request $request,$id){
        $validator = Validator($request->all(),[
            'name'=>'required',
        ]);
        if ($validator->fails()){
            toastr()->error($validator->getMessageBag()->first(), 'Category');
            return redirect()->route('Category.index');
        }
        Service::create([
            'category_id'=>$id,
            'title'=>$request->name
        ]);
        toastr()->success('Data has been ADD successfully!', 'Category');
        return redirect()->route('Category.index');
    }
}
