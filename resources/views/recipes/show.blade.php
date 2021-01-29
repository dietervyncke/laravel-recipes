@extends('layout')

@section('content')

    <div class="content-block">
        <div class="content-block__header">
            <h1 class="title title--secondary">{{ $recipe->title }}</h1>
        </div>
        <div class="content-block__main">

            <div class="content-block__left-column">
                <ul class="key-value-list">
                    @foreach ($recipe->ingredients as $ingredient)
                        <li class="key-value-list__item">
                            {{ $ingredient->name }}<span>{{ $ingredient->amount }} {{ $ingredient->unit }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="content-block__right-column">
                {{ $recipe->preparation }}
            </div>
        </div>
    </div>

@endsection