@vite(['resources/css/app.css','resources/js/app.js'])
<form action="{{route('lots.update',$lot)}}" method="post">
    @include('abonents.errors')
    @csrf
    {{ method_field('PUT') }}
    <label for="title" class="m-2 text-xl font-medium text-black">Title</label>
    <input required name = "title" value="{{$lot->title}}"/>
    @error('title')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="start" class="m-2 text-xl font-medium text-black">Start</label>
    <input type="date" required name = "start" value="{{$lot->start}}"/>
    @error('start')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="finish" class="m-2 text-xl font-medium text-black">Finish</label>
    <input type="date" required name = "finish" value="{{$lot->finish}}"/>
    @error('finish')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="price" class="m-2 text-xl font-medium text-black">Price</label>
    <input required name ="price" value="{{$lot->price}}"/>
    @error('price')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <br/>

    <button type="submit" class=" mx-2  px-4 py-1 text-sm text-purple-600 font-semibold border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Edit</button>
</form>

</form>
