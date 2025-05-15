<?php
use CRM_Testdata_ExtensionUtil as E;
return [
  [
    'name' => 'CustomGroup_phone',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'phone_quality',
        'title' => E::ts('Phone Quality data'),
        'extends' => 'phone_quality',
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 21,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-03-07 17:28:54',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_phone_Source',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'phone_quality',
        'name' => 'Source',
        'label' => E::ts('Source'),
        'data_type' => 'String',
        'html_type' => 'Text',
        'is_searchable' => TRUE,
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'source',
        'fk_entity' => 'Contact',
      ],
      'match' => [
        'name',
        'custom_group_id',
      ],
    ],
  ],
];
