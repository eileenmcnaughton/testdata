<?php

use CRM_Testdata_ExtensionUtil as E;

$civiDiscountExtension = civicrm_api3('extension', 'get', ['key' => 'org.civicrm.module.cividiscount', 'sequential' => 1])['values'];
if (empty($civiDiscountExtension[0]) || $civiDiscountExtension[0]['status'] !== 'installed') {
  return [];
}

return [
  [
    'name' => 'DiscountCode_1',
    'entity' => 'DiscountCode',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'code' => 'event_50',
        'description' => E::ts('50% off any event'),
        'amount' => '50',
        'amount_type' => '1',
        'count_max' => 0,
        'events' => [
          // This 0 means 'any'
          '0',
        ],
        'pricesets' => [],
        'memberships' => [],
        'autodiscount' => [],
        'is_active' => TRUE,
        'filters' => [
          'event' => [
            'event_type_id' => [
              'IN' => [
                '',
              ],
            ],
          ],
        ],
      ],
    ],
  ],
];
