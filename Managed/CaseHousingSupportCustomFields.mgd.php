<?php
use CRM_Testdata_ExtensionUtil as E;

$extension = civicrm_api3('extension', 'get', ['key' => 'civi_case', 'sequential' => 1])['values'];
if (empty($extension[0]) || $extension[0]['status'] !== 'installed') {
  return [];
}

return [
  [
    'name' => 'CustomGroup_Case_Housing_Support',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Case_Housing_Support',
        'title' => E::ts('Case Housing Support'),
        'extends' => 'Case',
        'extends_entity_column_value' => [
          '1',
        ],
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 13,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-03-02 05:01:46',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Case_Housing_Support_CustomField_Number_of_bedrooms_required',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Case_Housing_Support',
        'name' => 'Number_of_bedrooms_required',
        'label' => E::ts('Number of bedrooms required'),
        'data_type' => 'Int',
        'html_type' => 'Text',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'number_of_bedrooms_required_71',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
];
