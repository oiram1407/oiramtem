<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use App\Contact;
use App\MessagesContact as MContact;

class ContactController extends Controller
{
    public function index(){
      $data = array(
        'contact_messages' => MContact::orderBy('reason_text')->get(),
        'fbID' => Settings::where('variable', 'fb')->first(),
        'waID' => Settings::where('variable', 'wa')->first(),
      );

      return view('contact', $data);
    }

    public function setContact(Request $request)
    {
        $request->validate([
                'name_contact' => 'required',
                'email_contact' => 'required|email',
                'id_reason' => 'required|integer|exists:w_messages_contact,id_reason',
                'message_contact' => 'required'
            ], [
                'name_contact.required' => 'Es necesario rellenar el campo de nombre',
                'email_contact.required' => 'Es necesario rellenar el campo de email',
                'id_reason.required' => 'Debes elegir el motivo del mensaje',
                'id_reason.exists' => 'Selecciona una opción válida',
                'message_contact.required' => 'Escribe un mensaje'
            ]);

        $input = $request->all();
        $input['ip_contact'] = $request->ip();

        $contact = Contact::create($input);

        return back()->with('success', 'El mensaje ha sido enviado correctamente.');
    }

    public function admContact(){
      $contacts = Contact::select('w_contacts.*', 'w_messages_contact.*')->join('w_messages_contact', 'w_contacts.id_reason', '=', 'w_messages_contact.id_reason')->paginate(15);

      $data = array(
        'contacts' => $contacts
      );

      return view('admin.contacts', $data);
    }
}
