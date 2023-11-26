@extends('components.layout')

@section('title', 'Registrar')

@section('content')

    <section class="h-100 heightMax d-flex justify-content-center mt-5">
        <div class="w-50">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>

                <div class="mb-3">
                    <label for="user" class="form-label">Usuário</label>
                    <input type="user" name="user" class="form-control" id="user">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>

                <button type="submit" class="btn btn-primary">Criar</button>
        </div>
    </section>

@endsection
