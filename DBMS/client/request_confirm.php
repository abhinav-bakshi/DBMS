<html>
<head>
<title>::Leave Request Confirmation::</title>
<?php
session_start();
include 'connect.php';
include 'clientnavi.php';

$user = $_SESSION['user'];
echo "<link rel='stylesheet' type='text/css' href='style.css'>";
echo "<div class = 'textview'>";
echo "<center>";
if(isset($user))
	{
	$leavetype = $_POST['leavetype'];
	$leavedays = $_POST['leavedays'];
	$leavedate = $_POST['leaveyear']."-".$_POST['leavemonth']."-".$_POST['leavedate'];
	$date = date_create($leavedate);
	$duration = $leavedays." days";
	$interval = date_interval_create_from_date_string($duration);
	$enddate = date_add($date,$interval);
	$end = date_format($enddate,"Y-m-d");
	$empname = $_POST['empname'];
	$emptype = $_POST['emptype'];
	$designation = $_POST['designation'];
	$emptype = $_POST['emptype'];
	$empfee = $_POST['empfee'];
	$value1 = $_POST['value1'];
	$value2 = $_POST['value2'];
	$value3 = $_POST['value3'];
	$value4 = $_POST['value4'];
	$value5 = $_POST['value5'];
	$value6 = $_POST['value6'];
	$value7 = $_POST['value7'];
	$value8 = $_POST['value8'];
	$value9 = $_POST['value9'];
	$value10 = $_POST['value10'];
	$value11 = $_POST['value11'];
	$value12 = $_POST['value12'];
	$value13 = $_POST['value13'];
	$value14 = $_POST['value14'];
	$value15 = $_POST['value15'];
	$value16 = $_POST['value16'];
	$value17 = $_POST['value17'];
	$value18 = $_POST['value18'];
	$value19 = $_POST['value19'];
	$value20 = $_POST['value20'];
	$value21 = $_POST['value21'];
	$leavereason = $_POST['leavereason'];
	$dept = $_POST['dept'];
		if(!empty($leavedays))

			{
				if(strtotime($leavedate) > time())
				{
				$sql = "SELECT * FROM employees WHERE UserName='".$user."'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						if($row["UserName"] == $user)
							{
								if($leavetype === "Sick Leave")
								{
									if(($leavedays <= $row["SickLeave"]) || $leavedays < 0)
										{
										$empname = $row["EmpName"];
										$to = $row["EmpEmail"];
										$sql2 = "INSERT INTO emp_leaves(EmpName,LeaveType,LeaveDays,StartDate,EndDate,Dept) VALUES('".$empname."','".$leavetype."','".$leavedays."','".$leavedate."','".$end."','".$row['Dept']."')";
											if (mysqli_query($conn, $sql2))
											{
											$msg = "The Leave Request generated by you is as follows : \nEmployee Name : ".$empname."\nLeave Days Requested : ".$leavedays."\nType of leave : ".$leavetype."\nStarting Date of Leave : ".$leavedate."\n\n\nThank You,\nwebadmin,Leave Management System.";
											echo "Request Has Been Sucessfully Submitted.";
											}
											else
											{
											echo "Error: " . $sql . "<br>" . mysqli_error($conn);
											}
										}
									else
									{
									header('location:request_leave.php?err='.urlencode("You cannot ask for sick leaves more than that of your account !"));
									}
								}
								if($leavetype === "Earn Leave")
								{
									if(($leavedays <= $row["EarnLeave"]) || $leavedays < 0)
										{
										$empname = $row["EmpName"];
										$to = $row["EmpEmail"];
										$sql2 = "INSERT INTO emp_leaves(EmpName,LeaveType,LeaveDays,StartDate,EndDate,Dept) VALUES('".$empname."','".$leavetype."','".$leavedays."','".$leavedate."','".$end."','".$row['Dept']."')";;
											if (mysqli_query($conn, $sql2))
											{
											$msg = "The Leave Request generated by you is as follows : \nEmployee Name : ".$empname."\nLeave Days Requested : ".$leavedays."\nType of leave : ".$leavetype."\nStarting Date of Leave : ".$leavedate."\n\n\nThank You,\nwebadmin,Leave Management System.";
											echo "Request Has Been Sucessfully Submitted.";
											}
											else
											{
											echo "Error: " . $sql . "<br>" . mysqli_error($conn);
											}
										}
									else
									{
									header('location:request_leave.php?err='.urlencode("You cannot ask for earn leaves more than that of your account !"));
									}
								}
								if($leavetype === "Casual Leave")
								{
									if(($leavedays <= $row["CasualLeave"]) || $leavedays < 0)
										{
										$empname = $row["EmpName"];
										$to = $row["EmpEmail"];
										$sql2 = "INSERT INTO emp_leaves(EmpName,LeaveType,LeaveDays,StartDate,EndDate,Dept) VALUES('".$empname."','".$leavetype."','".$leavedays."','".$leavedate."','".$end."','".$row['Dept']."')";
											if (mysqli_query($conn, $sql2))
											{
											$msg = "The Leave Request generated by you is as follows : \nEmployee Name : ".$empname."\nLeave Days Requested : ".$leavedays."\nType of leave : ".$leavetype."\nStarting Date of Leave : ".$leavedate."\n\n\nThank You,\nwebadmin,Leave Management System.";
											echo "Request Has Been Sucessfully Submitted.";
											}
											else
											{
											echo "Error: " . $sql . "<br>" . mysqli_error($conn);
											}
										}
									else
									{
									header('location:request_leave.php?err='.urlencode("You cannot ask for casual leaves more than that of your account !"));
									}
								}
							}
						}
					}
					else
					{
					header('location:request_leave.php?err='.urlencode('Start Date is invalid !'));
					}
			}
		
		else
			{
			header('location:request_leave.php?err='.urlencode('Pl. Enter some details !'));
			}
	}
	else
	{
	header('location:first.php?err='.urlencode('Please Login first to access this page'));
	}
}
error_reporting(0);
echo "</center>";
echo "</div>";
$conn->close();
?>



<script type="text/javascript">
        function noBack()
         {
             window.history.forward()
         }
        noBack();
        window.onload = noBack;
        window.onpageshow = function(evt) { if (evt.persisted) noBack() }
        window.onunload = function() { void (0) }
    </script>
</head>
</html>