<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message=ContactUs::latest()->paginate(20);
        return view('admin.ContactUs.index',compact('message',));

    }


    public function destroy($id)
    {
        ContactUs::destroy($id);
        toastr()->success('Data has been deleted successfully!', 'form');
        return redirect()->route('ContactUs.index');
    }
}
