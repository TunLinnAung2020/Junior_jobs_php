<?php
session_start();
if(!isset($_SESSION['result'])){
    header("location:category.php");
}
$category =$_SESSION['result'];
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-10">
                    <form class="form-horizontal" method="PUT" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <input type="hidden" name="id" vlaue="<?=$category['id'];?>">
                        <div class="form-group row">
                            <label class="control-label col-md-2" for="name">Name</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="name" id="name" value="<?php echo $category['name'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2" for="name_mm"> Name Myanmar</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="name_mm" id="name_mm" value="<?=$category['name_mm'];?>">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-success">Save</button>
                            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
session_unset();
?>