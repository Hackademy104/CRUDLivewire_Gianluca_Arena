<div>
    {{-- Be like water. --}}
    <form wire:submit.prevent='edit'>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input wire:model.live='title' type="text" class="form-control" id="title" placeholder="Dentista...">
            
        </div>
        <div class="form-floating mb-3">
            <textarea wire:model.live='description' class="form-control" id="description" style="height: 100px"></textarea>
            <label for="description">Descrizione</label>
            
        </div>

        <button type='submit' class="btn btn-primary">Conferma</button>
    </form>
</div>
</div>
