<?php
    function smapi_table() {
        global $wpdb;
        global $smapi_db_version;
        global $smapi_db_installed;
        if ( $smapi_db_installed != $smapi_db_version) {
            $charset_collate = $wpdb->get_charset_collate();
            $table_name = $wpdb->prefix . "smapi";
            /* Create the table */
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            month_12 varchar(4) NOT NULL,
            month_24 varchar(4) NOT NULL,
            month_36 varchar(4) NOT NULL,
            month_48 varchar(4) NOT NULL,
            month_60 varchar(4) NOT NULL,
            month_12_insurance varchar(4) NOT NULL,
            month_24_insurance varchar(4) NOT NULL,
            month_36_insurance varchar(4) NOT NULL,
            month_48_insurance varchar(4) NOT NULL,
            month_60_insurance varchar(4) NOT NULL            
            ) $charset_collate;";	
            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            dbDelta( $sql );

            /* Insert sample data */
            $wpdb->insert( 
                $table_name, 
                array( 
                    'month_12' => '1.0', 
                    'month_24' => '1.0',
                    'month_36' => '1.0',
                    'month_48' => '1.0',
                    'month_60' => '1.0',
                    'month_12_insurance' => '1.0', 
                    'month_24_insurance' => '1.0',
                    'month_36_insurance' => '1.0',
                    'month_48_insurance' => '1.0',
                    'month_60_insurance' => '1.0',                    
                ) 
            );	
        }
        /* Make a random key */
        $key = random_bytes(5);
        $key = bin2hex($key);
        /* Tell WordPress this script has been run */
        add_option( 'smapi_unique_key', $key);
    }
?>