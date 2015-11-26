@extends('littera.layouts.base')

@section('content')

<section class="panel panel-default panel-tabs">
    <header class="panel-heading clearfix">
        <h2 class="panel-title pull-left">Users</h2>
        <nav class="pull-right">
            <div class="btn-group">
                <a class="btn btn-primary" href="#" title="Create">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </nav>
    </header>
    <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Login</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td><a href="{{ route('littera.users.getItem', $user->id) }}">{{ $user->login }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ lh_date($user->created_at) }}</td>
                    <td>{{ lh_date($user->updated_at) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="text-center">
            {!! $users->render() !!}
        </div>
    </div>
</section>

@endsection
