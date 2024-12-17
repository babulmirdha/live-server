<?php
// Set the content type to application/json
header('Content-Type: application/json');

// Create an associative array with sample data
$response = [
    'status' => 'success',
    'message' => 'Data retrieved successfully.',
    'data' => [
        [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john.doe@example.com'
        ],
        [
            'id' => 2,
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com'
        ],
        [
            'id' => 3,
            'name' => 'Alice Johnson',
            'email' => 'alice.johnson@example.com'
        ],
        [
            'id' => 4,
            'name' => 'Bob Brown',
            'email' => 'bob.brown@example.com'
        ],
        [
            'id' => 5,
            'name' => 'Charlie Davis',
            'email' => 'charlie.davis@example.com'
        ]
    ]
];

// Encode the array into a JSON string
$jsonResponse = json_encode($response);

// Send the JSON response
echo $jsonResponse;
?>
