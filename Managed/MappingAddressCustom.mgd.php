<?php

use Civi\Api4\CustomField;

$entities = [
  [
    'name' => 'AddressCustomFields',
    'entity' => 'Mapping',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'AddressCustomFields',
        'mapping_type_id:name' => 'Import Contact',
      ],
    ],
  ],
];
$fields = CustomField::get(FALSE)
  ->addWhere('custom_group_id:name', '=', 'CustomGroup_AddressCustom')
  ->addSelect('name', 'id')
  ->execute()->indexBy('name');

$mappings = [
  ['field_name' => 'first_name', 'column_number' => 0],
  ['field_name' => 'last_name', 'column_number' => 1],
  ['field_name' => 'email', 'column_number' => 2],
];
$columnNumber = 3;
foreach ($fields as $field) {
  $mappings[] = ['field_name' => 'custom_'  . $field['id'], 'column_number' => $columnNumber];
}

foreach ($mappings as $mapping) {
  $entities[] = [
    'name' => $mapping['name'],
    'entity' => 'MappingField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => $mapping,
    ]
  ];
}

return $entities;
