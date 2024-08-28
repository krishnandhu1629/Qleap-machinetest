<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use Illuminate\Http\Request;

class invoiceController extends Controller
{
    public function index()
    {
        $invoices = invoice::all();
        return view('invoices.index', compact('invoices'));
    }

    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        invoice::create($request->all());
        return redirect()->route('invoices.index');
    }

    public function show(invoice $invoice)
    {
        return view('invoices.show', compact('invoice'));
    }

    public function edit(invoice $invoice)
    {
        return view('invoices.edit', compact('invoice'));
    }

    public function update(Request $request, invoice $invoice)
    {
        $invoice->update($request->all());
        return redirect()->route('invoices.index');
    }

    public function destroy(invoice $invoice)
    {
        $invoice->delete();
        return redirect()->route('invoices.index');
    }
}

