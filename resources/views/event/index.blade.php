<html>
<head>
<style>
h1 {
    /* text-align: center; */
    position: absolute; 
    left: 500px;
    top: 100px;
}
p {text-align: center;}
div {text-align: center;}
</style>

<title>Laravel CRUD Livetest</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    @notifyCss
</head>

<body>
    <div class="text-right">
    
    </div>
   
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        {{ 'Welcome '.Auth::user()->name }}<br>
        {{-- {{ __('Click here to logout : ') }} --}}
        <h6 style="font-size:1.0vw">Click here to logout :</h6>
        <a class="" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            <button class="btn btn-outline-danger" type="submit"><i class="fa fa-sign-out"></i></button>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <h1 style="font-size:2vw">Accenture Coding Test</h1>
    {{-- <h1 style="font-family: Courier New, Courier, monospace">This is a heading</h1> --}}
<br><br><br><br>
    <div>
    <div class="container">
        <div class="text-left">
            <a href="/api/v1/events/create" class="btn btn-warning">Create</a>
        </div>
        <br>
        <div>
            <div class="mx-auto pull-right">
                <div class="">
                    <form action="/api/v1/events/search" method="get" role="search" enctype="multipart/form-data">
                        <div class="input-group">
                            <input name = "keyword" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search">
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                              </button>
                            </div>
                          </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Action</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)

                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->slug }}</td>
                    <td column-width: 10px>
                    <a href="/api/v1/events/{{ $event->id }}/edit" class="btn btn-outline-primary">Edit</a>
                    <form action="events/{{ $event->id }}" method="post" class="d-inline">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                    </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
        {!! $events->links() !!}
    </div>
</div>



</body>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.js"></script>





@notifyJs
<x:notify-messages />
</body>

</html>