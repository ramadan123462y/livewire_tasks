<?php

namespace App\Http\Livewire;

use App\Models\Catogery;
use App\Models\Product;
use Livewire\Component;

class Filter extends Component
{

public $products=[];

public $Products_Catogery1;
public $Products_Catogery2;

public $all_products;

     public function render(){
        return view('livewire.filter');
    }


            public function Products_Catogery(){

            if( $this->Products_Catogery2==true&&$this->Products_Catogery1==true){
                $this->products=Product::all();

            }elseif($this->Products_Catogery2==true){

                $this->products=Catogery::find(2)->products;
            }elseif($this->Products_Catogery1==true){

                $this->products=Catogery::find(1)->products;


            }else{
                $this->products=Product::all();

            }
            }


}
