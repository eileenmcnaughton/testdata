<?php

use CRM_Testdata_ExtensionUtil as E;

return [
  [
    'name' => 'CustomGroup_Campaign',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Campaign',
        'title' => E::ts('Campaign'),
        'extends' => 'Campaign',
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 16,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-03-02 05:10:25',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Campaign_CustomField_Soft_target',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Campaign',
        'name' => 'Soft_target',
        'label' => E::ts('Soft target'),
        'data_type' => 'Money',
        'html_type' => 'Text',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'soft_target_75',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
];
