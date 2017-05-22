<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Info Form</title>
    <link rel="stylesheet" href="../../resources/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="../../resources/bootstrap/3.3.7/js/jquery-3.2.1.min.js"></script>
    <script src="../../resources/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        div.container{
            margin-top: 100px;
            background-color: #c4e3f3;
            padding: 50px;
        }
        div.myForm{

        }
    </style>
</head>
<body>

<div class="col-md-2"></div>

<div class="container col-sm-7">
    <h2>Student Info Form</h2>
    <div class="myForm">
        <form class="form-horizontal" action="store.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="studentid">Student ID:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="studentid" placeholder="Enter Student ID" name="studentid">
                </div>
            </div>
            <h2>Marks Obtained</h2>
            <div class="form-group">
                <label class="control-label col-sm-2" for="bangla">Bangla:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bangla" placeholder="Marks for Bangla" name="bangla">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="english">English:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="english" placeholder="Marks for English" name="english">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="math">Math:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="math" placeholder="Marks for Math" name="math">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="ict">ICT:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ict" placeholder="Marks for ICT" name="ict">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="col-md-2"></div>

</body>
</html>