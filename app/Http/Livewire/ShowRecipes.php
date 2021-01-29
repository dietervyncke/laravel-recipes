<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use App\Models\RecipeCategory;
use Livewire\Component;
use Livewire\WithPagination;

class ShowRecipes extends Component
{
    use WithPagination;

    public $categories;

    public $page = 1;

    public $search = '';

    public $perPage = 10;

    public $selectedCategory = null;

    protected $queryString = [
        'selectedCategory' => ['except' => null],
        'search' => ['except' => ''],
        'page' => ['except' => 1],
        'perPage'
    ];

    /**
     * Initial (replaces construct method)
     */
    public function mount()
    {
        $this->categories = RecipeCategory::all();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $recipes = Recipe::visible()
            ->category($this->selectedCategory)
            ->search($this->search)
            ->paginate($this->perPage)
        ;

        $this->resetPage();

        return view('livewire.show-recipes', compact('recipes'));
    }
}
