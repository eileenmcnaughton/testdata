<?php
use CRM_Testdata_ExtensionUtil as E;

return [
  [
    'name' => 'CustomGroup_Individual_Multiple',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Individual_Multiple',
        'title' => E::ts('Individual-Multiple'),
        'extends' => 'Individual',
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 11,
        'is_multiple' => TRUE,
        'max_multiple' => 8,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-02-22 18:51:35',
        'icon' => 'fa-hand-o-right',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Individual_Multiple_CustomField_Individual_Multiple_Field_date',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Individual_Multiple',
        'name' => 'Individual_Multiple_Field_date',
        'label' => E::ts('Individual-Multiple-Field-date'),
        'data_type' => 'Date',
        'html_type' => 'Select Date',
        'text_length' => 255,
        'start_date_years' => 2,
        'date_format' => 'DD, d MM yy',
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'individual_multiple_field_date_67',
        'in_selector' => TRUE,
      ],
      'match' => [
        'name',
        'custom_group_id',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Individual_Multiple_CustomField_Individual_Multiple_Field_Yes_No',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Individual_Multiple',
        'name' => 'Individual_Multiple_Field_Yes_No',
        'label' => E::ts('Individual-Multiple-Field-Yes-No'),
        'data_type' => 'Boolean',
        'html_type' => 'Radio',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'individual_multiple_field_yes_no_68',
        'in_selector' => TRUE,
      ],
      'match' => [
        'name',
        'custom_group_id',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Individual_Multiple_CustomField_Individual_Multiple_Field_Entity_Reference',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Individual_Multiple',
        'name' => 'Individual_Multiple_Field_Entity_Reference',
        'label' => E::ts('Individual-Multiple-Field-Entity-Reference'),
        'data_type' => 'EntityReference',
        'html_type' => 'Autocomplete-Select',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'individual_multiple_field_entity_69',
        'in_selector' => TRUE,
        'fk_entity' => 'MembershipStatus',
      ],
      'match' => [
        'name',
        'custom_group_id',
      ],
    ],
  ],
];
