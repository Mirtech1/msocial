<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Sign Up</title>
</head>
<body class="bg-dark">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="index" class="navbar-brand mt-auto"><span class="text-warning big">M</span><span class="lit">social</span></a>
            <a href="login" class="ml-auto nav-item"><button class="btn btn-sm btn-outline-primary">Login</button></a>
        </nav>
    </div>
     <center>
    <div class="col-lg-5 card mt-3 mb-3">
        <div class="card-header">
       <center><h1 class="text-success text-left">Sign Up</h1></center>
       <p class="text-left">It's quick and easy</p>
       </div>
       <form class="card-body" method="POST" action="User/register">
       <h6 class="text-left mb-1 mt-2"><strong>Name</strong></h6>
           <div class="row">
               <div class="col-6">
                <p id="fName" class="mb-0 mt-0"></p>
                <center><input type="text" name="fName" class="form-control mb-3" placeholder="First name" id="fname" onkeyup="fNameCheck()"></center>
               </div>
               <div class="col-6">
                   <p id="lName" class="mb-0 mt-0"></p>
                <center><input type="text" name="lName" class="form-control mb-3" placeholder="Last name" id="lname" onkeyup="lNameCheck()"></center>
              </div>
            </div>
    <div class="row">
            <div class="col-6">
                <p id="email" class="mb-0 mt-0"></p>
                <center><input type="text" name="email" class="form-control mb-3" placeholder="Email" id="Email" onkeyup="emailCheck()"></center>
                </div>
                <div class="col-6">
                    <p id="uName" class="mb-0 mt-0"></p>
                <center><input type="text" name="uName" class="form-control mb-3" placeholder="Username" id="username" onkeyup="uNameCheck()"></center>
                </div>
            </div>
            <h6 class="text-left mb-1 "><strong>Date of Birth</strong></h6>
                <div class="row">
                    <div class="col-3">
                        <select class="form-control" name="day">
                            <option disabled selected>Day</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>4</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <select class="form-control" name="month">
                            <option disabled selected>Month</option>
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <select class="form-control" name="year">
                            <option disabled selected>Year</option>
                            <option>1975</option>
                            <option>1976</option>
                            <option>1977</option>
                            <option>1978</option>
                            <option>1979</option>
                            <option>1980</option>
                            <option>1981</option>
                            <option>1982</option>
                            <option>1983</option>
                            <option>1984</option>
                            <option>1985</option>
                            <option>1986</option>
                            <option>1987</option>
                            <option>1988</option>
                            <option>1989</option>
                            <option>1990</option>
                            <option>1991</option>
                            <option>1992</option>
                            <option>1993</option>
                            <option>1994</option>
                            <option>1995</option>
                            <option>1996</option>
                            <option>1997</option>
                            <option>1998</option>
                            <option>1999</option>
                            <option>2000</option>
                            <option>2001</option>
                            <option>2002</option>
                            <option>2003</option>
                            <option>2004</option>
                            <option>2005</option>
                        </select>
                    </div>
                </div>
            <h6 class="text-left mb-1 mt-2"><strong>Gender</strong></h6>
            <div class="row">
                <div class="form-check col-3 ml-3 form-control">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" name="gender">
                    <label class="form-check-label" for="flexRadioDefault1">Male</label>
                  </div>
                  <div class="form-check col-3 ml-2 form-control">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" name="gender" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Female</label>
                  </div>
                  <div class="form-check col-3 form-control ml-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" name="gender" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Other</label>
                  </div>
            </div>
            <h6 class="text-left mb-1 mt-2"><strong>Security</strong></h6>
            <div>
                <p class="mb-0 mt-0" id="length"></p>
                <center><input type="password" class="form-control mb-3" id="pass" placeholder="Password" onkeyup="checkLength()" name="pass"></center>
                <p id="errorMessage" class="mb-0 mt-0"></p>
                <center><input type="password" class="form-control mb-3" id="copass" placeholder="Confirm password" onkeyup="myFunction()"></center>
                <center><a href="login" target=""><button class="btn btn-outline-success btn-lg mb-1 space" type="submit" onclick="clickBut()">Sign up</button></a></center>
            </div>
    </form>
    </div>
    <div>
        <p class="text-center">@Msocial</p>
    </div>
    <script src="assets/form.js"></script>
</body>
</html>