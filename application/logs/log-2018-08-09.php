<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-08-09 19:20:52 --> Severity: 8192 --> idn_to_ascii(): INTL_IDNA_VARIANT_2003 is deprecated /opt/lampp/htdocs/mini-inventory-and-sales-management-system/system/libraries/Form_validation.php 1234
ERROR - 2018-08-09 19:20:55 --> Severity: Warning --> Division by zero /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/controllers/Dashboard.php 241
ERROR - 2018-08-09 19:20:55 --> Severity: Warning --> Division by zero /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/controllers/Dashboard.php 242
ERROR - 2018-08-09 19:20:55 --> Severity: Warning --> Division by zero /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/controllers/Dashboard.php 243
ERROR - 2018-08-09 19:21:13 --> Severity: Warning --> Division by zero /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/controllers/Dashboard.php 241
ERROR - 2018-08-09 19:21:13 --> Severity: Warning --> Division by zero /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/controllers/Dashboard.php 242
ERROR - 2018-08-09 19:21:13 --> Severity: Warning --> Division by zero /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/controllers/Dashboard.php 243
ERROR - 2018-08-09 20:03:20 --> Query error: Unknown column 'obat' in 'order clause' - Invalid query: SELECT *
FROM `transactions`
ORDER BY `obat` DESC
 LIMIT 10
ERROR - 2018-08-09 20:31:36 --> Severity: 8192 --> idn_to_ascii(): INTL_IDNA_VARIANT_2003 is deprecated /opt/lampp/htdocs/mini-inventory-and-sales-management-system/system/libraries/Form_validation.php 1234
ERROR - 2018-08-09 20:31:40 --> Severity: Warning --> Division by zero /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/controllers/Dashboard.php 241
ERROR - 2018-08-09 20:31:40 --> Severity: Warning --> Division by zero /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/controllers/Dashboard.php 242
ERROR - 2018-08-09 20:31:40 --> Severity: Warning --> Division by zero /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/controllers/Dashboard.php 243
ERROR - 2018-08-09 20:31:42 --> Severity: error --> Exception: syntax error, unexpected '$data' (T_VARIABLE) /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/controllers/Opname.php 522
ERROR - 2018-08-09 20:32:26 --> Severity: error --> Exception: syntax error, unexpected '$data' (T_VARIABLE) /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/controllers/Opname.php 521
ERROR - 2018-08-09 20:37:50 --> Severity: 8192 --> idn_to_ascii(): INTL_IDNA_VARIANT_2003 is deprecated /opt/lampp/htdocs/mini-inventory-and-sales-management-system/system/libraries/Form_validation.php 1234
ERROR - 2018-08-09 20:37:52 --> Severity: Warning --> Division by zero /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/controllers/Dashboard.php 241
ERROR - 2018-08-09 20:37:52 --> Severity: Warning --> Division by zero /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/controllers/Dashboard.php 242
ERROR - 2018-08-09 20:37:52 --> Severity: Warning --> Division by zero /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/controllers/Dashboard.php 243
ERROR - 2018-08-09 20:38:49 --> Severity: error --> Exception: Call to undefined method Transaction::getDate() /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/controllers/Opname.php 522
ERROR - 2018-08-09 20:39:28 --> Query error: Unknown column 'transactions.transId' in 'field list' - Invalid query: SELECT `transactions`.`transId`, `transactions`.`itemName`, `transactions`.`itemCode`, `transactions`.`quantity`, `transactions`.`totalPrice`, `transactions`.`ref`, `transactions`.`totalMoneySpent`, `transactions`.`modeOfPayment`, `transactions`.`staffId`, `transactions`.`transDate`, `transactions`.`lastUpdated`, `transactions`.`amountTendered`, `transactions`.`changeDue`, CONCAT_WS(" ", `admin`.`first_name`, admin.last_name) AS "staffName", `transactions`.`cust_name`, `transactions`.`cust_phone`, `transactions`.`cust_email`, SUM(`transactions`.`quantity`) AS `quantity`
FROM `items`
GROUP BY `ref`
ORDER BY `transactions`.`transId` DESC
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined variable: from /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 54
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined variable: to /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 54
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 76
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 77
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 79
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 80
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 81
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 76
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 77
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 79
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 80
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 81
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 76
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 77
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 79
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 80
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 81
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 76
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 77
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 79
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 80
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 81
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 76
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 77
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 79
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 80
ERROR - 2018-08-09 20:40:09 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/transactions/transReport.php 81
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined variable: from /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 54
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined variable: to /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 54
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 76
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 77
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 79
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 80
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 81
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 76
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 77
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 79
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 80
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 81
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 76
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 77
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 79
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 80
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 81
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 76
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 77
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 79
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 80
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 81
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 76
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 77
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 79
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 80
ERROR - 2018-08-09 20:42:36 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 81
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 80
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 81
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 83
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 84
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 85
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 80
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 81
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 83
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 84
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 85
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 80
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 81
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 83
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 84
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 85
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 80
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 81
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 83
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 84
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 85
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 80
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 81
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 83
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 84
ERROR - 2018-08-09 20:44:16 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 85
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 84
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 85
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 87
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 88
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 89
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 84
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 85
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 87
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 88
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 89
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 84
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 85
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 87
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 88
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 89
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 84
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 85
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 87
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 88
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 89
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 84
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 85
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 87
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 88
ERROR - 2018-08-09 20:45:26 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 89
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 85
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 86
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 88
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 89
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 90
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 85
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 86
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 88
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 89
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 90
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 85
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 86
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 88
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 89
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 90
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 85
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 86
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 88
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 89
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 90
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 85
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 86
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 88
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 89
ERROR - 2018-08-09 20:46:12 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 90
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 83
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 84
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 86
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 87
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 88
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 83
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 84
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 86
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 87
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 88
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 83
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 84
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 86
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 87
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 88
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 83
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 84
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 86
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 87
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 88
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$ref /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 83
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 84
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$totalPrice /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 86
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$cust_name /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 87
ERROR - 2018-08-09 20:47:09 --> Severity: Notice --> Undefined property: stdClass::$transDate /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 88
ERROR - 2018-08-09 20:49:16 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 86
ERROR - 2018-08-09 20:49:16 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 86
ERROR - 2018-08-09 20:49:16 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 86
ERROR - 2018-08-09 20:49:16 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 86
ERROR - 2018-08-09 20:49:16 --> Severity: Notice --> Undefined property: stdClass::$itemName /opt/lampp/htdocs/mini-inventory-and-sales-management-system/application/views/opname/opnameReport.php 86