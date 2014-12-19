<?php

/**
 * @file
 * Contains \Drupal\plugins_example\Plugin\Action\ActionBase.
 */

namespace Drupal\plugins_example\Plugin\Action;

use Drupal\plugins\Plugin\PluginBase;
use Drupal\rsrv\Robot\ActionInterface;

/**
 * Defines a base class for plugins defining person actions.
 */
class ActionBase extends PluginBase implements ActionInterface {

  /**
   * {@inheritdoc}
   */
  public function performAction() {
    return 'Performing action';
  }

}
