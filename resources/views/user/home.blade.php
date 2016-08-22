@extends('layouts.app')
@section('logout_link')
    <ul class="dropdown-menu" role="menu">
        <li>
            <a href="{{ url('/auth/portal/logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ url('/auth/portal/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Portal Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection