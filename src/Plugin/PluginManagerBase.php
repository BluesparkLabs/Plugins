<?php

/**
 * @file
 * Contains \Drupal\plugins\Plugin\PluginManagerBase.
 */

namespace Drupal\plugins\Plugin;

abstract class PluginManagerBase implements PluginManagerInterface {

  /**
   * The plugin type id.
   *
   * @var string
   */
  protected $pluginType;

  /**
   * The list of instances of this type plugins.
   *
   * @var \Drupal\plugins\Plugin\PluginInterface[]
   */
  protected $instances;

  /**
   * {@inheritdoc}
   */
  public function getPluginInstances() {
    if (!isset($this->instances)) {
      foreach ($this->getPlugins($this->pluginType) as $plugin_id => $plugin) {
        $this->createPluginInstance($plugin_id, $plugin);
      }
    }
    return $this->instances;
  }

  /**
   * {@inheritdoc}
   */
  public function getPluginInstance($plugin_id) {
    if (!isset($this->instances[$plugin_id])) {
      $plugins = $this->getPlugins($this->pluginType);
      $plugin = $plugins[$plugin_id];
      $this->createPluginInstance($plugin_id, $plugin);
    }
    return $this->instances[$plugin_id];
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

  /**
   * Creates a plugin instance.
   *
   * @param string $plugin_id
   *   The plugin ID to instantiate.
   * @param array $plugin
   *   The plugin definition array.
   */
  protected function createPluginInstance($plugin_id, $plugin) {
    /** @var  $class \Drupal\plugins\Plugin\PluginInterface */
    $class = $plugin['class'];
    $instance = $class::createInstance($plugin_id, array('weight' => 100));
    $this->instances[$plugin_id] = $instance;
  }

}
