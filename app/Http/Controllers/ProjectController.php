<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Project=Project::with('category')->latest()->paginate(5);
        $categories=Category::select(['name','id'])->get();

        return view('admin.Project.index',compact('Project','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::select(['name','id'])->get();
        return view('admin.Project.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(),[
            'imagee'=>'required',
            'name'=>'required',
            'link'=>'nullable',
            'category_id'=>'required|int',
            'tag'=>'required',
        ]);
        $tag=explode(',',$request->tag);
        $request->merge([
            'tag'=>$tag
        ]);
        if ($validator->fails()){
            toastr()->error($validator->getMessageBag()->first(), 'Project');
            return redirect()->route('Project.index');
        }
        $imagename='Project'.rand().time().$request->file('imagee')->getClientOriginalName();
        $request->file('imagee')->move(public_path('upload/images/Project'),$imagename);

        $request->merge([
            'image'=>$imagename
        ]);
        $data=$request->except('imagee');
        Project::create($data);
        toastr()->success('Data has been saved successfully!', 'Project');
        return redirect()->route('Project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator($request->all(),[
            'imagee'=>'nullable',
            'name'=>'required',
            'link'=>'nullable',
            'category_id'=>'required|int',
            'tag'=>'required',
        ]);
        $tag=explode(',',$request->tag);
        $request->merge([
            'tag'=>$tag
        ]);
        if ($validator->fails()){
            toastr()->error($validator->getMessageBag()->first(), 'Project');
            return redirect()->route('Project.index');
        }
        $Project=Project::findOrFail($id);
        $imagename=$Project->image;
        if($request->hasFile('imagee')){
            File::delete(public_path('upload/images/Project/'.$Project->image));
            $imagename='category'.rand().time().$request->file('imagee')->getClientOriginalName();
            $request->file('imagee')->move(public_path('upload/images/Project'),$imagename);
        }

        $request->merge([
            'image'=>$imagename
        ]);
        $data=$request->except('imagee');
        $Project->update($data);
        toastr()->success('Data has been updated successfully!', 'Project');
        return redirect()->route('Project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {$Project=Project::findOrFail($id);
        if ($Project){
            File::delete(public_path('upload/images/Project/'.$Project->image));
            $Project->delete();
            toastr()->success('Data has been Deleted successfully!', 'Project');
            return redirect()->route('Project.index');
        }else{
            toastr()->success('Data has been Deleted Faild!', 'Project');
            return redirect()->route('Project.index');
        }
    }
}
