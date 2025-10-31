<table border="1">
    @foreach ($data as $members)
    <tr>
    <td>{{$members->id}}</td>
    <td>{{$members->name}}</td>
    <td>{{$members->description}}</td>
    <td>{{$members->price}}</td>
    <td>{{$members->created_at}}</td>
    <td>{{$members->updated_at}}</td>
    </tr>
    @endforeach
</table>    
