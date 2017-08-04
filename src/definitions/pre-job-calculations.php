<?php

return array (
  'columns' => 
  array (
    'pre_job_calculation_name' => 'name',
    'pre_job_calculation_quotation' => 'quotation',
    'pre_job_calculation_status' => 'status',
  ),
  'ajax' => 
  array (
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'latest_revision_name',
        'column' => 'latest_revision_name',
      ),
      1 => 
      array (
        'data' => 'quotation_number',
        'column' => 'quotation_number',
      ),
      2 => 
      array (
        'data' => 'latest_revision_status',
        'column' => 'latest_revision_status',
      ),
    ),
    'url' => 'pre-job-calculation.data',
  ),
);