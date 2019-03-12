<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = 'reporte';

// Table's primary key
$primaryKey = 'Folio';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case object
// parameter names
$columns = array(
    array( 'db' => 'Folio', 'dt' => 'Folio' ),
    array( 'db' => 'Nivel_Dano',  'dt' => 'Nivel_Dano' ),
    array( 'db' => 'Folio_Seguro',   'dt' => 'Folio_Seguro' ),
    array( 'db' => 'Detalles',     'dt' => 'Detalles' ),
    array( 'db' => 'Fecha',     'dt' => 'Fecha' ),
    array( 'db' => 'Hora',     'dt' => 'Hora' ),
    array( 'db' => 'Ubicacion',     'dt' => 'Ubicacion' )
);

// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'crm',
    'host' => 'localhost'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
    SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
);
