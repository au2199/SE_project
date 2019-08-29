<!DOCTYPE html>
<html lang='en' dir='ltr'>

<!--############################################## Head ###########################################################################-->
<head>
	<!-- Okp config -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Load style.css file, which store in css folder -->

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
	<!-- Latest compiled and minified CSS -->
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>
	<!-- jQuery library -->
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
	<!-- Latest compiled JavaScript -->
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<meta charset='utf-8'>
	<script>
		$(function() {
			$('#ui_main').load('<?= base_url('Controller/ui_main') ?>');
			$('#ui_footer').load('<?= base_url('Controller/ui_footer') ?>');
			$('#ui_tab').load('<?= base_url('Controller/ui_tabtch') ?>');
		})
	</script>
    <style media="screen">
        .bgimg {
            background-image: url('<?= base_url('./image/back_inweb.jpg') ?>');
            min-height: 100%;
            background-position: center;
            background-size: cover;
            /* z-index: -1; */
        }
    </style>
    <title>Index</title>
</head>
<!--############################################## Header ###########################################################################-->
<header>
    <div id='ui_main'></div>
</header>
<!--############################################## Body ###########################################################################-->

<body>
    <div class="container-fluid text-center">
        <div class="row">
            <!-- Bar -->
			<div class="col-sm-2 well colora" style=" margin-top: 10px;">
                <div id='ui_tab'></div>
            </div>
            <!-- End Bar -->
            <div class="col-sm-10 well text-left size">
                <div style="background-color: orange; padding: 10px">
                    <h2>สร้างกลุ่ม</h2>
                </div>
                <!-- Body -->



















                <form action="<?= base_url('Controller/register') ?>" method='post'>
                    <input type='text' name='teacher_teacher_id' value='' placeholder='teacher_teacher_id'>
                    <input type='text' name='name_project' value='' placeholder='name_project'>
                    <input type='text' name='info_project' value='' placeholder='info_project'>
                    <input type='text' name='student_student_id_1' value='' placeholder='student_student_id_1' id="myInput_1" onclick="myShow_1()" onkeyup="myFunction_1()">
                    <input type='text' name='student_student_id_2' value='' placeholder='student_student_id_2' id="myInput_2" onclick="myShow_2()" onkeyup="myFunction_2()">
                    <input type='text' name='student_student_id_3' value='' placeholder='student_student_id_3' id="myInput_3" onclick="myShow_3()" onkeyup="myFunction_3()">
                    <button name='submit' value='create_group'>Register</button>
                </form>

                <!-- <table id="myTable" style="display: none;"> -->
                <table id="myTable_1" class="dropdown-content">
                    <!-- Start Get DB_value -->
                    <?php
                    foreach ($show->result() as $row) {
                        ?>
                    <!-- Start Body -->

                    <tr>
                        <!-- <td><?php echo "<button>" . $row->fname . " " . $row->lname . "</button>" ?></td> -->
                        <td><?php echo $row->student_id . " " . $row->fname . " " . $row->lname ?></td>
                    </tr>

                    <!-- End Body -->
                    <?php
                    }
                    ?>
                    <!-- End Get DB_value -->
                </table>
                <table id="myTable_2" class="dropdown-content">
                    <!-- Start Get DB_value -->
                    <?php
                    foreach ($show->result() as $row) {
                        ?>
                    <!-- Start Body -->

                    <tr>
                        <td><?php echo $row->student_id . " " . $row->fname . " " . $row->lname ?></td>
                    </tr>

                    <!-- End Body -->
                    <?php
                    }
                    ?>
                    <!-- End Get DB_value -->
                </table>
                <table id="myTable_3" class="dropdown-content">
                    <!-- Start Get DB_value -->
                    <?php
                    foreach ($show->result() as $row) {
                        ?>
                    <!-- Start Body -->

                    <tr>
                        <td><?php echo $row->student_id . " " . $row->fname . " " . $row->lname ?></td>
                    </tr>

                    <!-- End Body -->
                    <?php
                    }
                    ?>
                    <!-- End Get DB_value -->
                </table>























                <!-- End Body -->
            </div>
        </div>
    </div>
</body>
<!--#### Footer ####-->

<footer>
    <div id='ui_footer'></div>
</footer>
<!--### End #-->

</html>

<!-- ==================== Insert Picture ==================== -->

<style>
    * {
        box-sizing: border-box;
    }

    .dropdown {
        position: relative;
    }

    .dropdown-content {
        display: none;
        background-color: #f6f6f6;
        min-width: 230px;
        overflow: auto;
        border: 1px solid #ddd;
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }
</style>
<script>
    function myShow_1() {
        document.getElementById("myTable_1").classList.toggle("show");
    }

    function myShow_2() {
        document.getElementById("myTable_2").classList.toggle("show");
    }

    function myShow_3() {
        document.getElementById("myTable_3").classList.toggle("show");
    }

    function myFunction_1() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput_1");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable_1");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function myFunction_2() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput_2");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable_2");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function myFunction_3() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput_3");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable_3");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>