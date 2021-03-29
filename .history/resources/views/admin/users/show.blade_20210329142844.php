@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>Ver Usuário</h3>
        $linkEdit = route('admin.users.edit',['user' => $model->id]);
                    $linkShow = route('admin.users.show',['user' => $model->id]);
                    return Button::link('Editar')->asLinkTo($linkEdit).'|'.
                        Button::link('Ver')->asLinkTo($linkShow);
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