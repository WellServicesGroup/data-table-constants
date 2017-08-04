<?php

return array (
  'columns' => 
  array (
    'trailer_license_plate' => 'license_plate',
    'trailer_brand' => 'brand',
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
    'url' => 'trailers.data',
  ),
);