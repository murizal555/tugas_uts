@section('content')

<body>
    <div>
        <h3>New User</h3>
    </div>
    @if ($error->any())
    <div>
        maaf yang anda masukkan salah <br>
        <ul>
            @foreach($errors->all()as error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</body>


</html>
@endsection('content')