<?php
use CRM_Testdata_ExtensionUtil as E;

return [
  [
    'name' => 'CustomGroup_OrganizationData',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'OrganizationData',
        'title' => E::ts('OrganizationData'),
        'extends' => 'Organization',
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 12,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-03-02 04:59:04',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_OrganizationData_CustomField_Terms_of_service',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'OrganizationData',
        'name' => 'Terms_of_service',
        'label' => E::ts('Terms of service'),
        'data_type' => 'Link',
        'html_type' => 'Link',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'terms_of_service_70',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
];
