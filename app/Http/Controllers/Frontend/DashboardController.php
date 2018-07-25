<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Order;
use App\SiteMeta;
use Auth;
use Hash;
use PublicServiceProvider;

class DashboardController extends Controller
{
    public function __construct()
    {

    }

    /**
     * 會員訂單首頁
     */
    public function index()
    {
        $order = Order::where('owner', Auth::user()->guid)->orderBy('id', 'desc')->get();
        return view('frontend.dashboard.dashboardIndex', [
            'order' => $order,
            'isThumbShow' => true,
            'title' => '近期訂單',
            'thumb' => '會員專區'
        ]);
    }

    /**
     * 聯絡資訊頁面
     */
    public function address()
    {
        return view('frontend.dashboard.dashboardAddress', [
            'isThumbShow' => true,
            'title' => '聯絡資訊',
            'thumb' => '會員專區'
        ]);
    }

    /**
     * 個人資訊頁面
     */
    public function information()
    {
        return view('frontend.dashboard.dashboardInformation', [
            'isThumbShow' => true,
            'title' => '會員資訊',
            'thumb' => '會員專區'
        ]);
    }

    /**
     * 修正個人資訊
     */
    public function modifyInformation(Request $request)
    {
        $data = $request->all();
        $user = DB::table('users')->where('guid', Auth::user()->guid);

        if ($data['password_current'] == '') {
            $this->validate($request, [
                'name' => 'required|string|max:255',
            ]);

            $user->update([
                'name' => $data['name'],
            ]);
        } else {
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'password' => 'required|string|min:6|confirmed',
            ]);

            if (Hash::check($data['password_current'], $user->first()->password)) {
                $user->update([
                    'name' => $data['name'],
                    'password' => bcrypt($data['password'])
                ]);
            } else {
                return PublicServiceProvider::exception('密碼輸入錯誤');
            }

        }

        return Redirect::back();
    }
}
