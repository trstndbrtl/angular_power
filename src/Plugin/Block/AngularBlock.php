<?php

/**
 * @file
 * Contains \Drupal\angular_power\Plugin\Block\AngularBlock.
 */

namespace Drupal\angular_power\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block for AngularJS.
 *
 * @Block(
 *   id = "angular_power_block",
 *   admin_label = @Translation("AngularJS Block")
 * )
 */
class AngularBlock extends BlockBase {

  public function build() {
    return [
      'input' => [
        '#type' => 'textfield',
        '#title' => $this->t('Name'),
        '#placeholder' => $this->t('Enter a name here'),
        '#attributes' => [
          'ng-model' => 'yourName',
        ],
      ],
      'name' => [
        '#markup' => '<hr><h1>Hello {{yourName}}!</h1>',
      ],
      '#attached' => [
        'library' => [
          'angular_power/angular',
        ],
      ],
    ];
  }

}