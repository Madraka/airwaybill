<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Models\Profile;
use App\Models\UserRole;
use App\Models\Customer;
use Session;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = UserRole::orderBy('id', 'asc')->get();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //--- Validation Section
        $this->validate($request, [
            'name'       => 'required',
            'email' => 'required',
            'role_id' => 'required',
            'password' => 'required',

        ]);
        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password),
        ]);

        $profile = Profile::create([
            'user_id' => $users->id,
            'avatar' => 'uploads/avatars/male.jpg'
        ]);
        if($request->role_id == 3){
            $customers= Customer::create([
                'address' => $request->address,
                'phone' => $request->phone,
                'reference_no' => $request->reference_no,
                'user_id' => $users->id
            ]);
            return redirect()->route('customers')->with('success', "Customer Added Successfully");
        }
        return redirect()->route('users')->with('success', "User Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = UserRole::orderBy('id', 'asc')->get();

        return view('admin.users.edit', compact('roles','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //--- Validation Section
        // $this->validate($request, [
        //     'name'       => 'required',
        //     'email' => 'required',
        //     'role_id' => 'required',
        //     'password' => 'required',

        // ]);

        $customer= User::findOrFail($id);
        $customer->update(request()->all());

        return redirect('admin/users')
            ->with('success', "User Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->profile->delete();
        $user->delete();

        return redirect()->route('users')->with('error', "User Deleted Successfully");
    }

    public function showCustomer(){
        $customers = User::with('customer')->where('role_id',3)->get();
        return view('admin.customer.index',compact('customers'));
    }
    public function createCustomer(){
        return view('admin.customer.create');
    }
    public function getRefNo($id){
        $ref = Customer::where('id',$id)->first();
        $refNo = $ref->reference_no;
        return $refNo;
    }
}
