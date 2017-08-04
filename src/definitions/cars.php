<?php

return array (
  'columns' => 
  array (
    'car_license_plate' => 'license_plate',
    'car_brand' => 'brand',
  ),
  'ajax' => 
  array (
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'license_plate',
        'name' => 'license_plate',
      ),
      1 => 
      array (
        'data' => 'brand.name',
        'name' => 'brand.name',
      ),
    ),
    'url' => 'cars.data',
  ),
);