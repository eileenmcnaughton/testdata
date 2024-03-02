<?php
use CRM_Testdata_ExtensionUtil as E;

return [
  [
    'name' => 'CustomGroup_Activity_Meeting',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Activity_Meeting',
        'title' => E::ts('Activity-Meeting'),
        'extends' => 'Activity',
        'extends_entity_column_value' => [
          '1',
        ],
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 11,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-03-02 04:55:32',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Activity_Meeting_CustomField_Meeting_impressions',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Activity_Meeting',
        'name' => 'Meeting_impressions',
        'label' => E::ts('Meeting impressions'),
        'data_type' => 'Memo',
        'html_type' => 'TextArea',
        'attributes' => 'rows=4, cols=60',
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'meeting_impressions_69',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
];
