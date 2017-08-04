<?php

return array (
  'columns' => 
  array (
    'certificate_item' => 'item',
    'certificate_code' => 'certificate_code',
    'certificate_name' => 'certificate_name',
    'certificate_last_inspection_date' => 'last_inspection_date',
    'certificate_valid_period_in_days' => 'valid_period_in_days',
    'certificate_next_inspection_date' => 'next_inspection_date',
    'certificate_due_in_days' => 'due_in_days',
    'certificate_file' => 'certificate_file',
    'upload' => 'upload',
  ),
  'ajax' => 
  array (
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'item',
        'name' => 'item',
      ),
      1 => 
      array (
        'data' => 'code',
        'name' => 'code',
      ),
      2 => 
      array (
        'data' => 'name',
        'name' => 'name',
      ),
      3 => 
      array (
        'data' => 'last_inspection_date',
        'name' => 'last_inspection_date',
      ),
      4 => 
      array (
        'data' => 'valid_period_in_days',
        'name' => 'valid_period_in_days',
      ),
      5 => 
      array (
        'data' => 'next_inspection_date',
        'name' => 'next_inspection_date',
      ),
      6 => 
      array (
        'data' => 'due_in_days',
        'name' => 'due_in_days',
      ),
      7 => 
      array (
        'data' => 'files',
        'name' => 'files',
      ),
      8 => 
      array (
        'data' => 'upload',
        'name' => 'upload',
      ),
    ),
    'url' => 'certificates.data',
  ),
);