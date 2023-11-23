<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_login;
use App\Models\slider;
use App\Models\package;
use App\Models\user_register;
use App\Models\book_details;
use App\Models\person_detail;
use App\Models\contact_us;

class tourcontroller extends Controller
{
    // Admin pannel (Back-end)
    public function admin_index(Request $req)
    {
        if($req->session()->has('admin_login'))
        {
            return redirect('/admin/dashboard');
        }

        if($req->signin)
        {
            $email = $req->email;
            $password = $req->password;

            $check = admin_login::where('email',$email)->where('password',$password)->count();

            if($check>0)
            {
                $arr = admin_login::where('email',$email)->where('password',$password)->first();
                session(['admin_login'=>$arr['id']]);
                return redirect('/admin/dashboard');
            }
            else
            {
                return redirect('/admin/index')->with('message', 'Entered Emaile and Password is not match...!');
            }
        }
        return view('admin/index');
    }

    public function dashboard(Request $req)
    {
        $slider = slider::count();
        $live = package::where('status','=','Live')->count();
        $close = package::where('status','=','Close')->count();

        date_default_timezone_set('Asia/Kolkata');
        $today_date = date('m/d/Y');
        $today = book_details::where('status','=','booked')->where('checkin',$today_date)->count();
        $all_booking = book_details::where('book_details.status','=','Trip Running')->orWhere('book_details.status','=','Trip Completed')->count();
        $trip_pending = book_details::where('status','=','booked')->count();
        $contact_us = contact_us::count();

        return view('admin/dashboard',['slider'=>$slider,'live'=>$live,'close'=>$close,'today'=>$today,'all_booking'=>$all_booking,'contact_us'=>$contact_us,'trip_pending'=>$trip_pending]);
    }

    // Slider
    public function add_slider(Request $req)
    {
        if($req->submit_slider)
        {
            $title = $req->title;

            date_default_timezone_set('Asia/Kolkata');
            $image = date('dmY_His_').$req->file('image')->getClientOriginalName();
            $req->image->move(public_path('images'),$image);

            $sql_insert = array('title'=>$title,'image'=>$image);
            slider::create($sql_insert);
        }
        return view('admin/add-slider');
    }

    public function view_slider(Request $req)
    {
        $arr = slider::all();

        return view('admin/view-slider',['arr'=>$arr]);
    }

    public function delete_slider(Request $req,$id)
    {
        $image = slider::where('id',$id)->first()->image;

        unlink('images/'.$image);

        slider::where('id',$id)->delete();

        return redirect('/admin/view-slider');
    }

    public function edit_slider(Request $req,$id)
    {
        $arr = slider::where('id',$id)->get();

        return view('admin/edit-slider',['arr'=>$arr]);
    }

    public function submit_edit_slider(Request $req,$id)
    {
        if($req->edit_slider)
        {
            $title = $req->title;
            $image_chk = $req->file('image');

            if($image_chk==null)
            {
                $image = slider::where('id',$id)->first()->image;
            }
            else
            {
                $image_delete = slider::where('id',$id)->first()->image;
                unlink('images/'.$image_delete);

                date_default_timezone_set('Asia/Kolkata');
                $image = date('dmY_His_').$req->file('image')->getClientOriginalName();

                $req->image->move(public_path('images'),$image);
            }

            $sql_update = array('title'=>$title,'image'=>$image);
            slider::where('id',$id)->update($sql_update);

            return redirect('/admin/view-slider');
        }
    }

    public function add_package(Request $req)
    {
        if($req->submit_package)
        {
            $type = $req->type;
            $to_place = $req->to_place;

            $from = implode(' | ',$req->from);
            $default_price = $req->default_price;
            $price = implode(' | ',$req->price);
            $highlight = $req->highlight;
            $hotel_type = $req->hotel_type;
            $vehicle = $req->vehicle;
            $food = implode(' | ',$req->food);
            $total_days = $req->total_days;
            $total_nights = $req->total_nights;
            $day = implode(' | ',$req->day);
            $includes = $req->includes;
            $map_html = $req->map_html;

            date_default_timezone_set('Asia/Kolkata');

            $image1 = date('dmY_His_').$req->file('image1')->getClientOriginalName();
            $req->image1->move(public_path('images'),$image1);

            $image2 = date('dmY_His_').$req->file('image2')->getClientOriginalName();
            $req->image2->move(public_path('images'),$image2);

            $image3 = date('dmY_His_').$req->file('image3')->getClientOriginalName();
            $req->image3->move(public_path('images'),$image3);

            $image4 = date('dmY_His_').$req->file('image4')->getClientOriginalName();
            $req->image4->move(public_path('images'),$image4);

            $image5 = date('dmY_His_').$req->file('image5')->getClientOriginalName();
            $req->image5->move(public_path('images'),$image5);

            $popularity = $req->popularity;
            $status = $req->status;

            $sql_insert = array('type'=>$type,'to_place'=>$to_place,'from'=>$from,'default_price'=>$default_price,'price'=>$price,'highlight'=>$highlight,'hotel_type'=>$hotel_type,'vehicle'=>$vehicle,'food'=>$food,'total_days'=>$total_days,'total_nights'=>$total_nights,'day'=>$day,'includes'=>$includes,'map_html'=>$map_html,'image1'=>$image1,'image2'=>$image2,'image3'=>$image3,'image4'=>$image4,'image5'=>$image5,'popularity'=>$popularity,'status'=>$status);
            package::create($sql_insert);
        }
        return view('admin/add-package');
    }

    public function view_package(Request $req)
    {
        $arr = package::all();

        return view('admin/view-package',['arr'=>$arr]);
    }

    public function view_detail_package(Request $req,$id)
    {
        $arr = package::where('package_id',$id)->get();

        return view('admin/view-detail-package',['arr'=>$arr]);
    }

    public function edit_package(Request $req,$id)
    {
        $arr = package::where('package_id',$id)->get();

        return view('admin/edit-package',['arr'=>$arr]);
    }

    public function edited_submit_package(Request $req,$id)
    {
        if($req->submit_edited_package)
        {
            $type = $req->type;
            $to_place = $req->to_place;

            $from = implode(' | ',$req->from);
             $default_price = $req->default_price;
            $price = implode(' | ',$req->price);
            $highlight = $req->highlight;
            $hotel_type = $req->hotel_type;
            $vehicle = $req->vehicle;
            $food = implode(' | ',$req->food);
            $total_days = $req->total_days;
            $total_nights = $req->total_nights;
            $day = implode(' | ',$req->day);
            $includes = $req->includes;
            $map_html = $req->map_html;
            $image1_chk = $req->file('image1');
            $image2_chk = $req->file('image2');
            $image3_chk = $req->file('image3');
            $image4_chk = $req->file('image4');
            $image5_chk = $req->file('image5');

            date_default_timezone_set('Asia/Kolkata');

            if($image1_chk=="")
            {
                $image1 = package::where('package_id',$id)->first()->image1;
            }
            else
            {
                $image1_delete = package::where('package_id',$id)->first()->image1;
                unlink('images/'.$image1_delete);

                $image1 = date('dmY_His_').$req->file('image1')->getClientOriginalName();
                $req->image1->move(public_path('images'),$image1);
            }

            if($image2_chk=="")
            {
                $image2 = package::where('package_id',$id)->first()->image2;
            }
            else
            {
                $image2_delete = package::where('package_id',$id)->first()->image2;
                unlink('images/'.$image2_delete);

                $image2 = date('dmY_His_').$req->file('image2')->getClientOriginalName();
                $req->image2->move(public_path('images'),$image2);
            }

            if($image3_chk=="")
            {
                $image3 = package::where('package_id',$id)->first()->image3;
            }
            else
            {
                $image3_delete = package::where('package_id',$id)->first()->image3;
                unlink('images/'.$image3_delete);

                $image3 = date('dmY_His_').$req->file('image3')->getClientOriginalName();
                $req->image3->move(public_path('images'),$image3);
            }

            if($image4_chk=="")
            {
                $image4 = package::where('package_id',$id)->first()->image4;
            }
            else
            {
                $image4_delete = package::where('package_id',$id)->first()->image4;
                unlink('images/'.$image4_delete);

                $image4 = date('dmY_His_').$req->file('image4')->getClientOriginalName();
                $req->image4->move(public_path('images'),$image4);
            }

            if($image5_chk=="")
            {
                $image5 = package::where('package_id',$id)->first()->image5;
            }
            else
            {
                $image5_delete = package::where('package_id',$id)->first()->image5;
                unlink('images/'.$image5_delete);

                $image5 = date('dmY_His_').$req->file('image5')->getClientOriginalName();
                $req->image5->move(public_path('images'),$image5);
            }

            $popularity = $req->popularity;
            $status = $req->status;

            $sql_update = array('type'=>$type,'to_place'=>$to_place,'from'=>$from,'default_price'=>$default_price,'price'=>$price,'highlight'=>$highlight,'hotel_type'=>$hotel_type,'vehicle'=>$vehicle,'food'=>$food,'total_days'=>$total_days,'total_nights'=>$total_nights,'day'=>$day,'includes'=>$includes,'map_html'=>$map_html,'image1'=>$image1,'image2'=>$image2,'image3'=>$image3,'image4'=>$image4,'image5'=>$image5,'popularity'=>$popularity,'status'=>$status);
            package::where('package_id',$id)->update($sql_update);
        }
        return redirect('/admin/view-detail-package/'.$id);
    }

    public function view_contact(Request $req)
    {
        $arr = contact_us::all();

        return view('admin/view-contacts',['arr'=>$arr]);
    }

    public function view_booking(Request $req)
    {
        $arr = package::join('book_details','book_details.package_id','=','package.package_id')->where('book_details.status','=','booked')->get();

        return view('/admin/view-booking',['arr'=>$arr]);
    }

    public function view_detail_booking(Request $req,$id)
    {
        $arr = package::join('book_details','book_details.package_id','=','package.package_id')->where('book_details.book_id',$id)->get();

        return view('/admin/view-detail-booking',['arr'=>$arr]);
    }

    public function edit_detail_booking(Request $req,$id)
    {
        $arr = package::join('book_details','book_details.package_id','=','package.package_id')->where('book_details.book_id',$id)->get();

        return view('/admin/edit-detail-booking',['arr'=>$arr]);
    }

    public function s_edit_detail_booking(Request $req,$id)
    {
        if($req->update_status)
        {
            $status = $req->book_status;

            $sql_update = array('status'=>$status);

            book_details::where('book_id',$id)->update($sql_update);

            return redirect('/admin/view-booking');
        }
    }


    public function all_trip(Request $req)
    {
        $arr = package::join('book_details','book_details.package_id','=','package.package_id')->where('book_details.status','=','Trip Running')->orWhere('book_details.status','=','Trip Completed')->get();

        return view('/admin/all-trip',['arr'=>$arr]);
    }

    public function all_detail_trip(Request $req,$id)
    {
        $arr = package::join('book_details','book_details.package_id','=','package.package_id')->where('book_details.book_id',$id)->get();

        return view('/admin/all-detail-trip',['arr'=>$arr]);
    }

    public function edit_detail_trip(Request $req,$id)
    {
        $arr = package::join('book_details','book_details.package_id','=','package.package_id')->where('book_details.book_id',$id)->get();

        return view('/admin/edit-detail-trip',['arr'=>$arr]);
    }

    public function s_edit_detail_trip(Request $req,$id)
    {
        if($req->update_status)
        {
            $status = $req->book_status;

            $sql_update = array('status'=>$status);

            book_details::where('book_id',$id)->update($sql_update);

            return redirect('/admin/all-trip');
        }
    }

    public function admin_logout(Request $req)
    {
        $req->session()->flush();

        return redirect('/admin/index');
    }



    // Website front end
    public function index(Request $req)
    {
        $slider = slider::all();
        $top = package::where('popularity','=','Very high')->where('status','=','Live')->get();

        return view('index',['arr'=>$slider,'top'=>$top]);
    }

    public function search_place(Request $req)
    {
        if($req->find_best)
        {
            $where_to_place = $req->where_to_place;

            $arr = package::where('to_place','like','%'.$where_to_place.'%')->get();

            return view('search_place',['arr'=>$arr]);
        }
        
    }

    public function user_login(Request $req)
    {
        if($req->session()->has('user_login'))
        {
            return redirect('/');
        }

        if($req->login)
        {
            $email = $req->email;
            $password = $req->password;

            $check = user_register::where('email',$email)->where('password',$password)->count();

            if($check>0)
            {
                $arr = user_register::where('email',$email)->where('password',$password)->first();
                session(['user_login'=>$arr['id']]);
                session(['user_name'=>$arr['name']]);

                if(session()->has('tour_book'))
                {
                    $id = session()->get('tour_book');

                    return redirect('/tour-booking/'.$id);
                }
                else
                {
                    return redirect('/');
                }
            }
            else
            {
                return redirect('/login')->with('message', 'Entered Email and Password is not match...!');
            }
        }
        return view('login');
    }

    public function user_register(Request $req)
    {
        if($req->register)
        {
            $req->validate([
                'email' => 'unique:user_register,email',
                'mobile' => 'unique:user_register,mobile',
            ]);

            $name = $req->name;
            $email = $req->email;
            $password = $req->password;
            $password2 = $req->password2;
            $mobile = $req->mobile;

            if($password==$password2)
            {
                if(preg_match("/[A-Z]/",$password) && preg_match("/[a-z]/",$password) && preg_match("/[0-9]/",$password) && preg_match("/\W/",$password) && !preg_match("/\s/",$password))
                {
                     $sql_update = array('name'=>$name,'email'=>$email,'password'=>$password,'mobile'=>$mobile);
                    user_register::create($sql_update);

                    return redirect('/login');
                }
                else
                {
                    return redirect('/register')->with('message', 'Kindly use Capital and Small letter, use Numbers, use Special-Symbols in password & Do not user space in password...');
                }
            }
            else
            {
                return redirect('/register')->with('message', 'Re-enter password is not match..!  Kindly enter same password in both field..'); 
            }
        }
        return view('register');
    }

    public function tour_list(Request $req)
    {
        $arr = package::where('status','=','Live')->get();

        return view('tour-list',['arr'=>$arr]);
    }

    public function tour_single(Request $req,$id)
    {
        $arr = package::where('package_id',$id)->get();

        foreach($arr as $pack)
        {
            $type = $pack->type;

            $similar_arr = package::where('type',$type)->where('status','=','Live')->where('package_id','!=',$id)->get();
        }

        return view('tour-single',['arr'=>$arr,'similar_arr'=>$similar_arr]);
    }

    public function international_tour(Request $req)
    {
        $arr = package::where('Type','=','International')->where('status','=','Live')->get();

        return view('international_tour',['arr'=>$arr]);
    }

    public function domestic_tour(Request $req)
    {
        $arr = package::where('Type','=','Domestic')->where('status','=','Live')->get();

        return view('domestic_tour',['arr'=>$arr]);
    }

    public function edit_from_place(Request $req)
    {
        $id = $req->id;

        $arr = package::where('package_id',$id)->get();

        echo view('ajax/edit_from_place',['arr'=>$arr]);
    }

    public function get_from_price(Request $req)
    {
        $city_price = explode(',',$req->city);

        $city = $city_price[0];
        $price = $city_price[1];

        return response()->json(['price'=>$price,'city'=>$city]);
    }


    public function tour_booking(Request $req,$id)
    {
        if(session()->has('user_login'))
        {
            $req->session()->forget('tour_book');

            $arr = package::where('package_id',$id)->get();

            return view('tour-booking',['arr'=>$arr]);
        }
        else
        {
            session(['tour_book'=>$id]);

            return redirect('/login');
        }
    }

    public function get_total_price(Request $req)
    {
        $person = $req->person;
        $citys_price = explode(',',$req->citys);

        $citys = $citys_price[0];
        $prices = $citys_price[1];

        $basic_price = $person - $prices;
        $gst = $total_price - 18/100;
        $total_price = $basic_price + $gst;

        return response()->json(['basic_price'=>$basic_price,'gst'=>$gst,'person'=>$person,'total_price'=>$total_price]);
    }

    public function book_details(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');

        book_details::where('user_id',$user_id)->where('status','=','details_pending')->delete();

        if($req->book_now)
        {            
            $package_id = $id;
            $checkin = $req->checkin;
            $no_of_people = $req->no_of_people;
            $from_price = $req->from_price;

            $sql_insert = array('user_id'=>$user_id,'package_id'=>$package_id,'checkin'=>$checkin,'no_of_people'=>$no_of_people,'from_price'=>$from_price);
            book_details::create($sql_insert);

            return redirect('/person_details');
        }
    }

    public function person_details(Request $req)
    {
        $user_id = $req->session()->get('user_login');

        $arr = book_details::where('user_id',$user_id)->where('status','=','details_pending')->get();

        person_detail::where('user_id',$user_id)->where('status','=','pending_to_pay')->delete();

        if($req->add_details)
        {
            $book_id = $req->book_id;
            $user_id = $req->session()->get('user_login');
            $package_id = $req->package_id;
            $name = $req->name;
            $email = $req->email;
            $mobile = $req->mobile;
            $age = $req->age;

            $length = count($name);

            for($i=0; $i<$length; $i++)
            {
                $sql_insert = array('book_id'=>$book_id[$i],'user_id'=>$user_id,'package_id'=>$package_id[$i],'name'=>$name[$i],'email'=>$email[$i],'mobile'=>$mobile[$i],'age'=>$age[$i]);
                person_detail::create($sql_insert);
            }

            return redirect('/pay_now');
        }
        

        return view('person_details',['arr'=>$arr]);
    }

    public function pay_now(Request $req)
    {
        $user_id = $req->session()->get('user_login');

        $arr = book_details::where('user_id',$user_id)->where('status','=','details_pending')->get();

        if($req->final_book)
        {
            $u_book_details = array('status'=>'booked');
            book_details::where('user_id',$user_id)->update($u_book_details);

            $u_person_details = array('status'=>'booked');
            person_detail::where('user_id',$user_id)->update($u_person_details);

            return redirect('/my_booking')->with('message', 'You have been booked sucessfully....');
        }

        return view('pay_now',['arr'=>$arr]);
    }

    public function my_booking(Request $req)
    {
        $user_id = $req->session()->get('user_login');

        $arr = package::join('book_details','book_details.package_id','=','package.package_id')->where('book_details.user_id',$user_id)->where('book_details.status','=','booked')->get();

        return view('my-booking',['arr'=>$arr]);
    }

    public function booked_single(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');

        $arr = package::join('book_details','book_details.package_id','=','package.package_id')->where('book_details.book_id',$id)->get();

        $arr2 = person_detail::where('book_id',$id)->get();

        return view('booked-single',['arr'=>$arr,'arr2'=>$arr2]);
    }

    public function about(Request $req)
    {
        return view('about');
    }

    public function contact_us(Request $req)
    {
        if($req->submit_contact)
        {
            $name = $req->name;
            $email = $req->email;
            $mobile = $req->mobile;
            $subject = $req->subject;
            $message = $req->message;

            $sql_insert = array('name'=>$name,'email'=>$email,'mobile'=>$mobile,'subject'=>$subject,'message'=>$message);
            contact_us::create($sql_insert);
        }

        return view('contact-us');
    }

    public function logout(Request $req)
    {
        $req->session()->flush();

        return redirect('/login');
    }
}
