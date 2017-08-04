<?php

return array (
  'columns' => 
  array (
    'quotation_quote_no' => 'quote_no',
    'quotation_name' => 'name',
    'quotation_customer' => 'customer',
    'quotation_status' => 'status',
    'quotation_job' => 'job',
    'quotation_due_date' => 'due_date',
    'quotation_operational_start_date' => 'operational_start_date',
    'quotation_operational_end_date' => 'operational_end_date',
    'quotation_go' => 'go',
    'quotation_get' => 'get',
    'quotation_go_get_combined' => 'go_get_combined',
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
        'data' => 'name',
        'name' => 'name',
      ),
      2 => 
      array (
        'data' => 'customer',
        'name' => 'customer',
      ),
      3 => 
      array (
        'data' => 'status',
        'name' => 'status',
      ),
      4 => 
      array (
        'data' => 'job',
        'name' => 'job',
      ),
      5 => 
      array (
        'data' => 'due_date',
        'name' => 'due_date',
      ),
      6 => 
      array (
        'data' => 'operational_start_date',
        'name' => 'operational_start_date',
      ),
      7 => 
      array (
        'data' => 'operational_end_date',
        'name' => 'operational_end_date',
      ),
      8 => 
      array (
        'data' => 'go_probability',
        'name' => 'go_probability',
      ),
      9 => 
      array (
        'data' => 'get_probability',
        'name' => 'get_probability',
      ),
      10 => 
      array (
        'data' => 'go_get',
        'name' => 'go_get',
      ),
    ),
    'url' => 'quotations.data',
  ),
);