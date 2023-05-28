@vite(['resources/css/app.css','resources/js/app.js'])

<form action="{{route('bets.update',$bet)}}" method="post">
    @include('calls.errors')
    @csrf
    {{ method_field('PUT') }}
    <label for="name" class="m-2 text-xl font-medium text-black">Name</label>
    <input required name = "name" value="{{$bet->name}}"/>
    @error('name')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="price" class="m-2 text-xl font-medium text-black">Price</label>
    <input required name = "price" value="{{$bet->price}}"/>
    @error('price')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="lot_id" class="m-2 text-xl font-medium text-black">Lot</label>
    <select name="lot_id">
        <option value="0">Please select lot</option>
        @foreach($lot_list as $lot_item)
            <option
                @if($lot_item->id == $bet->lot_id)
                    selected
                @endif
                value="{{$lot_item->id}}"
            >{{$lot_item->title}}</option>
        @endforeach
    </select>
    <br/>
    <br/>

    <button type="submit" class=" mx-2  px-4 py-1 text-sm text-purple-600 font-semibold border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Edit</button>
</form>
