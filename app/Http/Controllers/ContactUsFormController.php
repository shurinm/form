<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Form;

class ContactUsFormController extends Controller {
    // Create Contact Form
    public function createForm(Request $request) {
      return view('welcome');
    }
    // Store Contact Form data
    public function ContactUsForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'message' => 'required'
         ]);
        //  Store data in database
        Form::create($request->all());
        // 
        return back()->with('success', 'Запись добавлена!');
    }
}