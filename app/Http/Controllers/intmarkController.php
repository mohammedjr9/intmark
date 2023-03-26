<?php

namespace App\Http\Controllers;

use App\Mail\contact;
use App\Models\Category;
use App\Models\ContactUs;
use App\Models\Employee;
use App\Models\Project;
use App\Models\Row;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

class intmarkController extends Controller
{
    public function index()
    {
        $category=Category::all();
        $rows=Row::all();
        return view('index',compact('category','rows'));
    }


    public function services()
    {
        $row = Row::where('id' , 5)->orWhere('id' , 6)->get();
        $count=Project::count();
        $countEmp=Employee::count();

        return view('services',compact('row','count','countEmp'));
    }



    public function workUs()
    {

        $category = Category::select(['name','id'])->with('project')->get();

        return view('worksPage' , compact('category'));
    }

    public function last()
    {
        $row = Row::where('id' , 5)->first();
        $category = Category::with('service')->get();
        return view('last' , compact('category' , 'row'));
    }


    public function form()
    {
        return view('form');
    }
    public function contactus(Request $request){
        $validator = Validator($request->all(),[
            'name'=>'required',
            'email' => ['required', 'string', ],
            'message' => ['required', 'string',],
        ]);
        if ($validator->fails()){
//            toastr()->error($validator->getMessageBag()->first(), 'form');
//            return redirect()->route('Intmark.form');
            return response()->json([
                'error' => $validator->getMessageBag()->first()
            ]);
        }
        $Contact=ContactUs::create($request->all());
        if ($Contact){
            Mail::to("info@intmark.co")->send(new contact($request->email,$request->message,$request->name));
            return response()->json([
                'success' => 'true',

            ]);        }else {
            return response()->json([
                'error' => 'fasle'
            ]);
        }

    }
}
