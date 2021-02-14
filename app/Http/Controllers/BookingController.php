<?php

namespace App\Http\Controllers;

use App\DataTables\BookingDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Repositories\BookingRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Service;
use Response;

class BookingController extends AppBaseController
{
    /** @var  BookingRepository */
    private $bookingRepository;

    public function __construct(BookingRepository $bookingRepo)
    {
        $this->bookingRepository = $bookingRepo;
    }

    /**
     * Display a listing of the Booking.
     *
     * @param BookingDataTable $bookingDataTable
     * @return Response
     */
    public function index(BookingDataTable $bookingDataTable)
    {
        return $bookingDataTable->render('bookings.index');
    }

    /**
     * Show the form for creating a new Booking.
     *
     * @return Response
     */
    public function create()
    {
        $services = Service::htmlSelectIdName();
        $customers = Customer::htmlSelectIdName();

        return view('bookings.create', compact('services', 'customers'));
    }

    /**
     * Store a newly created Booking in storage.
     *
     * @param CreateBookingRequest $request
     *
     * @return Response
     */
    public function store(CreateBookingRequest $request)
    {
        $input = $request->all();

        $booking = $this->bookingRepository->create($input);

        Flash::success('Booking saved successfully.');

        return redirect(route('bookings.index'));
    }

    /**
     * Display the specified Booking.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $booking = $this->bookingRepository->find($id);

        if (empty($booking)) {
            Flash::error('Booking not found');

            return redirect(route('bookings.index'));
        }

        return view('bookings.show')->with('booking', $booking);
    }

    /**
     * Show the form for editing the specified Booking.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $booking = $this->bookingRepository->find($id);

        if (empty($booking)) {
            Flash::error('Booking not found');

            return redirect(route('bookings.index'));
        }

        $services = Service::htmlSelectIdName();
        $customers = Customer::htmlSelectIdName();

        return view('bookings.edit', compact('services', 'customers'))->with('booking', $booking);
    }

    /**
     * Update the specified Booking in storage.
     *
     * @param  int              $id
     * @param UpdateBookingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBookingRequest $request)
    {
        $booking = $this->bookingRepository->find($id);

        if (empty($booking)) {
            Flash::error('Booking not found');

            return redirect(route('bookings.index'));
        }

        $booking = $this->bookingRepository->update($request->all(), $id);

        Flash::success('Booking updated successfully.');

        return redirect(route('bookings.index'));
    }

    /**
     * Remove the specified Booking from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $booking = $this->bookingRepository->find($id);

        if (empty($booking)) {
            Flash::error('Booking not found');

            return redirect(route('bookings.index'));
        }

        $this->bookingRepository->delete($id);

        Flash::success('Booking deleted successfully.');

        return redirect(route('bookings.index'));
    }

    public function calendar()
    {
        $item = [
            "title" => 'Dr. Marilie Ebert PhD',
            "start" => '2021-02-08 00:30:09',
            "id" => '10',
            "coupon" => '',
            "status" => 'pending',
            "textColor" => 'white'
        ];


        $services = Service::select(
            'id',
            'name',
            "start_date",
            "end_date",
            "status"
        )
            ->withCount(['bookings'])
            ->get();
        // $services = collect($services);
        $services = $services->map(function ($d) {
            return [
                "title" => $d->name . " (" . $d->bookings_count . ") Bookings",
                "start" => $d->start_date->format("Y-m-d h:i:s"),
                "end" => $d->end_date->format("Y-m-d h:i:s"),
                "id" => $d->id,
                "coupon" => '',
                "status" => $d->status,
                "textColor" => 'white'
            ];
        })->toArray();
        return view("booking_calendar", compact('services'));
    }
}
