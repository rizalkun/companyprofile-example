@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <form action="/profile" method="POST">
                        @csrf
                        <input type="text" name="name" value="@if($data) {{  $data->name }} @endif" placeholder="nama company" /> <br/>
                        <textarea name="description" placeholder="deskripsi company">@if($data) {{  $data->description }} @endif </textarea> <br/>
                        <input type="file" name="image" /><br/>
                        <button type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
