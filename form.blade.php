@if ($errors->any())
<div style="color:red;">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if (session('success'))
    <div style="color: green; font-weight: bold;">
        {{ session('success') }}
    </div>
@endif


<form action="/handler" method="POST">
    @csrf
    <p><input type="text" name="theme" value="{{ old('theme') }}" placeholder="Headline"></p>
    <p><input type="text" name="message" value="{{ old('message') }}" placeholder="Description"></p>
    <button type="submit">Send</button>
</form>
