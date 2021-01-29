<div>

    <!-- Filter block -->
    <div class="filter-block">

        <div class="filter-block__item">
            <fieldset class="fieldset">
                <label for="category">Category</label>
                <select class="select" wire:model="selectedCategory" id="category">
                    <option value="" selected>--Choose category--</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </fieldset>
        </div>

        <div class="filter-block__item">
            <fieldset class="fieldset">
                <label for="search">Search</label>
                <input wire:model="search" type="text" class="field" id="search">
            </fieldset>
        </div>

        <div class="filter-block__item">
            <fieldset class="fieldset">
                <label for="perPage">Per page</label>
                <select wire:model="perPage" id="perPage" class="select">
                    <option value="10" selected>10</option>
                    <option value="20" selected>20</option>
                    <option value="50" selected>50</option>
                </select>
            </fieldset>
        </div>
    </div>

    <!-- Item grid -->
    <div class="item-grid">

        @foreach ($recipes as $recipe)
            <a class="item-grid__item" itle="{{ $recipe->title }}" href="{{ route('recipes.show', $recipe) }}">
                <div class="card">
                    <span class="card__title">
                        {{ $recipe->title }}
                    </span>
                </div>
            </a>
        @endforeach

    </div>

    <div class="pagination">
        {{ $recipes->links() }}
    </div>

</div>
