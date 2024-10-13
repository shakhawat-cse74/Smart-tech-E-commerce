<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerAuthController extends Controller
{
    private $customer;

    public function storeCustomer(Request $request)
    {
        $this->customer = Customer::newCustomer($request);

        Session::put('customer_id',$this->customer->id);
        Session::put('customer_name',$this->customer->name);

        return redirect('/checkout/confirm-order');
    }

    public function dashboard()
    {
        return view('customer.dashboard', [
            'orders' => Order::where('customer_id', Session::get('customer_id'))->latest()->get()
        ]);
    }
    public function login()
    {
        return view('customer.login');
    }
    public function register()
    {
        return view('customer.register');
    }
    public function logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');

        return redirect('/');
    }
    public function loginCheck(Request $request)
    {

        $this->customer = Customer::where('email',$request->email)->first();
        if ($this->customer)
        {
            if (password_verify($request->password, $this->customer->password))
            {
                Session::put('customer_id',$this->customer->id);
                Session::put('customer_name',$this->customer->name);

                if (isset($request->check_page))
                {
                    return redirect('/customer/dashboard');
                }

                return redirect('/checkout/confirm-order');
            }
            else
            {
                return back()->with('message','Sorry Your Password not valid');
            }
        }
        else
        {
            return back()->with('message','Sorry Your Email not valid');
        }
    }
}
