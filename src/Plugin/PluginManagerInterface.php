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

  /**
   * Gets plugins instance.
   *
   * @var string $plugin_id
   *   The desired plugin id
   *
   * @return \Drupal\plugins\Plugin\PluginInterface
   *   The \Drupal\plugins\Plugin\PluginInterface requested.
   */
  public function getPluginInstance($plugin_id);

}
