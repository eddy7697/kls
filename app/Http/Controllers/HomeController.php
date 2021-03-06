<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Auth\Events\Registered;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use App\User;
use App\Bonus;
use App\Admin;
use App\Address;
use App\SocialProvider;
use App\Services\PublicServiceProvider;
use App\Coupon;
use Auth;
use Cart;
use Mail;
use Log;
use Artisan;
use Config;
use Analytics;
use Session;
use Spatie\Analytics\Period;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('dashboard/admin');
    }

    public function createAdmin($value='')
    {
        if (count(User::all())) {
            return redirect('/');
        } else {
            return User::create([
                'guid' => PublicServiceProvider::generateGuid(),
                'name' => '最高管理者',
                'email' => 'admin@admin.com',
                // 'jobTitle' => 'SuperUser',
                'password' => bcrypt('admin123'),
                'point' => 9999,
                'role' => 'ADMIN',
                'level' => 'VIP'
            ]);
        }

    }

    public function test($value='')
    {

        return "Artisan::call('migrate')";
        $product = Product::where('isPublish', 1)
                    // ->where('schedulePost', '<', date('Y-m-d H:i:s'))
                    // ->where('scheduleDelete', '>', date('Y-m-d H:i:s'))
                    ->paginate(1);
        // return json_encode($product);

        return view('test', [
            'title' => '123',
            'shortcut' => '/',
            'isThumbShow' => false,
            'product' => $product,
        ]);
    }

    public function testPost(Request $request)
    {
        if (Input::hasFile('files')){
            $files = Input::file('files');
            foreach ($files as $file) {
                $file->move('uploads' , time().$file->getClientOriginalName());
            }
        } else {
            echo 'Not Uploaded';
        }
    }

    public function testAction()
    {
        // Config::set('mailTarget.test', 'array');
        // return config('mailTarget.test');
        return 'oh yeah';
    }

    public function truncate()
    {
        User::query()->truncate();
        SocialProvider::query()->truncate();
    }

    public function checkAuth()
    {
        $authStatus = array(
            'auth' => Auth::check()
        );
        return $authStatus;
    }

    public function getAddress($guid)
    {
        return Address::where('owner', $guid)->first();
    }

    public function gaTest()
    {
        //retrieve visitors and pageview data for the current day and the last seven days
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));

        //retrieve visitors and pageviews since the 6 months ago
        // $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));

        //retrieve sessions and pageviews with yearMonth dimension since 1 year ago
        // $analyticsData = Analytics::performQuery(
        //     Period::years(1),
        //     'ga:sessions',
        //     [
        //         'metrics' => 'ga:sessions, ga:pageviews',
        //         'dimensions' => 'ga:yearMonth'
        //     ]
        // );

        return $analyticsData;
    }

    public function esunec(Request $request)
    {
        return $request->all();
    }

    public function testSession($id)
    {
        if (Session::has('favorite'))  {
            $favorite = Session::get('favorite');

            if (!in_array($id, $favorite)) {
                array_push($favorite, $id);
                Session::put('favorite', $favorite);
            }
        } else {
            Session::put('favorite', array($id));
        }

        return Session::all();
    }

    public function checkCoupon(Request $request, $coupon)
    {
        // return $request->amount;
        if (!Coupon::where('serialNumber', $coupon)->exists()) {
            abort(454);
            return;
        }
        
        $couponItem = Coupon::where('serialNumber', $coupon)->first();

        if ($couponItem->minimumAmount !== null) {
            if ($request->amount < $couponItem->minimumAmount) {
                abort(457);
                return;
            }
        }
        if ($couponItem->selectedUser) {
            if ($couponItem->selectedUser !== Auth::user()->guid) {
                abort(455);
                return;
            }
        }

        if ($couponItem->selectedProduct !== null) {
            $cartArray = array();

            foreach(Cart::content() as $row) {
                array_push($cartArray, json_decode($row->name)->guid);
            }

            if (!in_array($couponItem->selectedProduct, $cartArray)) {
                abort(456);
                return;
            }
        }        

        // return $cartArray;

        return $couponItem;
    }
}
