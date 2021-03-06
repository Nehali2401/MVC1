<html lang="en">

<head>

     <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    <!-- Title -->
    <title>Member Details - Notes Marketplace</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!-- Costom CSS-->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
</head>



    
    

  <body>  

 


 <nav class="navbar fixed-top navbar-expand-lg navbar-light" id="mynav">
        <div class="container">
            <a class="navbar-brand" href="Dashboard.php"><img src="images/logo.png" alt="logo" class="img-responsive"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarmenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" id="notesdropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notes</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="Notes-Under-Review.php">Notes Under Review</a>
                            <a class="dropdown-item" href="Published-Notes.php">Published Notes</a>
                            <a class="dropdown-item" href="Downloads-notes.php">Downloaded Notes</a>
                            <a class="dropdown-item" href="Rejected-notes.php">Rejected Notes</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Members.php">Members</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" id="reportsdropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reports</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="Spam-Reports.php">Spam Reports</a>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" id="settingsdropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="Manage-Syatem-Configuration.php">Manage System Configuration</a>
                            <a class="dropdown-item" href="Manage-Administrator.php">Manage Administrator</a>
                            <a class="dropdown-item" href="Manage-Category.php">Manage Category</a>
                            <a class="dropdown-item" href="Manage-Type.php">Manage Type</a>
                            <a class="dropdown-item" href="Manage-Country.php">Manage Countries</a>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" id="userdropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/admin.png" alt="User Image" class="img-responsive rounded-circle" id="nav-user-img"></a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="My-Profile.php">Update Profile</a>
                            <a class="dropdown-item" href="#">Change Password</a>
                            <a class="dropdown-item" href="login.php" id="user-logout">Logout</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <div class="login-btn">
                            <a class="nav-link btn btn-general btn-purple" href="login.php" id="home-login-btn" role="button">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<br/><br/><br/>
<section class="note">
        <form>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6" id="container-note-details-5">
              <h1 id="heading-note">Member Details</h1>
                     <div class="row card-body-1">
                                           <div class="col-sm-3  col-xs-3" >
                                             <img  src="Images/members.png" alt="sans" style="width:130px; height: 130px; " / >
                                            </div>
                                             <div class="col-sm-4 col-xs-4">
                                        <label class="lable-4">First Name:</label>
                                        <br/>
                                        <label class="lable-4">Last Name:</label>
                                        <br/>
                                        <label class="lable-4">Email:</label>
                                        <br/>
                                        <label class="lable-4">DOB:</label>
                                        <br/>
                                        <label class="lable-4">Phone Number:</label>
                                        <br/>
                                        <label class="lable-4">Collage/University:</label>
                                        
                                        </div>
                    
                                         <div class="col-sm-4 col-xs-4">    
                                        <label class="lable-5">Richard</label>
                                        <br/>
                                        <label class="lable-5">Brown</label>
                                        <label class="lable-5">richardbrown77@gmail.com</label>
                                        <label class="lable-5">13-08-1990</label>
                                        <br/>
                                        <label class="lable-5">9988731221</label>
                                        <br/>
                                        <label class="lable-5">University of California</label>
                                        
                                          <br/> <br/>  
                                        </div>
                        </div>
              
                         
        

            </div>
                <div class = "vertical"></div> 
               
                <div class="col-md-6 col-sm-6 col-xs-6" id="container-note-details-6">
                   <div class="row card-body-1">
                                       <div class="col-sm-4 col-xs-4">
                                        <label class="lable-4">Address 1:</label>
                                        <br/>
                                        <label class="lable-4">Address 2:</label>
                                        <br/>
                                        <label class="lable-4">City:</label>
                                        <br/>
                                        <label class="lable-4">State:</label>
                                        <br/>
                                        <label class="lable-4">Country:</label>
                                        <br/>
                                        <label class="lable-4">Zip Code:</label>
                                        
                                        </div>
                                        <div class="col-sm-4 col-xs-4">    
                                        <label class="lable-5">144-Diamond Height</label>
                                        <br/>
                                        <label class="lable-5">Star Colony</label>
                                        <br/>
                                        <label class="lable-5">New York</label>
                                        <br/>
                                        <label class="lable-5">New York State</label>
                                        <br/>
                                        <label class="lable-5">United State</label>
                                        <br/>
                                        <label class="lable-5">11004-05</label>
                                        
                                    </div>
                                    <br/>

                </div>
              </div>
            </div>
    </form>
      </section>
              <br/>
                <hr class="line">
                
                
                
             
        
          <h1 class="note-title-2">Notes</h1>   
       
    
    <section id="Genaeral-Table">
       
            
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover" id="published-notes-table">
                        <thead>
                            <tr>
                                <th scope="col">Sr no.</th>
                                <th scope="col">Note Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Satus</th>
                                <th scope="col">Downloaded Notes</th>
                                <th scope="col">Total Earnings</th>
                                <th scope="col">Date Added</th>
                                <th scope="col">Published Date</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="NoteDetails-admin.html">Software Development</a></td>
                                <td>IT</td>
                                <td>Published</td>
                                <td><a href="DownloadedNotes.html">12</a></td>
                                <td>$17</td>
                                <td>11-01-2021, 12:10</td>
                                <td>11-01-2021, 12:10</td>
                                <td>
                                    <div class="action-img">
                                        <div class="action-member-detail-note dropleft">
                                            <a id="member-detail-action-dropdownMenu" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/dots.png" alt="More" class="img-risponsive"></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Notes</a>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="NoteDetails-admin.html">Computer Science</a></td>
                                <td>Computer</td>
                                <td>Published</td>
                                <td><a href="DownloadedNotes.html">2</a></td>
                                <td>$12</td>
                                <td>09-01-2021, 12:10</td>
                                <td>09-01-2021, 12:10</td>
                                <td>
                                    <div class="action-img">
                                        <div class="action-member-detail-note dropleft">
                                            <a id="member-detail-action-dropdownMenu" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/dots.png" alt="More" class="img-risponsive"></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Notes</a>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="NoteDetails-admin.html">Human Body</a></td>
                                <td>Science</td>
                                <td>Published</td>
                                <td><a href="DownloadedNotes.html">21</a></td>
                                <td>$157</td>
                                <td>08-01-2021, 12:10</td>
                                <td>08-01-2021, 12:10</td>
                                <td>
                                    <div class="action-img">
                                        <div class="action-member-detail-note dropleft">
                                            <a id="member-detail-action-dropdownMenu" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/dots.png" alt="More" class="img-risponsive"></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Notes</a>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="NoteDetails-admin.html">AI</a></td>
                                <td>IT</td>
                                <td>Published</td>
                                <td><a href="DownloadedNotes.html">13</a></td>
                                <td>$270</td>
                                <td>06-01-2021, 12:10</td>
                                <td>06-01-2021, 12:10</td>
                                <td>
                                    <div class="action-img">
                                        <div class="action-member-detail-note dropleft">
                                            <a id="member-detail-action-dropdownMenu" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/dots.png" alt="More" class="img-risponsive"></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Notes</a>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><a href="NoteDetails-admin.html">World War 2</a></td>
                                <td>History</td>
                                <td>Published</td>
                                <td><a href="DownloadedNotes.html">42</a></td>
                                <td>$877</td>
                                <td>05-01-2021, 12:10</td>
                                <td>05-01-2021, 12:10</td>
                                <td>
                                    <div class="action-img">
                                        <div class="action-member-detail-note dropleft">
                                            <a id="member-detail-action-dropdownMenu" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/dots.png" alt="More" class="img-risponsive"></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Notes</a>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        
    </section>
                
                    
  <section id="dash-pagination">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    </a>
                </li>
            </ul>
        </nav>
    </section>
                 





<!--Footer-->
         
   <footer>
        <hr>
        <div class="container">
            <div class="row" id="footer-content">
                <div class="col-xs-7 col-sm-7 col-md-6">
                    <div class="footer-line">
                        <p>Copyright &copy; Tatvasoft All rights reserved.</p>
                    </div>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-6 text-right">
                    <ul class="social-list">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    
 <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap JS-->
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>
      
    
</body>

</html>
