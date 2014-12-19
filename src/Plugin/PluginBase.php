<?php

/**
 * @file
 * Contains \Drupal\plugins\Plugin\PluginBase.
 */

namespace Drupal\plugins\Plugin;

/**
 * A base plugin for robot plugins.
 */
abstract class PluginBase implements PluginInterface {

  /**
   * The plugin id.
   *
   * @var string
   */
  protected $id;

  /**
   * The plugin title.
   *
   * @var string
   */
  protected $title;

  /**
   * The plugin configuration.
   *
   * @var array
   */
  protected $configuration = array();

  /**
   * Default configuration.
   *
   * @var array
   */
  protected $defaultConfiguration = array(
    'weight' => 0,
  );

  /**
   * Constructs the robot plugin object.
   *
   * @param string $id
   *   The plugin id.
   * @param array $configuration
   *   (optional) The plugin configuration.
   */
  public function __construct($id, array $configuration = array()) {
    $this->id = $id;
    $this->setConfiguration($configuration);
  }

  /**
   * {@inheritdoc}
   */
  public static function createInstance($id, array $configuration) {
    return new static($id, $configuration);
  }

  /**
   * {@inheritdoc}
   */
  public function setConfiguration(array $configuration = array()) {
    if (empty($configuration)) {
      $this->configuration = $this->defaultConfiguration;
    }
    else {
      $this->configuration = $configuration;
    }
  }

  /**
   * {@inheritdoc}
   */
  public function getConfiguration($key = NULL) {
    if ($key) {
      if (isset($this->configuration[$key])) {
        return $this->configuration[$key];
      }
      return isset($this->defaultConfiguration[$key]) ? $this->defaultConfiguration[$key] : FALSE;
    }
    return $this->configuration;
  }

  /**
   * {@inheritdoc}
   */
  public function getId() {
    return $this->id;
  }

  /**
   * {@inheritdoc}
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsFormSubmit(&$form, &$form_state) {
    // Empty definition by default.
  }

}
