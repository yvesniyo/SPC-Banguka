<?php

namespace App\Http\Controllers;

use App\DataTables\ServiceDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Repositories\ServiceRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use App\Models\ServiceCategory;
use App\Repositories\ServiceCategoryRepository;
use App\Models\User;
use Carbon\Carbon;
use Response;

class ServiceController extends AppBaseController
{
    /** @var  ServiceRepository */
    private $serviceRepository;

    public function __construct(ServiceRepository $serviceRepo)
    {
        $this->serviceRepository = $serviceRepo;
    }

    /**
     * Display a listing of the Service.
     *
     * @param ServiceDataTable $serviceDataTable
     * @return Response
     */
    public function index(ServiceDataTable $serviceDataTable)
    {
        return $serviceDataTable->render('services.index');
    }

    /**
     * Show the form for creating a new Service.
     *
     * @return Response
     */
    public function create(ServiceCategoryRepository $serviceCategoryRepository)
    {
        $categories = ServiceCategory::htmlSelectIdName();
        $employees = User::htmlSelectIdName();
        return view('services.create', compact("categories", 'employees'));
    }


    public function serviceRequestCreateUpdate(&$input)
    {
        [$startDate, $endDate] = explode(" - ", $input["dateRange"]);
        $input["start_date"] = Carbon::parse($startDate);
        $input["end_date"] = Carbon::parse($endDate);
        $input["time_required"] = Carbon::parse($startDate)->diffInDaysFiltered(function(Carbon $date){
            return !$date->isWeekend();
        },Carbon::parse($endDate));
        $input["time_required_type"] = "days";
        $input["real_price"] = $input["price"];
        $input["price"] = $input["real_price"] /  $input["time_required"];
    }

    /**
     * Store a newly created Service in storage.
     *
     * @param CreateServiceRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceRequest $request)
    {
        $input = $request->all();

        $this->serviceRequestCreateUpdate($input);





        $service = $this->serviceRepository->create($input);

        try {
            $service->addMedia($request->file('image'))->toMediaCollection('images');
        } catch (Exception $e) {}

        Flash::success('Service saved successfully.');

        return redirect(route('services.index'));
    }

    /**
     * Display the specified Service.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $service = $this->serviceRepository->find($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('services.index'));
        }

        return view('services.show')->with('service', $service);
    }

    /**
     * Show the form for editing the specified Service.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $service = $this->serviceRepository->find($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('services.index'));
        }

        $categories = ServiceCategory::htmlSelectIdName();
        $employees = User::htmlSelectIdName();


        return view('services.edit', compact('categories', 'employees'))->with('service', $service);
    }

    /**
     * Update the specified Service in storage.
     *
     * @param  int              $id
     * @param UpdateServiceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceRequest $request)
    {
        $service = $this->serviceRepository->find($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('services.index'));
        }

        $input = $request->all();
        $this->serviceRequestCreateUpdate($input);

        $service = $this->serviceRepository->update($input, $id);

        try {
            $service->addMedia($request->file('image'))->toMediaCollection('images');
        } catch (Exception $e) {}

        Flash::success('Service updated successfully.');

        return redirect(route('services.index'));
    }

    /**
     * Remove the specified Service from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $service = $this->serviceRepository->find($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('services.index'));
        }

        $this->serviceRepository->delete($id);

        Flash::success('Service deleted successfully.');

        return redirect(route('services.index'));
    }
}
