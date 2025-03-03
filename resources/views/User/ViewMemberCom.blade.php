<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/viewmemcom.css')}}">
        <link rel="shortcut icon" href="{{asset('/Pictures/inkspire.png')}}" type="image/svg+xml">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Welcome</title>

        <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">

        <style>
            .section-dropdown-two{
                position: absolute;
                width: 366px;
                left: -7px;
                border-radius: 0px 13px 13px 0px;
                padding: 0;
            }
        </style>

    </head>
    <body>

        <!-- 
         - SECTION NAVBAR
        -->

        <header>
            <a href="/" class="logo"><img class="logo-img" src="/Pictures/inkspire.png"></a>
            <input type="text" placeholder="Search" id="searchInput">

            <div class="menu">

                <!-- 
                - DROPDOWN MESSAGE
                -->

                <div class="sec-center"> 	
                    <input class="dropdown" type="checkbox" id="dropdown1" name="dropdown"/>
                    <label class="for-dropdown" for="dropdown1"> <i class="fa-regular fa-message"></i> </label> 
                    <div class="section-dropdown"> 
                        <h1>Chats</h1> <i href="#" class="fa-brands fa-facebook-messenger" style="top: -32px;"></i>
                    </div>

                    <div class="section-dropdown section-dropdown-two">
                        <h1>Threads</h1>
                        <input type="checkbox" name="section-message" id="section-message" style="display: none;">
                        <div class="section-dropdown-two-body">
                            <label for="section-message" class="chat-button ">Go to Message</label>
                        </div>

                        <div class="section-dropdown-two-body-second">
                            <div class="section-dropdown-two-body-second-img">
                                <img style="width: 82px" src="https://www.redditstatic.com/chat-web/images/welcome-6AUNLRD4.png" alt="">
                            </div>
                            <div class="section-dropdown-two-body-second-para">
                                <p>Welcome to chat</p>
                                <p style="font-weight: 500;">Start a direct or group chat with other users</p>
                            </div>
                            <div class="section-dropdown-two-body-second-button" style="margin-top: 9px;">
                                <button class="chat-button" style="padding-top: 0px;">Start new Chat</button>
                            </div>
                        </div>

                    </div>
                </div>
            
                <a href="/create" style="position: static"><button href="#" class="create"><i class="fa-solid fa-plus"></i> <span>Create</span></button></a>


                <!-- 
                - DROPDOWN2 NOTIFICATION
                -->
            
                <div class="sec-center"> 	
                    <input class="dropdown2" type="checkbox" id="dropdown2" name="dropdown"/>
                    <label class="for-dropdown" for="dropdown2"> <i class="fa-regular fa-bell"></i> </label> 
                    <div class="section-dropdown2"> 
                        <h1>Notifications</h1>

                        <a href="#">
                            <div class="profile-container">
                                <div class="profile-img"></div>
                                <div class="profile-info" style="margin-left: 33px;">
                                    <span>Adhip Halder</span>
                                    <p>You have 0 notifications</p>
                                </div>
                            </div>
                        </a>

                        <a href="#">
                            <div class="profile-container">
                                <div class="profile-img"></div>
                                <div class="profile-info" style="margin-left: 33px;">
                                    <span>Adhip Halder</span>
                                    <p>You have 0 notifications</p>
                                </div>
                            </div>
                        </a>

                        <a href="#">
                            <div class="profile-container">
                                <div class="profile-img"></div>
                                <div class="profile-info" style="margin-left: 33px;">
                                    <span>Adhip Halder</span>
                                    <p>You have 0 notifications</p>
                                </div>
                            </div>
                        </a>



                        <a href="#">
                            <div class="profile-container">
                                <div class="profile-img"></div>
                                <div class="profile-info" style="margin-left: 33px;">
                                    <span>Adhip Halder</span>
                                    <p>You have 0 notifications</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>


                <!-- 
                - DROPDOWN3 USER ICON
                -->
            
                <div class="sec-center">    	
                    <input class="dropdown3" type="checkbox" id="dropdown3" name="dropdown"/>
                    <label class="for-dropdown3" for="dropdown3"><button class="dropdown3-click-button"><i class="fa-solid fa-user"></i></button></label> 
                    <p class="dropdown3-floating-message">Open profile menu</p>

                    <div class="section-dropdown3"> 

                        <div class="section-dropdown3-profile">
                            {{-- <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">  --}}
                            <img src="{{ session('user') && session('user')->profile_pic ? asset('storage/' . session('user')->profile_pic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"  alt="Profile Picture" >
                            <div class="section-dropdown3-profile-text">
                                <button>View Profile</button>
                                {{-- <p>@username_agent07</p> --}}
                                <p class="user_name">
                                    @if(session('user'))
                                        {{ session('user')->user_name }}
                                    @else
                                        Guest
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div class="section-dropdown3-settings">
                            <span>
                                <svg rpl="" fill="currentColor" height="20" icon-name="settings-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 20c-.401 0-.802-.027-1.2-.079a1.145 1.145 0 0 1-.992-1.137v-1.073a.97.97 0 0 0-.627-.878A.98.98 0 0 0 6.1 17l-.755.753a1.149 1.149 0 0 1-1.521.1 10.16 10.16 0 0 1-1.671-1.671 1.149 1.149 0 0 1 .1-1.523L3 13.906a.97.97 0 0 0 .176-1.069.98.98 0 0 0-.887-.649H1.216A1.145 1.145 0 0 1 .079 11.2a9.1 9.1 0 0 1 0-2.393 1.145 1.145 0 0 1 1.137-.992h1.073a.97.97 0 0 0 .878-.627A.979.979 0 0 0 3 6.1l-.754-.754a1.15 1.15 0 0 1-.1-1.522 10.16 10.16 0 0 1 1.673-1.676 1.155 1.155 0 0 1 1.522.1L6.1 3a.966.966 0 0 0 1.068.176.98.98 0 0 0 .649-.887V1.216A1.145 1.145 0 0 1 8.8.079a9.129 9.129 0 0 1 2.393 0 1.144 1.144 0 0 1 .991 1.137v1.073a.972.972 0 0 0 .628.878A.977.977 0 0 0 13.905 3l.754-.754a1.152 1.152 0 0 1 1.522-.1c.62.49 1.18 1.05 1.671 1.671a1.15 1.15 0 0 1-.1 1.522L17 6.1a.967.967 0 0 0-.176 1.068.98.98 0 0 0 .887.649h1.073a1.145 1.145 0 0 1 1.137.991 9.096 9.096 0 0 1 0 2.392 1.145 1.145 0 0 1-1.137.992h-1.073A1.041 1.041 0 0 0 17 13.905l.753.755a1.149 1.149 0 0 1 .1 1.521c-.49.62-1.05 1.18-1.671 1.671a1.149 1.149 0 0 1-1.522-.1L13.906 17a.97.97 0 0 0-1.069-.176.981.981 0 0 0-.65.887v1.073a1.144 1.144 0 0 1-.99 1.137A9.431 9.431 0 0 1 10 20Zm-.938-1.307a7.638 7.638 0 0 0 1.875 0v-.982a2.292 2.292 0 0 1 3.853-1.6l.693.694a8.796 8.796 0 0 0 1.326-1.326l-.694-.694a2.29 2.29 0 0 1 1.6-3.851h.982a7.746 7.746 0 0 0 0-1.876h-.982a2.213 2.213 0 0 1-2.034-1.4 2.223 2.223 0 0 1 .438-2.451l.694-.693a8.76 8.76 0 0 0-1.327-1.326l-.692.694a2.22 2.22 0 0 1-2.434.445 2.221 2.221 0 0 1-1.419-2.041v-.979a7.638 7.638 0 0 0-1.875 0v.982a2.213 2.213 0 0 1-1.4 2.034 2.23 2.23 0 0 1-2.456-.438l-.693-.694a8.757 8.757 0 0 0-1.326 1.327l.694.692a2.216 2.216 0 0 1 .445 2.434 2.22 2.22 0 0 1-2.041 1.418h-.982a7.746 7.746 0 0 0 0 1.876h.982a2.213 2.213 0 0 1 2.034 1.4 2.223 2.223 0 0 1-.438 2.451l-.694.693c.394.488.838.933 1.326 1.326l.694-.694a2.218 2.218 0 0 1 2.433-.445 2.22 2.22 0 0 1 1.418 2.041v.983ZM10 13.229a3.23 3.23 0 1 1 0-6.458 3.23 3.23 0 0 1 0 6.458Zm0-5.208a1.979 1.979 0 1 0 0 3.958 1.979 1.979 0 0 0 0-3.958Z"></path>
                                </svg>
                                <span style="font-size: 14px; font-weight: 500; color: white;">Settings</span>
                            </span>
                        </div>

                        {{-- <div class="section-dropdown3-logout">
                            <span>
                                <svg rpl="" fill="currentColor" height="20" icon-name="logout-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.991 10.625H1v-1.25h10.991l-1.933-1.933.884-.884 3 3a.624.624 0 0 1 0 .884l-3 3-.884-.884 1.933-1.933ZM15.375 1h-9.75A2.629 2.629 0 0 0 3 3.625v.792h1.25v-.792A1.377 1.377 0 0 1 5.625 2.25h9.75a1.377 1.377 0 0 1 1.375 1.375v12.75a1.377 1.377 0 0 1-1.375 1.375h-9.75a1.377 1.377 0 0 1-1.375-1.375v-.792H3v.792A2.63 2.63 0 0 0 5.625 19h9.75A2.63 2.63 0 0 0 18 16.375V3.625A2.63 2.63 0 0 0 15.375 1Z"></path>
                                </svg>
                                <span>Log Out</span>
                            </span>
                        </div> --}}
                    </div>

                </div>
            </div>
        </header> 
        
        <!-- 
         - SECTION SIDEBAR
        -->

        <nav  class="sidebar" id="sidebar">

            <div class="sidebar__container">
   
                <div class="sidebar__content">
                    <div>
                       <h3 class="sidebar__title">MANAGE</h3>
     
                       <div class="sidebar__list">
                          <a href="#" class="sidebar__link active-link">
                             <i class="fa-solid fa-house"></i>
                             <span>Home</span>
                          </a>
                          
                          <a href="#" class="sidebar__link">
                              <i class="fa-solid fa-arrow-trend-up"></i>
                             <span>Popular</span>
                          </a>
     
                          <a href="#" class="sidebar__link">
                              <i class="fa-solid fa-table"></i>
                             <span>Explore</span>
                          </a>
                       </div>
                    </div>
  
                    <div>
                      <h3 class="sidebar__title">YOUR COMMUNITIES</h3>
    
                      <div class="sidebar__list">
                         <a href="/createcommunity" class="sidebar__link">
                             <i class="fa-solid fa-plus"></i>
                             <span>Create Community </span>
                         </a>
                         <a href="#" class="sidebar__link">
                            <div class="profile-img1"></div>
                            <span>Community 1</span>
                         </a>
  
                           
  
                      </div>
                   </div>
     
                    <div>
                       <h3 class="sidebar__title">OTHER COMMUNITIES</h3>
     
                       <div class="sidebar__list">
                          <a href="#" class="sidebar__link">
                             <div class="profile-img1"></div>
                             <span>Community 1</span>
                          </a>
  
                          <a href="#" class="sidebar__link">
                              <div class="profile-img1"></div>
                              <span>Community 2</span>
                           </a>
  
                           <a href="#" class="sidebar__link">
                              <div class="profile-img1"></div>
                              <span>Community 3</span>
                           </a>    
  
                           <a href="#" class="sidebar__link">
                              <div class="profile-img1"></div>
                              <span>Community 4</span>
                           </a>    
  
                           <a href="#" class="sidebar__link">
                              <div class="profile-img1"></div>
                              <span>Community 5</span>
                           </a>    
  
                           <a href="#" class="sidebar__link">
                              <div class="profile-img1"></div>
                              <span>Community 6</span>
                           </a>    
  
                           <a href="#" class="sidebar__link">
                              <div class="profile-img1"></div>
                              <span>Community 7</span>
                           </a>    
  
                       </div>
                    </div>
                 </div>
    
                <div class="sidebar__actions">
                   <button>
                      <i class="ri-moon-clear-fill sidebar__link sidebar__theme" id="theme-button">
                         <span>Theme</span>
                      </i>
                   </button>
    
                   {{-- <button class="sidebar__link">
                     <i class="fa-solid fa-right-from-bracket"></i>
                      <span>Log Out</span>
                   </button> --}}

                   <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="sidebar__link">
                        <i class="fa-solid fa-right-from-bracket"></i>
                         <span>Log Out</span>
                    </button>
                  </form>

                </div>
            </div>

        </nav>


         
   
        <main class="main container" id="main">
            
            <div>
                <div class="comm-info">
                    <div class="info-cover">
                        <div class="info-cover-inner">
                            <img class="info-cover-img" id="infoImage" src="https://scontent.fbom3-2.fna.fbcdn.net/v/t39.30808-6/473520811_1603997017176109_3745395201098748496_n.jpg?stp=dst-jpg_s960x960_tt6&_nc_cat=110&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=o1EHH0VOjlwQ7kNvgEqSwMp&_nc_oc=AdjfWUqY1SCG_rxfCqGNPpVBYTFzsMNCFcAeOZp4PF52GkJbcRy-yag8Zn3uCk1Nd5JY3iENvPNNHELL6ZgZlfrx&_nc_zt=23&_nc_ht=scontent.fbom3-2.fna&_nc_gid=AU1uNft2LhX8NQe9edD_ATA&oh=00_AYB7f5F_3IK8l6x1uLQjs1JAcCQcZz521iNOCTO0oURQXw&oe=67C9E870" alt="Image">
                        </div>
                    </div>                                                        
                    
                    <div class="text-info">
                        <div class="text-info-inner">
                            <div class="profile-img3">
                                <img src="https://scontent.fbom3-2.fna.fbcdn.net/v/t39.30808-6/480525767_1632728957636248_5958768589424689080_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=833d8c&_nc_ohc=XCeTvmHZ6N4Q7kNvgEPjapS&_nc_oc=Adg56cYE2RdVHuwafxoTGp-IBB1LhhFJ4W0S8vowDcYjd7e2bVEfNktYvcpfkrf9GhEOx2XaVtz191glHNBqq5uB&_nc_zt=23&_nc_ht=scontent.fbom3-2.fna&_nc_gid=ADF1W5uK1JhoiN7W7GPTtxO&oh=00_AYAE0tLDMwT0MLzUU2yl1_nuk4Y25Wp6KUBWdhhNXDD8hA&oe=67C9EA59" alt="Default Profile">
                            </div>
                        
                            <div class="profile-info1">
                                <h1>r/adhiphalder</h1> 
                                <p class="profile-info1-p">Priya is my love</p>
                            </div>
                        </div>

                        <a href="#" style="margin-right: 8rem"><button onclick="toggleButton(this)" class="text-info-inner-button">Follow</button></a>

                    </div>

                    <p class="comm-info-span">Members</p>
                </div>

                <div class="com-follower">

                    <div class="com-follower-profile">
                        <div class="com-follower-profile-text">
                            <img class="com-follower-profile-img" src="https://scontent.fbom3-1.fna.fbcdn.net/v/t39.30808-6/469482361_595596076295701_6491366342971268904_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=NXHjU4QQ_DkQ7kNvgGLgmPn&_nc_oc=Adg-NBCkkcH1b0gGTg8Sjsqv5A1SJy-3Sn9NodonUTG8hHaCuE2MVSdgklp2Mi6W9_OqWPa7STyAb4gUDgRjacxI&_nc_zt=23&_nc_ht=scontent.fbom3-1.fna&_nc_gid=AI8rq6-4HiMGjaTBlb5i_hl&oh=00_AYBxFYl7-9gP1Qnz43a9i9g6jQ6VPdXOazvtjfIgv3bBpA&oe=67C9EE8D" alt="">
                            <div class="com-follower-profile-text-inner">
                                <a href="#"><span>r/koyelmallick</span></a>
                                <div>
                                    <span class="post-wall-admin" style="color: #d0d3da;">Admin</span>
                                    <span class="post-wall-member" style="color: #d0d3da;">Members</span>
                                </div>
                            </div>
                        </div>
                        <a href="#"><button class="com-follower-profile-button" onclick="toggleFollow(this)">Follow</button></a>
                    </div>

                    <div class="com-follower-profile">
                        <div class="com-follower-profile-text">
                            <img class="com-follower-profile-img" src="https://scontent.fbom3-3.fna.fbcdn.net/v/t39.30808-6/433440060_1406068050302341_6532232917088331687_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=GkIurff9F0AQ7kNvgGDf1Aj&_nc_oc=AdiT60xQmbz2kmk5SE9DRzmRQKpR8hujGNLc-xV_I_gBRaLQOHkvcs7InemL1fng8lW43Q0LlaroKQnSAVKjoHgR&_nc_zt=23&_nc_ht=scontent.fbom3-3.fna&_nc_gid=ATax5DAue6L2L8RGBy_EioG&oh=00_AYDKrIifj9Xxjeh_6pheRXx96wHiAByREQT6raRkHknzTQ&oe=67C9DF57" alt="">
                            <div class="com-follower-profile-text-inner">
                                <a href="#"><span>r/adhiphalder</span></a>
                                <div>
                                    <span class="post-wall-admin" style="color: #d0d3da;">Admin</span>
                                    <span class="post-wall-member" style="color: #d0d3da;">Members</span>
                                </div>
                            </div>
                        </div>
                        <a href="#"><button class="com-follower-profile-button">Follow</button></a>
                    </div>

                    <div class="com-follower-profile">
                        <div class="com-follower-profile-text">
                            <img class="com-follower-profile-img" src="https://scontent.fbom3-3.fna.fbcdn.net/v/t39.30808-6/473011954_1243999570003124_9081676659386860349_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=uoJCahC5cRwQ7kNvgHHCLwE&_nc_oc=AdhKWssvketgm_PSVDOzuUQ_tcDOqrnJL5gfciNHyK-ZOhlpvNbNpna8GaRC_xbv2ciLHn_HEUlKJ6MU9JJaxPGt&_nc_zt=23&_nc_ht=scontent.fbom3-3.fna&_nc_gid=A4LwAu15h7dum0FVYxuxsyj&oh=00_AYD2lJ24G4MBykd7VIJpnV-deZFEm1DSQkAlbkzuJTIV1w&oe=67C9E13A" alt="">
                            <div class="com-follower-profile-text-inner">
                                <a href="#"><span>r/mrigankaadhikary</span></a>
                                <div>
                                    <span class="post-wall-admin" style="color: #d0d3da;">Admin</span>
                                    <span class="post-wall-member" style="color: #d0d3da;">Members</span>
                                </div>
                            </div>
                        </div>
                        <a href="#"><button class="com-follower-profile-button">Follow</button></a>
                    </div>

                    <div class="com-follower-profile">
                        <div class="com-follower-profile-text">
                            <img class="com-follower-profile-img" src="https://scontent.fbom3-3.fna.fbcdn.net/v/t39.30808-6/469588691_603152458950090_1031539102696606817_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=lpTmSAuA6j4Q7kNvgEOz9-z&_nc_oc=Adg7KZB1JaRepnOyMcWwB2XB3dIaD3khnbcrik7hQHE6z1XHU0pUs3SYzv0Ru87PlOsIyej8w7tcWzh-GEorERtG&_nc_zt=23&_nc_ht=scontent.fbom3-3.fna&_nc_gid=A2eSg2QF1bk2hR6GEkvL0R4&oh=00_AYA9xRaKsI3o2zpUQ7xEGZsrH-F2rksR_hnp7gZ0I6NY3Q&oe=67CA040F" alt="">
                            <div class="com-follower-profile-text-inner">
                                <a href="#"><span>r/toushikmehmood</span></a>
                                <div>
                                    <span class="post-wall-admin" style="color: #d0d3da;">Admin</span>
                                    <span class="post-wall-member" style="color: #d0d3da;">Members</span>
                                </div>
                            </div>
                        </div>
                        <a href="#"><button class="com-follower-profile-button">Follow</button></a>
                    </div>

                    <div class="com-follower-profile">
                        <div class="com-follower-profile-text">
                            <img class="com-follower-profile-img" src="https://scontent.fbom3-1.fna.fbcdn.net/v/t39.30808-6/469482361_595596076295701_6491366342971268904_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=NXHjU4QQ_DkQ7kNvgGLgmPn&_nc_oc=Adg-NBCkkcH1b0gGTg8Sjsqv5A1SJy-3Sn9NodonUTG8hHaCuE2MVSdgklp2Mi6W9_OqWPa7STyAb4gUDgRjacxI&_nc_zt=23&_nc_ht=scontent.fbom3-1.fna&_nc_gid=AI8rq6-4HiMGjaTBlb5i_hl&oh=00_AYBxFYl7-9gP1Qnz43a9i9g6jQ6VPdXOazvtjfIgv3bBpA&oe=67C9EE8D" alt="">
                            <div class="com-follower-profile-text-inner">
                                <a href="#"><span>r/koyelmallick</span></a>
                                <div>
                                    <!-- <span class="post-wall-admin" style="color: #d0d3da;">Admin</span> -->
                                    <span class="post-wall-member" style="color: #d0d3da;">Members</span>
                                </div>
                            </div>
                        </div>
                        <a href="#"><button class="com-follower-profile-button">Follow</button></a>
                    </div>

                    <div class="com-follower-profile">
                        <div class="com-follower-profile-text">
                            <img class="com-follower-profile-img" src="https://scontent.fbom3-3.fna.fbcdn.net/v/t39.30808-6/433440060_1406068050302341_6532232917088331687_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=GkIurff9F0AQ7kNvgGDf1Aj&_nc_oc=AdiT60xQmbz2kmk5SE9DRzmRQKpR8hujGNLc-xV_I_gBRaLQOHkvcs7InemL1fng8lW43Q0LlaroKQnSAVKjoHgR&_nc_zt=23&_nc_ht=scontent.fbom3-3.fna&_nc_gid=ATax5DAue6L2L8RGBy_EioG&oh=00_AYDKrIifj9Xxjeh_6pheRXx96wHiAByREQT6raRkHknzTQ&oe=67C9DF57" alt="">
                            <div class="com-follower-profile-text-inner">
                                <a href="#"><span>r/adhiphalder</span></a>
                                <div>
                                    <span class="post-wall-admin" style="color: #d0d3da;">Admin</span>
                                    <span class="post-wall-member" style="color: #d0d3da;">Members</span>
                                </div>
                            </div>
                        </div>
                        <a href="#"><button class="com-follower-profile-button">Follow</button></a>
                    </div>

                    <div class="com-follower-profile">
                        <div class="com-follower-profile-text">
                            <img class="com-follower-profile-img" src="https://scontent.fbom3-3.fna.fbcdn.net/v/t39.30808-6/473011954_1243999570003124_9081676659386860349_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=uoJCahC5cRwQ7kNvgHHCLwE&_nc_oc=AdhKWssvketgm_PSVDOzuUQ_tcDOqrnJL5gfciNHyK-ZOhlpvNbNpna8GaRC_xbv2ciLHn_HEUlKJ6MU9JJaxPGt&_nc_zt=23&_nc_ht=scontent.fbom3-3.fna&_nc_gid=A4LwAu15h7dum0FVYxuxsyj&oh=00_AYD2lJ24G4MBykd7VIJpnV-deZFEm1DSQkAlbkzuJTIV1w&oe=67C9E13A" alt="">
                            <div class="com-follower-profile-text-inner">
                                <a href="#"><span>r/mrigankaadhikary</span></a>
                                <div>
                                    <span class="post-wall-admin" style="color: #d0d3da;">Admin</span>
                                    <span class="post-wall-member" style="color: #d0d3da;">Members</span>
                                </div>
                            </div>
                        </div>
                        <a href="#"><button onclick="toggleButton(this)" class="com-follower-profile-button">Follow</button></a>
                    </div>

                    <div class="com-follower-profile">
                        <div class="com-follower-profile-text">
                            <img class="com-follower-profile-img" src="https://scontent.fbom3-3.fna.fbcdn.net/v/t39.30808-6/469588691_603152458950090_1031539102696606817_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=lpTmSAuA6j4Q7kNvgEOz9-z&_nc_oc=Adg7KZB1JaRepnOyMcWwB2XB3dIaD3khnbcrik7hQHE6z1XHU0pUs3SYzv0Ru87PlOsIyej8w7tcWzh-GEorERtG&_nc_zt=23&_nc_ht=scontent.fbom3-3.fna&_nc_gid=A2eSg2QF1bk2hR6GEkvL0R4&oh=00_AYA9xRaKsI3o2zpUQ7xEGZsrH-F2rksR_hnp7gZ0I6NY3Q&oe=67CA040F" alt="">
                            <div class="com-follower-profile-text-inner">
                                <a href="#"><span>r/toushikmehmood</span></a>
                                <div>
                                    <span class="post-wall-admin" style="color: #d0d3da;">Admin</span>
                                    <span class="post-wall-member" style="color: #d0d3da;">Members</span>
                                </div>
                            </div>
                        </div>
                        <a href="#"><button class="com-follower-profile-button">Follow</button></a>
                    </div>

                </div>
            </div>

        </main>
        

        <script src="{{asset('js/viewmem.js')}}"></script>
    </body>
</html> 