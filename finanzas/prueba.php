<?php

define('db_host', 'localhost');
define('db_port', '');
define('db_name', 'finanzas');
define('db_user', 'root');
define('db_pass', '1234');

db_connect();

function db_connect(){
    

    if(!$db = @mysql_connect(db_host . ':' . db_port, db_user, db_pass)) {
        return FALSE;
    }
    echo "string";
    if((strlen(db_name) > 0) AND (!@mysql_select_db(db_name, $db))) {
        return FALSE;
    }
    // set the correct charset encoding
    mysql_query('SET NAMES \'utf8\'');
    mysql_query('SET CHARACTER_SET \'utf8\'');
    
    if(!$conn = $db) {
        die('cant connect to mysql');
    }

    $rs = mysql_query('SELECT * FROM security_roles');
    /* loop through the resultset */
    if (!$rs) {
        die('Consulta no válida: ' . mysql_error());
    }    

    mysql_close($conn);
}

?>