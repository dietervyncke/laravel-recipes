@extends('layout')

@section('content')

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

@endsection