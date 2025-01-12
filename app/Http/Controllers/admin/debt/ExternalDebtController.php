<?php

namespace App\Http\Controllers\admin\debt;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin\debt\ExternalDebt;

class ExternalDebtController extends Controller
{
    public function create(){
        return view('admin.pages.debit.external.create');
    }
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'amount' => 'required|string',
            'currency' => 'required|string',
            'receiver' => 'required|string',
            'reason' => 'required|string',
        ]);

        // Create new record
        ExternalDebt::create([
            'amount' => $request->amount,
            'currency' => $request->currency,
            'receiver' => $request->receiver,
            'reason' => $request->reason,
        ]);

        return redirect()->route('home.page');
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit($id)
{
    $debt = ExternalDebt::findOrFail($id);
    return view('admin.pages.debit.external.edit', compact('debt'));
}

public function update(Request $request, $id)
{
    $debt = ExternalDebt::findOrFail($id);
    $request->validate([
        'amount' => 'required|numeric',
        'currency' => 'required|string|max:10',
        'receiver' => 'required|string|max:255',
        'reason' => 'required|string|max:255',
    ]);

    $debt->update([
        'amount' => $request->amount,
        'currency' => $request->currency,
        'receiver' => $request->receiver,
        'reason' => $request->reason,
    ]);

    return redirect()->route('external.edit', ['ExternalId' => $debt->id])->with('success', 'تم تعديل الدين بنجاح!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExternalDebt $externalDebt)
    {
        // Delete record
        $externalDebt->delete();

        return redirect()->back()->with('success', 'تم حذف المعاملة بنجاح!');
    }
}
