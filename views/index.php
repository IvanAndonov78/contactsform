<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ivan Andonov CW task - var.1 </title>
    <!--<link rel="stylesheet" href="./views/bs/css/bootstrap.css">-->
    <link rel="stylesheet" href="./views/bs-3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./views/css/index.css">
    <script src="./views/jq/jquery-3.4.1.min.js"></script>
    <script src="./views/bs-3.4.1/js/bootstrap.min.js"></script>
    <script src="./views/js/app.js"></script>
</head>
<body>
    <div id="bgr">    
        <nav class="navbar navbar-inverse" id="nav">
        
            <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" 
                    class="navbar-toggle" 
                    data-toggle="collapse" 
                    data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#" id="brand"> CWEB Addresses </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#" id="ug"> User Guide </a></li>
                    <li><a href="#" id="admin-rep-link"> Admin Report </a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" 
                            class="btn btn-info btn-lg"
                            id="logout">
                        <span class="glyphicon glyphicon-log-out"></span> 
                        Log out
                    </a>
                    </li> 
                    <li>
                        <a href="#" 
                            class="btn btn-info btn-lg" 
                            data-toggle="modal" 
                            data-target="#myModal" 
                            id="login-link"> 
                            <span class="glyphicon glyphicon-log-in"></span>
                            Login 
                        </a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        <div class="container" id="main">
            <div class="container" id="insert-form">
                <form id="insertForm">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                            <input id="firstname" 
                                type="text" 
                                class="form-control" 
                                name="firstname" 
                                placeholder="First name"
                                required
                                > 
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                            <input id="surname" 
                                type="text" 
                                class="form-control" 
                                name="surname" 
                                placeholder="Sur name"
                                required
                                > 
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-map-marker"></i>
                        </span>
                            <input id="address" 
                                type="text" 
                                class="form-control" 
                                name="address" 
                                placeholder="Address"
                                required
                                > 
                    </div>
                    <div class="input-group" style="width:100%;">
                        <!--<div class="input-group-prepend"></div>-->
                        <select class="custom-select" id="countries">
                            
                        </select>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-phone-alt"></i>
                        </span>
                        <input id="country-phone-code" 
                            type="text" name="country-phone-code" 
                            value="" 
                            style="display:inline-block;width:14%;height:34px;"
                            disabled
                            >
                        <input id="phone" 
                            type="text" name="phone" 
                            style="display:inline-block;width:86%;height:34px;border-top-right-radius:4px;border-bottom-right-radius:4px;border:0px;" 
                            required
                            >  
                    </div>       

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                            <input id="mail" 
                                type="email" 
                                class="form-control" 
                                name="mail" 
                                placeholder="Email"
                                required
                                > 
                    </div>

                    <div class="input-group" style="width:100%;">
                        <hr style="margin-top:2px;margin-bottom:2px;background-color:#009999">
                        <button type="submit" class="btn btn-default"> Save </button> &nbsp;
                        <button type="reset" class="btn btn-default"> Reset </button>
                    </div>
                </form>
            </div>
            
            <div class="container" id="ug-holder">
            
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <h3 style="margin-bottom:20px;"> User Guide for CWEB Addresses module </h3>
                            <ul class="list-group">
                            <h4 class="ug-titles"> How to use this module? </h4>
                                <li class="list-group-item"> 
                                    For using this module and all it's features you <b> have to login </b> 
                                    the system ! 
                                </li>
                                <li class="list-group-item">     
                                    If you are logged in <b> as a Common User </b> 
                                    you could only isert data. 
                                </li>    
                                <li class="list-group-item">    
                                    If you are logged in <b> as an Admin User (Administrator) </b> 
                                    you could insert data and use the Admin Report.
                                </li>
                                <li class="list-group-item">    
                                    When you entering a phone number via the Data Entry Form, please consider
                                    the right entry format: xxxxx-xxxxxxxxx. i.e. 5 digits [0-9] - 9 digits 
                                    The first 5 digits represents the phone code of the country. For example, 
                                    if the country is Bulgaria, 00359 is the code of the country for entering 
                                    a phone number. If my number is 0886247766 and I am from Bulgaria,
                                    You should enter in the phone filed of the form the following:
                                    00359-886247766
                                </li>
                                <li class="list-group-item">  
                                    To close this User Guide just use the Navbar and click on another element!  
                                </li>
                                <li class="list-group-item"> 
                                    In case of using this module via your mobile device, you can scroll the 
                                    content in the green screen which is scrollable 
                                    (also conserns this user guide conent, the admin report and the 
                                    insert data form)
                                </li>

                                <h4 class="ug-titles"> Basic features: </h4>

                                <li class="list-group-item">  
                                    Login with different rights & Security 
                                </li>
                                <li class="list-group-item"> 
                                    Inserting data (after common login) 
                                </li>
                                <li class="list-group-item"> 
                                    Data validation via our system 
                                </li>
                                <li class="list-group-item"> 
                                    Displaying admin report (after login as Admin)  
                                </li>
                        </ul>
                    </div>
                </div>
            </div> 

            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> Login User form </h4>
                        </div>
                        <div class="modal-body">
                        
                            <div class="container" id="login-form">
                                <form id="loginForm">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-user"></i>
                                        </span>
                                            <input id="email" 
                                                type="text" 
                                                class="form-control" 
                                                name="email" 
                                                placeholder="Email"> 
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-lock"></i>
                                        </span>
                                        <input id="password" 
                                            type="password" 
                                            class="form-control" 
                                            name="password" 
                                            placeholder="Password">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-default"> Login </button>    
                                        <button type="button" 
                                            class="btn btn-default" 
                                            data-dismiss="modal"
                                            id="closeBtn"> Close 
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        
                    </div>
                
                </div>

            </div>

            <!-- Modal -->
            <div id="infoModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <div id="infoMsg"> </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>

            </div>
            </div>

            <div class="container" id="admin-report"> </div>
        
        </div> <!-- end of the #main -->
        <div class="footer">
            <div class="container" style="padding-bottom:12px;">
                <h4> Creative Web &reg; </h4>
            </div>
        </div>
    </div>
    
</body>
</html>