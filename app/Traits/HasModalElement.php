<?php

namespace App\Traits;

use Livewire\Concerns\InteractsWithProperties;

trait HasModalElement
{
  use InteractsWithProperties;

  public $isOpenModal, $resetExceptArr = [];
  public function resetExceptModal(array $resetExceptArr)
  {
    $this->resetExceptArr = $resetExceptArr;
  }
  public function closeModal(string $modalName = '')
  {

    if ($modalName) {
      $this->isOpenModal[$modalName] = false;
    } else {
      $this->isOpenModal = false;
    }

    $this->resetExcept($this->resetExceptArr);

    $this->resetErrorBag();
  }
  public function openModal(string $modalName = '')
  {

    if ($modalName) {
      $this->isOpenModal[$modalName] = true;
    } else {
      $this->isOpenModal = true;
    }
  }
}
