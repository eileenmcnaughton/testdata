<?php
use CRM_Testdata_ExtensionUtil as E;

$extension = civicrm_api3('extension', 'get', ['key' => 'civi_contribute', 'sequential' => 1])['values'];
if (empty($extension[0]) || $extension[0]['status'] !== 'installed') {
  return [];
}

return [
  [
    'name' => 'CustomGroup_Recurring_contribution',
    'entity' => 'CustomGroup',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Recurring_contribution',
        'title' => E::ts('Recurring contribution'),
        'extends' => 'ContributionRecur',
        'style' => 'Inline',
        'help_pre' => '',
        'help_post' => '',
        'weight' => 17,
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-03-02 05:12:48',
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Recurring_contribution_CustomField_When_shall_we_upsell',
    'entity' => 'CustomField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Recurring_contribution',
        'name' => 'When_shall_we_upsell',
        'label' => E::ts('When shall we upsell'),
        'data_type' => 'Date',
        'html_type' => 'Select Date',
        'text_length' => 255,
        'date_format' => 'yy-mm-dd',
        'time_format' => 1,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'when_shall_we_upsell_76',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
];
