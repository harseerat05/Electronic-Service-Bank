<?php
 //connection estabishment
$conn=mysqli_connect("sql309.infinityfree.com","if0_36381543","Arsh271H","if0_36381543_bank");

 if(mysqli_connect_errno())
{
	echo "Failed to connect:", mysqli_connect_error();
}
//checking for existence of form data
if(!isset($_REQUEST['customer-id']))
{
    echo "error in Customer ID<br>";
}
elseif(!isset($_REQUEST['bank']))
{
    echo "error in bank<br>";
}
elseif(!isset($_REQUEST['weight']))
{
    echo "error in gold weight<br>";
}
elseif(!isset($_REQUEST['demanded-amount']))
{
    echo "error in demand amount<br>";
}
elseif(!isset($_REQUEST['tenure']))
{
    echo "error in tenure<br>";
}
elseif(!isset($_REQUEST['loan-amount']))
{
    echo "error in loan amount<br>";
}
else{

//fetching from form
$customerid=mysqli_real_escape_string($conn,$_REQUEST['customer-id']);
$bank=mysqli_real_escape_string($conn,$_REQUEST['bank']);
$goldweight=mysqli_real_escape_string($conn,$_REQUEST['weight']);
$demandAmt=mysqli_real_escape_string($conn,$_REQUEST['demanded-amount']);
$tenure=mysqli_real_escape_string($conn,$_REQUEST['tenure']);
$loanAmt=mysqli_real_escape_string($conn,$_REQUEST['loan-amount']);


//inserting into database
if(mysqli_query($conn,"INSERT INTO goldloan(CustomerID,Bank,GoldWeight,DemandAmt,Tenure,LoanAmt) values('$customerid','$bank','$goldweight','$demandAmt','$tenure','$loanAmt')"))
{
    echo "Form Submission done!";
}
else{
   echo "Enter valid data";
}
}
//closing connection
mysqli_close($conn);

?>