<!DOCTYPE html>
<html>
<head>
<style>
ul
{
    list-style-type: none;
    overflow:hidden;
    background-color: #f0f0f0;
	font-family: Sans-Serif;
	font-size: 20px;
	font-style: normal;
	font-weight: 500;
	color: black;
}

li 
{
    float:left ;
	font-family: Sans-Serif;
    font-size: 17px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
}

li a, .dropbtn
{
    display: inline-block;
    color: white;
    text-align: center;
    padding: 15px ;
    text-decoration: none;
	font-family: "Segoe UI Light","Segoe WPC","Segoe UI",
                Helvetica, Arial, "Arial Unicode MS", Sans-Serif;;
    font-size: 17px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	color : #000000;
}

li a:hover, .dropdown:hover .dropbtn 
{
    background-color: #949494;
}

li.dropdown 
{
    display: inline-block;
}

.dropdown-content 
{
    display: none;
    position: absolute;
    background-color: #f0f0f0;
	font-family: "Segoe UI Light","Segoe WPC","Segoe UI",
              Helvetica, Arial, "Arial Unicode MS", Sans-Serif;
    font-size: 17px;
	font-style: normal;
	font-variant: normal;
    font-weight: 500;
    color: #000000;
}

.dropdown-content a 
{
    color: #fefefe;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
	font-family: "Segoe UI Light","Segoe WPC","Segoe UI",
              Helvetica, Arial, "Arial Unicode MS", Sans-Serif;
    font-size: 17px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	color: #000000;
}

.dropdown-content a:hover 
{
    background-color: #949494;
}

.dropdown:hover .dropdown-content 
{
    display:block;
}

</style>
</head>
</head>
<body>

<ul>
    <li><a href="first.php">Home</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Login</a>
    <div class="dropdown-content">
	  <a href = "admin/first.php">Admin</a>
	  <a href="client/first.php">Client</a>
    </div>
  </li>
  <li><a href="about.php">About</a></li>
</ul>
</body>
</html>