@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>Ver Usuário</h3>
        <?php
            $linkEdit = route('admin.users.edit',['user' => $user->id]);
        ?>

        {!! Button::primary('Editar')->asLinkTo($linkEdit) !!}

        <?php
            $formDelete = FormBuilder::plain()
        ?>

        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row">ID</th>
                    <td>{{$user->id}}</td>
                </tr>
                <tr>
                    <th scope="row">Nome</th>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <th scope="row">E-mail</th>
                    <td>{{$user->email}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection