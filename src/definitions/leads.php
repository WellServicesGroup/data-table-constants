<?php

return array (
  'columns' => 
  array (
    'lead_name' => 'name',
    'lead_location' => 'location',
    'lead_contact' => 'contact',
    'lead_value' => 'value',
  ),
  'ajax' => 
  array (
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'name',
        'name' => 'name',
      ),
      1 => 
      array (
        'data' => 'location',
        'name' => 'location',
      ),
      2 => 
      array (
        'data' => 'contact',
        'name' => 'contact',
      ),
      3 => 
      array (
        'data' => 'value',
        'name' => 'value',
      ),
    ),
    'url' => 'leads.data',
  ),
);