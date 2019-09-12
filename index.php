<?php
include_once "db_function/func_insurance.php";
include_once "db_function/func_patient.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="plugins/datatables.min.css">
</head>
<body>
    <header></header>
    <nav>
        <ul>
            <li><a href="?nav=hm">home</a></li>
            <li><a href="?nav=ins">insurance</a></li>
            <li><a href="?nav=pat">patient</a></li>
        </ul>
    </nav>
    <main>
        <?php
            $nav = filter_input(1,"nav");
            switch($nav){
                case "hm":
                    include_once "view/home.php";
                    break;
                case "ins":
                    include_once "view/insurance.php";
                    break;
                case "pat":
                    include_once "view/patient.php";
                    break;
                default:
                    include_once"view/home.php";
                    break;
            }
        ?>
    </main>
<script rel="stylesheet" type="text/javascript" src="plugins/datatables.min.js"></script>
<script rel="stylesheet" type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
</body>
</html>