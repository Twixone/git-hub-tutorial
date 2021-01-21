<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Сообщение было добавлено');

    }

    public function allData()
    {
        //dd(Contact::all());
        $contact = new Contact;
        //  $contact->orderBy('id', 'asc')->skip(1)->take(1)->get()
        return view('messages', ['data' => $contact->all()]); // all позволяет вывести все записи из бд
    }

    public function showOneMessage($id)
    {
        $contact = new Contact;
        return view('one-message', ['data' => $contact->find($id)]);
    }

    public function updateMessage($id)
    {
        $contact = new Contact;
        return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req)
    {
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было обновлено');

    }

    public function deleteMessage($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');
    }


//$contact = new Contact;
//$data = [];
//$data = $contact->all();                                          // все записи
//$data[] = $contact->find(1);                                      // поиск по ID=1
//$data[] = $contact->inRandomOrder()->first();                     // первая случайная запись
//$data = $contact->inRandomOrder()->get();                         // все случайные записи
//$data = $contact->orderBy('id', 'asc')->get();                    // выборка с сортировкой
//$data = $contact->orderBy('id', 'asc')->take(1)->get();           // выборка 1 записи с сортировкой
//$data = $contact->orderBy('id', 'asc')->skip(1)->take(1)->get();  // пропускаем 1 запись, выборка 1 записи с сортировкой
//$data = $contact->where('id', '=', '1')->get();                   // выборка с условием
//return view('messages', ['data' => $data ]);

// Выдает ошибки с офф названием
//    public function submit(Request $req)
//    {
//        $validation = $req->validate([
//            'subject' => 'required|min:5|max:50',
//            'massage' => 'required|min:15|max:500'
//        ]);
//   }
}
