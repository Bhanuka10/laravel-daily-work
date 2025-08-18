<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container ">
        <div class="text-center ">
            <h1>Daily Tasks</h1>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="/savetask" method="post">
                        @csrf

                        <input type="text" class="form-control" placeholder="Enter your Task" name="task">
                   
                     <button class="btn btn-primary" type="submit " value="SAVE">SAVE</button>
                    <button class="btn btn-warning" type="button" value="CLEAR">CLEAR</button>

                    </form>
                   

            
            <table class="table table-dark table-striped">
                <th> ID</th>
                <th>Task</th>
                <th>completed</th>
                <tr>
                    <td>1</td>
                    <td>i have learnt laraval today</td>
                    <td>not yet</td>
                </tr>
  
</table>
</div>
            </div>
        </div>        
    </div>
</body>
</html>
