<?php

/**
 * @file
 * Contains \Drupal\sc_recommender\Controller\SCRecommenderController.
 */

namespace Drupal\sc_recommender\Controller;

use Drupal\Core\Controller\ControllerBase;
use GuzzleHttp\Client;

class SCRecommenderController extends ControllerBase {
  public function content() {
    $client = new Client();
    $response = $client->get('http://localhost:8080/recommender/coleparmer/json/', array(
      'headers' => array('Accept' => 'application/hal+json')
    ));
    $json = $response->getBody();
    //print_r($response->json());
    return array(
        '#type' => 'markup',
        //'#markup' => $this->t('Hello, World!'),
        '#markup' => $json,
    );
  }
}
