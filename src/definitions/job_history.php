<?php

return array (
  'columns' => 
  array (
    'number' => 'number',
    'address' => 'location',
    'start_datetime' => 'start',
    'end_datetime' => 'end',
    'no_days' => 'no_days',
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
        'data' => 'address',
        'name' => 'address',
      ),
      2 => 
      array (
        'data' => 'start_datetime',
        'name' => 'start_datetime',
      ),
      3 => 
      array (
        'data' => 'end_datetime',
        'name' => 'end_datetime',
      ),
      4 => 
      array (
        'data' => 'no_days',
        'name' => 'no_days',
      ),
    ),
    'url' => 'equipment.job-history',
  ),
  'order' => 
  array (
    0 => 
    array (
      0 => 2,
      1 => 'desc',
    ),
  ),
);