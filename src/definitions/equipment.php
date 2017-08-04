<?php

return array (
  'columns' => 
  array (
    'equipment_asset_number' => 'equipment_number',
    'equipment_equipment_type' => 'type',
    'equipment_description' => 'description',
    'equipment_dimensions_transport' => 'dimensions_transport',
    'equipment_dimensions_operational' => 'dimensions_operational',
    'equipment_manufacturer' => 'equipment_manufacturer',
    'equipment_serial_number' => 'serial_number',
    'equipment_equipment_owner' => 'equipment_owner',
    'equipment_status' => 'status',
    'equipment_next_expiry_date' => 'next_expiry_date',
    'equipment_completed' => 'completed',
  ),
  'ajax' => 
  array (
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'prefixAndNumber',
        'name' => 'prefixAndNumber',
      ),
      1 => 
      array (
        'data' => 'prefix.equipment_article.name',
        'name' => 'equipment_articles.name',
      ),
      2 => 
      array (
        'data' => 'description',
        'name' => 'description',
      ),
      3 => 
      array (
        'data' => 'dimensions_transport',
        'name' => 'dimensions_transport',
      ),
      4 => 
      array (
        'data' => 'dimensions_operational',
        'name' => 'dimensions_operational',
      ),
      5 => 
      array (
        'data' => 'equipment_manufacturer.name',
        'name' => 'equipmentManufacturer.name',
      ),
      6 => 
      array (
        'data' => 'serial_number',
        'name' => 'serial_number',
      ),
      7 => 
      array (
        'data' => 'equipment_owner.name',
        'name' => 'equipmentOwner.name',
      ),
      8 => 
      array (
        'data' => 'equipment_status.name',
        'name' => 'equipmentStatus.name',
      ),
      9 => 
      array (
        'data' => 'next_expiry_date',
        'name' => 'next_expiry_date',
      ),
      10 => 
      array (
        'data' => 'completed',
        'name' => 'completed',
      ),
    ),
    'url' => 'equipment.data',
  ),
);