@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Турнір</h1>


    <form method="GET" action="{{ route('tournaments.filter') }}">
        <div>
            <label>Країна:</label>
            <input type="text" name="country" placeholder="Введіть країну">
        </div>
        <div>
            <label>Мінімальний вік:</label>
            <input type="number" name="min_age" min="0" placeholder="Введіть мінімальний вік">
        </div>
        <button type="submit">Переглянути</button>
    </form>

    <table>
        <thead>
        <tr>
            <th>Айді</th>
            <th>Ім'я</th>
            <th>Стать</th>
            <th>Вік</th>
            <th>Країна</th>
            <th>Оцінка 1</th>
            <th>Оцінка 2</th>
            <th>Оцінка 3</th>
            <th>Дії</th>
        </tr>
        </thead>

        <tbody>
        @foreach($tournaments as $tournament)
            <tr>
                <td>{{ $tournament->id }}</td>
                <td>{{ $tournament->full_name }}</td>
                <td>{{ $tournament->gender }}</td>
                <td>{{ $tournament->age }}</td>
                <td>{{ $tournament->country }}</td>
                <td>{{ $tournament->score1 }}</td>
                <td>{{ $tournament->score2 }}</td>
                <td>{{ $tournament->score3 }}</td>
                <td><a href="{{ route('tournaments.edit', $tournament->id) }}" class="btn">Редагувати</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('tournaments.create') }}" class="btn">Додати нового учасника</a>
</div>
@endsection
