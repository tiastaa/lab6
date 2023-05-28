@vite(['resources/css/app.css','resources/js/app.js'])
<table>
    <tr><th>Name</th><th>Price</th><th>Lot_id</th></tr>
    @foreach($bets as $bet_item)
        <tr>
            <td>{{$bet_item->name}}</td>
            <td>{{$bet_item->price}}</td>
            <td>{{$bet_item->lot_id}}</td>
            <td><a href="{{route('bets.edit',$bet_item->id)}}">Edit</a></td>
            <td>
                <form action="{{route('bets.destroy',$bet_item->id)}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{route('bets.create')}}" class="m-10 rounded-lg px-4 border-4 border-indigo-500/100">Create</a>

