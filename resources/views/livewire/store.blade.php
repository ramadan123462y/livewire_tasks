@if ($isopen)


    <div wire:ignore.self class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Name Product:</label>
                  <input type="text"  wire:model="name" class="form-control" id="recipient-name">
                  @error('name') <span   class="error" style="color:red" >{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">

                  <input type="text" hidden  wire:model="product_id" class="form-control" >
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Price Product:</label>
                  <textarea class="form-control" wire:model="price"  id="message-text"></textarea>
                  @error('price') <span class="error"  style="color:red" >{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Catogery Product:</label>
                <select class="form-select" wire:model="catogery_id"  aria-label="Default select example">
                    <option  selected>Select Catogery</option>
                    @php
                        $catogeries=\App\Models\Catogery::get()
                    @endphp

                    @foreach ($catogeries as $cat)

                    <option   value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach


                  </select>
                  @error('catogery_id') <span style="color:red" class="error">

                    {{ $message }}

                </span> @enderror

                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button"  class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              <button type="button" id="button" wire:click="store" class="btn btn-outline-primary">Add/update Product</button>
            </div>
          </div>
        </div>
      </div>
      @endif
