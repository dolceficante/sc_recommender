<?php

/**
 * @file
 * Contains \Drupal\sc_recommender\Controller\SCRecommenderController.
 */

namespace Drupal\sc_recommender\Controller;

use Drupal\Core\Controller\ControllerBase;

class SCRecommenderController extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Hello, World!'),
    );
  }
}
