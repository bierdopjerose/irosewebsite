@extends('main')

@section('content')
    <form action="/payment" method="post">
        <select id="points" name="points">
            <option value="100">100RP</option>
            <option value="200">200RP</option>
            <option value="500">500RP</option>
            <option value="1000">1000RP</option>

            <input type="submit" value="submit">
        </select>
    </form>
@endsection