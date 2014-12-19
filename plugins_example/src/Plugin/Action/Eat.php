<?php

/**
 * @file
 * Contains \Drupal\plugins_example\Plugin\Action\Eat.
 */

namespace Drupal\plugins_example\Plugin\Action;

/**
 * Defines the eat plugin.
 */
$plugin = array('class' => '\Drupal\plugins_example\Plugin\Action\Eat');

class Eat extends ActionBase {

  /**
   * {@inheritdoc}
   */
  public function performAction() {
    return parent::performAction() . ' "Eat"';
  }

}
