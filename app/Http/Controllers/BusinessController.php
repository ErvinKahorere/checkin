<?php

namespace App\Http\Controllers;

use App\Business;
use App\Visit;
use Illuminate\Http\Request;

// use Auth;
use DB;
use App\Fingerprint;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;
use Redirect;
use Illuminate\Support\Facades\Validator;
use PDF;
// import the storage facade
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

class BusinessController extends Controller
{


  public function search(Request $request){

    $disk = "burl";

  // $filename = "fingerprint.php";

  $filename = "fingerprint.php";


      
 $business = Business::with('user.visits')->find(Storage::disk($disk)->get($filename)); 

 //   $business = Business::find(Storage::disk($disk)->get($filename))->visits;
  //  $business = Business::find(Storage::disk($disk)->get($filename));
    // $userId = auth()->id();  
    $visitorCount = Business::find(Storage::disk($disk)->get($filename))->visits ->count();

        
 $search_text = $_GET['query'];
    
 $visits = Business::find(Storage::disk($disk)->get($filename))->visits;
//  $visits = User::where('name', 'LIKE', '%'.$search_text.'%')->get();

// $title = $_GET['title'];
// $category = $_GET['category'];

 // $visits = Business::find(Storage::disk($disk)->get($filename))->visit;

// $users = Users::with('users')->get();


// $visits = User::all();


//  $users = User::where( 
//      'name', 'LIKE', '%' . $search_text . '%'
//  )->get();


 $users = User::where( 
  'name', 'LIKE', '%' . $search_text . '%'
)->get();

 // dd($users);

return view('business.results', compact('users', 'visitorCount', 'business', 'visits'));

}


public function search_today(Request $request){



  $disk = "burl";

  $filename = "fingerprint.php";
//  $visits = Business::find(Storage::disk($disk)->get($filename))->visits;

 // $visits = Visit::whereDate('created_at', Carbon::today())->get();

 // dd($visits);
  
 $business = Business::with('user.visits')->find(Storage::disk($disk)->get($filename)); 
  // dd($business);

 // $business =  $business1->whereDate('created_at', Carbon::today())->get();
 // dd($business);
// $date = Carbon::now();

// echo $date;
 //echo $date->month;
 //$year = $date->year;

//  $date =  Carbon::now()->toDateString();

$date = Carbon::now();
 // dd($day);

// $visits = Business::find(Storage::disk($disk)->get($filename))->visits
// ->filter(function ($item) use ($date) {


//  $item_date = $item->created_at->toDateString();


//  return (data_get($item, 'created_at',  $item_date) < $date);

// });

$visits = Business::find(Storage::disk($disk)->get($filename))->visits
->filter(

  function ($query) {
  return $query->today();
 //   dd($query->today());

 });

 
 // dd($value);

 

//$visits = Business::find(Storage::disk($disk)->get($filename))->visits->where('created_at', '>', now()->subWeek()->startOfWeek())
 //                       ->where('created_at', '<', now()->subWeek()->endOfWeek());
// dd($visits);




  $business = Business::find(Storage::disk($disk)->get($filename));
 // dd($business);


  // $userId = auth()->id();  
  $visitorCount = Business::find(Storage::disk($disk)->get($filename))->visits ->count();




return view('business.results_today', compact('visits', 'visitorCount', 'business'));

}



public function search_this_week(Request $request){


  $disk = "burl";

  $filename = "fingerprint.php";
    
    $business = Business::with('user.visits')->find(Storage::disk($disk)->get($filename)); 


    
  
    Carbon::setWeekStartsAt(Carbon::SUNDAY);

    $now = Carbon::now();

    $this_week = $now->weekOfYear;

   //  dd($this_week);
    

  $date = Carbon::now();
  
  $visits = Business::find(Storage::disk($disk)->get($filename))->visits
  ->filter(function ($item) use ($date) {
   // return (data_get($item, 'created_at') > $date) && (data_get($item, 'created_at') < $date->endOfDay());
  
   return (data_get($item, 'date') > $date->startOfWeek()) && (data_get($item, 'date') < $date->endOfWeek());
  
  });

  $visitorCount = Business::find(Storage::disk($disk)->get($filename))->visits ->count();

  
return view('business.results_this_week', compact('visits', 'visitorCount', 'business'));

}



public function addBusiness()
    {

      $disk = "burl";

  $filename = "fingerprint.php";
        // $business = new Business();
        // $business ->name = "Finger Business";
        // $business ->phone = "08123f53445678";
        // $business ->email = "bsdus@gmail.com";
        // $business ->location = "Some Place Ombika Str";
        // $business ->save();

       //  return "Business has been created!";
        // $data = $request->validate([
        //     'name' => 'required|max:255',
        //     'phone' => 'required|url|max:255',
        //     'email' => 'required|max:255',
        //     'location' => 'required|max:255'            
        // ]);
    
        // $link = tap(new Business($data))->save();
    
        return view ('admin.users.add-business');
    }



    public function storeBusiness(Request $request)
    {
        // $business = new Business();
        // $business ->name = "Finger Business";
        // $business ->phone = "08123f53445678";
        // $business ->email = "bsdus@gmail.com";
        // $business ->location = "Some Place Ombika Str";
        // $business ->save();

       //  return "Business has been created!";

       $disk = "burl";

  $filename = "fingerprint.php";

       $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'location' => 'required'
    ]);

    Business::create($request->all());

    $visits = Business::find(Storage::disk($disk)->get($filename))->visits;
    $visitorCount = Business::find(Storage::disk($disk)->get($filename))->visits ->count();

  
       
    return view('business.dashboard', compact('visits', 'visitorCount'));

    }
















    public function addVisit($id)
    {


      $disk = "burl";

  $filename = "fingerprint.php";

        $user = Auth::user();  
        
      //  dd($user);
        
        $business = Business::find($id);
        $visit = new Visit();
        $visit->visit = "Visit";
        $visit->user_id = $user->id;
        $business->visits()->save($visit);

        return "Visit has been recorded!";
    }

    public function getVisitsByBusiness($id){

      $disk = "burl";

      $filename = "fingerprint.php";

        $visits = Business::find($id)->visits;

        return $visits;
    }

    public function enterNumber()
    {


      

  //  echo  $fingerprint = Business::find(1)->fingerprints;


        return view('checkin.1_enternumber');
    } 



    public function verifyNumber(Request $request)
    {

    //    $q = Input::get('q');


    $disk = "burl";

  $filename = "fingerprint.php";



       return view('checkin.1_enternumber');
    } 




    public function simple(Request $request)
    {


      $disk = "burl";

  $filename = "fingerprint.php";


        // $data = \DB::table('users');
        // if( $request->input('search')){
        //     $data = $data->where('name', $request->search);

        // }

        // return $data;


        






        $user = User::where('phone', '=', $request->input('search'))->first();

        
        // $fingerprint = $request->input('fingerprint');


        // dd($fingerprint);


    //    Auth::login($user);


 // echo $user;

  

    if ($user === null) {
    // user doesn't exist

  //  echo 'User not found';




   return redirect('register ')->with('error-account','Account not found!');

  // return redirect()->route('')
    // ->with('warning',"Don't Open this link");
    
    // 
}


// $user = Auth::user();

Auth::loginUsingId($user->id);

// Auth::loginUsingId(9);

$time = Carbon::now();





      
$fingerprint = $request->input('fingerprint');



$business = Business::find(Storage::disk($disk)->get($filename));

$visit = new Visit();
$visit->visit = "1";
$visit->user_id = $user->id;
$business->visits()->save($visit);





// dd($fingerprint);

// dd($contactNumber);


// return view('checkin.thank-you')->with('user' , $user);

 return view('checkin.verify', compact('user', 'time', 'fingerprint', 'business'));




    //  $user = DB::table('users')->where('name', 'John')->first();


     //   return view('checkin.2verify_details', compact('data'));
    }


    public function thanks(Request $request, User $user)
    {

      // echo $user;


      $disk = "burl";

  $filename = "fingerprint.php";
      


    $user = Auth::user();

    $time = Carbon::now();



  //  $businessID =  $request->input('businessID');


 // $fingerprint = $request->input('fingerprint');

  // dd($fingerprint);
  

  //  $business = Business::find($fingerprint);

  //  dd($business);

  //  $fingerprint = $request->input('fingerprint');

  //  dd($fingerprint);

   $business = Business::find(Storage::disk($disk)->get($filename));

// echo $business;

    // $visit = new Visit();
    // $visit->visit = "1";
    // $visit->user_id = $user->id;
    // $business->visits()->save($visit);


  //  Auth::logout();




    return view('checkin.thank-you', compact('user', 'time', 'business'));

}


public function logout()
{

  $disk = "burl";

  $filename = "fingerprint.php";
   
    Session::flush();
    Auth::logout();

    return Redirect::to("/enter-number");


  //  return view('checkin.logout');

  
}

public function autologin(User $user)
{

  $disk = "burl";

  $filename = "fingerprint.php";


 //   Auth::loginUsingId(13);

   //  Auth::loginUsingId($user->id);

  // echo $user;


  //  $user = Auth::user();

    $time = Carbon::now();


  //  Auth::logout();

    return view('checkin.thank-you', compact('user', 'time'));


}


public function businessDashboard ()
{


  $disk = "burl";

  $filename = "fingerprint.php";
  
  // if (Storage::disk($disk)->exists($filename)) {
  //   return Storage::disk($disk)->get($filename);
  // }
  
  // throw new FileNotFoundException(sprintf('File not found: %s', $filename), 404);
  
 // dd(Storage::disk($disk)->get($filename));

  $business = Business::find(Storage::disk($disk)->get($filename));

 // $business = Business::find(Storage::disk($disk)->get($filename));

 // dd($businessID);


    $visits = Business::find(Storage::disk($disk)->get($filename))->visits;
    $visitorCount = Business::find(Storage::disk($disk)->get($filename))->visits ->count();
       
    return view('business.dashboard', compact('visits', 'visitorCount', 'business'));

}




 // Generate PDF
 public function createPDF() {
  // retreive all records from db
  

  $disk = "burl";

  $filename = "fingerprint.php";
  
  $business = Business::find(Storage::disk($disk)->get($filename));

  // dd($businessID);
 
  $visits = Business::find(Storage::disk($disk)->get($filename))->visits;
  $visitorCount = Business::find(Storage::disk($disk)->get($filename))->visits ->count();

  
  $data = Business::find(Storage::disk($disk)->get($filename))->visits;

  $date = Carbon::now();


  
  // share data to view
  view()->share('visit', $data, compact('business'));
  $pdf = PDF::loadView('export.all_visits', $data, compact('business', 'date'));

  // download PDF file with download method
  return $pdf->download('pdf_file_all_visits.pdf', compact('business', 'date'));
}


public function business_url() {

  

$disk = "burl";

$filename = "fingerprint.php";


if (Storage::disk($disk)->exists($filename)) {
  return Storage::disk($disk)->get($filename);
}

throw new FileNotFoundException(sprintf('File not found: %s', $filename), 404);

}


}
