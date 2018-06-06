<?php

    /** O nome do banco de dados*/
    define('DB_NAME', 'wcs_crud');
    
    /** Usuário do banco de dados MySQL */
    define('DB_USER', 'root');

    /** Senha do banco de dados MySQL */
    define('DB_PASSWORD', '');

    /** nome do host do MySQL */
    define('DB_HOST', 'localhost');
    
    /** caminho absoluto para a pasta do sistema **/
    if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');
        
    /** caminho no server para o sistema **/
    if ( !defined('BASEURL') )
        define('BASEURL', '/phanton_site/');

    /** caminho do arquivo de banco de dados **/
        if ( !defined('DBAPI') )
        
    define('DBAPI', ABSPATH . 'inc/database.php');

    /** caminhos dos templates de header, footer e scripts**/
    define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
    define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
    define('SCRIPT_TEMPLATE', ABSPATH . 'inc/scripts.php');
    define('HEAD_TEMPLATE', ABSPATH . 'inc/head.php');
?>