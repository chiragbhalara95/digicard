<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;

class ContactController extends Controller
{
      public function saveContact(Request $request) { 

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'country_code' => 'required',
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        $contact = new ContactModel;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->country_code = $request->country_code;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;

        $contact->save();
          // _mail_send_general(['email' => 'chiragbhalara95@gmail.com', 'name' => 'Conttact digitalcards'], 'Contact Us', $request->get('subject'));

        // try {

          // $res = \Mail::send('email.contact_email',
          //      array(
          //          'name' => $request->get('name'),
          //          'email' => $request->get('email'),
          //          'subject' => $request->get('subject'),
          //          'phone_number' => $request->get('phone_number'),
          //          'user_message' => $request->get('message'),
          //      ), function($message) use ($request)
          //        {
          //           $message->from(env('MAIL_USERNAME'));
          //           $message->to('contact@digitalcards.tech');
          //           $message->subject('Contact Us');
          //        });

          // \Mail::send('email.contact_response',
          //      array(
          //          'name' => $request->get('name'),
          //          'email' => $request->get('email'),
          //          'subject' => $request->get('subject'),
          //          'phone_number' => $request->get('phone_number'),
          //          'user_message' => $request->get('message'),
          //      ), function($message) use ($request)
          //        {
          //           $message->from(env('MAIL_USERNAME'));
          //           $message->to($request->get('email'));
          //           $message->subject('Re:Contact Us');
          //        });
        // }catch (Throwable $t) {
        //   Log::info('Throwable caught.');
        // }   

        return "Thank you for contact us!";
    }

}
