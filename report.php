<html>
<head>
    <title>Review Resume</title>
</head>
<body>
<?php
if (!empty($_POST)) {
    $name = $_POST['name'];
}
if (!empty($_POST)) {
    $address = $_POST['address'];
}
if (!empty($_POST)) {
    $city = $_POST['city'];
}
if (!empty($_POST)) {
    $state = $_POST['state'];
}
if (!empty($_POST)) {
    $pin = $_POST['pin'];
}
if (!empty($_POST)) {
    $phone = $_POST['phone'];
}
if (!empty($_POST)) {
    $email = $_POST['email'];
}
if (!empty($_POST)) {
    $dob = $_POST['dob'];
}
if (!empty($_POST)) {
    $gender = $_POST['gender'];
}
if (!empty($_POST)) {
    $father = $_POST['father'];
}
if (!empty($_POST)) {
    $mother = $_POST['mother'];
}
if (!empty($_POST)) {
    $education = $_POST['education'];
}
if (!empty($_POST)) {
    $sslc = $_POST['school'];
}
if (!empty($_POST)) {
    $hsc = $_POST['hscschool'];
}
if (!empty($_POST)) {
    $ug = $_POST['ug'];
}
if (!empty($_POST)) {
    $pg = $_POST['pg'];
}
if (!empty($_POST)) {
    $exp = $_POST['exp'];
}
if (!empty($_POST)) {
    $exp11 = $_POST['exp11'];
}
if (!empty($_POST)) {
    $exp12 = $_POST['exp12'];
}
if (!empty($_POST)) {
    $exp13 = $_POST['exp13'];
}
if (!empty($_POST)) {
    $exp21 = $_POST['exp21'];
}
if (!empty($_POST)) {
    $exp22 = $_POST['exp22'];
}
if (!empty($_POST)) {
    $exp23 = $_POST['exp23'];
}
if (!empty($_POST)) {
    $exp31 = $_POST['exp31'];
}
if (!empty($_POST)) {
    $exp32 = $_POST['exp32'];
}
if (!empty($_POST)) {
    $exp33 = $_POST['exp33'];
}

ob_start();
require ('fpdf181/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Helvetica', 'B', 30);
$pdf->Cell(0, 15, "Resume", 1, 1,'C');

$pdf->SetFont('Courier', 'B', 20);
$pdf->Cell(0, 10, "Personal Details",0,1,'C');

$pdf->SetFont('Courier','', 16);

$pdf->Cell(50, 10, "Name", 0, 0);
$pdf->Cell(50, 10, ": {$name}", 0, 1);

$pdf->Cell(50, 10, "Address", 0, 0);
$pdf->Cell(50, 10, ": {$address}", 0, 1);

$pdf->Cell(50, 10, "City", 0, 0);
$pdf->Cell(50, 10, ": {$city}", 0, 1);

$pdf->Cell(50, 10, "State", 0, 0);
$pdf->Cell(50, 10, ": {$state}", 0, 1);

$pdf->Cell(50, 10, "Pin", 0, 0);
$pdf->Cell(50, 10, ": {$pin}", 0, 1);

$pdf->Cell(50, 10, "Mobile", 0, 0);
$pdf->Cell(50, 10, ": {$phone}", 0, 1);

$pdf->Cell(50, 10, "Email", 0, 0);
$pdf->Cell(50, 10, ": {$email}", 0, 1);

$pdf->Cell(50, 10, "DOB", 0, 0);
$pdf->Cell(50, 10, ": {$dob}", 0, 1);

$pdf->Cell(50, 10, "Gender", 0, 0);
$pdf->Cell(50, 10, ": {$gender}", 0, 1);

$pdf->Cell(50, 10, "Father's Name", 0, 0);
$pdf->Cell(50, 10, ": {$father}", 0, 1);

$pdf->Cell(50, 10, "Mother's Name", 0, 0);
$pdf->Cell(50, 10, ": {$mother}", 0, 1);

$pdf->SetFont('Courier', 'B', 20);
$pdf->Cell(0, 10, "Educational Details",0,1,'C');

$pdf->SetFont('Courier','', 16);

$pdf->Cell(50, 10, "Qualification", 0, 0);
$pdf->Cell(50, 10, ": {$education}", 0, 1);

$pdf->SetFont('Courier','U', 16);

$pdf->Cell(50, 10, "Education History", 0, 1);

$pdf->SetFont('Courier','', 16);

$pdf->Cell(50, 10, "SSLC", 0, 0);
$pdf->Cell(50, 10, ": {$sslc}", 0, 1);

$pdf->Cell(50, 10, "HSC", 0, 0);
$pdf->Cell(50, 10, ": {$hsc}", 0, 1);

$pdf->Cell(50, 10, "UG", 0, 0);
$pdf->Cell(50, 10, ": {$ug}", 0, 1);

$pdf->Cell(50, 10, "PG", 0, 0);
$pdf->Cell(50, 10, ": {$pg}", 0, 1);

$pdf->SetFont('Courier', 'B', 20);
$pdf->Cell(0, 10, "Professionl Details",0,1,'C');

$pdf->SetFont('Courier', '', 16);

$pdf->Cell(50, 10, "Experience", 0, 0);
$pdf->Cell(50, 10, "{$exp} years", 0, 1);

$pdf->SetFont('Courier','U', 16);

$pdf->Cell(50, 10, "Prevoius Professional History", 0, 1);

$pdf->SetFont('Courier','', 16);

$pdf->Cell(50, 10, $exp11, 0, 0);
$pdf->Cell(50, 10, $exp12, 0, 0);
$pdf->Cell(50, 10, $exp13, 0, 1);

$pdf->Cell(50, 10, $exp21, 0, 0);
$pdf->Cell(50, 10, $exp22, 0, 0);
$pdf->Cell(50, 10, $exp23, 0, 1);

$pdf->Cell(50, 10, $exp31, 0, 0);
$pdf->Cell(50, 10, $exp32, 0, 0);
$pdf->Cell(50, 10, $exp33, 0, 1);

$pdf->Output();
ob_end_flush();
?>
</body>
</html>
