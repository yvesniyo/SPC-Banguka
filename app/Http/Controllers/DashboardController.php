<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\Earning;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class DashboardController extends Controller
{


    public function index(Request $request)
    {

        $servicesByMonth = $this->servicesByMonth();
        $employeesByMonth = $this->employeesByMonth();
        $couponsByMonth = $this->couponsByMonth();
        $refererUrl = $this->refererUrl();
        $earningsByMonth = $this->earningsByMonth();

        $todayBookings = 0;
        $totalCustomers = Customer::count();
        $totalServices = Service::count();
        $totalEmployees = User::where("role_id", 2)->count();
        $totalBookings = 0;

        $bookings = Booking::with(["bookable", "customer"])->limit(10)->latest()->get();


        $completeBookings = Booking::select("id")->where("status", Booking::STATUS_COMPLETED)->count();
        $pendingBookings = Booking::select("id")->where("status", Booking::STATUS_PENDING)->count();
        $cancelledBookings = Booking::select("id")->where("status", Booking::STATUS_CANCELLED)->count();
        $inProgressBookings = Booking::select("id")->where("status", Booking::STATUS_INPROGRESS)->count();

        $totalEarnings = Earning::selectRaw("sum(amount) as total_amount ")->first()->total_amount;


        return view("home", compact(
            'totalEarnings',
            'completeBookings',
            'pendingBookings',
            'cancelledBookings',
            'inProgressBookings',
            'bookings',
            'earningsByMonth',
            'refererUrl',
            "servicesByMonth",
            'employeesByMonth',
            'couponsByMonth',
            'totalEmployees',
            'totalCustomers',
            'totalServices',
            'totalBookings'
        ));
    }


    public function earningsByMonth()
    {
        $chart_options = [
            'chart_title' => 'Earning by month',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Earning',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
            "chart_height" => "50px",
        ];
        return new LaravelChart($chart_options);
    }

    public function refererUrl()
    {
        $chart_options = [
            'chart_title' => 'Referer Statistics',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Referer',
            'group_by_field' => 'name',
            'chart_type' => 'pie',
            "chart_height" => "30px",
        ];
        return new LaravelChart($chart_options);
    }


    public function servicesByMonth()
    {
        $chart_options = [
            'chart_title' => 'Services by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Service',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
            "chart_height" => "50px",
        ];
        return new LaravelChart($chart_options);
    }

    public function employeesByMonth()
    {
        $chart_options = [
            'chart_title' => 'Employees by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'line',
            "chart_height" => "50px",
        ];
        return new LaravelChart($chart_options);
    }

    public function couponsByMonth()
    {
        $chart_options = [
            'chart_title' => 'Coupons by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Coupon',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
            "chart_height" => "50px",
        ];
        return new LaravelChart($chart_options);
    }



    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
