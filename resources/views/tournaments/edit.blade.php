@extends('layouts.app')

@section('content')
    <div class="form-container">
        <h1>Редагування учасника турніра</h1>

        <form method="POST" action="{{ route('tournaments.update', $tournament->id) }}">
            @csrf
            @method('PUT')

            <label>Ім'я:</label>
            <input type="text" name="full_name" value="{{ $tournament->full_name }}" required>

            <label for="gender">Стать</label>
            <select name="gender" id="gender" required>
                <option value="чоловік" {{ $tournament->gender == 'чоловік' ? 'selected' : '' }}>Чоловік</option>
                <option value="жінка" {{ $tournament->gender == 'жінка' ? 'selected' : '' }}>Жінка</option>
            </select>

            <label>Вік:</label>
            <input type="number" name="age" value="{{ $tournament->age }}" required>

            <label>Країна:</label>
            <input type="text" name="country" value="{{ $tournament->country }}" required>

            <label>Оцінка 1:</label>
            <input type="number" name="score1" value="{{ $tournament->score1 }}" required>

            <label>Оцінка 2:</label>
            <input type="number" name="score2" value="{{ $tournament->score2 }}" required>

            <label>Оцінка 3:</label>
            <input type="number" name="score3" value="{{ $tournament->score3 }}" required>

            <button type="submit">Змінити учасника</button>
        </form>
    </div>
@endsection
