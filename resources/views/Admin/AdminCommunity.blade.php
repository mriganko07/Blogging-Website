<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome</title>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="{{asset('css/adminhome.css')}}">
    </head>

    <body>
        <div class="container">
            <aside>

                <div class="top">
                    <div class="logo">
                        <h2>Hi, <span class="danger">ADHIP</span> </h2>
                    </div>
                    <div class="close" id="close_btn">
                        <span class="material-symbols-sharp">
                            close
                        </span>
                    </div>
                </div>
                <!-- end top -->
                <div class="sidebar">

                    <a href="admin_home.html">
                        <span class="material-symbols-sharp">grid_view </span>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="#" >
                        <span class="material-symbols-sharp">person_outline </span>
                        <h3>Users</h3>
                    </a>
                    <a href="admin_post.html">
                        <span class="material-symbols-sharp">insights </span>
                        <h3>Posts</h3>
                    </a>
                    <a href="#" class="active">
                        <span class="material-symbols-sharp">receipt_long </span>
                        <h3>Communities</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-sharp">mail_outline </span>
                        <h3>Messages</h3>
                        <span class="msg_count">14</span>
                    </a>

                    <a href="#">
                        <span class="material-symbols-sharp">report_gmailerrorred </span>
                        <h3>Reports</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-sharp">settings </span>
                        <h3>settings</h3>
                    </a>

                    <a href="#">
                        <span class="material-symbols-sharp">logout </span>
                        <h3>logout</h3>
                    </a>



                </div>

            </aside>
            <!-- --------------
            end asid
            -------------------- -->

            <!-- --------------
            start main part
            --------------- -->

            <main>
                <h1>Communities</h1>


                <!-- end insights -->
                <div class="recent_order">
                    <h2>Total Communities</h2>




                    <table>
                        <thead>
                            <tr>
                                <th>Community ID</th>
                                <th> User ID</th>
                                <th>Community Name</th>
                                <th> Total Members</th>
                                <th>Member's List</th>
                                <th>Suspend Community</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>dfdf</td>
                                <td>fsdfsf</td>
                                <td>sdfsfs</td>
                                <td>dfdsfd</td>
                                <td><a href="view_comminities.html">View Members</a></td>
                                <td>
                                    <div class="days">
                                        Days :
                                        <input type="number" id="quantity" name="quantity" min="0" max="365" step="1"
                                            value="0">
                                    </div>
                                </td>
                                <td class="button-container">
                                    <!-- <button class="edit">Edit</button>  -->

                                    <button type="submit" class="delete">
                                        <p class="button-container-p">Delete</p>
                                        <span class="icon-wrapper">
                                            <svg class="icon" width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 7V18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18V7M6 7H5M6 7H8M18 7H19M18 7H16M10 11V16M14 11V16M8 7V5C8 3.89543 8.89543 3 10 3H14C15.1046 3 16 3.89543 16 5V7M8 7H16"
                                                    stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>


                                        </span>
                                    </button>
                                </td>
                            </tr>


                        </tbody>
                    </table>

                    <!-- <a href="#">Show All</a> -->
                </div>

            </main>
            <!------------------
            end main
            ------------------->

            <!----------------
            start right main 
            ---------------------->
            <div class="right">

                <div class="top">
                    <button id="menu_bar">
                        <span class="material-symbols-sharp">menu</span>
                    </button>

                    <div class="theme-toggler">
                        <span class="material-symbols-sharp active">light_mode</span>
                        <span class="material-symbols-sharp">dark_mode</span>
                    </div>
                    <div class="profile">
                        <div class="info">
                            <p><b>Adhip</b></p>
                            <p>Admin</p>
                            <small class="text-muted"></small>
                        </div>
                        <div class="profile-photo">
                            <img src="/Images/profile-1.jpg" alt="" />
                        </div>
                    </div>
                </div>

                <div class="recent_updates">
                    <h2>Recent Update</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="profile-photo">
                                <img src="Pictures/agamani.jpg" alt="" />
                            </div>
                            <div class="message">
                                <p><b>Agamani</b> Recently post a picture</p>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="Pictures/Adhip.jpg" alt="" />
                            </div>
                            <div class="message">
                                <p><b>Adhip</b> Upload profile picture</p>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="Pictures/my.jpg" alt="" />
                            </div>
                            <div class="message">
                                <p><b>Mriganka</b> Comment on Adhip's post</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>



            <script src="{{asset('js/adminhome.js')}}"></script>
    </body>

</html>