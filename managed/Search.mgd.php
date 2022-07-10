<?php

return [
  [
    'name' => 'SavedSearch_My_fields',
    'entity' => 'SavedSearch',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'My_fields',
        'label' => 'My fields',
        'form_values' => NULL,
        'mapping_id' => NULL,
        'search_custom_id' => NULL,
        'api_entity' => 'CustomField',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'label',
            'Custom_Fields.Mapped_field',
          ],
          'orderBy' => [],
          'where' => [],
          'groupBy' => [],
          'join' => [],
          'having' => [],
        ],
        'expires_date' => NULL,
        'description' => NULL,
      ],
    ],
  ],
  [
    'name' => 'SavedSearch_My_fields_SearchDisplay_My_fields_Table_1',
    'entity' => 'SearchDisplay',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'My_fields_Table_1',
        'label' => 'My fields Table 1',
        'saved_search_id.name' => 'My_fields',
        'type' => 'table',
        'settings' => [
          'actions' => TRUE,
          'limit' => 50,
          'classes' => [
            'table',
            'table-striped',
          ],
          'pager' => [],
          'placeholder' => 5,
          'sort' => [
            [
              'weight',
              'ASC',
            ],
          ],
          'columns' => [
            [
              'type' => 'field',
              'key' => 'id',
              'dataType' => 'Integer',
              'label' => 'Custom Field ID',
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'label',
              'dataType' => 'String',
              'label' => 'Custom Field Label',
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'Custom_Fields.Mapped_field',
              'dataType' => 'String',
              'label' => 'Custom Fields: Mapped field',
              'sortable' => TRUE,
              'editable' => TRUE,
            ],
          ],
        ],
        'acl_bypass' => FALSE,
      ],
    ],
  ],
];
