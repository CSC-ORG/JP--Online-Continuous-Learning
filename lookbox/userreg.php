<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link rel="stylesheet" type="text/css" href="css/styles3.css" />
<script type="text/javascript">
    
function usersignup()
    {
        console.log("abc");
        var a=document.forms["login2"]["fname"].value;
        var b=document.forms["login2"]["lname"].value;
        var c=document.forms["login2"]["email"].value;
        var d=document.forms["login2"]["password"].value;
        var e=document.forms["login2"]["confirm_password"].value;
        var f=document.forms["login2"]["gender"].value;

    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") )
      {
      alert("All Field must be filled out!");
      return false;
      }
    if (a==null || a=="")
      {
      alert("Enter your First name!");
      return false;
      }
    if (b==null || b=="")
      {
      alert("Enter your Last name!");
      return false;
      }
    if (c==null || c=="")
      {
      alert("Enter your email !");
      return false;
      }
    if (d==null || d=="")
      {
      alert("Password must be Filled Out!");
      return false;
      }
    if (e==null || e=="")
      {
      alert("Confirm Password must be Filled Out!");
      return false;
      }
    if(d!=e)
       {
         alert("Passwords should match!");
         return false;

       } 
    if (f==null || f=="")
      {
      alert("Select Gender!");
      return false;
      }

    
    }
    </script>


</head>

<body>

<div id="carbonForm">
	<h1>Signup</h1>

    <form onsubmit="return usersignup()" name="login2" action="../signup.php" method="post" id="signupForm">

    <div class="fieldContainer">

        <div class="formRow">
            <div class="label">
                <label for="name">FirstName:</label>
            </div>
            
            <div class="field">
                <input type="text" name="fname" id="name" placeholder="first Name" />
            </div>
        </div>
        
		<div class="formRow">
            <div class="label">
                <label for="name">LastName:</label>
            </div>
            
            <div class="field">
                <input type="text" name="lname" id="name1" placeholder="last Name" />
            </div>
        </div>
		
        <div class="formRow">
            <div class="label">
                <label for="email">Email:</label>
            </div>
            
            <div class="field">
                <input type="text" name="email" id="email" placeholder="Email" />
            </div>
        </div>
        
        <div class="formRow">
            <div class="label">
                <label for="pass">Password:</label>
            </div>
            
            <div class="field">
                <input type="password" name="password" id="pass" placeholder="*******"/>
            </div>
        </div>
         
         <div class="formRow">
            <div class="label">
                <label for="name">Confirm_Password:</label>
            </div>
            
            <div class="field">
                <input type="password" name="confirm_password" id="name3" placeholder="Confirm Password"/>
            </div>
        </div>
        
         <div class="formRow">
            <div class="label">
                <label for="name">Birthdate:</label>
            </div>
            
            <div class="field" style="float:left;">
                 <select name="month" class = "form-control input-lg">
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>                        </div>
                        <div class="day">
                            <select name="day" class = "form-control input-lg">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>                        </div>
                        <div class="year">
                            <select name="year" class = "form-control input-lg">
<option value="1951">1951</option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
</select>                   
            </div>

         <label>Gender : </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="Male" id="male" />                        Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="Female" id="female" />                        Female
                    </label>
        

        </div>


    </div> <!-- Closing fieldContainer -->
    
    <div class="signupButton">
           

	<input type="submit" name="submit" id="submit" value="Signup" />
    </div>
    
    </form>


        
</div>



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</body>
</html>