<?php

/**
 * @file
 * Contains \Drupal\plugins_example\Plugin\Action\ActionInterface.
 */

namespace Drupal\plugins_example\Plugin\Action;

use Drupal\plugins\Plugin\PluginInterface;

/**
 * Defines an interface for plugins defining person actions.
 */
interface ActionInterface extends PluginInterface {

  /**
   * Executes and action.
   *
   * @return string
   *   The result of the action.
   */
  public function performAction();

}
