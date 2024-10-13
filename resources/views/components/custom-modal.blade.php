@props([
    'isOpenModal' => false,
    'id' => '',
    'title' => '',
    'submit' => '#',
    'name' => null,
    'class' => 'modal-dialog-vertical',
])
@if ($isOpenModal)
  <div class="modal fade show d-block" id="{{ $id }}" name="{{ $id }}-modal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog" wire:igore.self>
  @else
    <div class="modal fade d-none" id="{{ $id }}" name="{{ $id }}-modal" tabindex="-1"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
@endif


<div class="modal-dialog {{ $class }}" wire:click.outside='closeModal()'>
  <div class="modal-content" style="padding: 35px">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">{{ $title }}</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="modal" aria-label="Close"
        wire:click="closeModal()"></button>
    </div>
    <div class="offcanvas-body">
      <form class="row g-3" style="margin-top: 60px" wire:submit="{{ $submit }}">
        @csrf



        {{ $body }}
        <div class="col-12" style="margin-top: 45px;">
          @isset($footer)
            {{ $footer }}
          @else
            <button type="button" class="btn btn-light" wire:click="closeModal()" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" id="add-btn" wire:loading.attr="disabled"
              @if ($name) wire:target='{{ $name }}' @endif>Save</button>
          @endisset
        </div>

      </form>
    </div>
  </div>
</div>
</div>
