<?php

header('Content-Type: application/json'); // Ensure correct header is sent

$employeeList = [
    [
        'emp_id' => 1,
        'emp_name' => "Erica Anne B. Cero",
        'position' => "Staff",
        'age' => 25,
        'gender' => "Female",
    ],
    // Add more employees here as needed
];

echo json_encode($employeeList);
