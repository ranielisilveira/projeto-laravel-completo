@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>Listagem de usuários</h3>
        {!! Button::primary('Novo usuário') !!}
        {!!
        form($form->add('insert', 'submit', [
            'attr' => ['class' => 'btn-primary btn-block'],
            'label' => 'Inserir'
        ]))
        !!}
    </div>
</div>
@endsection