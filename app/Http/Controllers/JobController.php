<?php

namespace App\Http\Controllers;
use App\Category;
use App\Company;
use App\Job;
use App\User;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\JobPostRequest;
use Illuminate\Support\Facades\DB;
class JobController extends Controller
{
   public function __construct()
    {
        //$this->middleware(['seeker','verified']);

    }




    public function index()
    {
        $jobs = Job::latest()->whereDate('last_date','>',Date('Y-m-d'))->limit(10)->get();
        $categories =Category::with('jobs')->get();
        $companies = Company::latest()->limit(12)->get();
        return view('welcome', compact('jobs', 'companies','categories'));
    }

    public function show($id, Job $job)
    {
        return view('jobs.show', compact('job'));
    }


    public function create()
    {

        return view('jobs.create');
    }

    public function store(JobPostRequest $request)


    {
        $user_id = auth()->user()->id;
        $company = Company::where('user_id', $user_id)->first();
        $company_id = $company->id;
        Job::create([
            'user_id' => $user_id,
            'company_id' => $company_id,
            'title' => request('title'),
            'slug' => Str::slug(request('title')),
            'roles' => request('roles'),
            'description' => request('description'),
            'category_id' => request('category'),
            'position' => request('position'),
            'status' => request('status'),
            'type' => request('type'),
            'last_date' => request('last_date'),
            'address' => request('address'),


        ]);
        return redirect()->back()->with('message', 'Job posted is successfully');
    }

    public function myjobs()
    {
        $jobs = Job::where('user_id', auth()->user()->id)->get();
        return view('jobs.myjobs', compact('jobs'));

    }

    public function apply(Request $request, $id)
    {
        $jobId = Job::find($id);
        $jobId->users()->attach(Auth::user()->id);
        return redirect()->back()->with('message', 'Job Applied Successfully');

    }

    public function applicants()
    {
        $applicants = Job::has('users')->where('user_id', auth()->user()->id)->get();
        return view('jobs.applicants', compact('applicants'));

    }

    public function alljobs(Request $request)
    {
        $keyword = request('title');
        $type = request('type');
        $category = request('category_id');
        $address = request('address');
        if ($keyword || $type || $category || $address) {
            $jobs = Job::where('title', 'LIKE', '%' . $keyword . '%')
                ->orWhere('type', $type)
                ->orWhere('category_id', $category)
                ->orWhere('address', $address)
                ->paginate(10);
            return view('jobs.alljobs', compact('jobs'));
        } else {

            $jobs = Job::paginate(10);
            return view('jobs.alljobs', compact('jobs'));
        }
    }


    public function searchJob(Request $request){

        $keyword= $request->get('keyword');
        $users = Job::where('title','LIKE','%'. $keyword.'%')
            ->orWhere('position','LIKE','%'. $keyword.'%')
            ->orWhere('address','LIKE','%'. $keyword.'%')
            ->orWhere('type','LIKE','%'. $keyword.'%')
            ->limit(5)->get();
        return response()->json($users);


    }

    public function edit($id){
          //dd($id);

        $job = Job::find($id);

        return view('jobs.edit', compact('job'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'title'=>'required|string',

            'categories'=>'required|string',

            'description'=>'required|string',

        ] );

        $job =  Job::find($id);







        $job->save();
        return  redirect()->route('jobs.myjobs')->with('success','Data Successfully Updated');
    }


    public function destroy($id){

        $job = Job::find($id);
        $job->delete();

        return  redirect()->route('jobs.myjobs')->with('success','Data Successfully deleted');

    }




}
