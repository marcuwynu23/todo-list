@extends('components.layout')

@section('page-title', 'List of Todo')
@section('content')
    <div class="container todo-container p-3">
        <p>TODO List</p>
        @if ($todos)
            <table class="table table-responsive table-borderless">
                <thead>
                    <th>#</th>
                    <th>title</th>
                    <th>content</th>
                    <th>status</th>
                    <th>Options</th>
                </thead>
                <tbody>
                    @foreach ($todos as $todo)
                        <tr>
                            <td>{{ $todo->id }}</td>
                            <td>{{ $todo->title }}</td>
                            <td>{{ $todo->content }}</td>
                            <td>{{ $todo->status }}</td>
                            <td>
                                <span class="options">
                                    <form method="post" action="{{ route('todo.destroy', $todo) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-primary btn-sm d-inline-block"
                                            href="{{ route('todo.edit', $todo) }}">Edit</a>
                                        <button class="btn btn-primary btn-sm d-inline-block">Delete</button>
                                    </form>
                                </span>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div v-else>
                <p class="text-center">No Todo Yet.</p>
            </div>
        @endif
    </div>
@endsection
