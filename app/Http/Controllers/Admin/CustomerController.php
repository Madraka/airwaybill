<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Customer;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{

    public function index()
    {
        $customer = Customer::orderBy('name', 'asc')->get();

        return view('admin.customer.index', compact('customer', 'id'));
    }



    function edit($id)
    {
        // dd($id);
        $user = User::findOrFail($id);
        $customers = Customer::all();
        // $user= User::findOrFail($id);
        return view('admin.customer.edit')->with([
            'user' => $user,
            'customers' => $customers,
        ]);

        // $customer = Customer::findOrFail($id);
        // $roles = UserRole::orderBy('id', 'asc')->get();

        // return view('admin.customer.edit', compact('roles','user'));

        // return view('admin.customer.edit', compact('customer'));

        // dd($id);
        // $customer= User::findOrFail($id);
        // return view('admin.customer.edit')->with([
        //     'customer'=> $customer, 
        // ]);

        // dd(request(),request()->name, request()->all());

        // $customer= User::leftJoin('customers', function($join){
        //     $join->on('users.id', '=', 'customers.user_id');
        // })
        // ->whereNull('customers.user_id')
        // ->first([
        //     'users.*',
        //     'customers.address',
        //     'customers.phone',
        //     'customers.reference_no'
        // ]);
        // return view('admin.customer.edit')->with([
        //     'customer'=> $customer, 
        // ]);


        // dd($id);
        // $customer= Customer::select(
        //     "id",
        //     "address",
        //     "phone",
        //     "reference_no"
        // )
        // ->leftJoin("users","users.id","=","customers.user_id")
        // ->get([
        //     'customers.*',
        //     'a.address as address',
        //     'p.phone as phone',
        //     'r.reference_no as reference_no',
        //     'id=numero'
        // ]);

        // return view('admin.customer.edit')->with([
        //         'customer'=> $customer, 
        //     ]);

        // $customer = Customer::findOrFail($id);
        // $roles = UserRole::orderBy('id', 'asc')->get();

        // return view('admin.customer.edit', compact('roles','user'));

        // return view('admin.customer.edit', compact('customer'));
    }

    function update($id)
    {
        // $customer = User::findOrFail($customer);
        // $customer = DB::table('users')
        //     ->leftJoin('customers', 'users.id', '=', 'customers.user_id')
        //     ->where('users.id', $customer);
        // DB::table('customers')->where('user_id',$customer);

        // $customer->update([
        //     'name'=>request()->name,
        //     'email'=>request()->email,
        //     'password'=>request()->password,
        //     'address'=>request()->address,
        //     'phone'=>request()->phone,
        //     'reference_no'=>request()->reference_no
        // ]);

        $customer= User::where('users.id', $id)
        ->leftJoin('customers', 'users.id','=','customers.user_id')
        ->select('users.id', 'customers.user_id')
        ->update([
            'name'=>request()->name,
            'email'=>request()->email,
            'password'=>request()->password
        ]);;

        Customer::where('user_id',$id)->update([
            
            'address'=>request()->address,
            'phone'=>request()->phone,
            'reference_no'=>request()->reference_no
        ]);

        return redirect('admin/customers')
            ->withSuccess('User data has been updated');
    }

    public function destroy($id)
    {


        // $customer = Customer::findOrFail($id);
        // $customer = User::findOrFail($id);
        // return $customer;
        // $customer = DB::table('users')
        //     ->leftJoin('customers', 'users.id', '=', 'customers.user_id')
        //     ->where('users.id', $id);
        // DB::table('customers')->where('user_id', $id)->delete();
        // $customer->delete();

        $customer= User::where('users.id',$id)
            ->leftJoin('customers', 'users.id','=','customers.user_id')
            ->select('users.id','customers.user_id')
            ->first()
            ->delete();
        Customer::where('user_id',$id)->delete();
        return redirect('admin/customers')
            ->with('success', 'User data has been deleted successfully');
    }
}
