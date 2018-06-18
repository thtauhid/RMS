<!doctype html>
<html lang="en">
    <head>
	<title>RMS - Result Management System</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4 box">
                    <form action="">
                        <p>Name of examination:</p>
                        <select name="exam_name" id="exam_name" class="form-control combobox">
                            <option value="HSC">HSC</option>
                            <option value="SSC">SSC</option>
                            <option value="JSC">JSC</option>
                        </select><br>
                        <p>Year of examination:</p>
                        <select name="exam_year" id="exam_year" class="form-control combobox">
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                        </select><br>
                        <p>Board:</p>
                        <select name="exam_board" id="exam_board" class="form-control combobox">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Rajshahi">Rajshahi</option>
                        </select><br>
                        <p>Roll:</p>
                        <input type="text" name="roll" placeholder="Roll" class="form-control"><br>
                        <p>Registration:</p>
                        <input type="text" name="reg" placeholder="Registration" class="form-control"><br>
                        <button class="btn btn-info">Submit</button>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div> 
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery-3.2.1.slim.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>