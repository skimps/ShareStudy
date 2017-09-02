@extends('layouts.app')

@section('content')
{{ csrf_field() }}
<div class="note-container">
    <div class="note-title">
        <h2>タイトルを入れる予定</h2>
        <a href="/notes/{{ $note_list[0]['id'] }}/edit" class="note-edit-move">編集する</a>
    </div>
    <div class="note-content">
        <?php echo $note_list[0]["text"] ?>
    </div>
</div>

<script>
    $(function(){
        
        $.get('/question?name='+{{ $note_list[0]['id'] }}).then(
            (data)=>{
                console.log(data);
            }
        );
    })
</script>
@endsection