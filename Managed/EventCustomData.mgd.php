<?php


use CRM_Testdata_ExtensionUtil as E;

$extension = civicrm_api3('extension', 'get', ['key' => 'civi_event', 'sequential' => 1])['values'];
if (empty($extension[0]) || $extension[0]['status'] !== 'installed') {
  return [];
}
return [
  [
    'name' => 'CustomGroup_EventCustomFields',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'EventCustomFields',
        'title' => E::ts('EventCustomFields'),
        'extends' => 'Event',
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 25,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-03-14 19:50:14',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_EventCustomFields_Auto_complete',
    'entity' => 'OptionGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'EventCustomFields_Auto_complete',
        'title' => E::ts('EventCustomFields :: Auto-complete'),
        'data_type' => 'String',
        'is_reserved' => FALSE,
        'option_value_fields' => [
          'name',
          'label',
          'description',
        ],
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_EventCustomFields_Auto_complete_OptionValue_Value1',
    'entity' => 'OptionValue',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'EventCustomFields_Auto_complete',
        'label' => E::ts('Value1'),
        'value' => '1',
        'name' => 'Value1',
      ],
      'match' => [
        'option_group_id',
        'name',
        'value',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_EventCustomFields_Auto_complete_OptionValue_Value2',
    'entity' => 'OptionValue',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'EventCustomFields_Auto_complete',
        'label' => E::ts('Value2'),
        'value' => '2',
        'name' => 'Value2',
      ],
      'match' => [
        'option_group_id',
        'name',
        'value',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_EventCustomFields_CustomField_Auto_complete',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'EventCustomFields',
        'name' => 'Auto_complete',
        'label' => E::ts('Auto-complete'),
        'html_type' => 'Autocomplete-Select',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'auto_complete_83',
        'option_group_id.name' => 'EventCustomFields_Auto_complete',
        'serialize' => 1,
      ],
      'match' => [
        'name',
        'custom_group_id',
      ],
    ],
  ],
];
