<?php

namespace Drupal\drupal_train_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

/**
 * Returns responses for Drupal Train Module routes.
 */
class DrupalTrainModuleController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $query = \Drupal::entityQuery('node')->condition('type', 'bol_etape');
    $nids = $query->execute();
    $node_storage = \Drupal::entityTypeManager()->getStorage('node');

    /**
     * @var Node[] $stepsNodes
     */
    $stepsNodes = $node_storage->loadMultiple($nids);
    $stepsNodeBis = $stepsNodes;

    $step = array_pop($stepsNodeBis);
    $answersId = $step->get('field_questions')->getValue();

    $answers = [];
    foreach ($answersId as $answer){
      $answers[] = Node::load($answer['target_id']);
    }

    return [
      '#theme' => 'my_template',
      '#data' => [
          'test_value' => $this->t('Test Value'),
          'form_steps' => $stepsNodes,
          'currentStep' => $step,
          'step_answers' => $answers
      ],
      '#attached' => [
        'library' => [
          'drupal_train_module/drupal_train_module',
        ],
      ],
    ];

  }

}
