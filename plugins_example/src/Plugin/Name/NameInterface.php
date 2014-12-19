<?php

/**
 * @file
 * Contains \Drupal\plugins_example\Plugin\Name\NameInterface.
 */

namespace Drupal\plugins_example\Plugin\Name;

use Drupal\plugins\Plugin\PluginInterface;

/**
 * Defines an interface for plugins defining person actions.
 */
interface NameInterface extends PluginInterface {

  /**
   * Tells your name.
   *
   * @return string
   *   The person name.
   */
  public function tellName();

}
