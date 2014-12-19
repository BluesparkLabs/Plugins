<?php

/**
 * @file
 * Contains \Drupal\plugins\Plugin\PluginManagerBase.
 */

namespace Drupal\plugins\Plugin;

abstract class PluginManagerBase implements PluginManagerInterface {

  /**
   * @var string
   */
  protected $pluginType;

  /**
   * @var \Drupal\plugins\Plugin\PluginInterface[]
   */
  protected $instances;

  /**
   * Gets plugins instances.
   *
   * @return \Drupal\plugins\Plugin\PluginInterface[]
   *   An array of \Drupal\plugins\Plugin\PluginInterface objects.
   */
  public function getPluginInstances() {
    if (!isset($this->instances)) {
      foreach ($this->getPlugins($this->pluginType) as $plugin_id => $plugin) {
        /** @var  $class \Drupal\plugins\Plugin\PluginBase */
        $class = $plugin['class'];
        $instance = $class::createInstance($plugin_id, array('weight' => 100));
        $this->instances[] = $instance;
      }
    }
    return $this->instances;
  }

  /**
   * Load the ctools plugins.
   *
   * @param string $type
   *   The plugin type.
   *
   * @return array
   *   An array of ctools plugin items.
   */
  protected function getPlugins($type) {
    ctools_include('plugins');
    return ctools_get_plugins('plugins', $type);
  }

}
