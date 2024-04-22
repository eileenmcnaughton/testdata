<?php
use CRM_Testdata_ExtensionUtil as E;
$extension = civicrm_api3('extension', 'get', ['key' => 'civi_member', 'sequential' => 1])['values'];
if (empty($extension[0]) || $extension[0]['status'] !== 'installed') {
  return [];
}
return [
  [
    'name' => 'OptionValueExtendsMembershipType',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'cg_extend_objects',
        'label' => 'MembershipTypes',
        'value' => 'MembershipType',
        'name' => 'civicrm_membership_type',
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
    'name' => 'CustomGroup_MembershipType',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'MembershipType',
        'title' => E::ts('MembershipType'),
        'extends' => 'MembershipType',
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 22,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-03-07 23:37:36',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_MembershipType_CustomField_is_vip',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'MembershipType',
        'name' => 'is_vip',
        'label' => E::ts('Is VIP'),
        'data_type' => 'Boolean',
        'html_type' => 'Radio',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
      ],
      'match' => [
        'name',
        'custom_group_id',
      ],
    ],
  ],
];
