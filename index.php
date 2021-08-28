
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>





<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
* {
    box-sizing: border-box;
  }
  
  body {
    margin: 0px;
    font-family: 'segoe ui';
  }
  
  .nav {
    height: 50px;
    width: 100%;
    background-color: #7ee8fa;
background-image: linear-gradient(315deg, #7ee8fa 0%, #80ff72 74%);

    position: relative;
  }
  
  .nav > .nav-header {
    display: inline;
  }
  
  .nav > .nav-header > .nav-title {
    display: inline-block;
    font-size: 22px;
    color: #fff;
    font-weight: 550;
    font-family: Arial, Helvetica, sans-serif;
    padding: 10px 10px 10px 10px;
  }
  
  .nav > .nav-btn {
    display: none;
  }
  
  .nav > .nav-links {
    display: inline;
    float: right;
    font-size: 18px;
  }
  .nav > .nav-links > ul li a{
    display: block;
    padding: 0 8px;
    color: #fff;
    line-height: 40px;
    font-size: 18px;
    text-decoration: none;

  }
  .nav > .nav-links > ul{
    padding: 0;
    margin-top: 5px;
    list-style: none;
    position: relative;
    
  }
  .nav > .nav-links > ul li{
    display: inline-block;
    background-color: #1177ca;
    
    
  }
  .nav > .nav-links > ul li:hover{
      background-color: #0b65af;
      border-radius: 5px;
  }
  
  .nav > #nav-check {
    display: none;
  }

 .nav .nav-links ul a.icon{
 margin-left: 80px;
 margin-right: 10px;
 }

 .nav .nav-links ul a i{
    background-color: #fff;
    border-radius: 50px;
    padding: 7px;
    margin-left: 5px;
 }

  
  @media (max-width:750px) {
    .nav > .nav-btn {
      display: inline-block;
      position: absolute;
      right: 0px;
      top: 0px;
    }
    .nav > .nav-btn > label {
      display: inline-block;
      width: 50px;
      height: 50px;
      padding: 13px;
    }
    .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
      background-color: bLack;
    }
    .nav > .nav-btn > label > span {
      display: block;
      width: 25px;
      height: 10px;
      border-top: 2px solid #eee;
    }
    .nav > .nav-links {
      position: absolute;
      display: block;
      width: 100%;
      background-color: #333;
      height: 0px;
      transition: all 0.3s ease-in;
      overflow-y: hidden;
      top: 50px;
      left: 0px;
    }
    .nav > .nav-links > ul li a {
      display: block;
      width: 100%;
    }

    /*   */


    
      .nav > .nav-links > ul li{
        display: block;
        margin-bottom: 20px;
        padding: 0;
        background-color: #333;
         
      }
      .nav > .nav-links > ul li a{
          margin-left: 40%;
      }
      .nav .nav-links ul a.icon{
        margin-left: 33%;
      }

    /*   */
    .nav > #nav-check:not(:checked) ~ .nav-links {
      height: 0px;
    }
    .nav > #nav-check:checked ~ .nav-links {
      height: calc(100vh - 50px);
      overflow-y: auto;
    }
  }




  .form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}










.preloader
{
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100vh;
background: #fff;
z-index: 9999;
text-align: center;
}	.preloader-icon
{
position: relative;
top: 45%;
width: 100px;
border-radius: 50%;
animation: shake 1.5s infinite;
}






@keyframes shake
{
0% { transform: translate(1px, -1px) rotate(0deg);}
10% { transform: translate(1px, -3px) rotate(-1deg);}
20% { transform: translate(1px, -5px) rotate(-3deg);}
30% { transform: translate(1px, -7px) rotate(0deg);}
40% { transform: translate(1px, -9px) rotate(1deg);}
50% { transform: translate(1px, -11px) rotate(3deg);}
60% { transform: translate(1px, -9px) rotate(0deg);}
70% { transform: translate(1px, -7px) rotate(-1deg);}
80% { transform: translate(1px, -5px) rotate(-3deg);}
90% { transform: translate(1px, -3px) rotate(0deg);}
100% { transform: translate(1px, -1px) rotate(-1deg);}
}

.ty h6
{
overflow: hidden;
float: left;text-align: center;padding: 5px 5px;text-decoration: none; font-size: 17px;
}









::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background-color: #f7b42c;
background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);

  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}

</style>

</head>

<body>
<div class="preloader"> <img class="preloader-icon" src="https://acegif.com/wp-content/uploads/loading-79.gif" width="100" height="100" alt="My Site  Preloader"> </div>
      <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
           <img src="https://image.flaticon.com/icons/png/512/4256/4256900.png" width="30">&nbsp;<span class="text-danger">Stock</span> <span class="text-primary">Market App</span>
          </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        
        <div class="nav-links">
            <ul>
          <li style="background-color:black; margin-left:100px;"><a href="#" target="_blank">Home</a></li>
          
            </ul>
        </div>
      </div>
<div class="container">

<div class="searchbox w-75 p-3" style="background-color: #abe9cd;background-image: linear-gradient(315deg, #abe9cd 0%, #3eadcf 74%); height:250px; margin:70px auto;">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<br>		
<div class="row justify-content-center">

                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                      <input class="form-control form-control-lg form-control-borderless" name="s11" type="text" placeholder="Search Stock Market Company" required>
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                               <button type="submit" class="btn btn-info" name="sbmt">
      <span class="fa fa-search h4"></span>
</button>

                                    </div>
                                    <!--end of col-->

                                </div>
<div class="type-searchs" style="margin-left:20px;">
<h5 class="text-white">Type to search</h5>
<div class="ty"> 
<h6>AAPL</h6>
<h6>BSE</h6>
<h6>MSFT</h6> 
<h6>GOOG</h6>
<h6>TSLA</h6>
<h6>AMZN</h6>
<h6>FB</h6>
<h6>WMT</h6>
<h6>BAC</h6>
</div>
<br>
</div>
                            </form>
         
</div>
</div>
<br><br>
 <?php
 if(isset($_POST['sbmt']))
 {
 $s11=$_POST['s11'];
 $url="https://cloud.iexapis.com/stable/stock/$s11/company?token=sk_1fa73430e7704fe4a0e43ab477ac2ac4";
     $ch=curl_init();
     curl_setopt($ch,CURLOPT_URL,$url);
     curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
     $result=curl_exec($ch);
     curl_close($ch);
     $result=json_decode($result,true);
     if($result==true)
     {

     
?>
<table <table class="table w-100 p-3">
  <thead>
<tr>
<th class="bg-primary text-white" style="margin-left:150px;">CompanyName</th>
<td><?php echo $result['companyName'];?></td>
</tr>
<tr>
<th class="bg-success text-white">Website</th>
<td><?php echo $result['website'];?></td>
</tr>
<tr>
<th class="bg-danger text-white">CEO</th>
<td><?php echo $result['CEO'];?></td>
</tr>
<tr>
<th class="bg-primary text-white">Total Employees</th>
<td><?php echo $result['employees'];?></td>
</tr>
<tr>
<th class="bg-secondary text-white">Sector</th>
<td><?php echo $result['sector'];?></td>
</tr>
<tr>
<th class="bg-danger text-white">Address</th>
<td><?php echo $result['address'];?></td>
</tr>
<tr>
<th class="bg-success text-white">City</th>
<td><?php echo $result['city'];?></td>
</tr>
<tr>
<th class="bg-primary text-white">State</th>
<td><?php echo $result['state'];?></td>
</tr>
<tr>
<th class="bg-secondary text-white">Zip-Code</th>
<td><?php echo $result['zip'];?></td>
</tr>
<tr>
<th class="bg-info text-white">Country</th>
<td><?php echo $result['country'];?></td>
</tr>
</table>
<?php
     }
     else
 {
?>
<script>
swal("No Available this name in Stock Market Company!", "No Data Found!", "warning");
</script>
     <?php

 }

 }
     ?>
<script>
window.onload = function(){ document.querySelector(".preloader").style.display = "none"; }
</script>

    </body>
    </html>