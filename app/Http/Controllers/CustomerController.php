<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tb_customers
        $customers = Customer::all();

        return view('master-databases.customer.index', compact('customers'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'branch' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'curr' => 'required|string|max:10',
            'initial' => 'required|string|max:10',
            'address_primary' => 'required|string|max:255',
            'address_secondary' => 'nullable|string|max:255',
            'customer' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'category' => 'nullable|string|max:255',
            'regions' => 'nullable|string|max:255',
            'npwp' => 'nullable|string|max:20',
            'bank_description' => 'nullable|string|max:255',
            'receivable' => 'nullable|numeric',
            'discount' => 'nullable|numeric',
            'vat' => 'nullable|numeric',
            'sales' => 'nullable|numeric',
            'return' => 'nullable|numeric',
            'prepaid' => 'nullable|numeric',
            'cost_center_dept' => 'nullable|string|max:255',
            'cost_center_cost' => 'nullable|string|max:255',
            'account_balance_currency' => 'nullable|numeric',
            'account_balance_rupiah' => 'nullable|numeric',
            'account_balance_dn_payment' => 'nullable|numeric',
            'since' => 'nullable|date',
            'type' => 'nullable|string|max:255',
            'audit' => 'nullable|string|max:255',
        ]);

        // Menyimpan data ke database
        Customer::create($validatedData);

        // Redirect atau tampilkan pesan sukses
        return back()->with('success', 'Customer berhasil ditambahkan.');
    }
    
    public function destroy($id)
    {
        // Temukan customer berdasarkan ID
        $customer = Customer::find($id);

        if (!$customer) {
            // Jika customer tidak ditemukan, redirect dengan pesan error
            return back()->with('error', 'Customer tidak ditemukan.');
        }

        // Hapus customer
        $customer->delete();

        // Redirect atau tampilkan pesan sukses
        return back()->with('success', 'Customer berhasil dihapus.');
    }

}
