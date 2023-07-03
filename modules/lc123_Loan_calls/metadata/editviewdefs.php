<?php
$module_name = 'lc123_Loan_calls';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
            'name' => 'loan_reference_number',
            'label' => 'LBL_LOAN_REFERENCE_NUMBER',
          ),
          1 => 
          array (
            'name' => 'lc123_loan_calls_lm01_loan_management_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_number',
            'label' => 'LBL_PHONE_NUMBER',
          ),
          1 => 
          array (
            'name' => 'status',
            'label' => 'LBL_STATUS',
          ),
        ),
      ),
    ),
  ),
);
;
?>
