<div class="main-container">
    <div class="editor-container editor-container_inline-editor" id="editor-container">
        <div class="editor-container__editor">
            <h1>{{ $title }}</h1>
            <livewire:jodit-text-editor wire:model.live="body" />
            <button class="save-button" wire:click="save">Guardar</button>
        </div>
    </div>
</div>
