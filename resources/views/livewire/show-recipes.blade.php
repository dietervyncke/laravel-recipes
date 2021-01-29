<div>

    <select wire:model="selectedCategory">
        <option value="" selected>--Choose category--</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
    </select>

    <input wire:model="search" type="text">

    <select wire:model="perPage">
        <option value="10" selected>10</option>
        <option value="20" selected>20</option>
        <option value="50" selected>50</option>
    </select>

    <div class="item-grid">

        @foreach ($recipes as $recipe)
            <div class="item-grid__item">
                <a class="card" title="{{ $recipe->title }}" href="{{ route('recipes.show', $recipe) }}">
                    <span class="card__title">
                        {{ $recipe->title }}
                    </span>
                </a>
            </div>
        @endforeach

    </div>

    {{ $recipes->links() }}
</div>
