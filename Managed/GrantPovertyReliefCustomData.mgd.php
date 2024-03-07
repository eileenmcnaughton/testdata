<?php


use CRM_Testdata_ExtensionUtil as E;

$extension = civicrm_api3('extension', 'get', ['key' => 'civi_grant', 'sequential' => 1])['values'];
if (empty($extension[0]) || $extension[0]['status'] !== 'installed') {
  return [];
}
return [
  [
    'name' => 'CustomGroup_GrantsPovertyRelief',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'GrantsPovertyRelief',
        'title' => E::ts('GrantsPovertyRelief'),
        'extends' => 'Grant',
        'extends_entity_column_value' => [
          '2',
        ],
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 18,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-03-07 03:42:44',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_GrantsPovertyRelief_CustomField_Estimated_number_of_people_impacted',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'GrantsPovertyRelief',
        'name' => 'Estimated_number_of_people_impacted',
        'label' => E::ts('Estimated number of people impacted'),
        'data_type' => 'Float',
        'html_type' => 'Text',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'estimated_number_of_people_impac_77',
      ],
      'match' => [
        'name',
        'custom_group_id',
      ],
    ],
  ],
];
