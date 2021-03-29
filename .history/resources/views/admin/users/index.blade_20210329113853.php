@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Listagem de usuários</h3>
            {!! Button::primary('Novo usuário')->asLinkTo(route('admin.users.create')) !!}
        </div>
        <div class="row">
             {!!
                Table::withContents([
                [
                    'email' => 'test@test.com',
                    'name' => 'Test'
                ]
            ]) !!}
        </div>
        {!! $users->links() !!}
    </div>
@endsection