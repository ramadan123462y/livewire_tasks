<?php

namespace App\Http\Livewire;

use App\Models\Catogery;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Product extends Component
{
    public $name;
    public $search;
    public $price;
    public $id_product;
    public $catogery_id;
    public $isopen=true;
    public $products=[];
    public $delete_all=[];

    protected $rules = [
        'name' => 'required|min:6',
        'price' => 'required|min:6',
        'catogery_id'=>'required'

    ];

    protected $messages =[
             'name.required' => ' برجاء  ادخال الاسم  ',
             'price.required' => '  برجاء  ادخال السعر ',
             'catogery_id.required' =>  'برجاء ادخال القسم'
    ];

    public function render()
    {
       $this->products=\App\Models\Product::where('name','like',"%".$this->search."%")->orwhere('price','like',"%".$this->search."%")->
        orwhere('catogery_id','like',"%".$this->search."%")->get();
        $search=$this->search;
        return view('livewire.product');
    }
    public function delete_all_func(){
        DB::table('products')->whereIn('id',$this->delete_all)->delete();
        session()->flash('delete_all',"تم حذف البيانات المحدده  بنجاح");

        $this->delete_all=[];
    }



    public function updated($name)
    {
        $this->validateOnly($name);
    }
public function emptyed(){

    $this->name='';
    $this->price='';
    $this->catogery_id='';

}




public function store(){

        $this->validate();
        Catogery::find($this->catogery_id)->products()->create([
            'name'=>$this->name,
            'price'=>$this->price,

        ]);


        session()->flash('success',"تم تخذين البيانات بنجاح");
        $this->emptyed();

        $this->products=\App\Models\Product::all();

}
    public function edit($id_product1){

        $product=\App\Models\Product::find($id_product1);
        $this->name=$product->name;
        $this->price=$product->price;
        $this->catogery_id=$product->catogery->id;
        $this->id_product=$product->id;
    }

    public function update(){
                $this->validate();

        \App\Models\Product::find($this->id_product)->update([

            'name'=>$this->name,
            'price'=>$this->price,
            'catogery_id'=>$this->catogery_id,

        ]);

        session()->flash('success_update',"تم تحديث البيانات بنجاح");
        $this->emptyed();
        $this->products=\App\Models\Product::all();

    }
    public function delete(){

        $product=\App\Models\Product::find($this->id_product)->delete();

        session()->flash('success_delete',"تم حذف البيانات بنجاح");
        // $this->products=\App\Models\Product::all();
    }
    public function delete_id($id){

        $this->id_product=$id;

    }




    }








