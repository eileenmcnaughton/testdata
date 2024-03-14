<?php

use CRM_Testdata_ExtensionUtil as E;
$extension = civicrm_api3('extension', 'get', ['key' => 'civi_event', 'sequential' => 1])['values'];
if (empty($extension[0]) || $extension[0]['status'] !== 'installed') {
  return [];
}
return [
  [
    'name' => 'CustomGroup_Participant',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Participant',
        'title' => E::ts('Participant'),
        'extends' => 'Participant',
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 13,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-02-22 19:58:39',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Participant_CustomField_Participant_state_province',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Participant',
        'name' => 'Participant_state_province',
        'label' => E::ts('Participant: state province'),
        'data_type' => 'StateProvince',
        'html_type' => 'Select',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'participant_state_province_71',
      ],
      'match' => [
        'name',
        'custom_group_id',
      ],
    ],
  ],
];
