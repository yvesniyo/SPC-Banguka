<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use App\Models\ServiceBooking;
use App\Models\ServiceCategory;
use App\Repositories\CustomerRepository;
use App\Repositories\ServiceCategoryRepository;
use App\Repositories\ServiceRepository;
use App\Settings\GeneralSettings;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class WebController extends Controller
{



    public function __construct()
    {
    }


    public function index(

        ServiceCategoryRepository $serviceCategoryRepository,
        ServiceRepository $serviceRepository
    ) {
        $categories = $serviceCategoryRepository->allQuery([
            "status" => ServiceCategory::STATUS_ACTIVE
        ])->latest()->get();
        $services  = $serviceRepository->allQuery([
            "status" => Service::STATUS_ACTIVE
        ], null, 10)->with("serviceCategory")->latest()->get();


        return view("web.index", compact('categories', 'services'));
    }

    public function aboutUs()
    {
        return view("web.about-us");
    }

    public function contactUs()
    {
        return view("web.contact-us");
    }

    public function privacyPolicy()
    {
        return view("web.privacy-policy");
    }

    public function search(ServiceRepository $serviceRepository, Request $request)
    {
        $search_term = $request->search_term;
        $services = $serviceRepository->allQuery()
            ->where("name", "LIKE", "%" . $search_term . "%")
            ->get();
        return view("web.search", compact('services'));
    }


    public function booking(Service $service)
    {
        return view("web.booking", compact('service'));
    }

    public function saveBooking(
        Request $request,
        Service $service,
        CustomerRepository $customerRepository
    ) {
        $this->validate($request, [
            "name" => "required",
            "full_phone" => "required|min:13|max:13|starts_with:+",
        ]);

        $phone = $request->full_phone;

        /** @var \App\Models\Customer */
        $customer = $customerRepository->allQuery()
            ->where("phone", $phone)
            ->first();

        if (!$customer) {
            /** @var \App\Models\Customer */
            $customer = $customerRepository->create([
                "name" => $request->name,
                "phone" => $phone
            ]);

            $booking = $customer->newBooking($service, $service->interval_start_date, $service->interval_end_date);
        } else {
            $booking = $customer->newBooking($service, $service->interval_start_date, $service->interval_end_date);
        }

        if ($request->notes) {
            $booking->notes = $request->notes;
            $booking->save();
        }


        Flash::success("Thank you for booking with us, you will hear from us soon, using Phone contact");

        return redirect()->route("web.checkout", $booking);
    }


    public function checkout(ServiceBooking $serviceBooking)
    {
        Flash::success("Thank you for booking with us, you will hear from us soon, using Phone contact");

        $booking = $serviceBooking;
        return view("web.checkout", compact("booking"));
    }


    public function serviceCategory(ServiceCategory $serviceCategory)
    {
        return view("web.search", [
            "services" => $serviceCategory->services
        ]);
    }
}
