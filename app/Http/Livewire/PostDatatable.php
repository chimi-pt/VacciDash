<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostDatatable extends Component
{
    use WithPagination;
    public $headers;

    private function headerConfig(){
        return [
            'vaccine_id' => 'ID',
            'product_name' => 'Product Name',
            'lot_number' => 'Lot Number',
            'amount(vials)' => 'Amount In Vials',
            'expiry_date' => 'Expiry Date',
            'created_at' => 'Created At',                     
        ];
    }

    public function mount()
    {
        $this->headers = $this->headerConfig();
    }

    private function resultData()
    {
        return Post::search('')->simplePaginate(5);
    }

    public function render()
    {
        return view('livewire.post-datatable', [
            'data' => $this->resultData()
        ]);
    }
}
