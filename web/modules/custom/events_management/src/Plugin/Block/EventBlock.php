<?php

namespace Drupal\events_management\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\node\Entity\Node;

/**
 * Provides a block to display the latest 5 events.
 *
 * @Block(
 *   id = "event_block",
 *   admin_label = @Translation("Latest Events Block"),
 * )
 */
class EventBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $query = \Drupal::entityQuery('node')
      ->condition('type', 'event')
      ->condition('status', 1)
      ->sort('created', 'DESC')
      ->range(0, 5);
    $nids = $query->execute();

    $nodes = Node::loadMultiple($nids);

    $events = [];
    foreach ($nodes as $node) {
      $events[] = $node->toLink()->toString();
    }

    return [
      '#theme' => 'item_list',
      '#items' => $events,
      '#title' => $this->t('Latest Events'),
    ];
  }

}
