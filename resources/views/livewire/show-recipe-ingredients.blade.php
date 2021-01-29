<div>
    <input wire:model="amount" type="number" name="amount">

    <ul class="key-value-list">
        @foreach ($recipe->ingredients as $ingredient)
            <li class="key-value-list__item">
                {{ $ingredient->name }}<span>{{ $ingredient->amount*($amount ? $amount : 2) }} {{ $ingredient->unit }}</span>
            </li>
        @endforeach
    </ul>

</div>