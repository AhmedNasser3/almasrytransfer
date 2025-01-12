<?php

namespace App\Http\Controllers\Admin\Wallet;

use Illuminate\Http\Request;
use App\Models\admin\wallet\Wallet;
use App\Http\Controllers\Controller;
use App\Models\admin\category\Category;

class WalletController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.wallet.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required|integer|exists:categories,id',
            'section_1_name' => 'required|string|max:255',
            'section_1_rate' => 'required|numeric',
            'section_1_currency' => 'required|string|max:10',
            'section_2_name' => 'required|string|max:255',
            'section_2_rate' => 'required|numeric',
            'section_2_currency' => 'required|string|max:10',
            'section_3_name' => 'required|string|max:255',
            'section_3_rate' => 'required|numeric',
            'section_3_currency' => 'required|string|max:10',
            'section_4_name' => 'required|string|max:255',
            'section_4_rate' => 'required|numeric',
            'section_4_currency' => 'required|string|max:10',
            'section_5_name' => 'required|string|max:255',
            'section_5_rate' => 'required|numeric',
            'section_5_currency' => 'required|string|max:10',
        ]);
        $user = auth()->user();
        $result = $data['section_1_name'] - $data['section_5_name'];
        $user->cash += $result;
        $user->save();
        Wallet::create($data);
        return redirect()->route('home.page')->with('success', 'تم إنشاء المحفظة بنجاح');
    }

    public function edit($walletId)
    {
        $wallet = Wallet::findOrFail($walletId);
        return view('admin.pages.wallet.edit', compact('wallet'));
    }

    public function update(Request $request, $walletId)
    {
        $data = $request->validate([
            'category_id' => 'required|integer|exists:categories,id',
            'section_1_name' => 'required|string|max:255',
            'section_1_rate' => 'required|numeric',
            'section_1_currency' => 'required|string|max:10',
            'section_2_name' => 'required|string|max:255',
            'section_2_rate' => 'required|numeric',
            'section_2_currency' => 'required|string|max:10',
            'section_3_name' => 'required|string|max:255',
            'section_3_rate' => 'required|numeric',
            'section_3_currency' => 'required|string|max:10',
            'section_4_name' => 'required|string|max:255',
            'section_4_rate' => 'required|numeric',
            'section_4_currency' => 'required|string|max:10',
            'section_5_name' => 'required|string|max:255',
            'section_5_rate' => 'required|numeric',
            'section_5_currency' => 'required|string|max:10',
        ]);

        $wallet = Wallet::findOrFail($walletId);
        $wallet->update($data);
        return redirect()->route('home.page')->with('success', 'تم تحديث المحفظة بنجاح');
    }

    public function delete($walletId)
    {
        $wallet = Wallet::findOrFail($walletId);
        $wallet->delete();
        return redirect()->route('home.page')->with('success', 'تم حذف المحفظة بنجاح');
    }
}
