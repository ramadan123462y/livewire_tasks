@if ($isopen)
<div wire:ignore.self class="modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Name Product:</label>
                    <input type="text" id="name" wire:model="name" class="form-control" >
                    @error('name') <span   class="error" style="color:red" >{{ $message }}</span> @enderror
                  </div>
                  <div class="mb-3">

                    <input type="text" id="id_product" hidden    wire:model="id_product" class="form-control" >
                  </div>
                  <div class="mb-3">
                    <label for="message-text" class="col-form-label">Price Product:</label>
                    <textarea class="form-control"  wire:model="price" id="price" ></textarea>
                    @error('price') <span   class="error" style="color:red" >{{ $message }}</span> @enderror
                  </div>
                  <div class="mb-3">
                      <label for="message-text" class="col-form-label">Catogery Product:</label>
                  <select class="form-select" wire:model="catogery_id" id="catogery_id"  aria-label="Default select example">
                      <option  selected>Select Catogery</option>
                      @php
                          $catogeries=\App\Models\Catogery::get()
                      @endphp

                      @foreach ($catogeries as $cat)

                      <option   value="{{ $cat->id }}">{{ $cat->name }}</option>
                      @endforeach

                    </select>
                    @error('catogery_id') <span   class="error" style="color:red" >{{ $message }}</span> @enderror
                    <div class="modal-footer">
                        <button type="button"  class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                        <button type="button"  wire:click="update" class="btn btn-outline-primary  button_update">Add/update Product</button>
                      </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
@endif
