<?php


use CRM_Testdata_ExtensionUtil as E;

$extension = civicrm_api3('extension', 'get', ['key' => 'civi_grant', 'sequential' => 1])['values'];
if (empty($extension[0]) || $extension[0]['status'] !== 'installed') {
  return [];
}

return [
  [
    'name' => 'CustomGroup_Grant_Fields',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Grant_Fields',
        'title' => E::ts('Grant Fields'),
        'extends' => 'Grant',
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 9,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-03-02 04:49:49',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Grant_Fields_CustomField_Ask_yourself_Do_you_feel_lucky_',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Grant_Fields',
        'name' => 'Ask_yourself_Do_you_feel_lucky_',
        'label' => E::ts('Ask yourself Do you feel lucky?'),
        'data_type' => 'Boolean',
        'html_type' => 'Radio',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'ask_yourself_do_you_feel_lucky__65',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
];
