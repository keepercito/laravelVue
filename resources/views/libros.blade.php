@extends('layouts.app')
@section('libro')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Submit a LIBRO</h1>
            </div>
            <div class="col-md-3">
                <form action="{{url('/libros')}}" method="POST">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Please fix the following erros
                        </div>
                    @endif
                    {!! csrf_field() !!}
                    <div class="form-group{{$errors->has('Nombre')?'has error':''}}">
                        <label for="Nombre">Nombre</label>
                        <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{old('Nombre')}}">
                        @if ($errors->has('Nombre'))
                            <span class="help-block">{{$errors->first('Nombre')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('Autor')?'has error':''}}">
                        <label for="Autor">Autor</label>
                        <input type="text" class="form-control" name="Autor" id="Autor" value="{{old('Autor')}}">
                        @if ($errors->has('Autor'))
                            <span class="help-block">{{$errors->first('Autor')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('description')?'has error':''}}">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control">{{old('description')}}</textarea>
                        @if ($errors->has('Nombre'))
                            <span class="help-block">{{$errors->first('description')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
