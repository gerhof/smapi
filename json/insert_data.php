<?php

    require_once($_SERVER["DOCUMENT_ROOT"]."/wp-load.php");
    /* Make sure this is called by an administrator */
    if (current_user_can('administrator')) {
        $smapi_unique_key = get_option("smapi_unique_key");
        /* Make sure our unique key is identified for this installation */
        if ($smapi_unique_key == $_POST['key']) {
            /* Update our db table with the fetched values */
            global $wpdb;
            $table_name = $wpdb->prefix."smapi";
            $wpdb->query($wpdb->prepare("UPDATE $table_name SET month_12 = %s", $_POST['month_12']));
            $wpdb->query($wpdb->prepare("UPDATE $table_name SET month_24 = %s", $_POST['month_24']));
            $wpdb->query($wpdb->prepare("UPDATE $table_name SET month_36 = %s", $_POST['month_36']));
            $wpdb->query($wpdb->prepare("UPDATE $table_name SET month_48 = %s", $_POST['month_48']));
            $wpdb->query($wpdb->prepare("UPDATE $table_name SET month_60 = %s", $_POST['month_60']));
            $wpdb->query($wpdb->prepare("UPDATE $table_name SET month_12_insurance = %s", $_POST['month_12_insurance']));
            $wpdb->query($wpdb->prepare("UPDATE $table_name SET month_24_insurance = %s", $_POST['month_24_insurance']));
            $wpdb->query($wpdb->prepare("UPDATE $table_name SET month_36_insurance = %s", $_POST['month_36_insurance']));
            $wpdb->query($wpdb->prepare("UPDATE $table_name SET month_48_insurance = %s", $_POST['month_48_insurance']));
            $wpdb->query($wpdb->prepare("UPDATE $table_name SET month_60_insurance = %s", $_POST['month_60_insurance']));
        } else {
            die('Unauthorized access');
        }
    } else {
        die('Unauthorized access');
    }

?>
