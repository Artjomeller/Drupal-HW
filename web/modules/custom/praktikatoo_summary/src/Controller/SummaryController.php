<?php

namespace Drupal\praktikatoo_summary\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 */
class SummaryController extends ControllerBase {

  /**
   */
  public function summary() {
    return [
      '#theme' => 'praktikatoo_summary',
      '#aeg' => '3 tundi',
      '#kogemus' => 'Pole varem Drupaliga töötanud',
      '#keerulisim' => 'Docker seadistamine ja moodulite integratsioon',
      '#oppimised' => 'Drupal arhitektuur, moodulite arendus, Docker, PHP',
      '#kuupaev' => date('d.m.Y'),
    ];
  }

}
