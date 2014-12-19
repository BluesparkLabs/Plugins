<?php

/**
 * @file
 * Contains \Drupal\plugins_example\Plugin\Action\ActionManager.
 */

namespace Drupal\plugins_example\Plugin\Action;

use Drupal\plugins\Plugin\PluginManagerBase;

/**
 * Defines the plugin manager for person actions.
 */
class ActionManager extends PluginManagerBase {

  /**
   * {@inheritdoc}
   */
  public function __construct() {
    $this->pluginType = 'Plugin\Action';
  }

}
