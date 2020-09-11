<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="mt-2">
            <h1>Cards of Hope</h1>
        </header>
        <main>
            @foreach ($posts as $post)
            <!-- <article class="blog-content">
                <h3>Title: {{$post->title}}</h3>
                <h5>Description: {{$post->description}}</h5>
                <p>Content: {{$post->content}}</p>
            </article> -->

            <form action="blog/delete/{{$post->id}}" method="get" class="card d-inline-block " style=" height:10rem;">
                <div class="card-header">
                    <a class="btn btn-primary btn-sm ml-1" href="blog/edit/{{$post->id}}" >edit</a>
                    <input type="submit" class="btn btn-danger btn-sm ml-1" value="delete">
                </div>
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$post->description}}</h6>
                        <p class="card-text">{{$post->content}}</p>
                        <small class="small">{{$post->updated_at}}</small>
                      
                    </div>

                </div>


            </form>
            @endforeach

        </main>
        <footer>
            <nav style="position: absolute;left:1vw;top:1vh;"> <a href="/blog/create">create new card</a> </nav>
            <nav style="position: absolute;left:1vw;top:4vh;"> <a href="/">back to portal</a> </nav>

        </footer>
    </div>
</body>

</html>