<?php

/**
 * @file
 * Contains \Drupal\plugins_example\Plugin\Name\Pablo.
 */

namespace Drupal\plugins_example\Plugin\Name;

class Pablo extends NameBase {

  /**
   * {@inheritdoc}
   */
  public function tellName() {
    return parent::tellName() . ' "Pablo"';
  }

}
