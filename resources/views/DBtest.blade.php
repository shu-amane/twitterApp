<table>
    <tr><th>user_id</th><th>login_id</th><th>password</th><th>status</th><th>created_at</th><th>updated_at</th></tr>
    @foreach($items as $item)
        <tr>
            <td>{{$item->user_id}}</td>
            <td>{{$item->login_id}}</td>
            <td>{{$item->password}}</td>
            <td>{{$item->status}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
        </tr>
    @endforeach
</table>