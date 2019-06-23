@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>submit a link</h1>
            </div>
            <div class="col-md-3">
                <form action="{{url('/submit')}}" method="POST">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Please fix the following erros
                        </div>
                    @endif
                    {!! csrf_field() !!}
                    <div class="form-group{{$errors->has('title')?'has error':''}}">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}">
                        @if ($errors->has('title'))
                            <span class="help-block">{{$errors->first('title')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('url')?'has error':''}}">
                        <label for="url">URL</label>
                        <input type="text" class="form-control" name="url" id="url" value="{{old('url')}}">
                        @if ($errors->has('url'))
                            <span class="help-block">{{$errors->first('url')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('description')?'has error':''}}">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control">{{old('description')}}</textarea>
                        @if ($errors->has('title'))
                            <span class="help-block">{{$errors->first('description')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
