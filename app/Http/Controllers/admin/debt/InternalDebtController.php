<?php

namespace App\Http\Controllers\admin\debt;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin\debt\InternalDebt;

class InternalDebtController extends Controller
{
    // عرض صفحة إضافة دين داخلي
    public function create()
    {
        return view('admin.pages.debit.internal.create');
    }

    // تخزين دين داخلي جديد
    public function store(Request $request)
    {
        // التحقق من البيانات المدخلة
        $request->validate([
            'amount' => 'required|string',
            'currency' => 'required|string',
            'reason' => 'required|string',
        ]);

        // إنشاء السجل الجديد
        InternalDebt::create([
            'amount' => $request->amount,
            'currency' => $request->currency,
            'reason' => $request->reason,
        ]);

        return redirect()->route('home.page');
    }

    /**
     * عرض صفحة تعديل دين داخلي
     */
    public function edit($id)
    {
        $internalDebt = InternalDebt::find($id);
        return view('admin.pages.debit.internal.edit', compact('internalDebt'));
    }

    // تحديث الدين الداخلي
    public function update(Request $request, $id)
    {
        $debt = InternalDebt::findOrFail($id);

        // التحقق من البيانات المدخلة
        $request->validate([
            'amount' => 'required|numeric',
            'currency' => 'required|string|max:10',
            'reason' => 'required|string|max:255',
        ]);

        $debt->update([
            'amount' => $request->amount,
            'currency' => $request->currency,
            'reason' => $request->reason,
        ]);

        return redirect()->route('internal.edit', ['InternalId' => $debt->id])->with('success', 'تم تعديل الدين بنجاح!');
    }

    /**
     * حذف الدين الداخلي
     */
    public function destroy(InternalDebt $internalDebt)
    {
        // حذف السجل
        $internalDebt->delete();

        return redirect()->back()->with('success', 'تم حذف المعاملة بنجاح!');
    }
}