<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;
use Validator;
use DB;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index');
    }

    /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('index');
    }

    /**
     * Attempting login.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'login failed']);
        } else {
            if (Auth::attempt(['username' => $request->username, 'password' => $request->password], $request->remember))
            
            return response()->json(['status' => 'login success']);
        }
    }

    /**
     * Attempting logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required|min:6',
            'email' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()]);
        } else {
            DB::table('users')->insertGetId([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => bcrypt('secret'),
                'admin' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            return response()->json(['message' => 'stored']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
            'new_password_confirmation' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()]);
        } else {
            DB::table('users')
            ->where('id', '=', Auth::id())
            ->update(['password' => bcrypt($request->new_password)]);

            return response()->json(['message' => 'success']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::table('users')->where('id', '=', $request->id)->delete();

        return response()->json(['message' => 'deleted']);
    }

    /**
     * Get all data and return to json.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserData(Request $request)
    {
        $users = DB::table('users')->select(['id', 'name', 'username', 'email', 'created_at']);
        
        return DataTables::of($users)
                            ->editColumn('created_at', function ($user) {
                                return $user->created_at ? with(new Carbon($user->created_at))->format('Y/m/d') : '';
                            })
                            ->addColumn('action', function($user)
                            {
                                return '<button 
                                        class="btn btn-info btn-xs user-show"
                                        data-toggle="modal"
                                        data-target="#user-show-modal"
                                        data-name="'. $user->name .'"
                                        data-username="'. $user->username .'"
                                        data-email="'. $user->email .'"
                                        ><i class="md-eye"></i></button>
                                        <button
                                        class="btn btn-danger btn-xs user-delete"
                                        data-id="'. $user->id .'"
                                        ><i class="md-delete"></i></button>';
                            })
                            ->make(true);    
    }
}
