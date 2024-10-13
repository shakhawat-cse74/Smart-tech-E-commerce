<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Session;
use function Symfony\Component\HttpFoundation\Session\Storage\Proxy\validateId;

class CustomerProfileController extends Controller
{
    public function index()
    {
        return view('customer.profile');
    }
    public function order()
    {
        return view('customer.order');
    }
    public function payment()
    {
        return view('customer.payment');
    }
    public function changePassword()
    {
        return view('customer.change-password');
    }
    public function updatePassword(Request $request)
    {
        $this->customer = Customer::find(Session::get('customer_id'));

        if (password_verify($request->old_password, $this->customer->password))
        {
            $this->customer->password = bcrypt($request->new_password);
            $this->customer->save();

            return redirect('/customer/dashboard')->with('message','Password updated');
        }
        else
        {
            return back()->with('message','Old Password is Worng');
        }
    }
}
