<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Form</h1>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message">{{ old('message') }}</textarea>
        </div>
		<br>
        <button type="submit">Submit</button>
    </form>
	<a href="{{ url('/dashboard') }}" class="btn btn-secondary mt-3"><br>Dashboard</a>
</body>
</html>
