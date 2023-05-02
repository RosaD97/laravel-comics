<div class="main">
    <div class="jumbotron"></div>
    <div class="container">
        <section>
            <h2 class="text">CURRENT SERIES</h2>
            <div>
                <div class="box">
                    <ul class="gap-3 flex-wrap justify-content-start">
                        @foreach ($comics as $movie)
                            <li class="card"> {{ $movie['title'] }}</li>                        
                        @endforeach
                    </ul>
                </div>
            </div>
            <button class="text">LOAD MORE</button>
        </section>
    </div>
</div>