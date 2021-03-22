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
<nav class="navbar navbar-expand-lg navbar-light bg-light container-fluid">
        <a href="" class="navbar-brand mt-auto"><span class="text-warning big">M</span><span class="lit">social</span></a>
        <div class="container-fluid ">
            <div class="nav-item ml-auto">
                
               <a href="login"><button class="btn btn-outline-primary btn-sm">Login</button></a> 
            </div>
    </nav>
     <center>
    <div class="col-lg-5 card mt-3 mb-3">
        <div class="card-header">
       <center><h1 class="text-success text-left">Sign Up</h1></center>
       <p class="text-left">It's quick and easy</p>
       </div>
       <form class="card-body" onsubmit="return clickBut()">
           <div class="row">
               <div class="col-6">
                <center><input type="text" class="form-control mb-3" placeholder="First name" required></center>
               </div>
               <div class="col-6">
                <center><input type="text" class="form-control mb-3" placeholder="Last name" required></center>
              </div>
            </div>
    <div class="row">
            <div class="col-6">
                <center><input type="text" class="form-control mb-3" placeholder="Email" required></center>
                </div>
                <div class="col-6">
                <center><input type="text" class="form-control mb-3" placeholder="Username" required></center>
                </div>
            </div>
            <div>
                <p class="text-left"><strong>Date of birth</strong></p>
                <div class="row">
                    <div class="col-3">
                        <select class="form-control">
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
                        <select class="form-control">
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
                        <select class="form-control">
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
            </div>
                <p class="text-left mt-2"><strong>Gender</strong></p>
            <div class="row">
                <div class="form-check col-3 form-control">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Male</label>
                  </div>
                  <div class="form-check col-3 ml-2 form-control">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Female</label>
                  </div>
                  <div class="form-check col-3 form-control ml-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Other</label>
                  </div>
            </div>
        <p class="text-danger" id="length"></p>
        <center><input type="password" class="form-control mb-3" id="pass" placeholder="Password" onkeyup="checkLength()"></center>
        <p id="errorMessage" class="mb-0 mt-0"></p>
        <center><input type="password" class="form-control mb-3" id="copass" placeholder="Confirm password" onkeyup="myFunction()"></center>
        <center><a href="#" target=""><button class="btn btn-outline-success btn-lg mb-1 space" type="submit">Sign up</button></a></center>
        </form>
    </div>
    <script src="assets/form.js"></script>
</body>
</html>