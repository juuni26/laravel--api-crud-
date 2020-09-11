<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>berita cek</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;

        }

        main {
            display: flex;
            flex-direction: column;
            margin: auto;
            width: 80%;
        }

        .berita {}
    </style>


</head>

<body>
    <header class="mb-2 card-header">
        <h1 style="text-align: center;"> Cek berita online</h1>
        <form class="input-group w-50 m-auto " method="post" action="/cekBerita/kategori">
            @csrf
            <select class="custom-select" id="inputGroupSelect04" name="category" >
                <option value="general" <?php if (  $category_default =="general") {echo "selected";}  ?> >pilih kategory</option>
                <option value="sports" <?php if (  $category_default =="sports") {echo "selected";}  ?>>olahraga</option>
                <option value="technology" <?php if (  $category_default =="technology") {echo "selected";}  ?>>teknologi</option>
                <option value="health" <?php if (  $category_default =="health") {echo "selected";}  ?>>kesehatan</option>
                <option value="science" <?php if (  $category_default =="science") {echo "selected";}  ?>>sains</option>
            </select>
            <div class="input-group-append">
                <input type="submit" class="btn btn-outline-secondary" value="pilih">
            </div>
        </form>
        <a href="/" class="btn btn-dark">BACKK !!! </a>

    </header>
    <main class="card-body">
        @foreach ($beritas as $br)
        <article class="berita mb-3 p-md-2 rounded text-center" style="border:2px solid darkgreen ;">
            <div class="card-header mb-3">
                <h3>{{ $br['title'] }} </h3>
                <h4> {{ $br['description'] }}</h4>
            </div>
            <p>
                <?php
                $pos = strpos($br['content'], '[');
                echo substr($br['content'], 0, strlen($br['content']) - (strlen($br['content']) - $pos));
                ?>
            </p>
            <small class="small">tanggal terbit: {{ date('d-m-Y H:i:s',strtotime($br['publishedAt'])) }}</small> <br> <br>
            <a href="{{$br['url']}}" class="btn btn-success " target="_blank">baca berita</a>
        </article>
        @endforeach
    </main>
</body>

</html>