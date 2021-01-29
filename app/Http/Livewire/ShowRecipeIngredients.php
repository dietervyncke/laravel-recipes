<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowRecipeIngredients extends Component
{
    public $amount = 2;

    public $recipe = null;

    protected $queryString = [
        'amount',
    ];

    /**
     * @param $recipe
     */
    public function mount($recipe)
    {
        $this->recipe = $recipe;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.show-recipe-ingredients');
    }
}
