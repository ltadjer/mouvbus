<?php
function MB_get_field($selector,$post_id=false,$format_value=true,$return=false){
    if(function_exists('get_field')){
        return get_field($selector,$post_id,$format_value);
    }
    return $return;
}
function MB_the_field($selector,$post_id=false,$format_value=true,$return=''){
    echo MB_get_field($selector,$post_id,$format_value,$return);
}