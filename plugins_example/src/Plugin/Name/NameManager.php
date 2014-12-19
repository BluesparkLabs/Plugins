<?php

/**
 * @file
 * Contains \Drupal\plugins_example\Plugin\Emotion\NameManager.
 */

namespace Drupal\plugins_example\Plugin\Name;

use Drupal\plugins\Plugin\PluginManagerBase;

/**
 * Defines the plugin manager for person actions.
 */
class NameManager extends PluginManagerBase {

  /**
   * {@inheritdoc}
   */
  public function __construct() {
    $this->pluginType = 'example_name';
  }

}
