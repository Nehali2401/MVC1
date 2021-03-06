<?php include "page_header.php"; ?>

<!DOCTYPE html>
<html lang="en">

    
    <!-- Navigation Bar -->
    <?php include("Navigation.php"); ?>
    
<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light" id="mynav">
        <div class="container">
            <a class="navbar-brand" href="home.html"><img src="images/Homepage/logo.png" alt="logo" class="img-responsive"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarmenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="search.html">Search Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Dashboard.html">Sell Your Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="BuyerRequest-page.html">Buyer Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FAQ.html">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ContactUs.html">Contatct Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" id="userdropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/user-img/user-img.png" alt="User Image" class="img-responsive rounded-circle" id="nav-user-img"></a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="User-Profile%20page.html">My Profile</a>
                            <a class="dropdown-item" href="Mydownloads-page.html">My Downloads</a>
                            <a class="dropdown-item" href="MySoldNotes-page.html">My Sold Notes</a>
                            <a class="dropdown-item" href="RejectedNotes.html">My Rejected Notes</a>
                            <a class="dropdown-item" href="ChangePassword.html">Change Password</a>
                            <a class="dropdown-item" href="login.html" id="user-logout">Logout</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <div class="login-btn">
                            <a class="nav-link btn btn-general btn-purple" href="login.html" id="home-login-btn" role="button">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="mysold-notes">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="mysoldnotes-head">
                        <p>My Sold Notes</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 text-right">
                    <div class="mysoldnotes-search">
                        <input type="text" class="form-control" id="search-mysold-note" placeholder="Search">
                        <div class="mysoldnote-search-btn" id="mydownloads-btn">
                            <a class="btn btn-general btn-purple" href="#" title="Search" role="button">Search</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mysold-notes-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <table class="table table-hover" id="mysold-notes-table">
                        <thead>
                            <tr>
                                <th scope="col">Sr no.</th>
                                <th scope="col">Note Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Buyer</th>
                                <th scope="col">Sell Type</th>
                                <th scope="col">Price</th>
                                <th scope="col">Downloaded Date/Time</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="Note-Details.html">Data Science</a></td>
                                <td>Science</td>
                                <td>mymail123@gmail.com</td>
                                <td>Paid</td>
                                <td>$250</td>
                                <td>01 Jan 2021, 21:33:34</td>
                                <td>
                                    <div class="action-img">
                                        <div class="view-mysold-note">
                                            <a href="Note-Details.html"><img src="images/Dashboard/eye.png" alt="Edit" class="img-risponsive"></a>
                                        </div>
                                        <div class="mysold-note-action dropleft">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/Dashboard/dots.png" alt="Edit" class="img-risponsive"></a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="Note-Details.html">Accounts</a></td>
                                <td>Commerce</td>
                                <td>mymail123@gmail.com</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>01 Jan 2021, 21:33:34</td>
                                <td>
                                    <div class="action-img">
                                        <div class="view-mysold-note">
                                            <a href="Note-Details.html"><img src="images/Dashboard/eye.png" alt="Edit" class="img-risponsive"></a>
                                        </div>
                                        <div class="mysold-note-action dropleft">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/Dashboard/dots.png" alt="Edit" class="img-risponsive"></a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="Note-Details.html">Social Studies</a></td>
                                <td>Social</td>
                                <td>mymail123@gmail.com</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>01 Jan 2021, 21:33:34</td>
                                <td>
                                    <div class="action-img">
                                        <div class="view-mysold-note">
                                            <a href="Note-Details.html"><img src="images/Dashboard/eye.png" alt="Edit" class="img-risponsive"></a>
                                        </div>
                                        <div class="mysold-note-action dropleft">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/Dashboard/dots.png" alt="Edit" class="img-risponsive"></a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="Note-Details.html">AI</a></td>
                                <td>IT</td>
                                <td>mymail123@gmail.com</td>
                                <td>Paid</td>
                                <td>$3542</td>
                                <td>01 Jan 2021, 21:33:34</td>
                                <td>
                                    <div class="action-img">
                                        <div class="view-mysold-note">
                                            <a href="Note-Details.html"><img src="images/Dashboard/eye.png" alt="Edit" class="img-risponsive"></a>
                                        </div>
                                        <div class="mysold-note-action dropleft">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/Dashboard/dots.png" alt="Edit" class="img-risponsive"></a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><a href="Note-Details.html">Data Structure</a></td>
                                <td>Science</td>
                                <td>mymail123@gmail.com</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>01 Jan 2021, 21:33:34</td>
                                <td>
                                    <div class="action-img">
                                        <div class="view-mysold-note">
                                            <a href="Note-Details.html"><img src="images/Dashboard/eye.png" alt="Edit" class="img-risponsive"></a>
                                        </div>
                                        <div class="mysold-note-action dropleft">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/Dashboard/dots.png" alt="Edit" class="img-risponsive"></a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><a href="Note-Details.html">Data Science</a></td>
                                <td>Science</td>
                                <td>mymail123@gmail.com</td>
                                <td>Paid</td>
                                <td>$250</td>
                                <td>01 Jan 2021, 21:33:34</td>
                                <td>
                                    <div class="action-img">
                                        <div class="view-mysold-note">
                                            <a href="Note-Details.html"><img src="images/Dashboard/eye.png" alt="Edit" class="img-risponsive"></a>
                                        </div>
                                        <div class="mysold-note-action dropleft">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/Dashboard/dots.png" alt="Edit" class="img-risponsive"></a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><a href="Note-Details.html">Accounts</a></td>
                                <td>Commerce</td>
                                <td>mymail123@gmail.com</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>01 Jan 2021, 21:33:34</td>
                                <td>
                                    <div class="action-img">
                                        <div class="view-mysold-note">
                                            <a href="Note-Details.html"><img src="images/Dashboard/eye.png" alt="Edit" class="img-risponsive"></a>
                                        </div>
                                        <div class="mysold-note-action dropleft">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/Dashboard/dots.png" alt="Edit" class="img-risponsive"></a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><a href="Note-Details.html">Social Studies</a></td>
                                <td>Social</td>
                                <td>mymail123@gmail.com</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>01 Jan 2021, 21:33:34</td>
                                <td>
                                    <div class="action-img">
                                        <div class="view-mysold-note">
                                            <a href="Note-Details.html"><img src="images/Dashboard/eye.png" alt="Edit" class="img-risponsive"></a>
                                        </div>
                                        <div class="mysold-note-action dropleft">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/Dashboard/dots.png" alt="Edit" class="img-risponsive"></a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td><a href="Note-Details.html">AI</a></td>
                                <td>IT</td>
                                <td>mymail123@gmail.com</td>
                                <td>Paid</td>
                                <td>$3542</td>
                                <td>01 Jan 2021, 21:33:34</td>
                                <td>
                                    <div class="action-img">
                                        <div class="view-mysold-note">
                                            <a href="Note-Details.html"><img src="images/Dashboard/eye.png" alt="Edit" class="img-risponsive"></a>
                                        </div>
                                        <div class="mysold-note-action dropleft">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/Dashboard/dots.png" alt="Edit" class="img-risponsive"></a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td><a href="Note-Details.html">Data Structure</a></td>
                                <td>Science</td>
                                <td>mymail123@gmail.com</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>01 Jan 2021, 21:33:34</td>
                                <td>
                                    <div class="action-img">
                                        <div class="view-mysold-note">
                                            <a href="Note-Details.html"><img src="images/Dashboard/eye.png" alt="Edit" class="img-risponsive"></a>
                                        </div>
                                        <div class="mysold-note-action dropleft">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/Dashboard/dots.png" alt="Edit" class="img-risponsive"></a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
    
    <?php include "page_footer.php"; ?>

</body>

</html>