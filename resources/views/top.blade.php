@extends('layouts.app')

@section('content')
<table>
    <thead>
        <tr class="top">
            <th></th>
            <td>月曜日</td>
            <td>火曜日</td>
            <td>水曜日</td>
            <td>木曜日</td>
            <td>金曜日</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1限目</th>
            <td>{{ $data[0] }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th>2限目</th>
            <td>{{ $data[1] }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th>3限目</th>
            <td>{{ $data[2] }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th>4限目</th>
            <td>{{ $data[3] }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th>5限目</th>
            <td>{{ $data[4] }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th>6限目</th>
            <td>{{ $data[5] }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
@endsection