<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel CRUD Livetest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @notifyCss
</head>

<body>
    
    <br><br><br><br>
    <div class="container">
        <div class="card" style="width: 58rem;">
            <div class="card-header">Edit Event</div>
            <div class="card-body">
                <form action="/api/v1/events/{{ $event->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label"> Name</label>
                        <div class="col-sm-10">
                            <input type="text" id="name" name="name" class="form-control" value="{{ $event->name }}" autofocus>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                        <div class="col-sm-10">
                            <input type="text" id="slug" name="slug" class="form-control" value="{{ $event->slug }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                            <a href="/api/v1/events" class="btn btn-outline-warning">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@notifyJs
<x:notify-messages />
</body>

</html>