<?php
include("menu.php")
?>
<html>
    <head>
    <style>
                .margin
                {
                    color:black;
                    margin-left: 500px;
                }
                </style>
</head>
<body>
    <h1 class="margin">Change Password</h1>
    <form class="margin" action="changecode.php" method="post">
        <div class="row bg-info p-2 text-dark bg-opacity-50">
            <div class="col-sm-4 ">
    Old Password
    <input type="password" name="op" placeholder="Old Password" required class="form-control" />
    <br/>
    New Password
    <input type="password" name="np" placeholder="New Password" required class="form-control"/>
    <br/>
    Confirm New Password
    <input type="password" name="cnp"  placeholder="Confirm New Password" required class="form-control"/>
    <br/>
            </br>
    <input type="submit" value="Change Password" class="btn btn-dark"/>
            </div>
            </div>
</form>
</body>
    </html>