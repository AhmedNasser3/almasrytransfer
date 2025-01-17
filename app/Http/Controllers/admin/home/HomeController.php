<?php

namespace App\Http\Controllers\admin\home;

use App\Http\Controllers\Controller;
use App\Models\admin\category\Category;
use App\Models\admin\debt\ExternalDebt;
use App\Models\admin\debt\InternalDebt;
use App\Models\admin\honesty\PersonalHonesty;
use App\Models\admin\wallet\Wallet;
use Illuminate\Http\Request;

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
}