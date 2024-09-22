@props([
    'isOpenModal' => false,
    'id' => '',
    'title' => '',
    'submit' => '#',
    'name' => null,
    'class' => 'modal-dialog-vertical',
])
@if ($isOpenModal)
  @script
    <script>
      document.body.className += ' modal-open';
    </script>
  @endscript
  <div class="modal fade show d-block modal-backdrop" id="{{ $id }}" name="{{ $id }}-modal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  @else
    <div class="modal fade d-none" id="{{ $id }}" name="{{ $id }}-modal" tabindex="-1"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
@endif


<div class="modal-dialog {{ $class }}" wire:click.outside='closeModal()'>
  <div class="modal-content p-2">
    <div class="modal-header">
      <h5 class="modal-title">{{ $title }}</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="modal" aria-label="Close"
        wire:click="closeModal()"></button>
    </div>
    <form class="row g-3" wire:submit="{{ $submit }}">
      @csrf
      <div class="modal-body">
        {{ $body }}

        <div class="col-12 text-end" style="margin-top: 45px;">
          @isset($footer)
            {{ $footer }}
          @else
            <button type="button" class="btn btn-light" wire:click="closeModal()" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" id="add-btn" wire:loading.attr="disabled"
              @if ($name) wire:target='{{ $name }}' @endif>Save</button>
          @endisset
        </div>
      </div>
   
    </form>
  </div>
</div>
</div>
