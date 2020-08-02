
@extends('layout')

@section('head')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection

@section('content')


    <div id="wrapper">
        <div id="page" class="container">

            <h1>New article</h1>

            <form method="POST" action="/articles">

                @csrf

                  <div class="field">
                      <label class="label" for="title"></label>

                      <div class="control">
<input class="input" type="text" name="title" id="title" value="{{old('title')}}">

                          @error('title')

                          <p class="help is danger">{{$errors->first('title')}}</p>

@enderror
                      </div>

                  </div>

            <div class="field">
                <label class="label" for="excerpt"></label>

                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt">"{{old('excerpt')}}</textarea>

                    @error('excerpt')

                    <p class="help is danger">{{$errors->first('excerpt')}}</p>

                    @enderror


</div>
            </div>


            <div class="field">
                <label class="label" for="body"></label>

                <div class="control">
                    <textarea class="textarea" name="body" id="body">"{{old('body')}}</textarea>

                    @error('body')

                    <p class="help is danger">{{$errors->first('body')}}</p>

                    @enderror

                </div>
            </div>


            <div class="field is-grouped">

                <div class="control">
                    <button class="button is-link" type="submit">submit</button>
                </div>



            </form>

                </div>
    </div>


            @endsection
