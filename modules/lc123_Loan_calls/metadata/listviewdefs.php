<?php
$module_name = 'lc123_Loan_calls';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'LOAN_REFERENCE_NUMBER' => 
  array (
    'type' => 'int',
    'label' => 'LBL_LOAN_REFERENCE_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE_NUMBER' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE_NUMBERS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PHONE_NUMBERS',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
;
?>
