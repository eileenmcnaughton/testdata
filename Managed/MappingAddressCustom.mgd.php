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
  ->addWhere('custom_group_id.name', '=', 'AddressCustom')
  ->addSelect('name', 'id')
  ->execute();

$mappings = [
  ['name' => 'first_name', 'column_number' => 0],
  ['name' => 'last_name', 'column_number' => 1],
  ['name' => 'email', 'column_number' => 2],
];
$columnNumber = 3;
foreach ($fields as $field) {
  $mappings[] = ['name' => 'custom_'  . $field['id'], 'column_number' => $columnNumber];
  $columnNumber++;
}

foreach ($mappings as $mapping) {
  $entities[] = [
    'name' => 'AddressCustom' . $mapping['column_number'] . $mapping['field_name'],
    'entity' => 'MappingField',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => array_merge($mapping, ['mapping_id.name' => 'AddressCustomFields']),
    ]
  ];
}

return $entities;
