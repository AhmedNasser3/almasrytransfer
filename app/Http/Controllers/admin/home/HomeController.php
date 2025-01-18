<?php

namespace App\Http\Controllers\admin\home;

use Illuminate\Http\Request;
use App\Models\admin\wallet\Wallet;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use App\Models\admin\category\Category;
use App\Models\admin\debt\ExternalDebt;
use App\Models\admin\debt\InternalDebt;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\honesty\PersonalHonesty;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::all();
        $wallets = Wallet::all();
        $externals = ExternalDebt::all();
        $internals = InternalDebt::all();
        $personalHonesties = PersonalHonesty::all();
        return view('admin.home.index',compact('categories','wallets','externals','internals','personalHonesties'));
    }
    public function WalletView($walletId){
        $wallet = Wallet::findOrFail($walletId);
        return view('admin.pages.wallet.view',compact('wallet'));
    }
    public function createUser(){
        return  view('admin.pages.users.create');
    }
    public function storeUser(Request $request)
    {
        // التحقق من البيانات المدخلة
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // تأكيد كلمة المرور
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // إنشاء المستخدم الجديد
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password')); // تشفير كلمة المرور
        $user->save();

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->route('home.page')->with('success', 'تم إنشاء المستخدم بنجاح');
    }

    public function viewUser(){
        $users = User::all();
        return  view('admin.pages.users.view',compact('users'));
    }
    public function deleteUser($userId){
        $user = User::findOrFail($userId);
        $user->delete();
        return redirect()->route('user.view')->with('success', 'تم حذف المستخدم بنجاح');
    }
}