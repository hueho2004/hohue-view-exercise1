<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('asserts/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="alert alert-secondary d-flex justify-content-between m-lg-1" role="alert" style="width: 28rem;">
                    Task List
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>

                <div class="card justify-content-lg-center " style="width: 25rem;margin-left:2em;">
                    <div class="card-header">
                        New Task
                    </div>
                    <ul class="list-group mt-3 p-2">
                        <label for="" class="form-label">Task</label>
                        <input type="text" name="input" class="form-control">
                        <button type="submit" class="btn btn-light m-1" style="width: 8rem;"> <i class="fa fa-plus" aria-hidden="true"></i> Add Task</button>
                    </ul>
                </div>

                <div class="card mt-3 p-2" style="width: 25rem;margin-left:2em;">
                    <div class="card-header">
                        Current Tasks
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Tasks</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>First Task</td>
                                <td> <button type="submit" class="btn btn-danger"> <i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button></td>
                            </tr>
                            <tr>
                                <td>Second Task</td>
                                <td><button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>


    <script src="{{ asset('asserts/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src='https://code.jquery.com/jquery-3.7.1.min.js'></script>

</body>

</html>