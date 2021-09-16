<?php

namespace Drupal\drupal_train_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Drupal Train Module routes.
 */
class DrupalTrainModuleController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
