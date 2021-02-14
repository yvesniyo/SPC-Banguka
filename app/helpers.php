
<?php

use App\Settings\GeneralSettings;

function boolStatus()
{
    return [
        "Active" => "Active",
        "Inactive" => "Inactive",
    ];
}


function discountType()
{
    return [
        "Percent" => "Percent",
        "Fixed" => "Fixed",
    ];
}

function timeRequiredType()
{
    return [
        "Days" => "Days",
        "Weeks" => "Weeks",
        "Months" => "Months"
    ];
}


function settings()
{
    return app(GeneralSettings::class);
}



function status(string $status)
{

    return [
        "pending" =>   '<span class="text-uppercase small border border-warning text-warning badge-pill">Pending</span>',
        'completed' => '<span class="text-uppercase small border border-success text-success badge-pill">Completed</span>',
        "cancelled" => '<span class="text-uppercase small border border-danger  text-danger  badge-pill">Cancelled</span>',
        "inprogress" => '<span class="text-uppercase small border border-primary text-primary badge-pill">In Progress</span>',
    ][$status];
}


function format_money($money)
{
    if (!$money) {
        return "0.00 Rwf";
    }

    $money = number_format($money, 2);

    if (strpos($money, '-') !== false) {
        $formatted = explode('-', $money);
        return "-$formatted[1] Rwf";
    }

    return "$money Rwf";
}


function slugify($text)
{
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}
