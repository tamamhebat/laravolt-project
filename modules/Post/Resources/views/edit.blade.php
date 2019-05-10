@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Edit Post</h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('post.index') }}" class="ui button basic small"><i class="icon angle left"></i>
                    Back to index
                </a>
            </div>
        </div>
    </div>

    {!! form()->bind($post)->put(route('post.update', $post->getKey())) !!}
                    {!! SemanticForm::text('title')->label('Title') !!}
                    {!! SemanticForm::text('content')->label('Content') !!}
                    {!! SemanticForm::text('author_id')->label('Author') !!}
    {!! form()->submit('Save') !!}
    {!! form()->link('Cancel', route('post.index')) !!}
    {!! form()->open() !!}

@stop
