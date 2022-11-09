@extends('layouts.main')

@section('first-content')

    @if(count($errors) > 0)
        <div class='alert aler-danger'>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
@endif

        <div class="card my-3">
            <div class="card-header">
                form tambah data 
            </div>
            <div class="card-body">
                <form action="{{route('person.store')}}"  method="POST">
                    @csrf                              
                    <div class="form-group">
                        <label for="name">nama</label>
                        <input type="text"name="name"placeholder="masukan nama anda" class="form-control">
                    </div>
                    <div class="form-group">
                                <label for="email">email</label>
                                <input type="email"name="email"class="form-control" placeholder="nama@gmail.com">
                    </div>
                    <div class="form-group">
                                <input type="submit"value="simpan" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
