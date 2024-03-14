<?php

use CRM_Testdata_ExtensionUtil as E;
$extension = civicrm_api3('extension', 'get', ['key' => 'civi_pledge', 'sequential' => 1])['values'];
if (empty($extension[0]) || $extension[0]['status'] !== 'installed') {
  return [];
}
return [
  [
    'name' => 'CustomGroup_Pledge',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Pledge',
        'title' => E::ts('Pledge'),
        'extends' => 'Pledge',
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 12,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-02-22 19:32:33',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Pledge_CustomField_Pledge_Field_File',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Pledge',
        'name' => 'Pledge_Field_File',
        'label' => E::ts('Pledge Field File'),
        'data_type' => 'File',
        'html_type' => 'File',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'pledge_field_file_70',
      ],
      'match' => [
        'name',
        'custom_group_id',
      ],
    ],
  ],
];
