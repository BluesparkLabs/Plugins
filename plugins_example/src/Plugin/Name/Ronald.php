<?php

/**
 * @file
 * Contains \Drupal\plugins_example\Plugin\Name\Ronald.
 */

namespace Drupal\plugins_example\Plugin\Name;

class Ronald extends NameBase {

  /**
   * {@inheritdoc}
   */
  public function tellName() {
    return parent::tellName() . ' "Ronald"';
  }

}
