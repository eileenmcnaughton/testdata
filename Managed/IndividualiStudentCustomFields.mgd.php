<?php
use CRM_Testdata_ExtensionUtil as E;
return [
  [
    'name' => 'CustomGroup_Contacts_students',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Contacts_students',
        'title' => E::ts('Contacts-students'),
        'extends' => 'Individual',
        'extends_entity_column_value' => [
          'Student',
        ],
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 23,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-03-09 21:06:05',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_MembershipStudent_Procrastination_index',
    'entity' => 'OptionGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'MembershipStudent_Procrastination_index',
        'title' => E::ts('MembershipStudent :: Procrastination index'),
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
    'name' => 'OptionGroup_MembershipStudent_Procrastination_index_OptionValue_Like_totally_last_minute',
    'entity' => 'OptionValue',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'MembershipStudent_Procrastination_index',
        'label' => E::ts('Like totally last minute'),
        'value' => '1',
        'name' => 'Like_totally_last_minute',
      ],
      'match' => [
        'option_group_id',
        'name',
        'value',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_MembershipStudent_Procrastination_index_OptionValue_Really_down_to_the_wire',
    'entity' => 'OptionValue',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'MembershipStudent_Procrastination_index',
        'label' => E::ts('Really down to the wire'),
        'value' => '2',
        'name' => 'Really_down_to_the_wire',
      ],
      'match' => [
        'option_group_id',
        'name',
        'value',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_MembershipStudent_Procrastination_index_OptionValue_Just_chill_there_will_be_an_ext',
    'entity' => 'OptionValue',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'MembershipStudent_Procrastination_index',
        'label' => E::ts('Just chill - there will be an extension....'),
        'value' => '3',
        'name' => 'Just_chill_there_will_be_an_ext',
      ],
      'match' => [
        'option_group_id',
        'name',
        'value',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Contacts_students_CustomField_Procrastination_index',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Contacts_students',
        'name' => 'Procrastination_index',
        'label' => E::ts('Procrastination index'),
        'html_type' => 'CheckBox',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'procrastination_index_81',
        'option_group_id.name' => 'MembershipStudent_Procrastination_index',
        'serialize' => 1,
      ],
      'match' => [
        'name',
        'custom_group_id',
      ],
    ],
  ],
];
