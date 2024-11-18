<?php

namespace App\Http\Livewire\Transactions;

use Livewire\Component;
use App\Services\Validation\v1\Transaction\AddTransactionValidation;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Validation\Rule;

class ListTransactions extends Component
{
    public $state = [];

    public function addTransaction()
    {
        $validator = Validator::make($this->state, [
            'amount' => "required|numeric|digits_between:1,9",
            'name' => "required|alpha",
            'description' => "required|regex:/^[a-zA-Z0-9.!,:;+\/' -]+$/|max:1000",
            'transtype' => [
                'required',
                Rule::in(["Money Payed Out", "Money Received", "Service Rendered On Credit", "Service Received On Credit", "Goods Sold On Credit", "Goods Received On Credit"]),
            ]
        ]);
        
        if (!$validator->fails())
        {
            dd('passed');         
        }
        else 
        {
            return response()->json(['errors' => $validator->errors()->all()]);
        }       
        //$this->dispatchBrowserEvent('show-slider');
    }
    
    public function render()
    {
        return view('livewire.transactions.list-transactions');
    }
}
