<?php

/**
 * @file
 * Hooks provided by the JSON API module.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Implements hook_json_api_config_alter().
 * @param $page 
 *   The formatter version of array.
 * @param $type
 *   The entity type name.
 * @param $json
 *   Raw version of the array values.
 * 
 * 
 * This alter function can be use to manipulate the out-come of a custom
 * entities in the config object.
 *  
 */
function hook_json_api_config_alter(&$page, &$type, &$json){

}

/**
 * Implements hook_json_api_fields_alter().
 * @param $page 
 *   The formatter version of array.
 * @param $type
 *   The entity type name.
 * @param $json
 *   Raw version of the array values.
 *  
 */
function hook_json_api_fields_alter(&$page, &$type, &$json){

}

/**
 * Implements hook_json_api_default_entities_fields_alter().
 * @param $page 
 *   The formatter version of array.
 * @param $type
 *   The entity type name.
 * @param $json
 *   Raw version of the array values.
 * 
 * This alter function can be use to manipulate the out-come of a custom
 * entities in the default object.
 *  
 */
function hook_json_api_default_entities_fields_alter(&$page, &$type, &$json){

}

/**
 * Implements hook_json_api_field_formating_alter().
 * @param $field 
 *   The formatter version of array.
 * @param $value
 *   The entity type name.
 * @param $field_new_value
 *   Raw version of the array values.
 *  
 */
function hook_json_api_field_formating_alter($field, $value, $field_new_value){

}

/**
 * Implements hook_json_api_node_reference_type_alter().
 * @param $page 
 *   The formatter version of array.
 * @param $value
 *  
 */
function hook_json_api_node_reference_type_alter(&$page, $value){

}

/**
 * Implements hook_json_api_tablefield_type_alter().
 * @param $page 
 *   The formatter version of array.
 * @param $value
 *  
 */
function hook_json_api_tablefield_type_alter(&$page, $value){

}

/**
 * Implements hook_json_api_text_type_alter().
 * @param $page 
 *   The formatter version of array.
 * @param $value
 *  
 */
function hook_json_api_text_type_alter(&$page, $value){

}

/**
 * Implements hook_json_api_text_type_alter().
 * @param $page 
 *   The formatter version of array.
 * @param $value
 *  
 */
function hook_json_api_date_type_alter(&$page, $value){

}

/**
 * Implements hook_json_api_text_type_alter().
 * @param $page 
 *   The formatter version of array.
 * @param $value
 *  
 */
function hook_json_api_date_type_alter(&$page, $value){

}

/**
 * Implements hook_json_api_list_type_alter().
 * @param $page 
 *   The formatter version of array.
 * @param $value
 *  
 */
function hook_json_api_list_type_alter(&$page, $value){

}

/**
 * Implements hook_json_api_email_type_alter().
 * @param $page 
 *   The formatter version of array.
 * @param $value
 *  
 */
function hook_json_api_email_type_alter(&$page, $value){

}

/**
 * Implements hook_json_api_link_type_alter().
 * @param $page 
 *   The formatter version of array.
 * @param $value
 *  
 */
function hook_json_api_link_type_alter(&$page, $value){

}

/**
 * Implements hook_json_api_file_type_alter().
 * @param $page 
 *   The formatter version of array.
 * @param $value
 *  
 */
function hook_json_api_link_type_alter(&$page, $value){

}

/**
 * Implements hook_json_api_file_type_alter().
 * @param $page 
 *   The formatter version of array.
 * @param $value
 *  
 */
function hook_json_api_link_type_alter(&$page, $value){

}

