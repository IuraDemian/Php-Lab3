@extends('layouts.app')

@section('content')
    <div class="form-container">
        <h1>Додати нового учасника турніра</h1>

        <form method="POST" action="{{ route('tournaments.store') }}">
            @csrf

            <label>Ім'я:</label>
            <input type="text" name="full_name" required>

            <label>Стать:</label>
            <select name="gender" required>
                <option value="чоловік">Чоловік</option>
                <option value="жінка">Жінка</option>
            </select>

            <label>Вік:</label>
            <input type="number" name="age" required>

            <label>Країна:</label>
            <input type="text" name="country" required>

            <label>Оцінка 1:</label>
            <input type="number" name="score1" required>

            <label>Оцінка 2:</label>
            <input type="number" name="score2" required>

            <label>Оцінка 3:</label>
            <input type="number" name="score3" required>

            <button type="submit">Додати учасника</button>
        </form>
    </div>
@endsection
