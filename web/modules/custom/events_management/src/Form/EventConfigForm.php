<?php

namespace Drupal\events_management\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class EventConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['events_management.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'events_management_config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('events_management.settings');

    $form['show_past_events'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Show Past Events'),
      '#default_value' => $config->get('show_past_events'),
    ];

    $form['events_per_page'] = [
      '#type' => 'number',
      '#title' => $this->t('Number of events to display per page'),
      '#default_value' => $config->get('events_per_page') ?? 5,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('events_management.settings')
      ->set('show_past_events', $form_state->getValue('show_past_events'))
      ->set('events_per_page', $form_state->getValue('events_per_page'))
      ->save();

    // Log configuration changes
    \Drupal::database()->insert('events_management_log')
      ->fields([
        'user_id' => \Drupal::currentUser()->id(),
        'changed' => time(),
      ])
      ->execute();

    parent::submitForm($form, $form_state);
  }

}
