@vite(['resources/css/app.css','resources/js/app.js'])
<table>
    <tr><th>Title</th><th>Start</th><th>Finish</th><th>Price</th></tr>
    @foreach($lots as $lot)
        <tr>
            <td>{{$lot->title}}</td>
            <td>{{$lot->start}}</td>
            <td>{{$lot->finish}}</td>
            <td>{{$lot->price}}</td>
            <td><a href="{{route('lots.edit',$lot->id)}}">Edit</a></td>
            <td>
                <form action="{{route('lots.destroy',$lot->id)}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="px-4 py-1 text-sm text-purple-600 font-semibold">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{route('lots.create')}}" class="m-10 rounded-lg px-4 border-4 border-indigo-500/100">Create</a>
