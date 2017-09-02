@extends('layouts.app')

@section('content')
<form class="note-container" action="/NoteEditing" method="post">
{{ csrf_field() }}
    <input type="hidden" name="note_id" value="{{ $note_list[0]['id'] }}">
    <input type="hidden" name="class_id" value="{{ $note_list[0]['class_id'] }}">
    <div class="note-title">
        <h2>タイトルを入れる予定</h2>
        <button type="submit" class="note-edit-move">保存する</button>
    </div>
    <article class="note-content">
        <textarea class="note-edit-area" name="note_str">{{ $note_list[0]["text"] }}</textarea>
    </article>
</form>
@endsection