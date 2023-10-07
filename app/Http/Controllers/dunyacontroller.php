<?php

namespace App\Http\Controllers;

use App\Models\cv;
use Dompdf\Dompdf;
use Svg\CssLength;
use Dompdf\Options;
use App\Models\Book;
use App\Models\Mcqs;
use LengthException;
use App\Models\Enroll;
use App\Models\Comment;
use App\Models\cvmodel;
use App\Models\Lecture;
use App\Models\Message;
use App\Models\Category;
use App\Models\comments;
use Barryvdh\DomPDF\PDF;
use App\Models\AdminChat;
use App\Models\Dailytask;
use App\Models\mcqResult;
use App\Models\Msgsecond;
use App\Models\dunyamodel;
use App\Models\RollRequest;
use App\Models\contactModel;
use Illuminate\Http\Request;
use App\Mail\AlreadyEnrolled;
use Dflydev\DotAccessData\Data;
use App\Mail\SigninConfirmation;
use App\Mail\SignupConfirmation;
use Illuminate\Contracts\View\View;
use Monolog\Handler\FirePHPHandler;
use App\Mail\EnrollmentConfirmation;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\Cast\String_;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;
use Ramsey\Collection\Map\AssociativeArrayMap;



class dunyacontroller extends Controller
{


    public function index()
    {

        $category = Category::all();
        $books = Book::all();
        $categoryCount = Category::all()->count();
        $lectureCount = Lecture::all()->count();
        $mcqsCount = mcqResult::all()->count();
        $EnrollCount = Enroll::all()->count();



        return View('index', compact('category', 'books', 'EnrollCount', 'mcqsCount', 'categoryCount', 'lectureCount'));
    }

    public function bookslab()
    {
        $books = Book::all();

        return view('books', compact('books'));
    }

    public function viewbook($id = null)
    {

        $data = Book::all()->where('id', $id)->first();

        return View('viewbook', compact('data'));
    }


    public function upload_books($id = null)
    {

        echo $data = Book::all()->where('id', $id)->pluck('file')->first();

        return response()->download(public_path('pdfs/' . $data));
    }

    public function post_books(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|max:255',
                'pdesc' => 'required',
                'file' => 'required|file',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('file')) {
                $pdf = $request->file('file');
                $pdfName = $pdf->getClientOriginalName();

                if (Book::where('file', $pdfName)->count() > 0) {
                    return redirect()->back()->with('error', 'A file with the same name already exists.');
                }

                $pdf->move(public_path('pdfs'), $pdfName);
                $validated['file'] = $pdfName;
            }

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $validated['image'] = $imageName; // Save the image path to the database
            }


            Book::create($validated);

            return redirect()->back()->with('success', 'Book uploaded successfully');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unknown error occurred');
        }
    }


    public function sendmsg(Request $request)
    {

        $request->validate(['msg' => 'required']);

        echo $login_id = "send" . $request->login_id . "<br/>";
        echo $send_id = "rec" . $request->send_id;

        $Message = new Message();
        $Message->Message = $request->msg;
        $Message->login_id = $request->login_id;
        $Message->send_id = $request->send_id;
        $Message->status = "Active";
        if ($Message->save()) {

            return redirect()->back()->with('error', 'd');
        } else {
            echo 'Database Error';
        }
    }

    public function chatpage()
    {

        $myaccount = Session::get('uemail');

        //user Login check condition
        if ($myaccount) {

            $myaccount = dunyamodel::all()->where('email', $myaccount)->value('id');

            $all = dunyamodel::all()->where('Role', 'User')->where('id', '!=', $myaccount);
            return View('chatpage', compact('all'));
        } else {
            return redirect('login')->with('error', 'Please login yourself first');
        }
    }


    public function chatdetail($id = null)
    {

        $all = dunyamodel::find($id);
        $myaccount = Session::get('uemail');
        $data = dunyamodel::all()->where('email', $myaccount)->value('id');

        $all_user = dunyamodel::all()->where('Role', 'User')->where('id', '!=', $data);

        $lasted_chat = Message::where(function ($query) use ($data, $id) {
            $query->where('login_id', $data)
                ->where('send_id', $id)
                ->orWhere(function ($subQuery) use ($data, $id) {
                    $subQuery->where('login_id', $id)
                        ->where('send_id', $data);
                });
        })->latest()->first();



        $login_id = dunyamodel::all()->where('email', $myaccount)->value('id');
        $loginuser_profile = dunyamodel::all()->where('email', $myaccount)->value('image');
        $value = Message::all()->where('send_id', $id)->value('Message');

        $login_chat = Message::all()->where('login_id', $login_id)->where('send_id', $id);
        $Opposite_chat = Message::all()->where('login_id', $id)->where('send_id', $login_id);


        $loginuser = dunyamodel::all()->where('email', $myaccount)->first();

        return View('chatdetail_page', compact('all', 'lasted_chat', 'all_user', 'loginuser_profile', 'loginuser', 'login_chat', 'Opposite_chat'));
    }



    public function view_mcqs()
    {

        if (!session()->has('uemail')) {
            return redirect('login')->with('error', 'Please login yourself first');
        }
        $category = Category::all();
        return View('view_mcqs', compact('category'));
    }

    public function userdailytask()
    {

        $category = Category::all();

        return View('dailytask', compact('category'));
    }

    public function fetchtask($id = null)
    {

        $useremail = session()->get('uemail');

        $user_id = dunyamodel::where('email', $useremail)->value('id');

        $lectures = Enroll::join('students', 'enrolls.student_id', '=', 'students.id')
            ->join('categories', 'categories.id', '=', 'enrolls.course_id')
            ->join('dailytasks', 'categories.id', '=', 'dailytasks.course_id')
            ->join('lectures', 'lectures.category_id', '=', 'categories.id')
            ->where('students.id', $user_id)
            ->where('categories.id', $id)
            ->groupBy('dailytasks.course_id', 'dailytasks.task_desc', 'dailytasks.id', 'dailytasks.task_docs', 'dailytasks.task', 'students.firstname')
            ->get(['dailytasks.task', 'dailytasks.task_docs', 'dailytasks.id', 'dailytasks.task_desc', 'students.firstname']);

        $lec = Dailytask::all()->reverse();

        if (count($lectures) > 0) {

            return View('fetchtask', compact('lectures', 'lec'));
        } else {

            return view('fetchtask', compact('lectures'))->with('msg', 'Task Not Available');
        }
    }


    public function courses()
    {


        $category = Category::all();

        return View('courses', compact('category'));
    }


    public function test_mcqs($id = null)
    {

        $category = Category::where('id', $id)->value('name');
        $allcategory = Category::all();

        $mcqs = Mcqs::join('categories', 'categories.id', '=', 'mcqs.category')
            ->where('categories.name', '=', $category)
            ->get('*');


        $count = Mcqs::join('categories', 'categories.id', '=', 'mcqs.category')
            ->where('categories.name', '=', $category)
            ->count();



        return View('test_mcqs', compact('mcqs', 'count', 'allcategory'));
    }

    public function allcategory(Request $request, $id = null)
    {


        $userEmail = Session::get('uemail');
        $course_name = Category::where('id', $id)->value('name');

        $user_id = dunyamodel::where('email', $userEmail)->value('id');
        $course_id = Enroll::where('student_id', $user_id)->get('course_id');

        if (!count($course_id) == 0) {

            $lectures = Enroll::join('students', 'enrolls.student_id', '=', 'students.id')
                ->join('categories', 'categories.id', '=', 'enrolls.course_id')
                ->join('lectures', 'lectures.category_id', '=', 'categories.id')
                ->where('students.id', $user_id)
                ->where('categories.id', $id)
                ->get(['students.firstname', 'lectures.id', 'lectures.desc', 'categories.name', 'lec_Name', 'lectures.lec_video_path']);

            if (count($lectures) == 0) {

                // No upload video any category
                return View('allcategory', compact('lectures', 'course_name'));
            } else {
                //ready to all show course videos
                return View('allcategory', compact('lectures', 'course_name'));
            }
        } else {
            // student Not Enroll any course
            return View('allcategory', compact('course_name'));
        }
    }

    public function detaillecture($id = null)
    {

        $userEmail = Session::get('uemail');
        $user_id = dunyamodel::where('email', $userEmail)->value('id');

        $course_id = Enroll::where('student_id', $user_id);



        if ($course_id == true) {

            $lectures = Enroll::join('students', 'enrolls.student_id', '=', 'students.id')
                ->join('categories', 'categories.id', '=', 'enrolls.course_id')
                ->join('lectures', 'lectures.category_id', '=', 'categories.id')
                ->where('students.id', $user_id)
                ->where('lectures.id', $id)
                ->get(['students.firstname', 'lectures.id', 'lectures.desc', 'categories.name', 'lec_Name', 'lectures.lec_video_path']);

            $uemail = Session::get('uemail');
            $userdata = dunyamodel::where('email', $userEmail)->get('*');
            if (!count($lectures) == 0) {

                $category_name = Category::join('lectures', 'categories.id', '=', 'lectures.category_id')
                    ->where('lectures.id', $id)
                    ->value('categories.name');

                $comment = comments::join('lectures', 'lectures.id', '=', 'commments.lec_id')
                    ->join('students', 'students.id', '=', 'commments.user_id')
                    ->where('lectures.id', $id)
                    ->get('*');



                $all_lectures = Enroll::join('students', 'enrolls.student_id', '=', 'students.id')
                    ->join('categories', 'categories.id', '=', 'enrolls.course_id')
                    ->join('lectures', 'lectures.category_id', '=', 'categories.id')
                    ->where('students.id', $user_id)
                    ->where('categories.name', $category_name)
                    ->get(['students.firstname', 'lectures.id', 'lectures.desc', 'categories.name', 'lec_Name', 'lectures.lec_video_path']);

                return view('lecdetail', compact('comment', 'lectures', 'all_lectures', 'userdata'));
            } else {
                return redirect()->back();
            }
        } else {
            echo 'Not inroll this Course';
        }
    }

    public function push_comment(Request $request)
    {

        $request->validate([
            'comment' => 'required'
        ]);

        $user_email = Session::get('uemail');
        $user_id = dunyamodel::where('email', $user_email)->value('id');
        $lec_id = $request['lec_id'];

        $Comment = new comments();
        $Comment->Comment = $request['comment'];
        $Comment->user_id = $user_id;
        $Comment->lec_id = $lec_id;
        $Comment->save();

        if ($Comment) {
            return redirect()->back();
        } else {
            return redirect()->back()->with('msg', 'Database Connetion Error');
        }
    }



    public function courseEnrol($id = null, $name = null)
    {
        $category = Category::all();
        $email = session()->get('adminemail');
        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');
        $course_name = Category::where('id', $id)->value('name');

        // Retrieve the category based on its name
        $course = Category::where('name', $name)->first();


        if (session()->has('uemail')) {
            $email = Session::get('uemail');
            return View('inroll', compact('category', 'email', 'course_name', 'adminpic', 'adminname', 'course'));
        } else {
            return redirect('login')->with('error', 'Please login yourself first');
        }
    }



    public function uregistration(Request $request)
    {
        // echo 'hello'; exit();
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:students,email',
            'gender' => 'required',
            'pswd' => 'required',
            'dob' => 'required',
            'Role'
        ]);

        $data = new dunyamodel();

        // echo $data; exit();

        $data->firstname = $request->input('firstname');
        $data->lastname = $request->input('lastname');
        $data->email = $request->input('email');
        $data->gender = $request->input('gender');
        $data->password = $request->input('pswd');
        $data->status = "online";
        $data->dob = $request->input('dob');
        $data->role = 'User';
        // echo $data; exit();
        // Handle the image upload
        if ($request->hasFile('dp')) {
            $image = $request->file('dp');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $data->image = $imageName; // Save the image path to the database
        }

        if ($data->save()) {

            $request->session()->put('uemail', $data->email);

            // $data = ['name' => $request->input('firstname'), 'message' => "Congratulations"];
            // $userEmail = $request->input('email');

            // Mail::to($userEmail)->send(new SignupConfirmation($data));

            $request->session()->put('adminname', $request->input('firstname'));
            $request->session()->put('adminemial', $request->input('email'));
            $request->session()->put('adminprofile', $imageName);
            $request->session()->put('adminlastname', $request->input('lastname'));

            Alert::success('Registration success', 'Now you can use this website.');
            return redirect(route('indexpage'))->with('success', 'Data inserted successfully.');
        } else {



            return redirect('signup')->with('error', 'Error inserting data.');
        }
    }

    public function logout()
    {

        if (session()->has('adminemail')) {
            session()->pull('adminemail');
            Session::flush();
        } else
        if (session()->has('uemail')) {

            $email = Session::get('uemail');

            dunyamodel::where('email', $email)
                ->update(['status' => 'offline']);
            session()->pull('uemail');
            Session::flush();

            return redirect(route('loginpage'));
        }
    }

    public function signin(Request $request)
    {


        $request->validate([
            'email' => 'required',
            'pswd' => 'required'
        ]);


        $check = 'Admin';
        $user = dunyamodel::where('Role', $check)->first();

        // echo $request; exit();
        $data = dunyamodel::where('email', $request->input('email'))->first();
        // echo $data; exit();


        if (session()->has('uemail')) {
            return redirect('login')->with('error', 'Another User logged in.');
        } else
        if ($data && $data->Role == 'User') {
            if ($data->password === $request->input('pswd')) {
                $request->session()->put('uemail', $data->email);
                $data = new dunyamodel();

                dunyamodel::where('email', $request->email)
                    ->update(['status' => 'online']);
                // echo $request/; exit();

                // $data = ['name' => $data->firstname, 'message' => "Someone sneaked into your account, make sure it's you"];
                // $userEmail = session('uemail');

                // Mail::to($userEmail)->send(new SigninConfirmation($data));

                Alert::success('Login success', 'Now you can use this website.');
                return redirect('/')->with('success', 'User Logged in.');
            } else {
                return redirect('login')->with('error', 'Invalid credentials.');
            }
        } else if ($data && $data->Role == 'Admin') {
            if ($data->password === $request->input('pswd')) {

                $request->session()->put('adminemail', $data->email);
                $email = session()->get('adminemail');

                $adminpic = dunyamodel::where('email', $email)->value('image');
                $adminname = dunyamodel::where('email', $email)->value('firstname');

                //////admin ho Ap admin pannel me jaiye
                $usercount = dunyamodel::all()->where('Role', 'User')->count();
                $categorycount = Category::all()->count();
                $inrollcount = Enroll::all()->groupby('enrolls.student_id')->count();
                $lecturescount = Lecture::all()->count();

                if ($user) {


                    return View('admin/adminindex', compact('adminpic', 'lecturescount', 'inrollcount', 'categorycount', 'usercount', 'adminname'))->with('success', 'Logged in as admin.');
                } else {
                    return redirect('login')->with('error', 'Your not Admin.');
                }
            } else {
                return redirect('login')->with('error', 'Invalid credentials.');
            }
        } else {
            return redirect('registration')->with('error', 'Cannot find records, Register Now');
        }
    }

    public function fetchProfile(Request $request, $email = null)
    {
        // echo $email; exit();
        $userData = dunyamodel::where('email', $email)->first();
        // $useremail = session('uemail');
        // echo  $userData; exit();


        if ($userData) {
            // User found, fetch the profile data

            return view('userindex', ['data' => $userData]);
        } else {
            // User not found
            return redirect()->back()->with('error', 'User not found.');
        }
    }

    public function cvgenerator(Request $request, $email = null)
    {

        return View('input_cv');
    }

    public function makecv(Request $request, $email = null)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'education' => 'required',
            'profession' => 'required',
            'about' => 'required',
            'address' => 'required',
            'city' => 'required',
            'religion' => 'required',
            'information' => 'required',
            'information2' => 'required',
            'experience' => 'required',
            'skill1',
            'skill2',
            'skill3',
            'skill4',




        ]);
        $data = new cvmodel;
        $data->firstname = $request->input('fname');
        $data->lastname = $request->input('lname');
        $data->email = $request->input('email');
        $data->number = $request->input('phone');
        $data->address = $request->input('address');
        $data->city = $request->input('city');
        $data->religion = $request->input('religion');

        $data->education = $request->input('education');
        $data->profession = $request->input('profession');
        $data->about = $request->input('about');
        $data->information = $request->input('information');
        $data->information2 = $request->input('information2');
        $data->experience = $request->input('experience');
        $data->skill1 = $request->input('skill1');
        $data->skill2 = $request->input('skill2');
        $data->skill3 = $request->input('skill3');
        $data->skill4 = $request->input('skill4');

        // echo $data; exit();

        if ($data->save()) {
            $dompdf = new Dompdf();

            $dompdf->loadHtml(view('makecv', compact('data')));

            // Set the paper size and orientation to A4 and portrait
            $dompdf->setPaper('A4', 'portrait');

            // Render the HTML as PDF
            $dompdf->render();

            // Output the generated PDF to Browser
            $dompdf->stream('mycv.pdf', ['Attachment' => false]);
        } else {
            abort(404);
        }
    }



    //Admin pannel code//


    public function showcategory()
    {

        $category = new Category();
        $data = Category::all();

        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        return View('admin/showcate', compact('data', 'adminpic', 'adminname'));
    }

    public function movecategory()
    {


        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        return View('admin/addcategory', compact('adminpic', 'adminname'));
    }

    public function insert_category(Request $request)
    {

        $request->validate([
            'name' => 'required |max:35',
            'image' => 'required',
            'desc' => 'required|max:84',
            'logo' => 'required'

        ]);

        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');


        $category = Category::where('name', $request->name)->first();
        if ($category) {

            $email = session()->get('adminemail');

            $adminpic = dunyamodel::where('email', $email)->value('image');
            $adminname = dunyamodel::where('email', $email)->value('firstname');

            return view('admin/addcategory', compact('adminpic', 'adminname'))->with('msg', 'your category is Aleady Taken');
        } else {
            if ($request->hasFile('image') && $request->hasFile('logo')) {

                $image = $request->file('image');
                $logo = $request->file('logo');

                $extension = $image->getClientOriginalExtension();
                $logo_extension = $logo->getClientOriginalExtension();

                if (in_array($extension, ['png', 'jpeg', 'jpg'])) {

                    $imageName = time() . '_' . rand(100, 2200000) . '.' . $extension;
                    $image->move(public_path('images'), $imageName);

                    if (in_array($logo_extension, ['png'])) {

                        $logoName = time() . '_' . rand(100, 2200000) . '.' . $logo_extension;
                        $logo->move(public_path('images'), $logoName);

                        $category = new Category;
                        $category->name = $request->name;
                        $category->desc = $request->desc;
                        $category->category_img = $imageName;
                        $category->icon = $logoName;
                        $category->save();

                        $email = session()->get('adminemail');

                        $adminpic = dunyamodel::where('email', $email)->value('image');
                        $adminname = dunyamodel::where('email', $email)->value('firstname');


                        return View('admin/addcategory', compact('adminpic', 'adminname'))->with('msg', 'Category successfully added');
                    } else {
                        return View('admin/addcategory', compact('adminpic', 'adminname'))->with('msg', 'iCon image png Only');
                    }
                } else {
                    // If the file extension is not allowed, show an error message
                    return view('admin/addcategory', compact('adminpic', 'adminname'))->with('msg', 'Only PNG, JPEG, and JPG files are allowed.');
                }
            }
        }
    }

    public function insert_lecture(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'image' => 'required',
            'desc' => 'required',


        ]);

        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');
        $category = Category::all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $extension = $image->getClientOriginalExtension();


            if (in_array($extension, ['mp4'])) {
                $imageName = time() . '.' . $extension;
                $image->move(public_path('videos'), $imageName);

                $lecture = new Lecture();
                $lecture->lec_Name = $request->name;
                $lecture->category_id = $request->category;
                //echo $lecture->c=$request->Time;
                $lecture->desc = $request->desc;
                $lecture->lec_video_path = $imageName;
                $lecture->save();

                return View('admin/upload_lec', compact('category', 'adminpic', 'adminname'))->with('msg', 'lecture sucessfully uploaded');
            } else {
                // If the file extension is not allowed, show an error message
                return view('admin/upload_lec', compact('category', 'adminname', 'adminpic'))->with('msg', 'Only MP4 files are allowed.');
            }
        }
    }

    public function certificate()
    {

        return View('view_certific');
    }
    public function go_page_mcqs()
    {

        $email = session()->get('adminemail');
        $category = Category::all();

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        return View('admin/upload_mcqs', compact('adminpic', 'category', 'adminname'));
    }

    public function check_msqs(Request $request)
    {

        if (session()->has('uemail')) {


            $selectedOptions = $request->input('selected_option');
            $selectedOptionsCount = 0;
            $right = $request->input('answer');
            $id = $request->id;
            $category = $request->category;


            $mcqs = Mcqs::join('categories', 'categories.id', '=', 'mcqs.category')
                ->where('categories.name', '=', $category)
                ->count();

            if ($selectedOptions !== null) {

                $data = [];
                $opitoncount = count($selectedOptions);

                ///Agr user ny all mcqs me sy koe uncheck chor diye ha to
                //wo check hongy kia user ky selectedOptions == All mcqs database waly
                //agr equal to to matylb mcqs sAry check kiye ha user ny

                if ($opitoncount == $mcqs) {

                    // loop start
                    // ye loop data arry ke under store kr raha ha
                    for ($i = 0; $i < count($selectedOptions); $i++) {

                        $value = $request->id[$i];


                        if (isset($selectedOptions[$i])) {
                            $selectedValue = $selectedOptions[$i];
                        }
                        if (isset($right[$i])) {

                            $right_answer = $right[$i];
                        } else {
                            $selectedValue = null;
                            $right_answer = null;
                        }

                        $rowArray = [$value, $selectedValue, $right_answer];

                        $data[] = $rowArray;
                    }

                    //loop End


                    //ye loop mcqs checking ka kam kr raha ha
                    ////loop start

                    $name = null;
                    $correct = 0;
                    $incorrect = 0;
                    $totalMarks = 0;

                    foreach ($data as $firstArray) {
                        $index1 = $firstArray[1] ?? null;
                        $index2 = $firstArray[2] ?? null;

                        if ($index1 === $index2) {
                            $marksofMcq = 5;
                            $totalMarks += $marksofMcq;
                            $correct++;

                            $percentage = ($correct / count($data)) * 100; // Calculate the percentage after incrementing $correct

                        } else {
                            $incorrect++;
                        }
                    }
                    // Loop End
                    $l = mcqResult::join('categories', 'categories.id', '=', 'mcq_results.category')
                        ->join('students', 'students.id', '=', 'mcq_results.user_id')
                        ->where('categories.name', $category)
                        ->groupBy('categories.name', 'students.email') // Group by categories.name
                        ->select('categories.name', 'students.email')   // Select the columns for output
                        ->get();

                    $email = session()->get('uemail');


                    $user_name = dunyamodel::where('email', $email)->value('firstname');
                    $user_id = dunyamodel::where('email', $email)->value('id');

                    $existingMcqResult = Category::join('mcq_results', 'categories.id', '=', 'mcq_results.category')
                        ->join('students', 'students.id', '=', 'mcq_results.user_id')
                        ->where('students.id', $user_id)
                        ->where('categories.name', $category)
                        ->get('categories.name')
                        ->first();
                    //$existingMcqResult = mcqResult::where('candidate_name', session('uemail'))->first();



                    if ($existingMcqResult) {
                        return Redirect()->back()->with('msg', 'Sorry, Already applied for certificate!');
                        die();
                    } else
                    if ($percentage > 50) {
                        // echo "Eligible for certification";

                        $category_id = Mcqs::join('categories', 'categories.id', '=', 'mcqs.category')
                            ->where('categories.name', '=', $category)->value('id');



                        $mcqResult = new mcqResult();

                        $mcqResult->candidate_name = $user_name;
                        $mcqResult->marks_obtained = $totalMarks;
                        $mcqResult->total_marks = $totalMarks;
                        $mcqResult->percentage_earned = $percentage;
                        $mcqResult->correct_answers = $correct;
                        $mcqResult->wrong_answers = $incorrect;
                        $mcqResult->category = $category_id;
                        $mcqResult->user_id = $user_id;
                        $mcqResult->created_at = now();
                        $dompdf = new Dompdf();

                        $dompdf->loadHtml(view('view_certific', compact('mcqResult')));

                        // Set the paper size and orientation to A4 and portrait
                        $dompdf->setPaper([0, 0, 715, 890], 'landscape');

                        // Render the HTML as PDF
                        $dompdf->render();

                        // Output the generated PDF to Browser
                        $dompdf->stream('mycertificate.pdf', ['Attachment' => false]);

                        $mcqResult->save();
                    } else {
                        echo 'Your Total Marks: ' . $totalMarks . '<br>';
                        echo 'Correct Answers: ' . $correct . '<br>';
                        echo 'Incorrect Answers: ' . $incorrect;
                        return Redirect()->back()->with('msg', 'You are not eligible for certification! Contact admin for any queries.');
                    }
                } else {

                    return redirect()->back()->with('msg', 'Please Check All Correct Answer');
                }



                /////option
            } else {

                return redirect()->back()->with('msg', 'Choose the Correct Answer');
            }
        } else {
            return redirect('login')->with('error', 'Login to give test.');
        }
    }







    public function upload_mcqs(Request $request)
    {

        $request->validate([
            'question' => 'required',
            'category' => 'required',
            'Answer_one' => 'required',
            'Answer_two' => 'required',
            'Answer_three' => 'required',
            'Answer_four' => 'required',
            'right_answer' => 'required',


        ]);

        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        $category = Category::all();
        $upload_mcqs = new Mcqs();

        $check = Mcqs::where('ques', $request->question)->first();
        if ($check == true) {

            return redirect()->back()->with('msg', 'Already uploaded Mcqs');
        } else {


            $upload_mcqs->ques = $request->question;
            $upload_mcqs->ans_1 = $request->Answer_one;
            $upload_mcqs->ans_2 = $request->Answer_two;
            $upload_mcqs->ans_3 = $request->Answer_three;
            $upload_mcqs->ans_4 = $request->Answer_four;
            $upload_mcqs->right_ans = $request->right_answer;
            $upload_mcqs->category = $request->category;

            $upload_mcqs->save();

            if ($upload_mcqs) {

                return redirect()->back()->with('msg', 'Data succfully uploaded');
            } else {
                return view('admin/upload_mcqs', compact('category', 'adminpic', 'adminname'))->with('msg', 'Database Connection Error');
            }
        }
    }


    public function move_upload_lec()
    {

        $a = session()->get('adminemail');
        $category = Category::all();

        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        $user = dunyamodel::where('email', $a)->first();
        if ($user->Role == "Admin") {

            return View('admin/upload_lec', compact('category', 'adminpic', 'adminname'));
        } else {
            // ap admin nahi ha admin pannel sy bhair jayen
            $category = Category::all();
            return View('index', compact('category'));
        }
    }


    public function show_lec()
    {

        $check = 'Admin';
        $user = dunyamodel::where('Role', $check)->first();
        $lecture = Lecture::all();

        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        if ($user) {

            return View('admin/showlech', compact('user', 'lecture', 'adminpic', 'adminname'));
        } else {

            return redirect('../index', compact('user'))->back();
        }
    }



    public function video_lec()
    {


        $check = 'Admin';
        $user = dunyamodel::where('Role', $check)->first();
        $lecture = Lecture::all();

        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        return View('admin/video_lec', compact('user', 'lecture', 'adminpic', 'adminname'));
    }


    public function fetchinrollstdent()
    {

        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        $inroll = Enroll::join('students', 'students.id', '=', 'enrolls.student_id')
            ->get(['enrolls.id', 'students.id as student', 'students.firstname', 'students.image', 'students.created_at']);

        return View('admin/inrollstdent', compact('inroll', 'adminpic', 'adminname'));
    }


    public function removeEnroll($id = null)
    {

        $inroll = Enroll::join('students', 'students.id', '=', 'enrolls.student_id')
            ->get(['enrolls.id', 'students.id as student', 'students.firstname', 'students.image', 'students.created_at']);

        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        $student = Enroll::findOrFail($id);
        $student->delete();

        if ($student) {

            return redirect()->back()->with('Student Remove Successfully');
            return View('admin/inrollstdent', compact('inroll', 'adminpic', 'adminname'))->with('msg', 'Student Remove Successfully ');
        } else {

            return View('admin/inrollstdent', compact('inroll', 'adminpic', 'adminname'))->with('msg', 'Database Error please Wait');
        }

        return View('admin/inrollstdent', compact('inroll', 'adminpic', 'adminname'));
    }


    // Enroll input sy data request table me jayega check ho kr

    public function inrollreq(Request $request)
    {

        $request->validate([

            'course' => 'required',
            'email' => 'required'

        ]);

        $userEmail = Session::get('uemail');

        $category = Category::all();
        $email = Session::get('uemail');

        if (session()->has('uemail')) {

            $userEmail;

            if ($userEmail == $request->email) {

                $check = dunyamodel::where('email', $userEmail)
                    ->where('Role', 'Admin')->first();
                if ($check) {

                    echo 'Admin not allow';
                    return View('inroll', compact('category'))->with('msg', 'Admin cannot enroll themselve');
                } else {


                    $user_id = dunyamodel::where('email', $userEmail)->value('id');
                    $already = RollRequest::where('course_id', $request->course)
                        ->where('student_id', $user_id)->first();

                    if ($already) {


                        return View('inroll', compact('category', 'email'))->with('msg', 'You are already enrolled for this course');
                    } else {

                        $enroll_req = new RollRequest();

                        // $username = dunyamodel::where('firstname');

                        $enroll_req->student_id = $user_id;
                        $enroll_req->course_id = $request->course;
                        $enroll_req->save();
                        if ($enroll_req) {
                            // $data = ['name' => session('uemail'), 'message' => ""];
                            // $userEmail = session('uemail');

                            // Mail::to($userEmail)->send(new EnrollmentConfirmation($data));

                            return View('inroll', compact('category', 'email'))->with('msg', 'Enrollment success, wait for the approval');
                        } else {
                            return View('inroll', compact('category'))->with('msg', 'Database Error please Wait');
                        }
                    }
                }
            } else {

                return View('inroll', compact('category'))->with('msg', 'Wrong registration Email');
            }
        } else {

            // Session me uemail ka varaiable nhi milyga to login pr bejh diya
            return redirect('login')->with('msg', 'please user Account Login');
        }
    }

    ///ye wo method ha jo inroll Aproval page pr ye sara data le kr jayega
    public function Enroll_approve()
    {

        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        $inroll = RollRequest::join('students', 'students.id', '=', 'rollrequests.student_id')
            ->join('categories', 'categories.id', '=', 'rollrequests.course_id')
            ->get(['rollrequests.id', 'students.id as student', 'categories.name', 'students.firstname', 'rollrequests.created_at', 'students.image']);

        return View('admin/inrollreq', compact('inroll', 'adminpic', 'adminname'));
    }



    ///ye wo methods ha jo admin me aproval page pr remove button pr click
    // krny sy request table sy data delete kr dega jisy Enroll request Reject ho jayegi 

    public function inroll_remove($id = null)
    {

        $student = RollRequest::findOrFail($id);
        $student->delete();

        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        $inroll = RollRequest::join('students', 'students.id', '=', 'rollrequests.student_id')
            ->join('categories', 'categories.id', '=', 'rollrequests.course_id')
            ->get(['rollrequests.id', 'students.id as student', 'categories.name', 'students.firstname', 'rollrequests.created_at', 'students.image']);



        if ($student) {

            return View('admin/inrollreq', compact('inroll', 'adminpic', 'adminname'));
        } else {
            return View('admin/inrollreq', compact('inroll', 'adminpic', 'adminname'))->with('msg', 'Database Error "Try again after a while."');
        }
    }

    ///ye wo method ha jo Admin approve page pr accept pr click krny ke bad
    ///usi user data Enroll table me send kr dega Enroll table wohi ja jismy
    ///student final Ernoll student mana jayega ////

    public function accept_inroll($id = null)
    {

        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');


        $inro = RollRequest::join('students', 'students.id', '=', 'rollrequests.student_id')
            ->join('categories', 'categories.id', '=', 'rollrequests.course_id')
            ->where('rollrequests.id', '=', $id)
            ->get(['students.firstname', 'rollrequests.student_id', 'students.id as student', 'categories.id as course_id', 'students.id as student_id', 'categories.name']);


        $inroll = RollRequest::join('students', 'students.id', '=', 'rollrequests.student_id')
            ->join('categories', 'categories.id', '=', 'rollrequests.course_id')
            ->get(['rollrequests.id', 'students.id as student', 'categories.name', 'students.firstname', 'rollrequests.created_at', 'students.image']);

        $student_id = $inro[0]['student_id'];
        $course_id = $inro[0]['course_id'];

        ///check ho raha ha kia Student id pehly sy request me to nhi ha 
        $check = Enroll::where('student_id', $student_id)
            ->where('course_id', $course_id)->first();

        ///check ho raha ha kia Student id pehly sy request me to nhi ha
        //agr hato check kro uski course_id bhi ha kia agr hogi to user already
        //request sendn krdo 

        if ($check) {

            return View('admin/inrollreq', compact('inroll', 'adminpic', 'adminname'))->with('msg', 'Student Already Enroll This Course');
        } else {

            ////Enrolls table me pehly sy student EnRoll nhi ha is liye insert kro

            $insert = new Enroll();
            $insert->student_id = $student_id;
            $insert->course_id = $course_id;
            $insert->save();
            $student = RollRequest::findOrFail($id);
            $student->delete();

            if ($insert) {

                return redirect()->back()->with('msg', 'Request Accepted');
            } else {

                return View('admin/inrollreq', compact('inroll', 'adminpic', 'adminname'))->with('msg', 'Databse Error please Wait');
            }
        }
    }

    public function showleccategoryvs($id = null)
    {

        $lectures = Lecture::join('categories', 'lectures.category_id', '=', 'categories.id')
            ->where('categories.id', $id)
            ->select('lectures.lec_Name', 'lectures.lec_video_path')
            ->get();

        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        return View('admin/showleccategoryvs', compact('lectures', 'adminpic', 'adminname'));
    }

    public function adminlogout()
    {

        // Delete all session data
        session()->flush();

        return redirect(route('loginpage'));
    }

    public function showuser()
    {

        $user = dunyamodel::all();
        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');


        return View('admin/showuser', compact('user', 'adminpic', 'adminname'));
    }
    public function adminpdf_lecture()
    {

        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        return View('admin/adminpdf_lecture', compact('adminpic', 'adminname'));
    }

    public function chatadminview()
    {


        return View('chatadminview');
    }


    public function fetchData()
    {
        //     if (session()->has('uemail')) {
        //         $email =session()->get('uemail');
        //         $id = Dunyamodel::where('email', $email)->value('id');
        //         $adminchat = AdminChat::all();

        //         // Returning JSON response with data
        //         $data = AdminChat::all();
        //         return response()->json($data);
        //     } else {
        //         // User is not logged in
        //         //return response()->json(['error' => 'User not logged in'], 401);
        //     }

        echo 'Comming soon';
    }


    public function usersend(Request $request)
    {


        $chatstore = new AdminChat();
        $request->validate([
            'usermsg' => 'required',
            'user_id' => 'required'
        ]);

        $email = session()->get('uemail');

        $id = dunyamodel::where('email', $email)->value('id');
        $adminchat = AdminChat::all();


        $chatstore->admin_msg = $request->usermsg;
        $chatstore->user_id = $request->user_id;
        $chatstore->save();

        if ($adminchat) {

            return View('userchatview', compact('id', 'adminchat'));
        } else {

            return View('userchatview', compact('id', 'adminchat'));
        }
    }


    public function dailytask()
    {

        $email = session()->get('adminemail');
        $category = Category::all();

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        return View('admin/dailytask', compact('adminname', 'adminpic', 'category'));
    }


    public function insert_task(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'category' => 'required',
            'desc' => 'required'

        ]);

        $email = session()->get('adminemail');
        $category = Category::all();

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $extension = $image->getClientOriginalExtension();

            if (in_array($extension, ['JPG'])) {
                $imageName = time() . '.' . $extension;
                $image->move(public_path('dailytask'), $imageName);

                $lecture = new Dailytask();
                $lecture->task = $request->name;
                $lecture->course_id = $request->category;
                $lecture->task_desc = $request->desc;
                $lecture->task_docs = $imageName;
                $lecture->save();

                return View('admin/dailytask', compact('category', 'adminpic', 'adminname'))->with('msg', 'Task sucessfully uploaded');
            } else {
                // If the file extension is not allowed, show an error message
                return view('admin/dailytask', compact('category', 'adminpic', 'adminname'))->with('msg', 'Only JPG Files Allow');
            }
        }
    }


    public function coursespageAdmin()
    {

        $category = Category::all();
        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        return View('admin/courseview', compact('category', 'adminpic', 'adminname'));
    }


    public function admincvtemplete()
    {

        $email = session()->get('adminemail');

        $adminpic = dunyamodel::where('email', $email)->value('image');
        $adminname = dunyamodel::where('email', $email)->value('firstname');

        return View('admin/admincvtemplete', compact('adminpic', 'adminname'));
    }

    protected function contactUs(request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:10|max:200',
        ]);

        $data = new contactModel();

        $data->fullname = $request->input('fullname');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');

        $data->save();

        return redirect()->back()->with('success', 'Query Submitted, We will reply shortly.');
    }
}
