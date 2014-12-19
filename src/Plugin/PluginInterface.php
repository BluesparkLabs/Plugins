<?php

/**
 * @file
 * Contains \Drupal\plugins\Plugin\PluginInterface.
 */

namespace Drupal\plugins\Plugin;

/**
 * Defines an interface for plugins defining robot plugins.
 */
interface PluginInterface {

  /**
   * Sets the plugin configuration.
   *
   * @param array $configuration
   *   (optional) The plugin configuration. If an empty array is passed the
   *   plugin should set its own default configuration.
   */
  public function setConfiguration(array $configuration = array());

  /**
   * Gets the plugin configuration.
   *
   * @param string $key
   *   (Optional) The configuration key. Defaults to NULL. If not provided,
   *   should return all configuration values.
   *
   * @return array|mixed
   *   The configuration value or values.
   */
  public function getConfiguration($key = NULL);

  /**
   * Returns the plugin id.
   *
   * @return string
   *   The plugin id.
   */
  public function getId();

  /**
   * Returns the plugin title.
   *
   * @return string
   *   The plugin title.
   */
  public function getTitle();

  /**
   * Creates an instance of this plugin.
   *
   * @param string $id
   *   The plugin id.
   * @param array $configuration
   *   The plugin configuration.
   *
   * @return \Drupal\plugins\Plugin\PluginInterface
   *   An object implementing Drupal\plugins\Plugin\PluginInterface.
   */
  public static function createInstance($id, array $configuration);

}
