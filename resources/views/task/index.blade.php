@extends('components.layout')

@section('title', 'Nova Tarefa')

@section('content')

    <div class="w-100 d-flex justify-content-center">
        <h1>
            TAREFAS
        </h1>
    </div>

    <section class="mt-5 mb-5 d-flex justify-content-center">
            <div class="w-75 d-flex align-items-center">
                <input type="text" id="newTask" placeholder="Nova Tarefa" class="form-control taskTitle">
                <button type="button" class="btn fs-1 actionButton">&#8680;</button>
            </div>
    </section>

    <section>
        <div class="w-100 d-flex justify-content-center">
            <ul class="list-group w-50">
                <li class="list-group-item border border-primary mb-3" aria-current="true">
                    <div class="d-flex justify-content-between">
                        <p class="taskItem">teste</p>
                        <button type="button" class="btn fs-1 actionButton">&#8680;</button>
                    </div>
                </li>
            </ul>
        </div>
    </section>

@endsection
