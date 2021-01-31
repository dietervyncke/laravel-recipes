@extends('layout')

@section('content')

    <div class="content-block">
        <div class="content-block__main">

            <div class="content-block__left-column">
                @livewire('show-recipe-ingredients', ['recipe' => $recipe])
            </div>

            <div class="content-block__right-column">
                <div class="content-block__header">
                    <h1 class="title title--secondary">{{ $recipe->title }}</h1>
                </div>
                {{ $recipe->duration }}<br />
                {{ $recipe->preparation }}
            </div>
        </div>

        <div class="content-block__footer">
            <a href="{{ route('recipes.index') }}" class="button" title="Back to overview">
                Back to overview
            </a>
        </div>
    </div>

    <div class="content-block">

        <div class="content-block__header">
            <h1 class="title title--secondary">Related recipes</h1>
        </div>

        <div class="content-block__main">

            <div class="item-grid">

                @foreach ($relatedRecipes as $recipe)
                    <div class="item-grid__item">
                        <a class="card" title="{{ $recipe->title }}" href="{{ route('recipes.show', $recipe) }}">
                            <span class="card__title">
                                {{ $recipe->title }}
                            </span>
                        </a>
                    </div>
                @endforeach

            </div>

        </div>
    </div>

@endsection