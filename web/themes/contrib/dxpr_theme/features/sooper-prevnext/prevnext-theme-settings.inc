<?php

/**
 * @file
 * Theme prevnext settings.
 */

/**
 * Add prevnext options to the theme settings form.
 *
 * @param array $form
 *   Form array.
 * @param string $theme
 *   Theme machine name.
 */
function prevnext_theme_settings(array &$form, $theme) {
  if (\Drupal::moduleHandler()->moduleExists('dxpr_theme_helper')) {
    $form['dxpr_theme_settings']['prevnext'] = [
      '#title' => t('Previous/Next Links'),
      '#type' => 'details',
      '#group' => 'dxpr_theme_settings',
      '#weight' => 17,
    ];

    $default_options = _dxpr_theme_node_types_options();
    $form['dxpr_theme_settings']['prevnext']['prevnext_content_types'] = [
      '#type' => 'checkboxes',
      '#title' => t('Previous / Next Pager'),
      '#default_value' => ((theme_get_setting('prevnext_content_types') !== NULL)) ? theme_get_setting('prevnext_content_types') : $default_options,
      '#options' => _dxpr_theme_node_types_options(),
    ];

    $form['dxpr_theme_settings']['prevnext']['prevnext_custom'] = [
      '#title' => t('Customize Previous/Next Links'),
      '#type' => 'details',
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
    ];

    $form['dxpr_theme_settings']['prevnext']['prevnext_custom']['previous_label'] = [
      '#type' => 'textfield',
      '#title' => t('Previous Link Label'),
      '#default_value' => ((theme_get_setting('previous_label') !== NULL)) ? theme_get_setting('previous_label') : t('Previous'),
    ];

    $form['dxpr_theme_settings']['prevnext']['prevnext_custom']['next_label'] = [
      '#type' => 'textfield',
      '#title' => t('Next Link Label'),
      '#default_value' => ((theme_get_setting('next_label') !== NULL)) ? theme_get_setting('next_label') : t('Next'),
    ];

    $form['dxpr_theme_settings']['prevnext']['prevnext_custom']['previous_svg'] = [
      '#type' => 'textarea',
      '#title' => t('Previous Icon (inline SVG)'),
      '#default_value' => ((theme_get_setting('previous_svg') !== NULL)) ? theme_get_setting('previous_svg') : '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path d="M25.1 247.5l117.8-116c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L64.7 256l102.2 100.4c4.7 4.7 4.7 12.3 0 17l-7.1 7.1c-4.7 4.7-12.3 4.7-17 0L25 264.5c-4.6-4.7-4.6-12.3.1-17z"/></svg>',
      '#rows' => 5,
    ];

    $form['dxpr_theme_settings']['prevnext']['prevnext_custom']['next_svg'] = [
      '#type' => 'textarea',
      '#title' => t('Next Icon (inline SVG)'),
      '#default_value' => ((theme_get_setting('next_svg') !== NULL)) ? theme_get_setting('next_svg') : '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path d="M25.1 247.5l117.8-116c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L64.7 256l102.2 100.4c4.7 4.7 4.7 12.3 0 17l-7.1 7.1c-4.7 4.7-12.3 4.7-17 0L25 264.5c-4.6-4.7-4.6-12.3.1-17z"/></svg>',
      '#rows' => 5,
    ];
  }
}
