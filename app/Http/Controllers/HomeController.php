<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function submit(Request $request)
    {
        //dd($request);
        $client =new \App\Models\Client();
        $client->nom=$request->nom;
        $client->prénom=$request->prénom;
        $client->émail=$request->émail;
        $client->télephone=$request->télephone;
        $client->motif_resiliation=$request->résiliation;
        $client->date=$request->date;
        $client->marque_voiture=$request->marque;
        $client->save();
        return redirect()->route('acceuil');
    

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    

   /* public function submit(Request $request)
    {
        //dd($request);
        $client =new \App\Models\Client();
        $client->nom=$request->nom;
        $client->prénom=$request->prénom;
        $client->émail=$request->émail;
        $client->télephone=$request->télephone;
        $client->motif_resiliation=$request->résiliation;
        $client->date=$request->date;
        $client->marque_voiture=$request->marque;
        $client->save();
        return redirect()->route('acceuil');
    

    }*/

    public function clients()
     {
         $clients=\App\Models\Client::all();
         //dd($clients);
        return view('clients',['clients'=>$clients]);
     }

     public function sendo()
    {
        $to_name = "abdessamad";
$to_email = "zahiatrami@gmail.com";
$data = array('name'=>'Ogbonna Vitalis(sender_name)', 'body' => 'A test mail');
Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
$message->to($to_email, $to_name)
->subject("Laravel Test Mail");
$message->from("server@bakconsulting.fr","Bakconsulting");
});
    }
}
