<?php

return [
    'success'                   => 'Data has been saved successfully',
    'update'                    => 'Data has been Updated successfully',
    'delete'                    => 'Data has been Deleted successfully',
    'error'                     => "Oops! Something went wrong!",
    "error_title"               => "Error!",
    'are_you_sure'              => 'Are you sure?',
    'warning_message'           => "You won't be able to revert this!",
    'exists'                    => 'This field already exists',
    'upload_csv'                => 'Please upload CSV/Excel file',
    'invalid_table'             => 'Invalid Table Name',
    'import'                    => 'Data has been imported successfully',
    "max_files"                 => "You can upload only one file at a time",
    "not_found"                 => "Oops! No Data Found !",
    "internal_server_error"     => "Oops! Something went wrong!",
    "order" => [
        'accepted'              => 'Order has been accepted successfully',
        'canceled'              => 'Order has been canceled successfully',
        'assigned'              => 'Order has been assigned successfully',
        'pickedup'              => 'Order has been picked up successfully',
        'delivered'             => 'Order has been delivered successfully',
    ],
    "safe" => [
        'has_transactions'              => 'You cant delete this Safe Because it has Transactions.',
        'withdraw_failed_no_money'       =>"You Cant withdraw from this Safe it doesnt have Enough Money"
    ],
    "payment"=>[
        "has_been_collected"=>"Payment has already been collected !",
    ]
];
