@extends('layouts.app')

@section('content')

<div class="container py-5">

    {{-- Header --}}
    <div class="text-center mb-5">
        <h1 class="fw-bold display-5 text-dark">
            Your To-Do List
        </h1>

        <p class="text-muted fs-5">
            Manage your tasks efficiently and stay organized.
        </p>
    </div>

    
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">

                    <form action="{{ route('todo.add') }}" method="POST">
                        @csrf

                        <div class="input-group">

                            <input
                                type="text"
                                name="title"
                                class="form-control form-control-lg rounded-start"
                                placeholder="Enter a new task..."
                                required
                            >

                            <button
                                type="submit"
                                class="btn btn-primary px-4"
                            >
                                Add Task
                            </button>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

  
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0 rounded-4">

                <div class="card-header bg-dark text-white py-3 rounded-top-4">
                    <h5 class="mb-0 fw-semibold">
                        Task List
                    </h5>
                </div>

                <div class="card-body p-0">

                    <table class="table table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th class="ps-4">#</th>
                                <th>Task</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($tasks as $task)

                                <tr>

                                    <td class="ps-4 fw-semibold">
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>
                                        <span class="{{ $task->done ? 'text-decoration-line-through text-muted' : 'fw-medium' }}">
                                            {{ $task->title }}
                                        </span>
                                    </td>

                                    <td>
                                        @if($task->done == 1)

                                            <span class="badge bg-success px-3 py-2">
                                                Completed
                                            </span>

                                        @else

                                            <span class="badge bg-warning text-dark px-3 py-2">
                                                Pending
                                            </span>

                                        @endif
                                    </td>

                                    <td>

                                        <div class="d-flex justify-content-center gap-2">

                                            
                                            <form action="{{ route('todo.done', $task->id) }}" method="POST">
                                                @csrf

                                                <button
                                                    type="submit"
                                                    class="btn btn-success btn-sm rounded-pill px-3"
                                                >
                                                    Done
                                                </button>
                                            </form>

                                           
                                            <form action="{{ route('todo.delete', $task->id) }}" method="POST">
                                                @csrf

                                                <button
                                                    type="submit"
                                                    class="btn btn-danger btn-sm rounded-pill px-3">
                                                
                                                    Delete
                                                </button>
                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="4" class="text-center py-5 text-muted">
                                        No tasks found.
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>
    </div>

</div>

@endsection


@push('container')

<style>

    body{
        background-color: #f5f7fb;
    }

    .card{
        overflow: hidden;
    }

    .table td,
    .table th{
        vertical-align: middle;
    }

    .btn-primary{
        background: #0d6efd;
        border: none;
    }

    .btn-primary:hover{
        background: #0b5ed7;
    }

    .form-control:focus{
        box-shadow: none;
        border-color: #0d6efd;
    }

</style>

@endpush