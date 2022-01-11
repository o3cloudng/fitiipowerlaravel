<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::latest()->paginate(4);
        // dd($customers);
        return view('customers.customers', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.addcustomer');
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
            'firstname' => ['required','min:3','max:100'],
            'lastname' => ['required','min:3','max:100'],
            'email' => ['required', 'unique:customers',],
            'phone' => ['required', 'unique:customers','min:11','max:14'],
            'product' => ['required'],
            'package' => ['required'],            
            'picture' => ['required','image','mimes:jpeg,png,jpg,gif,svg'],            
            'address' => ['required','max:255'],
        ]);

        if ($validator->fails()) {
            // dd('Something is wrong');
            return back()->with('warning', $validator->messages()->all())->withInput();
        } else {

            // $imageName = time().'.'.$request->picture->extension();  
            // $request->image->move(public_path('pictures'), $imageName);

            $cust = $request->all();
            // $cust['picture'] = $imageName;

            $customer = Customer::create($cust);

            if ($customer) {
                return redirect()->route('customer.index')->with('success', 'Customer Added Successfully!');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        // dd($customer);
        return view('customers.showcustomer', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        // dd($customer);
        return view('customers.editcustomer', ['customer' => $customer]);
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
        $validator = Validator::make($request->all(), [
            'firstname' => ['required','min:3','max:100'],
            'lastname' => ['required','min:3','max:100'],
            'email' => ['required'],
            'phone' => ['required','min:11','max:14'],
            'product' => ['required'],
            'package' => ['required'],            
            'picture' => ['required','image','mimes:jpeg,png,jpg,gif,svg'],            
            'address' => ['required','max:255'],
        ]);

        if ($validator->fails()) {
            // dd('Something is wrong');
            return back()->with('warning', $validator->messages()->all())->withInput();
        } else {
            $customer = Customer::find($id);

            $customer->update($request->all());
            // dd($customer);
            // Customer::update($customer);

            return redirect()->route('customer.index')->with('success', 'Customer updated successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect()->route('customer.index')->with('success', 'Customer deleted successfully');
    }
}
