<?php

/**
 * @file
 * Contains \Drupal\plugins\Plugin\PluginManagerInterface.
 */

namespace Drupal\plugins\Plugin;

interface PluginManagerInterface {

  /**
   * Gets plugins instances.
   *
   * @return \Drupal\plugins\Plugin\PluginInterface[]
   *   An array of \Drupal\plugins\Plugin\PluginInterface objects.
   */
  public function getPluginInstances();

}
