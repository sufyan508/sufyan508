<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="container">
    <div id="app">
        <div class="container">
        <h3>Add Tasks</h3>

            <div class="spacer"></div>

            <form class="add-testimonial form-horizontal" method="post" action="{{ url('api/user/tasks/store') }}">
                {{ csrf_field() }}
                <div class="form-group m-b-lg">
                    <label class="control-label col-lg-2" for="name">Label <span class="asterisk">*</span></label>
                    <div class="controls col-lg-6">
                        <input type="text" name="label" id="label"  class="form-control input-xlarge" required>
                    </div> <!-- /controls -->
                </div> <!-- /form-group -->



                <div class="form-group m-b-lg">
                    <label class="control-label col-lg-2" for="description">Description <span class="asterisk">*</span></label>
                    <div class="controls col-lg-6">
                        <textarea name="description" cols="40" rows="8" id="description" class="form-control input-xlarge" required></textarea>
                    </div>
                </div> <!-- /controls -->

                <div class="form-group m-b-lg">
                    <label class="control-label col-lg-2" for="due_date">Due Date</label>
                    <div class="controls col-lg-6">
                        <input type="text" name="due_date" id="due_date"  class="form-control input-xlarge">
                    </div> <!-- /controls -->
                </div> <!-- /form-group -->

                <div class="form-group m-b-lg">
                    <label class="control-label col-lg-2" for="color">Color</label>
                    <div class="controls col-lg-6">
                        <input type="text" name="color" id="color"  class="form-control input-xlarge">
                    </div> <!-- /controls -->
                </div> <!-- /form-group -->

                <div class="form-group m-b-lg">
                    <label class="control-label col-lg-2" for="Icon">Icon</label>
                    <div class="controls col-lg-6">
                        <input type="text" name="icon" id="Icon"  class="form-control input-xlarge">
                    </div> <!-- /controls -->
                </div> <!-- /form-group -->


                <div class="form-group">
                    <div class="col-lg-2"></div>
                    <div class="controls col-lg-6">
                        <div class="form-actions">
                            <button type="submit" id="create-task" class="btn btn-primary btn-lg"> Create Task</button>
                        </div>

                    </div> <!-- end controls -->
                </div>

            </form>
        </div> <!-- end container -->

    </div> <!-- end app -->
