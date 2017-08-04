<?php

return array (
  'columns' => 
  array (
    'job_number' => 'number',
    'job_customer' => 'customer_name',
    'job_location' => 'location',
    'job_operational_start_date' => 'operational_start_date',
    'job_operational_end_data' => 'operational_end_date',
    'job_progress' => 'progress',
  ),
  'ajax' => 
  array (
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'number',
        'name' => 'number',
      ),
      1 => 
      array (
        'data' => 'customer_name',
        'name' => 'customer_name',
      ),
      2 => 
      array (
        'data' => 'location',
        'name' => 'location',
      ),
      3 => 
      array (
        'data' => 'operational_start_date',
        'name' => 'operational_start_date',
      ),
      4 => 
      array (
        'data' => 'operational_end_date',
        'name' => 'operational_end_date',
      ),
      5 => 
      array (
        'data' => 'progress',
        'name' => 'progress',
      ),
    ),
    'url' => 'jobs.data',
  ),
);