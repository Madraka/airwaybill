<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Customer;
use App\Models\UserRole;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{

    public function index()
    {
        $customer =Customer::orderBy('name', 'asc')->get();
        return view('admin.customer.index', compact('customer','id'));
    }



    function edit($id)
    {
        // dd($id);
        $customer= User::findOrFail($id);
        return view('admin.customer.edit')->with([
            'customer'=> $customer, 
        ]);

        // $customer = Customer::findOrFail($id);
        // $roles = UserRole::orderBy('id', 'asc')->get();

        // return view('admin.customer.edit', compact('roles','user'));

        // return view('admin.customer.edit', compact('customer'));
    }

    function update($customer)
    {
        $customer= User::findOrFail($customer);

        $customer->update(request()->all());
        return redirect('admin/customers')
            ->withSuccess('User data has been updated');

    }

    public function destroy($customer)
    {
        // dd('deleted');

        $customer= User::findOrFail($customer);
        $customer->delete();
        return redirect('admin/customers')
            ->with('success','User data has been deleted successfully');
    }
}
