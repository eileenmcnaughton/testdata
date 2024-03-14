<?php
use CRM_Testdata_ExtensionUtil as E;
$extension = civicrm_api3('extension', 'get', ['key' => 'civi_member', 'sequential' => 1])['values'];
if (empty($extension[0]) || $extension[0]['status'] !== 'installed') {
  return [];
}
return [
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
    'name' => 'CustomGroup_MembershipType_CustomField_Is_VIP',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'MembershipType',
        'name' => 'Is_VIP',
        'label' => E::ts('Is VIP'),
        'data_type' => 'Boolean',
        'html_type' => 'Radio',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'is_vip_80',
      ],
      'match' => [
        'name',
        'custom_group_id',
      ],
    ],
  ],
];
