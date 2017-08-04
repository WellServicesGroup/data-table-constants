<?php

namespace WellServicesGroup\DataTableConstants;

use Illuminate\Support\Facades\URL;

class DataTableConstants
{
    protected $tableDefinition = [
        'action-points' => [
            'columns' => [
                'action_point_number' => 'name',
                'action_point_description' => 'description',
                'action_point_current_status' => 'current_status',
                'action_point_job_number' => 'job_number',
                'action_point_customer' => 'customer',
                'action_point_job_location' => 'job_location',
                'action_point_type' => 'type',
                'action_point_due_date' => 'due_date',
                'action_point_groups' => 'tags',
            ],
            'ajax' => [
                'columns' => [
                    [
                        'data' => 'name',
                        'name' => 'name',
                    ],
                    [
                        'data' => 'description',
                        'name' => 'description',
                        'className' => 'dynamic-table__description',
                    ],
                    [
                        'data' => 'current_status',
                        'name' => 'current_status',
                    ],
                    [
                        'data' => 'job_number',
                        'name' => 'job_number',
                    ],
                    [
                        'data' => 'customer',
                        'name' => 'customer',
                    ],
                    [
                        'data' => 'job_location',
                        'name' => 'job_location',
                    ],
                    [
                        'data' => 'type',
                        'name' => 'type',
                    ],
                    [
                        'data' => 'due_date',
                        'name' => 'due_date',
                        'className' => 'dynamic-table__date',
                    ],
                    [
                        'data' => 'groups',
                        'name' => 'groups',
                    ],
                ],
                'url' => 'action-points.data',
            ],
        ],
        'action-point-groups' => [
            'columns' => [
                'action_point_group_name' => 'name',
            ],
        ],
        'members' => [
            'columns' => [
                'member_name' => 'name',
            ],
        ],
        'addresses' => [
            'columns' => [
                'address_name' => 'name',
                'address_type' => 'type',
                'address_country' => 'country',
                'address_state' => 'state',
                'address_city' => 'city',
                'address_street' => 'street',
                'address_po_box' => 'po_box',
                'address_postal_code' => 'postal_code',
                'address_phone_number' => 'phone_number',
            ],
        ],
        'broadcasts' => [
            'columns' => [
                'broadcasts_description' => 'description',
                'broadcasts_from' => 'from',
                'broadcasts_to' => 'to',
                'broadcasts_creator' => 'creator',
            ],
        ],
        'customers' => [
            'columns' => [
                'customer_name' => 'name',
                'customer_assigned_to' => 'assigned_to',
                'customer_website' => 'website',
                'customer_industry' => 'customer_industry',
            ],
        ],
        'customer-contacts' => [
            'columns' => [
                'contact_nickname' => 'first_name',
                'contact_last_name' => 'last_name',
                'contact_department' => 'department',
                'contact_job_title' => 'job_title',
                'contact_assignees' => 'assigned_to',
            ],
        ],
        'contacts' => [
            'columns' => [
                'contact_nickname' => 'first_name',
                'contact_last_name' => 'last_name',
                'contact_customer' => 'customer',
                'contact_assignees' => 'assigned_to',
            ],
        ],
        'chemicals' => [
            'columns' => [
                'chemical_name' => 'name',
                'chemical_alias' => 'alias',
                'chemical_un_code' => 'un_code',
            ],
        ],
        'chemical-descriptions' => [
            'columns' => [
                'chemical_description_language' => 'language',
                'chemical_description_description' => 'description',
            ],
        ],
        'leads' => [
            'columns' => [
                'lead_name' => 'name',
                'lead_location' => 'location',
                'lead_contact' => 'contact',
                'lead_value' => 'value',
            ],
            'ajax' => [
                'columns' => [
                    [
                        'data' => 'name',
                        'name' => 'name',
                    ],
                    [
                        'data' => 'location',
                        'name' => 'location',
                    ],
                    [
                        'data' => 'contact',
                        'name' => 'contact',
                    ],
                    [
                        'data' => 'value',
                        'name' => 'value',
                    ],
                ],
                'url' => 'leads.data',
            ],
        ],
        'quotations' => [
            'columns' => [
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
            ],
            'ajax' => [
                'columns' => [
                    [
                        'data' => 'number',
                        'name' => 'number',
                    ],
                    [
                        'data' => 'name',
                        'name' => 'name',
                    ],
                    [
                        'data' => 'customer',
                        'name' => 'customer',
                    ],
                    [
                        'data' => 'status',
                        'name' => 'status',
                    ],
                    [
                        'data' => 'job',
                        'name' => 'job',
                    ],
                    [
                        'data' => 'due_date',
                        'name' => 'due_date',
                    ],
                    [
                        'data' => 'operational_start_date',
                        'name' => 'operational_start_date',
                    ],
                    [
                        'data' => 'operational_end_date',
                        'name' => 'operational_end_date',
                    ],
                    [
                        'data' => 'go_probability',
                        'name' => 'go_probability',
                    ],
                    [
                        'data' => 'get_probability',
                        'name' => 'get_probability',
                    ],
                    [
                        'data' => 'go_get',
                        'name' => 'go_get',
                    ],
                ],
                'url' => 'quotations.data',
            ],
        ],
        'jobs' => [
            'columns' => [
                'job_number' => 'number',
                'job_customer' => 'customer_name',
                'job_location' => 'location',
                'job_operational_start_date' => 'operational_start_date',
                'job_operational_end_data' => 'operational_end_date',
                'job_progress' => 'progress',
//                'job_personnel' => 'personnel',
//                'job_equipment' => 'equipment',
            ],
            'ajax' => [
                'columns' => [
                    [
                        'data' => 'number',
                        'name' => 'number',
                    ],
                    [
                        'data' => 'customer_name',
                        'name' => 'customer_name',
                    ],
                    [
                        'data' => 'location',
                        'name' => 'location',
                    ],
                    [
                        'data' => 'operational_start_date',
                        'name' => 'operational_start_date',
                    ],
                    [
                        'data' => 'operational_end_date',
                        'name' => 'operational_end_date',
                    ],
                    [
                        'data' => 'progress',
                        'name' => 'progress',
                    ],
//                    [
//                        'data' => 'planned_employee_names',
//                        'name' => 'planned_employee_names',
//                    ],
//                    [
//                        'data' => 'planned_equipment_names',
//                        'name' => 'planned_equipment_names',
//                    ],
                ],
                'url' => 'jobs.data',
            ],
        ],
        'job_history' => [
            'columns' => [
                'number' => 'number',
                'address' => 'location',
                'start_datetime' => 'start',
                'end_datetime' => 'end',
                'no_days' => 'no_days',
            ],
            'ajax' => [
                'columns' => [
                    [
                        'data' => 'number',
                        'name' => 'number',
                    ],
                    [
                        'data' => 'address',
                        'name' => 'address',
                    ],
                    [
                        'data' => 'start_datetime',
                        'name' => 'start_datetime',
                    ],
                    [
                        'data' => 'end_datetime',
                        'name' => 'end_datetime',
                    ],
                    [
                        'data' => 'no_days',
                        'name' => 'no_days',
                    ]
                ],
                'url' => 'equipment.job-history',
            ],
            'order' => [
                [
                    2,
                    'desc',
                ],
            ],
        ],
        'cars' => [
            'columns' => [
                'car_license_plate' => 'license_plate',
                'car_brand' => 'brand',
            ],
            'ajax' => [
                'columns' => [
                    [
                        'data' => 'license_plate',
                        'name' => 'license_plate',
                    ],
                    [
                        'data' => 'brand.name',
                        'name' => 'brand.name',
                    ],
                ],
                'url' => 'cars.data',
            ],
        ],
        'trucks' => [
            'columns' => [
                'truck_license_plate' => 'license_plate',
                'truck_brand' => 'brand',
            ],
            'ajax' => [
                'columns' => [
                    [
                        'data' => 'license_plate',
                        'name' => 'license_plate',
                    ],
                    [
                        'data' => 'brand.name',
                        'name' => 'brand.name',
                    ],
                ],
                'url' => 'trucks.data',
            ],
        ],
        'trailers' => [
            'columns' => [
                'trailer_license_plate' => 'license_plate',
                'trailer_brand' => 'brand',
            ],
            'ajax' => [
                'columns' => [
                    [
                        'data' => 'license_plate',
                        'name' => 'license_plate',
                    ],
                    [
                        'data' => 'brand.name',
                        'name' => 'brand.name',
                    ],
                ],
                'url' => 'trailers.data',
            ],
        ],
        'equipment' => [
            'columns' => [
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
            ],
            'ajax' => [
                'columns' => [
                    [
                        'data' => 'prefixAndNumber',
                        'name' => 'prefixAndNumber',
                    ],
                    [
                        'data' => 'prefix.equipment_article.name',
                        'name' => 'equipment_articles.name',
                    ],
                    [
                        'data' => 'description',
                        'name' => 'description',
                    ],
                    [
                        'data' => 'dimensions_transport',
                        'name' => 'dimensions_transport',
                    ],
                    [
                        'data' => 'dimensions_operational',
                        'name' => 'dimensions_operational',
                    ],
                    [
                        'data' => 'equipment_manufacturer.name',
                        'name' => 'equipmentManufacturer.name',
                    ],
                    [
                        'data' => 'serial_number',
                        'name' => 'serial_number',
                    ],
                    [
                        'data' => 'equipment_owner.name',
                        'name' => 'equipmentOwner.name',
                    ],
                    [
                        'data' => 'equipment_status.name',
                        'name' => 'equipmentStatus.name',
                    ],
                    [
                        'data' => 'next_expiry_date',
                        'name' => 'next_expiry_date',
                    ],
                    [
                        'data' => 'completed',
                        'name' => 'completed',
                    ],
                ],
                'url' => 'equipment.data',
            ],
        ],
        'equipment-categories' => [
            'columns' => [
                'equipment_category_name' => 'name',
                'equipment_category_number_of_types' => 'number_of_types',
            ],
        ],
        'equipment-standards' => [
            'columns' => [
                'equipment_standard_name' => 'name',
            ],
        ],
        'equipment-manufacturers' => [
            'columns' => [
                'equipment_manufacturer_name' => 'name',
            ],
        ],
        'equipment-articles' => [
            'columns' => [
                'equipment_article_name' => 'name',
                'equipment_article_prefixes' => 'prefixes',
                'equipment_article_hs_code' => 'hs_code',
                'equipment_article_plannable' => 'plannable',
                'equipment_article_show_on_planning_overview' => 'show_on_planning_overview',
                'equipment_article_number_of_items' => 'number_of_items',
            ],
        ],
        'checklists' => [
            'columns' => [
                'checklist_name' => 'name',
                'checklist_revision' => 'revision',
                'checklist_item_quantity' => 'item_quantity',
                'checklist_status' => 'status',
            ],
        ],
        'checklist-revisions' => [
            'columns' => [
                'checklist_revision' => 'revision',
                'checklist_name' => 'name',
                'checklist_item_quantity' => 'item_quantity',
                'checklist_status' => 'status',
            ],
        ],
        'checklist-categories' => [
            'columns' => [
                'checklist_category_name' => 'name',
                'checklist_category_checklist_type' => 'checklist_type',
            ],
        ],
        'checklist-items' => [
            'columns' => [
                'checklist_item_name' => 'name',
                'checklist_item_checklist_type' => 'checklist_type',
            ],
        ],
        'certificates' => [
            'columns' => [
                'certificate_item' => 'item',
                'certificate_code' => 'certificate_code',
                'certificate_name' => 'certificate_name',
                'certificate_last_inspection_date' => 'last_inspection_date',
                'certificate_valid_period_in_days' => 'valid_period_in_days',
                'certificate_next_inspection_date' => 'next_inspection_date',
                'certificate_due_in_days' => 'due_in_days',
                'certificate_file' => 'certificate_file',
                'upload' => 'upload',
            ],
            'ajax' => [
                'columns' => [
                    [
                        'data' => 'item',
                        'name' => 'item',
                    ],
                    [
                        'data' => 'code',
                        'name' => 'code',
                    ],
                    [
                        'data' => 'name',
                        'name' => 'name',
                    ],
                    [
                        'data' => 'last_inspection_date',
                        'name' => 'last_inspection_date',
                    ],
                    [
                        'data' => 'valid_period_in_days',
                        'name' => 'valid_period_in_days',
                    ],
                    [
                        'data' => 'next_inspection_date',
                        'name' => 'next_inspection_date',
                    ],
                    [
                        'data' => 'due_in_days',
                        'name' => 'due_in_days',
                    ],
                    [
                        'data' => 'files',
                        'name' => 'files',
                    ],
                    [
                        'data' => 'upload',
                        'name' => 'upload',
                    ],
                ],
                'url' => 'certificates.data',
            ],
        ],
        'certificate-types' => [
            'columns' => [
                'certificate_code' => 'code',
                'certificate_type_name' => 'name',
                'valid_period_in_days' => 'valid_period_in_days',
                'notification_period_in_days' => 'notification_period_in_days',
                'shore_type' => 'shore_type',
                'used_for_equipment' => 'used_for_equipment',
                'used_for_employees' => 'used_for_employees',
                'used_for_cars' => 'used_for_cars',
                'used_for_trucks' => 'used_for_trucks',
                'used_for_trailers' => 'used_for_trailers',
            ],
        ],
        'certificate-type-exceptions' => [
            'columns' => [
                'certificate_type' => 'certificate_type',
                'country' => 'country',
                'valid_period_in_days' => 'valid_period_in_days',
                'notification_period_in_days' => 'notification_period_in_days',
                'shore_type' => 'shore_type',
                'not_applicable' => 'not_applicable',
            ],
        ],
        'files' => [
            'columns' => [
                'file_options' => 'options',
                'file_filename' => 'filename',
                'file_description' => 'description',
                'file_uploaded_by' => 'uploaded_by',
                'file_uploaded_at' => 'uploaded_at',
            ],
        ],
        'services' => [
            'columns' => [
                'service_name' => 'name',
            ],
        ],
        'service-lines' => [
            'columns' => [
                'service_line_name' => 'name',
                'service_line_operational' => 'operational',
                'service_line_job_number_prefix' => 'job_number_prefix',
            ],
        ],
        'price-books' => [
            'columns' => [
                'price_book_name' => 'name',
                'price_book_service_line' => 'service_line',
                'price_book_customer' => 'customer',
                'price_book_status' => 'status',
                'price_book_currency' => 'currency',
                'price_book_valid_from' => 'valid_from',
                'price_book_valid_till' => 'valid_till',
            ],
        ],
        'pre-job-calculations' => [
            'columns' => [
                'pre_job_calculation_name' => 'name',
                'pre_job_calculation_quotation' => 'quotation',
                'pre_job_calculation_status' => 'status',
            ],
            'ajax' => [
                'columns' => [
                    [
                        'data' => 'latest_revision_name',
                        'column' => 'latest_revision_name',
                    ],
                    [
                        'data' => 'quotation_number',
                        'column' => 'quotation_number',
                    ],
                    [
                        'data' => 'latest_revision_status',
                        'column' => 'latest_revision_status',
                    ],
                ],
                'url' => 'pre-job-calculation.data',
            ],
        ],
        'branches' => [
            'columns' => [
                'branch_name' => 'name',
                'branch_code' => 'code',
                'branch_country' => 'country',
            ],
        ],
        'warehouses' => [
            'columns' => [
                'warehouse_name' => 'name',
                'warehouse_code' => 'code',
                'warehouse_branch' => 'branch',
            ],
        ],
        'consumables' => [
            'columns' => [
                'consumable_name' => 'name',
                'consumable_code' => 'code',
                'consumable_actual_stock' => 'actual_stock',
                'consumable_min_stock' => 'min_stock',
                'consumable_signal_stock' => 'signal_stock',
                'consumable_max_stock' => 'max_stock',
                'consumable_category' => 'consumable_category',
                'consumable_subcategory' => 'consumable_subcategory',
                'consumable_warehouse' => 'warehouse',
            ],
        ],
        'job-consumables' => [
            'columns' => [
                'planned_consumable_amount' => 'amount',
                'planned_consumable_name' => 'name',
                'planned_consumable_code' => 'code',
                'planned_consumable_category' => 'consumable_category',
                'planned_consumable_subcategory' => 'consumable_subcategory',
            ],
        ],
        'employees' => [
            'columns' => [
                'planned_employee_name' => 'name',
                'planned_employee_start' => 'start',
                'planned_employee_end' => 'end',
                'planned_employee_shift' => 'shift_type',
            ],
        ],
        'mutations' => [
            'columns' => [
                'mutation_consumable' => 'consumable',
                'mutation_amount' => 'amount',
                'mutation_type' => 'mutation_type',
                'mutation_supplier' => 'supplier',
                'mutation_code_supplier' => 'code_supplier',
                'mutation_price' => 'price',
                'mutation_job' => 'job',
                'mutation_date' => 'date',
            ],
        ],
        'users' => [
            'columns' => [
                'user_username' => 'username',
                'user_nickname' => 'nickname',
                'user_last_name' => 'last_name',
                'user_email' => 'email',
                'user_activated' => 'activated',
                'user_last_login' => 'last_login',
            ],
        ],
        'equipment-combos' => [
            'columns' => [
                'equipment_combo_name' => 'name',
                'equipment_combo_equipment_article' => 'equipment_article',
            ],
        ],
        'transporters' => [
            'columns' => [
                'transporter_name' => 'transporter_name',
                'transporter_street' => 'street',
                'transporter_postal_code' => 'postal_code',
                'transporter_city' => 'city',
            ],
        ],
        'load-out-lists' => [
            'columns' => [
                'load_out_list_job_number' => 'job_number',
                'load_out_list_serial_number' => 'serial_number',
                'load_out_list_operational_start_date' => 'operational_start_date',
                'load_out_list_operational_end_date' => 'operational_end_date',
                'load_out_list_created_at' => 'created_at',
            ],
        ],
        'load-out-lists-external' => [
            'columns' => [
                'external_load_out_list_job_number' => 'job_number',
                'external_load_out_list_serial_number' => 'serial_number',
                'external_load_out_list_operational_start_date' => 'operational_start_date',
                'external_load_out_list_operational_end_date' => 'operational_end_date',
                'external_load_out_list_created_at' => 'created_at',
            ],
        ],
        'transports' => [
            'columns' => [
                'transport_transporter' => 'transporter',
                'transport_job_number' => 'job_number',
                'transport_planned_pickup_datetime' => 'planned_pickup_datetime',
                'transport_planned_drop_off_datetime' => 'planned_drop_off_datetime',
                'transport_comment' => 'comment',
            ],
        ],
        'employee-articles' => [
            'columns' => [
                'employee_name' => 'name',
            ],
        ],
        'transport-articles' => [
            'columns' => [
                'transport_article_name' => 'name',
            ],
        ],
        'pre-job-calculations-history' => [
            'columns' => [
                'pre_job_calculation_history_date' => 'date',
                'pre_job_calculation_history_user' => 'changed_by',
                'pre_job_calculation_history_action' => 'action',
                'pre_job_calculation_history_type' => 'type',
                'pre_job_calculation_history_name' => 'name',
                'pre_job_calculation_history_comment' => 'comment',
            ],
        ],
        'equipment-in-load-out-list' => [
            'columns' => [
                'load_out_list_job_open' => 'empty_string',
                'load_out_list_job_asset_number' => 'asset_number',
                'load_out_list_job_type' => 'type',
                'load_out_list_job_planned_from' => 'planned_from',
                'load_out_list_job_planned_till' => 'planned_till',
                'load_out_list_job_date_returned' => 'date_returned',
                'load_out_list_job_checklist' => 'checklist',
            ],
        ],
        'equipment-not-load-out-list' => [
            'columns' => [
                'load_out_list_job_asset_number' => 'asset_number',
                'load_out_list_job_type' => 'type',
                'load_out_list_job_planned_from' => 'planned_from',
                'load_out_list_job_planned_till' => 'planned_till',
                'load_out_list_job_date_returned' => 'date_returned',
            ],
        ],
        'price-book-revisions' => [
            'columns' => [
                'price_book_revision_revision' => 'revision',
                'price_book_revision_name' => 'name',
                'price_book_revision_service_line' => 'service_line',
                'price_book_revision_status' => 'status',
                'price_book_revision_currency' => 'currency',
                'price_book_revision_customer' => 'customer',
                'price_book_revision_valid_from' => 'valid_from',
                'price_book_revision_valid_till' => 'valid_till',
                'price_book_revision_created_by' => 'created_by',
                'price_book_revision_created_at' => 'created_at',
            ],
        ],
        'test-results' => [
            'columns' => [
                'test_results_datetime' => 'date',
                'test_results_passed' => 'passed',
                'test_results_passed_tests' => 'passed_tests',
                'test_results_failed_tests' => 'failed_tests',
            ],
            'order' => [
                [
                    0,
                    'desc',
                ],
            ],
        ],
        'forum-categories' => [
            'columns' => [
                'forum_category_name' => 'name',
                'forum_category_description' => 'description',
                'forum_category_subcategories' => 'subcategories',
                'forum_category_threads' => 'threads',
                'forum_category_posts' => 'posts',
            ],
        ],
        'forum-threads' => [
            'columns' => [
                'forum_thread_subject' => 'subject',
                'forum_thread_created_by' => 'created_by',
                'forum_thread_created_at' => 'created_at',
                'forum_thread_posts' => 'posts',
                'forum_thread_latest_activity' => 'latest_activity',
            ],
            'order' => [
                [
                    4,
                    'desc',
                ],
            ],
        ],
        'transport-orders' => [
            'columns' => [
                'transport_order_serial_number' => 'serial_number',
                'transport_order_load_out_list' => 'load_out_list',
                'transport_order_departure' => 'departure',
                'transport_order_external' => 'external',
                'transport_order_pick_up' => 'pick_up_location',
                'transport_order_drop_off' => 'drop_off_location',
                'transport_order_transporter' => 'transporter',
            ],
        ],
        'base-plannables' => [
            'columns' => [
                'base_plannables_name' => 'name',
                'base_plannables_function' => 'function',
            ],
        ],
        'jobs-require-action' => [
            'columns' => [
                'job_require_action_job_number' => 'number',
                'job_require_action_operational_start_date' => 'start_date',
                'job_require_action_operational_end_date' => 'end_date',
            ],
        ],
    ];

    /**
     * @param $tableName
     * @return array
     */
    public static function getColumnNames($tableName = null)
    {
        if (array_key_exists($tableName, self::$tableDefinition)) {
            return self::$tableDefinition[$tableName]['columns'];
        }

        return array_reduce(self::$tableDefinition, function ($result, $table) {
            $result = array_merge($result, array_keys($table['columns']));
            return $result;
        }, []);
    }

    /**
     * @param $tableName
     * @return array
     */
    public static function getOrder($tableName)
    {
        if (array_key_exists($tableName, self::$tableDefinition)
            && array_key_exists('order', self::$tableDefinition[$tableName])
        ) {
            return self::$tableDefinition[$tableName]['order'];
        }

        return [
            [
                0,
                'asc',
            ],
        ];
    }

    /**
     * @param $tableName
     * @return bool
     */
    public static function isAjax($tableName)
    {
        return array_key_exists($tableName, self::$tableDefinition)
            && array_key_exists('ajax', self::$tableDefinition[$tableName])
            && array_key_exists('url', self::$tableDefinition[$tableName]['ajax']);
    }

    /**
     * @param $tableName
     * @return array
     */
    public static function getAjaxColumns($tableName)
    {
        if (self::isAjax($tableName)
            && key_exists('columns', self::$tableDefinition[$tableName]['ajax'])
        ) {
            return self::$tableDefinition[$tableName]['ajax']['columns'];
        }

        return [];
    }

    /**
     * @param        $tableName
     * @param string $type
     * @return null
     */
    public static function getAjaxUrl($tableName, $type = 'route')
    {
        if (self::isAjax($tableName)
            && key_exists('url', self::$tableDefinition[$tableName]['ajax'])
        ) {
            $url = self::$tableDefinition[$tableName]['ajax']['url'];

            switch ($type) {
                case 'route':
                    return URL::route($url);
                    break;
                case 'string':
                    return $url;
                    break;
            }
        }

        return null;
    }
}
