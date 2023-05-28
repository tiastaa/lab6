@vite(['resources/css/app.css','resources/js/app.js'])
<form action="{{route('bets.store')}}" method="post" class="border-2 object-center border-indigo-500/100 divide-y divide-blue-200">
    @include('lots.errors')
    @csrf
    <label for="name" class="mx-5 py-5">Name</label>
    <input required name = "name" class="outline outline-2  outline-offset-2"/>
    @error('name')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="price" class="mx-5 py-5">Price</label>
    <input required name = "price" class="outline outline-2  outline-offset-2"/>
    @error('price')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="lot_id" class="mx-5 py-5">Lot</label>
    <select name="lot_id">
        <option value="0">please select Lot</option>
        @foreach($lot_list as $lot_item)
            <option value="{{$lot_item->id}}">{{$lot_item->owner}}</option>
        @endforeach
    </select>
    <br/>
    <br/>
    <button type="submit" class="px-4 py-1 text-sm text-purple-600 font-semibold shadow-md">Create</button>
</form>
