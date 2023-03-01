<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Queue Laravel</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-md-4 p-4">
            <h1 class="my-4">Send Email With Queue Laravel</h1>
            {{-- send email --}}
            @if (session('status'))
                <div class="alert alert-primary" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('post-mail') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="subjek">Subjek</label>
                    <input type="text" class="form-control" name="subjek" id="name" placeholder="Nama">
                </div>
                <div class="form-group my-3">
                    <label for="email">Email Tujuan</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Tujuan">
                </div>
                <div class="form-group my-3">
                    <label for="name">Body Deskripsi</label>
                    <textarea name="body" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Kirim Email</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
