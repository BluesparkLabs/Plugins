<?php

/**
 * @file
 * Contains \Drupal\plugins_example\Plugin\Action\Drink.
 */

namespace Drupal\plugins_example\Plugin\Action;

class Death extends ActionBase {

  /**
   * {@inheritdoc}
   */
  public function performAction() {
    return parent::performAction() . ' "Death"';
  }

}
