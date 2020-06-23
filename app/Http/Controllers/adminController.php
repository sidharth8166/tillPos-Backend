<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\HttpRequest;
use Auth;
use Response;
use App\centre;
use Storage;
use Input;
use Image;
use JWTAuth;
use App\registerOtp;
use App\User;
use App\team;
use App\courseGallery;
use App\centreTiming;
use App\centreReview;
use App\centreInstructor;
use App\course;
use App\client;
use App\courseFee;
use App\courseInstructor;

class adminController extends Controller
{
    public function addCentre(Request $request)
    {
        $user = JWTAuth::parseToken()->toUser();
        $data = new centre();
        $user_file = $request->file('avatar1');
        $newFileName = time()."_".$user_file->getClientOriginalName();
        $path = 'vedicare-demo/centreLogo/1'.$newFileName;
        $t = Storage::disk('s3')->put($path, file_get_contents($user_file), 'public');
        $data->logo = "1".$newFileName;
        $data->clinic_name = $request->input('name');
        $data->userId = $user->id;
        $data->email = $request->input('email');
        $data->phone = $request->input('contact');
        $data->address = $request->input('address');
        $data->lat = $request->input('lat');
        $data->lng = $request->input('lng');
        $data->city = $request->input('city');
        $data->about = $request->input('about');
        $data->v_tour = $request->input('v_tour');
        $data->website = $request->input('website');
        $data->facebook = $request->input('fb');
        $data->google = $request->input('gp');
        $data->instagram = $request->input('in');
        $data->youtube = $request->input('yt');
        $data->twitter = $request->input('tw');
        $data->linkedin = $request->input('lk');
        $data->state = $request->input('state');
        $data->mapUrl = $request->input('mapUrl');
        $data->zipcode = $request->input('zipcode');
        $data->save();
        return response()->json([
            'callback' => "done",
            'centreId' => $data->id,
        ]);
    }

    public function addCentrePicture(Request $request)
    {
        $data = new centre();
        $user = Auth::user();
        $user_file = $request->file('myFile');
        $newFileName = time()."_".$user_file->getClientOriginalName();
        $data->logo = '1'.$newFileName;
        $data->userId = $user->id;
        $path = 'vedicare-demo/1'.$newFileName;
        $t = Storage::disk('s3')->put($path, file_get_contents($user_file), 'public');
        session()->put('clinicId', $data->id);
        $data->save();
        return $data->id;
        
    }

    public function phoneVerification(Request $request)
    {

        $phone = $request->input('phone');
        $email = $request->input('email');
        if (User::where('email', '=',$email)->exists()) {
            return "emailExist";
         }
        if (User::where([
             ['contact', '=',$phone]
         ])->exists()) {
            return "phoneExist";
         }
        $otp = rand ( 10000 , 99999 );
        $phone = $request->input('phone');
        // $url ="http://103.10.234.154/vendorsms/pushsms.aspx?user=docttocare&password=N8QI5SXD&msisdn=$phone&sid=DRCARE&msg=$otp%20is%20the%20OTP%20for%20docttocare%20account.%20Please%20dont%20share%20it%20with%20anyone.&fl=0&gwid=2";
       
        // $ch = curl_init($url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $curl_scraped_page = curl_exec($ch);
        // curl_close($ch);

        
        // return Response()->json([
        //     'otp'=>$otp
        // ]);
        return $otp;
    
    }

    public function getDashboardData()
    {
        
            $user = Auth::user();
            $data = DB::table('centres')->where('userId' , session()->get('userId'))->get();
            return response()->json([
                'user'=>$user,
                'centres'=>$data
            ]);
        
    }
    

    public function addMember(Request $request) // needed function
    {
        $data = new team();
        $user = JWTAuth::parseToken()->toUser();
        $user_file = $request->file('avatar1');
        $newFileName = time()."_".$user_file->getClientOriginalName();
        Storage::putFileAs('assets/member/profile_pic', $user_file , $newFileName);
        $data->pic = $newFileName;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('contact');
        $data->age = $request->input('age');
        $data->address = $request->input('address');
        $data->about = $request->input('about');
        $data->userId = $user->id;
        $data->save();

        return response()->json([
            'callback' => "done"
        ]);

    }

    public function addCentreTimings(Request $request)
    {
        $user = JWTAuth::parseToken()->toUser();
        // $data = $request->all();
        // $token = array_pop($data);
        // $centreId = array_pop(array_reverse($data));
        $data = $request->data;
        foreach($data as $d)
        {
            $timings = new centreTiming();
            $timings->centreId = $request->centreId;
            $timings->day = $d;
            $timings->start = "asda";
            $timings->end = "sda";
            $timings->userId = $user->id;
            $timings->save();
        }
        return response()->json([
            'callback' => "done",
            'centreId' => $request->centreId,
        ]);
    }

    public function addCentreReviews(Request $request)
    {
        $data = $request->data;
        $centreId = $request->centreId;

        foreach($data as $d)
        {
            
                $review = new centreReview();
                $review->author_name = $d['author_name'];
                $review->author_url = $d['author_url'];
                $review->profile_photo_url = $d['profile_photo_url'];
                $review->rating = $d['rating'];
                $review->relative_time_description = $d['relative_time_description'];
                $review->text = $d['text'];
                $review->time = $d['time'];
                $review->centreId = $centreId;
                $review->save();
        }

        return response()->json([
            "callback" => "done",
        ]);
    }

    public function getCentres()
    {
        $user = JWTAuth::parseToken()->toUser();
        $centres = DB::table('centres')->where('userId' , $user->id)->get()->toArray();
        foreach($centres as $c)
        {
            $coaches = centreInstructor::where('centreId' , $c->id)->count();
            $c->coaches = $coaches;
        }
        return $centres;
    }

    public function getCentreProfile(Request $request)
    {
        $id = $request->id;
        $centre = DB::table('centres')->where('id' , $id)->first();
        $instructors = DB::table('centre_instructors')->where('centreId' , $id)->get();

        foreach($instructors as $i)
        {
            $data = DB::table('instructors')->where('id' , $i->instructorId)->first();
            $i->name = $data->name;
            $i->email = $data->email;
            $i->avatar = $data->avatar;
        }

        $reviews = DB::table('centre_reviews')->where('centreId' , $id)->get();
        $timings = DB::table('centre_timings')->where('centreId' , $id)->get();

        return response()->json([
            'centre' => $centre,
            'instructors' => $instructors,
            'reviews' => $reviews,
            'timings' => $timings
        ]);
    }

    public function updateCentre(Request $request)
    {
        $data = $request->data;
        $centreId = $request->centreId;

        $update = centre::where('id' , $centreId)->first();

        $update->clinic_name = $data['name'];
        $update->email = $data['email'];
        $update->phone = $data['contact'];
        $update->about = $data['about'];
        $update->facebook = $data['fb'];
        $update->twitter = $data['tw'];
        $update->youtube = $data['yt'];
        $update->linkedin = $data['lk'];
        $update->instagram = $data['in'];
        $update->website = $data['website'];
        $update->v_tour = $data['v_tour'];
        $update->save();
        return "done";
    }

    public function updateCentrePic(Request $request)
    {
        $data = centre::where('id' , $request->input('centreId'))->first();
        $user_file = $request->file('myFile');
        $newFileName = time()."_".$user_file->getClientOriginalName();
        $path = 'vedicare-demo/centreLogo/1'.$newFileName;
        $t = Storage::disk('s3')->put($path, file_get_contents($user_file), 'public');
        $data->logo = "1".$newFileName;
        $data->save();
        return "done";
    }

    public function getAllMembers()
    {
        $user = JWTAuth::parseToken()->toUser();
        
        $data = DB::table('teams')->where('userId' , $user->id)->get();

        return $data;
    }

    public function getMemberData(Request $request)
    {
        $id = $request->id;

        $data = DB::table('teams')->where('id' , $id)->first();

        return response()->json([
            'data' => $data
        ]);
    }

    public function updateMemberData(Request $request)
    {
        $data = $request->data;
        $id = $request->id;

        $update = team::where('id' , $id)->first();
        $update->name = $data['name'];
        $update->email = $data['email'];
        $update->phone = $data['contact'];
        $update->age = $data['age'];
        $update->address = $data['address'];
        $update->about = $data['about'];
        $update->save();
        return response()->json([
            'callBack' => 'success'
        ]);
    }

    public function updateInstructorPic(Request $request)
    {
        $data = instructor::where('id' , $request->input('insId'))->first();
        $user_file = $request->file('myFile');
        $newFileName = time()."_".$user_file->getClientOriginalName();
        $path = 'vedicare-demo/instructors/1'.$newFileName;
        $t = Storage::disk('s3')->put($path, file_get_contents($user_file), 'public');
        $data->avatar = "1".$newFileName;
        $data->save();
        return "done";
    }

    public function deleteMember(Request $request)
    {
        $memberId = $request->id;

        $delete = team::where('id' , $memberId)->delete();

        if($delete)
        {
            return response()->json([
                'callback' => "success"
            ]);
        }
        else
        {
            return response()->json([
                'callback' => "error"
            ]);
        }
    }

    

    public function updateCentreAddress(Request $request)
    {
        
        $id = $request->id;

        $update = centre::where('id' , $id)->first();
        $update->address = $request->address;
        $update->lat = $request->lat;
        $update->lng = $request->lng;
        $update->city = $request->city;
        $update->state = $request->state;
        $update->mapUrl = $request->mapUrl;
        $update->zipcode = $request->zipcode;
        $update->website = $request->website;
        $update->save();

        return response()->json([
            "callback" => "done",
            "centreId" => $id
        ]);
    }

    public function addCourses(Request $request)
    {
        $user = JWTAuth::parseToken()->toUser();
        $data = new course();
        $data->name = $request->input('name');
        $data->days = $request->input('days');
        $data->hours = $request->input('hours');
        $data->mins = $request->input('mins');
        $data->about = $request->input('about');
        $data->centreId = $request->input('centre');
        $data->keywords = $request->input('tags');
        $data->userId = $user->id;
        $data->save();

        $dataFee = new courseFee();
        $dataFee->centreId = $request->input('centre');
        $dataFee->fees = $request->input('fees');
        $dataFee->userId = $user->id;
        $dataFee->save();

        return response()->json([
            'callback' => "done"
        ]);
    }

    public function getAllCourses(Request $request)
    {
        $user = JWTAuth::parseToken()->toUser();
        $data = course::where('userId' , $user->id)->get();

        foreach($data as $d)
        {
            $fee = DB::table('course_fees')->where([
                ['centreId' , $d->centreId],
                ['userId' , $user->id]
            ])->value('fees');

            $d->fees = $fee;
        }

        return response()->json([
            'courses' => $data
        ]);
    }

    public function getCourseProfile(Request $request)
    {
        $id = $request->id;
        $user = JWTAuth::parseToken()->toUser();
        $course = course::where('id' , $id)->first();

        $instructors = courseInstructor::where([
            ['courseId' , $id],
            ['userId' , $user->id]
        ])->get();

        foreach($instructors as $i)
        {
            $data = instructor::where('id' , $i->instructorId)->first();
            $i->name = $data->name;
            $i->email = $data->email;
            $i->phone = $data->phone;
            $i->about = $data->about;
            $i->avatar = $data->avatar;
            $i->specialization = $data->specialization;
        }

        $centres = centre::where('id' , $course->centreId)->get();

        $fee = courseFee::where([
            ['centreId' , $course->centreId],
            ['userId' , $user->id]
        ])->value('fees');            

        return response()->json([
            'course' => $course,
            'instructors' => $instructors,
            'centres' => $centres,
            'callback' => '200',
            'fees' => $fee
        ]);

    }


    public function updateCourse(Request $request)
    {
        $id = $request->id;
        $data = $request->data;

        $update = course::where('id' , $id)->first();
        $update->name = $data['name'];
        $update->days = $data['days'];
        $update->hours = $data['hours'];
        $update->mins = $data['mins'];
        $update->about = $data['about'];
        $update->save();

        return response()->json([
            "callback" => "done"
        ]);
    }

    public function searchInstructors(Request $request)
    {
        $data = $request->data;
        $courseId = $request->id;
        $insArray = array();
        $user = JWTAuth::parseToken()->toUser();
        $instructors = DB::table('instructors')->where([
            ['name' , 'LIKE' , '%'.$data.'%'],
            ['userId' , $user->id],
        
        ])->get()->take(4);

        if(count($instructors) > 0)
        {
            foreach($instructors as $i)
            {
                $find = DB::table('course_instructors')->where([
                    ['courseId' , $courseId],
                    ['instructorId' , $i->id],
                    ['userId' , $user->id]
                ])->first();

                if(!$find)
                {
                    array_push($insArray , $i);
                }
            }
            if(count($insArray) > 0)
            {
                return response()->json([
                    'callback' => "done",
                    'instructors' => $insArray
                ]);
            }
            else
            {
                return response()->json([
                    'callback' => "empty"
                ]);
            }
            
        }
        else
        {
            
        }
        
    }

    public function addInsToCourse(Request $request)
    {
        $user = JWTAuth::parseToken()->toUser();

        $insId = $request->insId;
        $courseId = $request->courseId;

        $data = new courseInstructor();
        $data->courseId = $courseId;
        $data->instructorId = $insId;
        $data->active = true;
        $data->userId = $user->id;
        $data->save();

        return response()->json([
            'callback' => "done"
        ]);
    }
    public function removeInsFromCourse(Request $request)
    {
        $user = JWTAuth::parseToken()->toUser();
        $courseId = $request->courseId;
        $insId = $request->insId;
        $getId = DB::table('course_instructors')->where([
            ['courseId' , $courseId],
            ['instructorId' , $insId],
            ['userId' , $user->id]
        ])->value('id');

            $delete = courseInstructor::find($getId)->delete();
     
        
            return response()->json([
                'callback' => 'done',
                'id' => $getId,
                'c'=>$courseId,
                'i' => $insId,
                'u' => $user->id
            ]);
        

    }


    public function uploadCourseImage(Request $request)
    {
        $data = new courseGallery();
        $user_file = $request->file('URL');
        $newFileName = time()."_".$user_file->getClientOriginalName();
        $path = 'vedicare-demo/courseGallery/1'.$newFileName;
        $t = Storage::disk('s3')->put($path, file_get_contents($user_file), 'public');
        return "done";
    }

    public function getNewBookings()
    {
        $user = JWTAuth::parseToken()->toUser();

        $courses = DB::table('courses')->where("userId" , $user->id)->get();

        foreach($courses as $c)
        {
            $bookings = DB::table('bookings')->where('courseId' , 77)->get();
            foreach($bookings as $b)
            {
                $client = client::where('id' , $b->clientId)->first();
                $b->client = $client;

                $courses = course::where('id' , $b->courseId)->first();
                $b->course = $courses;
            }
        }

        return response()->json([
            'bookings' => $bookings
        ]);
    }
}