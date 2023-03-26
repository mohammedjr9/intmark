<?php

namespace App\Http\Controllers;

use App\Models\Row;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RowController extends Controller
{

    public function index()
    {
        $category=Row::latest()->paginate(5);

        return view('admin.Row.index',compact('category'));

    }


    public function create()
    {

        return view('admin.Row.add');    }


    public function store(Request $request)
    {
        $validator = Validator($request->all(),[
            'imagee'=>'nullable|image',
            'name'=>'required',
            'description'=>'required',


        ]);
        if ($validator->fails()){
            toastr()->error($validator->getMessageBag()->first(), 'Row');
            return redirect()->route('Data.index');
        }
        if ($request->has('imagee')) {
            $imagename = 'category' . rand() . time() . $request->file('imagee')->getClientOriginalName();
            $request->file('imagee')->move(public_path('upload/images/category'), $imagename);

            $request->merge([
                'image' => $imagename
            ]);
            $data=$request->except('imagee');
        }else{
            $data=$request->all();
        }

        Row::create($data);
        toastr()->success('Data has been saved successfully!', 'Row');
        return redirect()->route('Data.index');



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
            toastr()->error($validator->getMessageBag()->first(), 'Row');
            return redirect()->route('Data.index');
        }

        $Row=Row::findOrFail($id);
        $imagename=$Row->image;
        if($request->hasFile('imagee')){
            File::delete(public_path('upload/images/category/'.$Row->image));
            $imagename='category'.rand().time().$request->file('imagee')->getClientOriginalName();
            $request->file('imagee')->move(public_path('upload/images/category'),$imagename);
        }

        $request->merge([
            'image'=>$imagename
        ]);
        $data=$request->except('imagee');
        $Row->update($data);
        toastr()->success('Data has been updated successfully!', 'Row');
        return redirect()->route('Data.index');
    }


    public function destroy($id)
    {
        $Row=Row::findOrFail($id);
        if ($Row){
            File::delete(public_path('upload/images/category/'.$Row->image));
            $Row->delete();
            toastr()->success('Data has been Deleted successfully!', 'Row');
            return redirect()->route('Data.index');
        }else{
            toastr()->success('Data has been Deleted Faild!', 'Row');
            return redirect()->route('Data.index');
        }

    }
}
