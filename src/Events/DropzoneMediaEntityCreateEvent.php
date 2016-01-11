<?php

namespace Drupal\dropzonejs\Events;

use Drupal\Core\Form\FormState;
use Drupal\file\Entity\File;
use Drupal\media_entity\MediaInterface;
use Symfony\Component\EventDispatcher\Event;

class DropzoneMediaEntityCreateEvent extends Event {

  protected $mediaEntity;

  protected $element;

  protected $form;

  protected $formState;

  protected $file;

  public function __construct(MediaInterface $media_entity, $element, $form, FormState $form_state, File $file) {
    $this->mediaEntity = $media_entity;
    $this->element = $element;
    $this->form = $form;
    $this->formState = $form_state;
    $this->file = $file;
  }

  public function __get($name) {
    if (isset($this->$name)) {
      return $this->$name;
    }
    return FALSE;
  }

  public function setMediaEntity(MediaInterface $media_entity) {
    $this->mediaEntity = $media_entity;
  }

}