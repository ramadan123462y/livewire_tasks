<div>


    {{-- ------------div --}}
    <button type="button" class="btn btn-outline-dark"
    data-bs-toggle="modal" data-bs-target="#exampleModal" >Add Product</button>

<br>
@if ($delete_all)
<button type="button" class="btn btn-outline-danger "  wire:click="delete_all_func"   >
    Delete({{count($delete_all)  }})
   </button>
@endif
<br>
<form class="ml-auto">
  <div class="form-group">
    <input type="search" wire:model="search" class="form-control" placeholder="Search...">
  </div>
</form>
{{ $search }}
@include('livewire.store')
      @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('success') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
    @endif
      @if (session()->has('delete_all'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('delete_all') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
    @endif
      @if (session()->has('success_update'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('success_update') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
    @endif
      @if (session()->has('success_delete'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('success_delete') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
    @endif
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
@foreach ($products as $pro )

<tr>
    <td><input type="checkbox" value="{{ $pro->id  }}" wire:model="delete_all" ></td>
    <td scope="row">{{ $pro->id }}</td>
    <td >{{ $pro->name }}</td>
    <td>{{ $pro->price }}</td>
<td><button type="button"   class="btn btn-outline-warning edit"
    data-bs-toggle="modal"  wire:click="edit({{ $pro->id   }})"   data-bs-target="#exampleModal2" >Eit</button>

</td>
<td>
    <button type="button" class="btn btn-outline-danger "  wire:click="delete_id({{ $pro->id }})"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
   Delete
  </button></td>

</tr>
@endforeach
        </tbody>
      </table>
@include('livewire.update')
@include('livewire.delete')
{{-- div2 --}}
</div>
