@if ($errors->any())
    <div class="alert alert-dark-primary alert-dismissible fade show">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('error'))
    <div class="alert alert-dark-primary alert-dismissible fade show">
        {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div class="alert alert-dark-success alert-dismissible fade show">
        {{ session('success') }}
    </div>
@endif
