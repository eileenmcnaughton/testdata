<?php
use CRM_Testdata_ExtensionUtil as E;
$extension = civicrm_api3('extension', 'get', ['key' => 'civi_contribute', 'sequential' => 1])['values'];
if (empty($extension[0]) || $extension[0]['status'] !== 'installed') {
  return [];
}
return [
  [
    'name' => 'CustomGroup_financial_account',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'financial_account',
        'title' => E::ts('financial account'),
        'extends' => 'FinancialAccount',
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
    'name' => 'CustomGroup_financial_account_CustomField_Cost_Centre_Manager',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'financial_account',
        'name' => 'Cost_Centre_Manager',
        'label' => E::ts('Cost Centre Manager'),
        'data_type' => 'EntityReference',
        'html_type' => 'Autocomplete-Select',
        'is_searchable' => TRUE,
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'cost_centre_manager_79',
        'fk_entity' => 'Contact',
      ],
      'match' => [
        'name',
        'custom_group_id',
      ],
    ],
  ],
];
