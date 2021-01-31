<div>
    <fielset>
        <label for="amount">Serves</label>
        <input wire:model="amount" type="number" name="amount" class="field" id="amount" min="1" max="20"/>
    </fielset>

    <ul class="key-value-list">
        @foreach ($recipe->ingredients as $ingredient)
            <li class="key-value-list__item">
                {{ $ingredient->name }}<span>{{ $ingredient->amount*($amount ? $amount : 2) }} {{ $ingredient->unit }}</span>
            </li>
        @endforeach
    </ul>

</div>