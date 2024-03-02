<?php
use CRM_Testdata_ExtensionUtil as E;

return [
  [
    'name' => 'CustomGroup_Activity',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Activity',
        'title' => E::ts('Activity'),
        'extends' => 'Activity',
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 10,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-03-02 04:53:00',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Activity_CustomField_Target_completion_date',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Activity',
        'name' => 'Target_completion_date',
        'label' => E::ts('Target completion date'),
        'data_type' => 'Date',
        'html_type' => 'Select Date',
        'text_length' => 255,
        'date_format' => 'DD, d MM yy',
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'target_completion_date_67',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
];
