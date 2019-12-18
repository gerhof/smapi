<?php 

function smapi_calculator_input() {
    global $wpdb;
    $table_name = $wpdb->prefix."smapi";
    $smapi_results = $wpdb->get_results("SELECT * FROM $table_name LIMIT 1");
    $content =  '<form method="post" action="" id="smapi_calculator">';
        $content .= '<div class="form-group">';
            $content .= '<label for="smapi_amount">Hur mycket vill du låna?</label>';
            $content .= '<input type="number" class="smapi_amount" name="smapi_amount" id="smapi_amount" placeholder="0" />';
        $content .= '</div>';                                                    
    $content .= '</form>';
    return $content;
}

    function smapi_calculator() {
        global $wpdb;
        $table_name = $wpdb->prefix."smapi";
        $smapi_results = $wpdb->get_results("SELECT * FROM $table_name LIMIT 1");
        $content =  '<form method="post" action="" id="smapi_calculator">';
            $content .= '<div class="form-group">';
                $content .= '<input type="hidden" name="smapi_interest_month_12" id="smapi_interest_month_12" value="'.$smapi_results[0]->month_12.'" />';
                $content .= '<input type="hidden" name="smapi_interest_month_24" id="smapi_interest_month_24" value="'.$smapi_results[0]->month_24.'" />';
                $content .= '<input type="hidden" name="smapi_interest_month_36" id="smapi_interest_month_36" value="'.$smapi_results[0]->month_36.'" />';
                $content .= '<input type="hidden" name="smapi_interest_month_48" id="smapi_interest_month_48" value="'.$smapi_results[0]->month_48.'" />';
                $content .= '<input type="hidden" name="smapi_interest_month_60" id="smapi_interest_month_60" value="'.$smapi_results[0]->month_60.'" />';
            $content .= '</div>';
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Månadskostnad över 12 månader</label>';
                $content .= '<div><input type="number" name="smapi_month_12" id="smapi_month_12" placeholder="0" disabled/></div>';
            $content .= '</div>';
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Månadskostnad över 24 månader</label>';
                $content .= '<div><input type="number" name="smapi_month_24" id="smapi_month_24" placeholder="0" disabled/></div>';
            $content .= '</div>';
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Månadskostnad över 36 månader</label>';
                $content .= '<div><input type="number" name="smapi_month_36" id="smapi_month_36" placeholder="0" disabled/></div>';
            $content .= '</div>';
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Månadskostnad över 48 månader</label>';
                $content .= '<div><input type="number" name="smapi_month_48" id="smapi_month_48" placeholder="0" disabled/></div>';
            $content .= '</div>';   
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Månadskostnad över 60 månader</label>';
                $content .= '<div><input type="number" name="smapi_month_60" id="smapi_month_60" placeholder="0" disabled/></div>';
            $content .= '</div>';   
            /*
            $content .= '<div class="form-group">';
                $content .= '<button type="button" name="smapi_button">Skicka offert</button>';
            $content .= '</div>';                                                      
            */
        $content .= '</form>';
        return $content;
    }

    function smapi_calculator_insurance() {
        global $wpdb;
        $table_name = $wpdb->prefix."smapi";
        $smapi_results = $wpdb->get_results("SELECT * FROM $table_name LIMIT 1");
        $content =  '<form method="post" action="" id="smapi_calculator">';
            $content .= '<div class="form-group">';
                $content .= '<input type="hidden" name="smapi_interest_month_12_insurance" id="smapi_interest_month_12_insurance" value="'.$smapi_results[0]->month_12_insurance.'" />';
                $content .= '<input type="hidden" name="smapi_interest_month_24_insurance" id="smapi_interest_month_24_insurance" value="'.$smapi_results[0]->month_24_insurance.'" />';
                $content .= '<input type="hidden" name="smapi_interest_month_36_insurance" id="smapi_interest_month_36_insurance" value="'.$smapi_results[0]->month_36_insurance.'" />';
                $content .= '<input type="hidden" name="smapi_interest_month_48_insurance" id="smapi_interest_month_48_insurance" value="'.$smapi_results[0]->month_48_insurance.'" />';
                $content .= '<input type="hidden" name="smapi_interest_month_60_insurance" id="smapi_interest_month_60_insurance" value="'.$smapi_results[0]->month_60_insurance.'" />';
            $content .= '</div>';
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Månadskostnad över 12 månader</label>';
                $content .= '<div><input type="number" name="smapi_month_12_insurance" id="smapi_month_12_insurance" placeholder="0" disabled/></div>';
            $content .= '</div>';
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Månadskostnad över 24 månader</label>';
                $content .= '<div><input type="number" name="smapi_month_24_insurance" id="smapi_month_24_insurance" placeholder="0" disabled/></div>';
            $content .= '</div>';
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Månadskostnad över 36 månader</label>';
                $content .= '<div><input type="number" name="smapi_month_36_insurance" id="smapi_month_36_insurance" placeholder="0" disabled/></div>';
            $content .= '</div>';
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Månadskostnad över 48 månader</label>';
                $content .= '<div><input type="number" name="smapi_month_48_insurance" id="smapi_month_48_insurance" placeholder="0" disabled/></div>';
            $content .= '</div>';   
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Månadskostnad över 60 månader</label>';
                $content .= '<div><input type="number" name="smapi_month_60_insurance" id="smapi_month_60_insurance" placeholder="0" disabled/></div>';
            $content .= '</div>';   
            /*
            $content .= '<div class="form-group">';
                $content .= '<button type="button" name="smapi_button">Skicka offert</button>';
            $content .= '</div>';                                                      
            */
        $content .= '</form>';
        return $content;
    }    

    function smapi_calculator_text() {
        $content = "<p>Alla siffror i finansieringsförslaget är ungefärliga och angivna exkl. moms och gäller efter sedvanlig kreditprövning.</p>";        
        return $content;
    }

?>