<?php

namespace Drupal\Tests\image_effects\Functional;

use Drupal\Core\File\FileSystemInterface;

/**
 * Selector plugins test.
 *
 * @group Image Effects
 */
class SelectorPluginTest extends ImageEffectsTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'image',
    'image_effects',
    'image_effects_module_test',
    'file_test',
    'file_mdm',
    'file_mdm_font',
  ];

  /**
   * Image selector test.
   */
  public function testImageSelector() {
    $image_path = drupal_get_path('module', 'image_effects') . '/tests/images';
    $image_file = 'portrait-painting.jpe';

    // Test the Basic plugin.
    // Add an effect with the image selector.
    $effect = [
      'id' => 'image_effects_module_test_image_selection',
      'data' => [
        'image_uri' => $image_path . '/' . $image_file,
      ],
    ];
    $uuid = $this->addEffectToTestStyle($effect);

    // Check that the full image URI is in the effect summary.
    $this->assertSession()->pageTextContains($image_path . '/' . $image_file);

    // Test the Dropdown plugin.
    // Remove the effect.
    $this->removeEffectFromTestStyle($uuid);

    // Change the settings.
    $config = \Drupal::configFactory()->getEditable('image_effects.settings');
    $config
      ->set('image_selector.plugin_id', 'dropdown')
      ->set('image_selector.plugin_settings.dropdown.path', $image_path)
      ->save();

    // Add an effect with the image selector.
    $effect = [
      'id' => 'image_effects_module_test_image_selection',
      'data' => [
        'image_uri' => $image_file,
      ],
    ];
    $this->addEffectToTestStyle($effect);

    // Check that the full image URI is in the effect summary.
    $this->assertSession()->pageTextContains($image_path . '/' . $image_file);
  }

  /**
   * Image selector test.
   */
  public function testFontSelector() {
    $font_path = 'dummy-remote://';
    $font_file = 'LinLibertine_Rah.ttf';
    $font_name = 'Linux Libertine';

    // Copy all the font files to the test path.
    $handle = opendir(drupal_get_path('module', 'image_effects') . '/tests/fonts/LinLibertineTTF_5.3.0_2012_07_02/');
    while ($file = readdir($handle)) {
      if (preg_match("/\.[ot]tf$/i", $file) == 1) {
        $this->fileSystem->copy(drupal_get_path('module', 'image_effects') . '/tests/fonts/LinLibertineTTF_5.3.0_2012_07_02/' . $file, $font_path, FileSystemInterface::EXISTS_REPLACE);
      }
    }
    closedir($handle);

    // Test the Basic plugin.
    // Add an effect with the font selector.
    $effect = [
      'id' => 'image_effects_module_test_font_selection',
      'data' => [
        'font_uri' => $font_path . $font_file,
      ],
    ];
    $uuid = $this->addEffectToTestStyle($effect);

    // Check that the font name is in the effect summary.
    $this->assertSession()->pageTextContains($font_name);

    // Test the Dropdown plugin.
    // Remove the effect.
    $this->removeEffectFromTestStyle($uuid);

    // Change the settings.
    $config = \Drupal::configFactory()->getEditable('image_effects.settings');
    $config
      ->set('font_selector.plugin_id', 'dropdown')
      ->set('font_selector.plugin_settings.dropdown.path', $font_path)
      ->save();

    // Add an effect with the font selector.
    $effect = [
      'id' => 'image_effects_module_test_font_selection',
      'data' => [
        'font_uri' => $font_file,
      ],
    ];
    $this->addEffectToTestStyle($effect);

    // Check that the font name is in the effect summary.
    $this->assertSession()->pageTextContains($font_name);
  }

}
