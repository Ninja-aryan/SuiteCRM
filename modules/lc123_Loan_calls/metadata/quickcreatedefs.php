<?php
$module_name = 'lc123_Loan_calls';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'customer_id',
            'label' => 'LBL_CUSTOMER_ID',
          ),
          1 => 
          array (
            'name' => 'phone_number',
            'label' => 'LBL_PHONE_NUMBER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'phone_numbers',
            'label' => 'LBL_PHONE_NUMBERS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'address',
            'label' => 'LBL_ADDRESS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'loan_reference_number',
            'label' => 'LBL_LOAN_REFERENCE_NUMBER',
          ),
          1 => 
          array (
            'name' => 'lc123_loan_calls_lm01_loan_management_name',
            'label' => 'LBL_LC123_LOAN_CALLS_LM01_LOAN_MANAGEMENT_FROM_LM01_LOAN_MANAGEMENT_TITLE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
