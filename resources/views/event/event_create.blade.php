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
            <div class="card-header">Create Event</div>
            <div class="card-body">
                <form action="/api/v1/events" method="post">
                    @csrf
                    <div class="container">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" id="name"class="form-control" id="" placeholder="Enter name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <textarea class="form-control" id="slug" name ="slug" rows="3" placeholder="Enter slug"></textarea>
                        </div>
                        <div class="text-right">
                            <div class="text-right">
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                                <a href="/api/v1/events" class="btn btn-outline-warning">Cancel</a>
                            </div>
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