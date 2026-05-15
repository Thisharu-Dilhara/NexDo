@extends('layouts.app')

@section('content')

<div class="hero-section d-flex align-items-center">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8 text-center">

               
                <div class="mb-4">
                    <span class="badge bg-primary-subtle text-primary px-4 py-2 rounded-pill fs-6">
                        Smart Task Management
                    </span>
                </div>

                <h1 class="display-3 fw-bold text-dark mb-4">
                    Welcome to <span class="text-primary">NexDo</span>
                </h1>

                <p class="lead text-muted mb-5">
                    Organize your daily tasks, boost productivity,
                    and stay focused with a clean and simple
                    task management experience.
                </p>

           
                <a href="{{ route('todo') }}"
                   class="btn btn-primary btn-lg px-5 py-3 rounded-pill shadow-sm">
                    View Your To-Do List
                </a>

            </div>

        </div>

    </div>

</div>

@endsection


@push('css')

<style>

    body{
        background: linear-gradient(
            135deg,
            #f8fafc,
            #eef2ff
        );
        min-height: 100vh;
    }

    .hero-section{
        min-height: 85vh;
    }

    .display-3{
        letter-spacing: -1px;
    }

    .lead{
        font-size: 1.25rem;
        line-height: 1.8;
    }

    .btn-primary{
        background: #2563eb;
        border: none;
        transition: all 0.3s ease;
    }

    .btn-primary:hover{
        background: #1d4ed8;
        transform: translateY(-2px);
    }

    .badge{
        font-weight: 500;
        letter-spacing: 0.5px;
    }

</style>

@endpush