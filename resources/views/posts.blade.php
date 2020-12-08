<div class="container">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($post as $posts)
                    <div class="container-fluid">
                        <br>
                        {!! $posts["body"] !!}
                        <br>
                    </div>
                @endforeach
            </div>
        </div>
</div>
