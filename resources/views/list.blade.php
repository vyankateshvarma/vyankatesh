<h1>Add Member</h1>
<table border="1">
    <tr>
        <td>id</td>
        <td> name</td>
        <td>description</td>
        <td>price</td>
        <td>created_at</td>
        <td>updated at</td>
    </tr>
    @foreach($member as $members)
    <tr>
    <td>{{$members['id']}}</td>
    <td>{{$members['name']}}</td>
    <td>{{$members['description']}}</td>
    <td>{{$members['price']}}</td>
    <td>{{$members['created_at']}}</td>
    <td>{{$members['updated_at']}}</td>
    </tr>
    @endforeach
</table>
