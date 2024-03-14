<?php
use CRM_Testdata_ExtensionUtil as E;
$extension = civicrm_api3('extension', 'get', ['key' => 'civi_campaign', 'sequential' => 1])['values'];
if (empty($extension[0]) || $extension[0]['status'] !== 'installed') {
  return [];
}
return [
  [
    'name' => 'CustomGroup_Survey',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Survey',
        'title' => E::ts('Survey'),
        'extends' => 'Survey',
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 19,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-03-07 08:46:51',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Survey_CustomField_Who_else_should_we_ask_',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Survey',
        'name' => 'Who_else_should_we_ask_',
        'label' => E::ts('Who else should we ask?'),
        'data_type' => 'ContactReference',
        'html_type' => 'Autocomplete-Select',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'who_else_should_we_ask__78',
        'serialize' => 1,
      ],
      'match' => [
        'name',
        'custom_group_id',
      ],
    ],
  ],
];
