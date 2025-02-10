<div>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <form wire:submit.prevent="updateArticle" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo*</label>
                        <input wire:model.blur="title" type="text" class="form-control" id="title" aria-describedby="textlHelp">
                        <div>
                            @error('title') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo*</label>
                        <input wire:model.blur="subtitle" type="text" class="form-control" id="subtitle" aria-describedby="textlHelp">
                        <div>
                            @error('subtitle') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="body" class="form-label">Contenuto dell'articolo*</label>
                        <textarea wire:model.blur="body" type="text" class="form-control" id="body" aria-describedby="textlHelp"></textarea>
                        <div>
                            @error('body') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="newImg" class="form-label">Modifica Immagine</label>
                        <input type="file" id="newImg" wire:model="newImg" class="form-control">
                        @error('newImg') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Modifica</button>
                </form>
                
                @if (session('message'))
                    <div class="alert alert-success mt-3">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
