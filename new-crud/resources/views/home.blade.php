@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}


                    {{-- form --}}
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">si</th>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">time</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach ($users as $user )



                          <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->created_at}}</td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    {{-- form end --}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
