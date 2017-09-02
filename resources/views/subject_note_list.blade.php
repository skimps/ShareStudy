<h1>{{ $subject_name }}ノート一覧</h1>
{{ dd($notes) }}
<!-- @foreach(App\Note::all() as $note)
<div class="">
    <p>{{ $note->text }}</p>
  <p>{{ $note->class_id }}</p>
</div>
@endforeach -->
