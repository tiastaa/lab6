@vite(['resources/css/app.css','resources/js/app.js'])
<form action="{{route('lots.store')}}" method="post" class="border-2 object-center border-indigo-500/100 divide-y divide-blue-200">

    @csrf

    <label for="title">Title</label>
    <input required name = "title" class="outline outline-2  outline-offset-2"/>
    @error('title')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="start">Start</label>
    <input required name = "start" class="outline outline-2  outline-offset-2"/>
    @error('start')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>

    <label for="finish">Finish</label>
    <input required name = "finish" class="outline outline-2  outline-offset-2"/>
    @error('finish')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>

    <label for="price">Price</label>
    <input required name = "price" class="outline outline-2  outline-offset-2"/>
    @error('price')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>

    <br/>

    <button type="submit" class="px-4 py-1 text-sm text-purple-600 font-semibold shadow-md">Create</button>
</form>
