<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Rinvex\Bookings\Models\BookableBooking;

class ServiceBooking extends BookableBooking
{

    public const STATUS_ACTIVE = "active";
    public const STATUS_INACTIVE = "inactive";
    public const STATUSES = [
        self::STATUS_ACTIVE,
        self::STATUS_INACTIVE
    ];


    /**
     * @TODO: implement rates, availabilites, minimum & maximum units
     *
     * Calculate the booking price.
     *
     * @param \Illuminate\Database\Eloquent\Model $bookable
     * @param \Carbon\Carbon                      $startsAt
     * @param \Carbon\Carbon                      $endsAt
     * @param int                                 $quantity
     *
     * @return array
     */
    public function calculatePrice(Model $bookable, Carbon $startsAt, Carbon $endsAt = null, int $quantity = 1): array
    {
        $totalUnits = 0;

        switch ($bookable->unit) {
            case 'use':
                $totalUnits = 1;
                $totalPrice = $bookable->base_cost + ($bookable->unit_cost * $totalUnits * $quantity);
                break;
            default:
                $method = 'add' . ucfirst($bookable->unit);

                for ($date = clone $startsAt; $date->lt($endsAt ?? $date->addDay()); $date->{$method}()) {
                    $totalUnits++;
                }

                $totalPrice = $bookable->base_cost + ($bookable->unit_cost * $totalUnits * $quantity);
                break;
        }

        // return [
        //     $totalPrice,
        //     null,
        //     $bookable->currency
        // ];

        return [
            'base_cost' => $bookable->base_cost,
            'unit_cost' => $bookable->unit_cost,
            'unit' => $bookable->unit,
            'currency' => $bookable->currency,
            'total_units' => $totalUnits,
            'total_price' => $totalPrice,
        ];
    }


    protected static function boot()
    {
        parent::bootTraits();
        Model::boot();

        static::validating(function (self $bookableAvailability) {
            if (!$bookableAvailability->price) {
                $formula = $bookableAvailability->calculatePrice(
                    $bookableAvailability->bookable,
                    $bookableAvailability->starts_at,
                    $bookableAvailability->ends_at
                );
                $price = $formula['total_price'];
                $currency = $formula['currency'];
                $quantity = $formula['total_units'];
            } else {
                $price = $bookableAvailability->price;
                $formula = $bookableAvailability->formula;
                $currency = $bookableAvailability->currency;
                $quantity = $bookableAvailability->quantity;
            }
            $bookableAvailability->currency = $currency;
            $bookableAvailability->formula = $formula;
            $bookableAvailability->price = $price;
            $bookableAvailability->quantity = $quantity;
            $bookableAvailability->total_paid = 0;
        });
    }
}
