@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ route('habits.create') }}" class="btn btn-primary">
                {{ __('habits.create') }}
            </a>
            <table class="table">
                <thead>
                    <tr>
                        <th>{{ __('habit.title') }}</th>
                        <th>{{ __('habit.regularity') }}</th>
                        <th>{{ __('habit.handle') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($habits as $habit)
                    <tr>
                        <td>{{ $habit->title }}</td>
                        <td>{{ $habit->regularity }}</td>
                        <td>
                            <a href="{{ route('habits.edit', $habit) }}" class="btn btn-primary">
                                {{ __('habits.edit') }}
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
