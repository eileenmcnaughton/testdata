<?php
use CRM_Testdata_ExtensionUtil as E;
return [
  [
    'name' => 'OptionValueExtendsEmail',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'cg_extend_objects',
        'label' => 'Emails',
        'value' => 'Email',
        'name' => 'civicrm_email',
        'grouping' => NULL,
        'filter' => 0,
        'is_default' => FALSE,
        'description' => NULL,
        'is_optgroup' => FALSE,
        'is_reserved' => FALSE,
        'is_active' => TRUE,
        'icon' => NULL,
        'color' => NULL,
        'component_id' => NULL,
        'domain_id' => NULL,
        'visibility_id' => NULL,
      ],
    ],
    'match' => [
      'option_group_id',
      'name',
    ],
  ],
  [
    'name' => 'CustomGroup_email',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'email_quality',
        'title' => E::ts('Email Quality data'),
        'extends' => 'Email',
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 20,
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
    'name' => 'CustomGroup_email_CustomField_Source',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'email_quality',
        'name' => 'Source',
        'label' => E::ts('Source'),
        'html_type' => 'Text',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'source_77',
      ],
      'match' => [
        'name',
        'custom_group_id',
      ],
    ],
  ],
];
