<div>




    <div>
        <input type="checkbox" wire:model="Products_Catogery1" wire:click="Products_Catogery" >Products_Catogery1
        <br>
        <br>
        <input type="checkbox" wire:model="Products_Catogery2" wire:click="Products_Catogery" >Products_Catogery2
        <br>
        <br>

    </div>


    <div class="container text-center">
        <div class="row">

{{-- for --}}
@php
@endphp
@foreach ($products as $pro )


          <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $pro->name }} </h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card Price</h6>
                  <p class="card-text">{{ $pro->price }}</p>

                </div>
            </div>
          </div>
@endforeach
{{--end_ for --}}
     </div>
      </div>









</div>
