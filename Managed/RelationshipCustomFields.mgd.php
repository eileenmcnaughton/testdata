<?php
use CRM_Testdata_ExtensionUtil as E;

return [
  [
    'name' => 'CustomGroup_Relationship',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Relationship',
        'title' => E::ts('Relationship'),
        'extends' => 'Relationship',
        'extends_entity_column_value' => [
          '1',
        ],
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 14,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-03-02 05:03:42',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Relationship_CustomField_Is_custodial',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Relationship',
        'name' => 'Is_custodial',
        'label' => E::ts('Is custodial'),
        'data_type' => 'Boolean',
        'html_type' => 'Radio',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'is_custodial_72',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
];
