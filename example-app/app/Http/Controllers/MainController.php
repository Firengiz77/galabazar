<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Message;
use App\Mehsullar;
use App\Cesidler;
use App\Slider;
use App\Http\Requests\MessageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index(){

        $contact=Contact::first();
        $mehsullar=Mehsullar::withTranslations()->with('cesidler')->get();
        $mehsullar11=Mehsullar::withTranslations()->with('cesidler')->take(5)->get();
        $cesidler=Cesidler::withTranslations()->get();
        $slider=Slider::withTranslations()->get();
        $mehsullar2=Mehsullar::withTranslations()->with('cesidler')->get();

        return view('front.pages.home',compact('contact','mehsullar','cesidler','mehsullar2','slider','mehsullar11'));
    }
    public function about(){
        $mehsullar11=Mehsullar::withTranslations()->with('cesidler')->take(5)->get();
        $contact=Contact::first();
        $mehsullar=Mehsullar::withTranslations()->with('cesidler')->get();
        $mehsullar2=Mehsullar::withTranslations()->with('cesidler')->get();
        return view('front.pages.about',compact('contact','mehsullar','mehsullar2','mehsullar11'));
    }
    public function contact(){
        $mehsullar11=Mehsullar::withTranslations()->with('cesidler')->take(5)->get();
        $contact=Contact::first();
        $mehsullar=Mehsullar::withTranslations()->with('cesidler')->get();
        $mehsullar2=Mehsullar::withTranslations()->with('cesidler')->get();
        return view('front.pages.contact',compact('contact','mehsullar','mehsullar2','mehsullar11'));

    }
    public function gallery(){
        $mehsullar11=Mehsullar::withTranslations()->with('cesidler')->take(5)->get();
        $contact=Contact::first();
        $mehsullar=Mehsullar::withTranslations()->with('cesidler')->get();
        $mehsullar2=Mehsullar::withTranslations()->with('cesidler')->get();
        return view('front.pages.gallery',compact('contact','mehsullar','mehsullar2','mehsullar11'));

    }

    public function allproduct(){
        $mehsullar11=Mehsullar::withTranslations()->with('cesidler')->take(5)->get();
        $contact=Contact::first();
        $mehsullar=Mehsullar::withTranslations()->with('cesidler')->get();
        $mehsullar2=Mehsullar::withTranslations()->with('cesidler')->get();
        return view('front.pages.allproduct',compact('contact','mehsullar','mehsullar2','mehsullar11'));

    }


    public function shop_single($id,$id2){
        $mehsullar11=Mehsullar::withTranslations()->with('cesidler')->take(5)->get();
        $contact=Contact::first();
        $mehsullar3=Mehsullar::withTranslations()->where('id',$id2)->with('cesidler')->get();
        $cesidler=Cesidler::withTranslations()->where('id',$id)->get();
        $mehsullar2=Mehsullar::withTranslations()->with('cesidler')->get();
        $mehsullar=Mehsullar::withTranslations()->with('cesidler')->get();
        $cesidler2=Cesidler::withTranslations()->orderBy('id',"desc")->get();

        return view('front.pages.shop_single',compact('contact','cesidler','mehsullar2','cesidler2','mehsullar','mehsullar3','mehsullar11'));

    }

    public function shop($id){
        $mehsullar11=Mehsullar::withTranslations()->with('cesidler')->take(5)->get();
        $mehsullar4=Mehsullar::find($id);
        $mehsullar3=$mehsullar4->cesidler()->paginate(30);
        $contact=Contact::first();
        $mehsullar=Mehsullar::withTranslations()->where('id',$id)->with('cesidler')->get();
        $mehsullar2=Mehsullar::withTranslations()->with('cesidler')->get();
        return view('front.pages.shop',compact('contact','mehsullar','mehsullar2','mehsullar3','mehsullar4','mehsullar11'));

    }

    public function search(){
        
         $mehsullar11=Mehsullar::withTranslations()->with('cesidler')->take(5)->get();
         $search_text=$_GET['search_field'];
         $mehsullar2=Mehsullar::withTranslations()->with('cesidler')->get();
         
         $cesidler = Cesidler::where('ad','LIKE','%'.$search_text.'%')->withTranslations()->get();
         $contact=Contact::first();

         return view('front.search',compact('cesidler','mehsullar2','contact','mehsullar11'));
     }

    public function sendmail(Request $request,MessageRequest $request2){
        
        $valiator = $request2->validated();
        $message3 = Message::create($request2->all());
        $message3->save();


        $mehsullar11=Mehsullar::withTranslations()->with('cesidler')->take(5)->get();
        $contact=Contact::first();
        $mehsullar=Mehsullar::withTranslations()->with('cesidler')->get();
        $mehsullar2=Mehsullar::withTranslations()->with('cesidler')->get();

        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|min:3',
            'tel'=>'required',
            'melumat'=>'required',
        ]);

        $email='noreplyretagroup@gmail.com'; 
         $array = [
       'name'=> $request->name,
       'email'=> $request->email,
       'tel'=>$request->tel,
       'melumat'=>$request->melumat
     ]; 
      Mail::send('front.email', $array,  function ($message2) use($email)  {
          $message2->to( $email, 'RetaGroup');
          $message2->subject('RetaGroup');
          return redirect()->back()->with('message', 'Email has been send successfully!');
      });  
      return redirect()->back()->with('message', 'Email has been send successfully!');
     }
}
