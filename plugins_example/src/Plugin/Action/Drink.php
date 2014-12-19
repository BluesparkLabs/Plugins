<?php

/**
 * @file
 * Contains \Drupal\plugins_example\Plugin\Action\Drink.
 */

namespace Drupal\plugins_example\Plugin\Action;

/**
 * Defines the drink plugin.
 */
$plugin = array('class' => '\Drupal\plugins_example\Plugin\Action\Drink');

class Drink extends ActionBase {

  /**
   * {@inheritdoc}
   */
  public function performAction() {
    return parent::performAction() . ' "Drink"';
  }

}
