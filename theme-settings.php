<?php
/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function bceln_theme_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL)  {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }
  $form['bceln_theme_custom'] = array(
    '#type' => 'fieldset',
    '#title' => t('Custom Settings'),
    '#weight' => 5,
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['bceln_theme_custom']['bceln_theme_search_text'] = array(
    '#type' => 'textarea',
    '#title' => t('Search area welcome text.'),
    '#default_value' => theme_get_setting('bceln_theme_search_text'),
    '#description' => t("The search text to appear in the simple search box on the front page."),
  );
  $form['bceln_theme_custom']['bceln_theme_search_heading'] = array(
    '#type' => 'textarea',
    '#title' => t('Front page search heading.'),
    '#default_value' => theme_get_setting('bceln_theme_search_heading'),
    '#description' => t("The welcome search box header text on the front page."),
  );
  $form['bceln_theme_custom']['bceln_theme_collections_meta'] = array(
    '#type' => 'select',
    '#title' => t("Allow display of 'In collections' and 'Details' data on collection pages."),
    '#options' => array(
      0 => t('No'),
      1 => t('Yes'),
    ),
    '#default_value' => theme_get_setting('bceln_theme_collections_meta'),
    '#description' => t("While description will be shown when configured, collections data and colleciton details are hidden by default."),
  );
  $form['bceln_theme_custom']['bceln_theme_front_background'] = array(
    '#type' => 'fieldset',
    '#title' => t('More'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['bceln_theme_custom']['bceln_theme_front_background']['bceln_slideshow_pids'] = array(
    '#type' => 'textfield',
    '#title' => t('Frontpage Slideshow Pids.'),
    '#default_value' => theme_get_setting('bceln_slideshow_pids'),
    '#description' => t("Add a comma seperated list of pids to use as a source for the Frontpage Slideshow. Defaults to islandora:root"),
  );
  $form['bceln_theme_custom']['bceln_theme_front_background']['bceln_show_basic_record'] = array(
    '#type' => 'select',
    '#title' => t('Display basic record view on object page.'),
    '#options' => array(
      0 => t('No'),
      1 => t('Yes'),
    ),
    '#default_value' => theme_get_setting('bceln_show_basic_record'),
    '#description' => t("Show a basic search record on object view pages. Defaults to Yes"),
  );
  $form['bceln_theme_custom']['bceln_theme_front_background']['bceln_show_collection_search'] = array(
    '#type' => 'select',
    '#title' => t('Display basic collection search'),
    '#options' => array(
      0 => t('No'),
      1 => t('Yes'),
    ),
    '#default_value' => theme_get_setting('bceln_show_collection_search'),
    '#description' => t("Show a collection based search view on collection pages"),
  );
  $form['bceln_theme_custom']['bceln_theme_front_background']['bceln_background_dsid'] = array(
    '#type' => 'textfield',
    '#title' => t('Background object datastream.'),
    '#default_value' => theme_get_setting('bceln_background_dsid'),
    '#description' => t("Use this datastream on frontpage background collection pids as the source for the background. Defaults to TN"),
  );
  $form['bceln_theme_custom']['bceln_theme_front_background']['bceln_bio_label'] = array(
    '#type' => 'textfield',
    '#title' => t('Scholar or Person object Biography label'),
    '#default_value' => theme_get_setting('bceln_bio_label'),
    '#description' => t("The label used in place of 'Biography' on a Scholar object or Person object page. Defaults to 'Biography'"),
  );
  $form['bceln_theme_custom']['bceln_theme_front_background']['bceln_meta_des'] = array(
    '#type' => 'textfield',
    '#title' => t('Descriptive Metadata Label'),
    '#default_value' => theme_get_setting('bceln_meta_des'),
    '#description' => t("The label used in place of 'Descriptive Metadata' in metadata display context. Defaults to 'Description'"),
  );
  $form['bceln_theme_custom']['bceln_theme_front_background']['bceln_collection_items_details'] = array(
    '#type' => 'select',
    '#title' => t('Enable configurable list view Metadata'),
    '#options' => array(
      0 => t('No'),
      1 => t('Yes'),
    ),
    '#default_value' => theme_get_setting('bceln_collection_items_details'),
    '#description' => t("Enable the use of 'Collection Item Details View', embedded in the list view, allowing for dynamic Metadata display"),
  );
}
