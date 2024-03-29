<?php
use CRM_Testdata_ExtensionUtil as E;
$extension = civicrm_api3('extension', 'get', ['key' => 'civi_contribute', 'sequential' => 1])['values'];
if (empty($extension[0]) || $extension[0]['status'] !== 'installed') {
  return [];
}
return [
  [
    'name' => 'CustomGroup_Contribution',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Contribution',
        'title' => E::ts('Contribution'),
        'extends' => 'Contribution',
        'extends_entity_column_value' => [
          '3',
        ],
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 15,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-03-02 05:06:10',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Contribution_CustomField_Associated_documenttion',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Contribution',
        'name' => 'Associated_documenttion',
        'label' => E::ts('Associated documenttion'),
        'data_type' => 'File',
        'html_type' => 'File',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'associated_documenttion_73',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Contribution_CustomField_Jurisdiction',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Contribution',
        'name' => 'Jurisdiction',
        'label' => E::ts('Jurisdiction'),
        'data_type' => 'StateProvince',
        'html_type' => 'Select',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'jurisdiction_74',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
];
