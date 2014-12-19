<?php

/**
 * @file
 * Contains \Drupal\plugins_example\Plugin\Action\ActionBase.
 */

namespace Drupal\plugins_example\Plugin\Action;

use Drupal\plugins\Plugin\PluginBase;

/**
 * Defines a base class for plugins defining person actions.
 */
abstract class ActionBase extends PluginBase implements ActionInterface {

  /**
   * {@inheritdoc}
   */
  public function performAction() {
    return 'Performing action';
  }

}
