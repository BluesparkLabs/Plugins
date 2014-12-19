<?php

/**
 * @file
 * Contains \Drupal\plugins_example\Plugin\Name\NameBase.
 */

namespace Drupal\plugins_example\Plugin\Name;

use Drupal\plugins\Plugin\PluginBase;

/**
 * Defines a base class for plugins defining person actions.
 */
abstract class NameBase extends PluginBase implements NameInterface {

  /**
   * {@inheritdoc}
   */
  public function tellName() {
    return 'My name is:';
  }

}
