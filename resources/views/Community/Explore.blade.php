<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/explore.css')}}">
        <link rel="shortcut icon" href="{{asset('/Pictures/inkspire.png')}}" type="image/svg+xml">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Explore</title>

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

        <header>
            <a href="/" class="logo"><img class="logo-img" src="/Pictures/inkspire.png"></a>
            <input type="text" placeholder="Search" id="searchInput">

            <div class="menu">
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
                                <img style="82px" src="https://www.redditstatic.com/chat-web/images/welcome-6AUNLRD4.png" alt="">
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
            
                <div class="sec-center"> 	
                    <input class="dropdown2" type="checkbox" id="dropdown2" name="dropdown"/>
                    <label class="for-dropdown" for="dropdown2"> <i class="fa-regular fa-bell"></i> </label> 
                    <div class="section-dropdown2"> 
                        <h1>Notifications</h1>

                        <a href="#">
                            <div class="profile-container">
                                <div class="profile-img"></div>
                                <div class="profile-info">
                                    <span>Adhip Halder</span>
                                    <p>You have 0 notifications</p>
                                </div>
                            </div>
                        </a>

                        <a href="#">
                            <div class="profile-container">
                                <div class="profile-img"></div>
                                <div class="profile-info">
                                    <span>Adhip Halder</span>
                                    <p>You have 0 notifications</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="profile-container">
                                <div class="profile-img"></div>
                                <div class="profile-info">
                                    <span>Adhip Halder</span>
                                    <p>You have 0 notifications</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="profile-container">
                                <div class="profile-img"></div>
                                <div class="profile-info">
                                    <span>Adhip Halder</span>
                                    <p>You have 0 notifications</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            
                <div class="sec-center">    	
                    <input class="dropdown3" type="checkbox" id="dropdown3" name="dropdown"/>
                    <label class="for-dropdown3" for="dropdown3"> <button class="dropdown3-click-button"><i class="fa-solid fa-user"></i></button> </label> 
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


         <nav class="sidebar" id="sidebar">
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

            <span class="main-container-heading">Explore Communities</span>

            <div class="slide-container">

                <!-- 
                - TAB SECTION
                -->
            

                <ul class="main-slidebar">
                    <li>
                        <button class="identifier-button" data-target="identifier-body-all">All</button>
                    </li>
                    <li>
                        <button class="identifier-button" data-target="identifier-body-games">
                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-videogaming-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.929 14.17 18.277 6.6a4.631 4.631 0 0 0-4.52-3.6H5.702a4.623 4.623 0 0 0-4.58 3.908L.034 14.387a3.134 3.134 0 0 0 .735 2.5 3.227 3.227 0 0 0 5.553-1.284l.39-1.635h5.794l.39 1.635A3.2 3.2 0 0 0 16.01 18h.782a3.211 3.211 0 0 0 3.123-2.444c.109-.455.114-.929.015-1.386Zm-1.6 1.85a1.964 1.964 0 0 1-1.54.73h-.781a1.947 1.947 0 0 1-1.9-1.453l-.63-2.476H5.74L5.11 15.3a1.947 1.947 0 0 1-1.9 1.453 1.974 1.974 0 0 1-1.5-.678 1.862 1.862 0 0 1-.443-1.506l1.09-7.481A3.366 3.366 0 0 1 5.7 4.25h8.062a3.373 3.373 0 0 1 3.3 2.614l1.65 7.573a1.877 1.877 0 0 1-.383 1.583h-.001Z"></path><path d="M6.256 6.212h-1.25v1.776h-1.73v1.25h1.73v1.622h1.25V9.238h1.73v-1.25h-1.73V6.212Z"></path><path d="M11.82 8.81a1 1 0 1 0 1.71.71 1.001 1.001 0 0 0-.3-.71 1.034 1.034 0 0 0-1.41 0Z"></path><path d="M15.23 6.85a.875.875 0 0 0-.32-.22c-.246-.1-.522-.1-.77 0a.875.875 0 0 0-.32.22.975.975 0 0 0 0 1.41 1 1 0 0 0 1.41 0 1.03 1.03 0 0 0 .22-1.09.877.877 0 0 0-.22-.32Z"></path>
                            </svg>
                            Games
                        </button>
                    </li>
                    <li>
                        <button class="identifier-button" data-target="identifier-body-technologies">
                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-technology-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.875 7h-3.75A1.127 1.127 0 0 0 7 8.125v3.75A1.127 1.127 0 0 0 8.125 13h3.75A1.127 1.127 0 0 0 13 11.875v-3.75A1.127 1.127 0 0 0 11.875 7Zm-.125 4.75h-3.5v-3.5h3.5v3.5Z"></path><path d="M19 7.625v-1.25h-2v-1.75A1.627 1.627 0 0 0 15.375 3h-1.75V1h-1.25v2h-1.75V1h-1.25v2h-1.75V1h-1.25v2h-1.75A1.627 1.627 0 0 0 3 4.625v1.75H1v1.25h2v1.75H1v1.25h2v1.75H1v1.25h2v1.75A1.627 1.627 0 0 0 4.625 17h1.75v2h1.25v-2h1.75v2h1.25v-2h1.75v2h1.25v-2h1.75A1.627 1.627 0 0 0 17 15.375v-1.75h2v-1.25h-2v-1.75h2v-1.25h-2v-1.75h2Zm-3.25 7.75a.375.375 0 0 1-.375.375H4.625a.375.375 0 0 1-.375-.375V4.625a.375.375 0 0 1 .375-.375h10.75a.375.375 0 0 1 .375.375v10.75Z"></path>
                            </svg>
                            Technologies
                        </button>
                    </li>
                    <li>
                        <button class="identifier-button" data-target="identifier-body-movies">
                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-movies-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.375 8H6.45L17.3 5.093a.625.625 0 0 0 .44-.765L16.709.464a.62.62 0 0 0-.522-.459.616.616 0 0 0-.244.017L.488 4.162a.624.624 0 0 0-.441.766l.969 3.618A.527.527 0 0 0 1 8.625v8.75A2.629 2.629 0 0 0 3.625 20h12.75A2.628 2.628 0 0 0 19 17.375v-8.75A.625.625 0 0 0 18.375 8ZM8.06 6.275l-2.75.737v-2.7a.61.61 0 0 0-.028-.135l2.778-.744v2.842Zm1.25-3.182 2.75-.737V5.2l-2.75.737V3.093Zm7.063.954-3.063.82V2.022l2.35-.63.713 2.656ZM4.06 4.5v2.807c0 .013.006.025.007.038l-1.94.52-.712-2.657L4.06 4.5ZM17.75 17.375a1.377 1.377 0 0 1-1.375 1.375H3.625a1.377 1.377 0 0 1-1.375-1.375V9.25h15.5v8.125Z"></path>
                            </svg>
                            Movies
                        </button>
                    </li>
                    <li>
                        <button class="identifier-button" data-target="identifier-body-travel">
                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-travel-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="m6.447 8.472-.309.372-.479.575L1.75 5.548a.626.626 0 0 1-.015-.87A3.268 3.268 0 0 1 5.16 3.9l3.867 1.59c-.292.323-.57.657-.857.984L4.711 5.068a1.976 1.976 0 0 0-1.565.106l3.301 3.298Zm.344 10.833a1.123 1.123 0 0 0 .815-.722 4.965 4.965 0 0 0-.129-3.446l2.123-1.75 5.328 5.323.442-.442a3.265 3.265 0 0 0 .747-3.425l-2.126-5.221a122.4 122.4 0 0 0 2.568-2.443 12.172 12.172 0 0 0 2.623-3.9A1.875 1.875 0 0 0 16.7.828l-.055.024a12.167 12.167 0 0 0-3.74 2.553l-.172.17c-1.7 1.7-3.339 3.5-4.873 5.343l-3 3.607a4.959 4.959 0 0 0-3.448-.13A1.128 1.128 0 0 0 1 14.255L5.746 19a1.122 1.122 0 0 0 1.045.305Zm-2.42-5.63a1.11 1.11 0 0 0 1.387-.27l3.067-3.688a76.94 76.94 0 0 1 4.8-5.257l.172-.17A10.9 10.9 0 0 1 17.148 2l.057-.024a.606.606 0 0 1 .686.127.614.614 0 0 1 .138.69 10.909 10.909 0 0 1-2.354 3.5c-.722.723-2.06 1.97-2.6 2.473a1.111 1.111 0 0 0-.274 1.245l2.15 5.279a2 2 0 0 1-.095 1.579L10.4 12.422a1.123 1.123 0 0 0-1.51-.072L6.6 14.24a1.113 1.113 0 0 0-.272 1.392c.31.742.366 1.566.161 2.344l-4.464-4.463a3.655 3.655 0 0 1 2.345.163Z"></path>
                            </svg>
                            Travel
                        </button>
                    </li>
                    <li>
                        <button class="identifier-button" data-target="identifier-body-music">
                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-music-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.741 10.094h-.124A1.587 1.587 0 0 0 3 11.645v4.708a1.582 1.582 0 0 0 1.617 1.541h.124a2.543 2.543 0 0 0 2.609-2.467v-2.866a2.544 2.544 0 0 0-2.609-2.467ZM6.1 15.427a1.3 1.3 0 0 1-1.359 1.217h-.124a.336.336 0 0 1-.367-.291v-4.708a.344.344 0 0 1 .367-.3h.124A1.3 1.3 0 0 1 6.1 12.561v2.866ZM0 10.941h1.25v5.874H0v-5.874Zm17.75-.841v-.623A7.51 7.51 0 0 0 10 2.25a7.511 7.511 0 0 0-7.75 7.227v.623H1v-.623A8.76 8.76 0 0 1 10 1a8.76 8.76 0 0 1 9 8.477v.623h-1.25Zm-2.367-.008h-.124a2.544 2.544 0 0 0-2.609 2.467v2.866a2.543 2.543 0 0 0 2.609 2.467h.124A1.582 1.582 0 0 0 17 16.353v-4.708a1.587 1.587 0 0 0-1.617-1.551v-.002Zm.367 6.259a.336.336 0 0 1-.367.291h-.124a1.3 1.3 0 0 1-1.359-1.215v-2.866a1.3 1.3 0 0 1 1.359-1.217h.124a.344.344 0 0 1 .367.3v4.707Zm4.25-5.41v5.874h-1.25v-5.874H20Z"></path>
                            </svg>
                            Music
                        </button>
                    </li>
                    <li>
                        <button class="identifier-button" data-target="identifier-body-education">
                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-reading-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.375 2h-7.292A2.688 2.688 0 0 0 10 3a2.688 2.688 0 0 0-2.083-1H.625A.625.625 0 0 0 0 2.625v14.75A.625.625 0 0 0 .625 18h7.917v-1.25H1.25V3.25h6.667a1.465 1.465 0 0 1 1.458 1.469v11.093h1.25V4.719a1.465 1.465 0 0 1 1.458-1.469h6.667v13.5h-6.667a2.64 2.64 0 0 0-2.708 2.625V20h1.25v-.625A1.388 1.388 0 0 1 12.083 18h7.292a.624.624 0 0 0 .625-.625V2.625A.625.625 0 0 0 19.375 2Z"></path>
                            </svg>
                            Education
                        </button>
                    </li>
                    <li>
                        <button class="identifier-button" data-target="identifier-body-sport">
                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-sports-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0ZM4.124 16.465l1.259-3.007a9.906 9.906 0 0 0 .261-6.964l-1.186.4a8.656 8.656 0 0 1-.228 6.087l-1.046 2.5a8.75 8.75 0 1 1 13.632 0l-1.046-2.5a8.653 8.653 0 0 1-.228-6.086l-1.186-.4a9.906 9.906 0 0 0 .261 6.964l1.259 3.007a8.7 8.7 0 0 1-11.752-.001Z"></path>
                            </svg>
                            Sport
                        </button>
                    </li>
                    <li>
                        <button class="identifier-button" data-target="identifier-body-news">
                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-news-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.875 2H3.1v13.87a.9.9 0 0 1-.925.88.9.9 0 0 1-.925-.88V3H0v12.87a2.149 2.149 0 0 0 2.081 2.121V18h16.794A1.126 1.126 0 0 0 20 16.874V3.126A1.126 1.126 0 0 0 18.875 2Zm-.125 14.75H4.15c.13-.275.199-.576.2-.88V3.25h14.4v13.5ZM13.029 9h3.849v1.25h-3.849V9Zm-6.911 4.25V12H10v1.25H6.118ZM13.029 12h3.849v1.25h-3.849V12Zm3.847-4.75H6.118V6h10.758v1.25Zm-6.876 3H6.118V9H10v1.25Z"></path>
                            </svg>
                            News & Politics
                        </button>
                    </li>
                    <li>
                        <button class="identifier-button" data-target="identifier-body-business">
                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-business-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.25 19H1v-4.5h1.25V19Zm4-7H5v7h1.25v-7Zm8 0H13v7h1.25v-7Zm4-5H17v12h1.25V7ZM6 7.557l3.206 3.2a1.126 1.126 0 0 0 1.59 0l8.647-8.646-.884-.884L10 9.79l-3.2-3.2a1.153 1.153 0 0 0-1.59 0L.559 11.231l.884.884L6 7.557Zm4.25 6.943H9V19h1.25v-4.5Z"></path>
                            </svg>
                            Business & Finance
                        </button>
                    </li>
                </ul>
                    
            </div>

            

            <!-- All -->
            {{-- <div class="identifier-body" id="identifier-body-all">

                <div class="identifier">
                    <div class="identifier-upper">
                        <div class="identifier-upper-left">
                            <img src="https://styles.redditmedia.com/t5_2rtg9/styles/communityIcon_8hz71uz5lxnb1.jpg?format=pjpg&s=1e181396beae0ec4547e4399b5c6728906eafc18" alt="">
                            <div>
                                <div>@Username</div>
                                <div>21k members</div>
                            </div>
                        </div>
                        <button>Join</button>
                    </div>
                    <div class="identifier-middle">
                        <p>So this incident occurred in Singhi Park where the organisers vandalised a phuchka sellers stall. The poor man had said that he will go somewhere else but still the organisers vandalised his stall . Maybe we should boycott Singhi Park this year ? Awaiting everyone's opinion.</p>
                    </div>
                    <div class="identifier-lower">
                        <img src="/Pictures/body.webp" alt="">
                    </div>
                </div>

                <div class="identifier">
                    <div class="identifier-upper">
                        <div class="identifier-upper-left">
                            <img src="https://styles.redditmedia.com/t5_2rtg9/styles/communityIcon_8hz71uz5lxnb1.jpg?format=pjpg&s=1e181396beae0ec4547e4399b5c6728906eafc18" alt="">
                            <div>
                                <div>@Username</div>
                                <div>21k members</div>
                            </div>
                        </div>
                        <button>Join</button>
                    </div>
                    <div class="identifier-middle">
                        <p>So this incident occurred in Singhi Park where the organisers vandalised a phuchka sellers stall. The poor man had said that he will go somewhere else but still the organisers vandalised his stall . Maybe we should boycott Singhi Park this year ? Awaiting everyone's opinion.</p>
                    </div>
                    <div class="identifier-lower">
                        <img src="/Pictures/body.webp" alt="">
                    </div>
                </div>

            </div> --}}

            <div class="identifier-body" id="identifier-body-all">
                @if ($groupedCommunities->isEmpty())
                    <div class="not-found">
                        <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                        <h3>Looks like there are no communities yet</h3> 
                    </div>
                @else
                    @foreach ($groupedCommunities as $category => $communities)
                        @foreach ($communities as $community)
                            <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}">
                                <div class="identifier">
                                    <div class="identifier-upper">
                                        <div class="identifier-upper-left">
                                            <img src="{{ $community->community_pic ? asset('storage/' . $community->community_pic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                                alt="{{ $community->community_name }}">
                                            <div>
                                                <div>r/{{ $community->community_name }}</div>
                                                <div>{{ $community->members_count ?? '0' }} members</div>
                                            </div>
                                        </div>
                                        {{-- <button>Join</button> --}}

                                        <form action="{{ route('join.community', ['community_name' => $community->community_name]) }}" method="POST">
                                            @csrf
                                            <button class="join-button">Join</button>
                                        </form>
                                    </div>
                                    <div class="identifier-middle">
                                        <p>{{ $community->community_description }}</p>
                                    </div>
                                    <div class="identifier-lower">
                                        <img src="{{ $community->community_coverpic ? asset('storage/' . $community->community_coverpic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                            alt="{{ $community->community_name }} Cover">
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endforeach
                @endif
            </div>

            <!-- Games -->
            <div class="identifier-body" id="identifier-body-games">
                @if (empty($groupedCommunities['games'] ?? []))
                    <div class="not-found">
                        <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                        <h3>Looks like there are no communities yet</h3> 
                    </div>
                @else
                    @foreach ($groupedCommunities['games'] ?? [] as $community)

                        <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}">
                            <div class="identifier">
                                <div class="identifier-upper">
                                    <div class="identifier-upper-left">
                                        <img src="{{ $community->community_pic ? asset('storage/' . $community->community_pic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                            alt="{{ $community->community_name }}">
                                        <div>
                                            <div>r/{{ $community->community_name }}</div>
                                            <div>{{ $community->members_count ?? '0' }} members</div>
                                        </div>
                                    </div>
                                    <button class="join-button">Join</button>
                                </div>
                                <div class="identifier-middle">
                                    <p>{{ $community->community_description }}</p>
                                </div>
                                <div class="identifier-lower">
                                    <img src="{{ $community->community_coverpic ? asset('storage/' . $community->community_coverpic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                        alt="{{ $community->community_name }} Cover">
                                </div>
                            </div> 
                        </a>
                    @endforeach
                @endif

            </div>

            <!-- Technologies -->
            <div class="identifier-body" id="identifier-body-technologies">

                @if (empty($groupedCommunities['technologies'] ?? []))
                    <div class="not-found">
                        <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                        <h3>Looks like there are no communities yet</h3> 
                    </div>
                @else

                    @foreach ($groupedCommunities['technologies'] ?? [] as $community)

                        <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}">
                            <div class="identifier">
                                <div class="identifier-upper">
                                    <div class="identifier-upper-left">
                                        <img src="{{ $community->community_pic ? asset('storage/' . $community->community_pic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                            alt="{{ $community->community_name }}">
                                        <div>
                                            <div>r/{{ $community->community_name }}</div>
                                            <div>{{ $community->members_count ?? '0' }} members</div>
                                        </div>
                                    </div>
                                    <button class="join-button">Join</button>
                                </div>
                                <div class="identifier-middle">
                                    <p>{{ $community->community_description }}</p>
                                </div>
                                <div class="identifier-lower">
                                    <img src="{{ $community->community_coverpic ? asset('storage/' . $community->community_coverpic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                        alt="{{ $community->community_name }} Cover">
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif


            </div>

            <!-- Movies -->
            <div class="identifier-body" id="identifier-body-movies">
                @if (empty($groupedCommunities['movies'] ?? []))
                    <div class="not-found">
                        <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                        <h3>Looks like there are no communities yet</h3> 
                    </div>
                @else

                    @foreach ($groupedCommunities['movies'] ?? [] as $community)

                        <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}">
                            <div class="identifier">
                                <div class="identifier-upper">
                                    <div class="identifier-upper-left">
                                        <img src="{{ $community->community_pic ? asset('storage/' . $community->community_pic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                            alt="{{ $community->community_name }}">
                                        <div>
                                            <div>r/{{ $community->community_name }}</div>
                                            <div>{{ $community->members_count ?? '0' }} members</div>
                                        </div>
                                    </div>
                                    <button class="join-button">Join</button>
                                </div>
                                <div class="identifier-middle">
                                    <p>{{ $community->community_description }}</p>
                                </div>
                                <div class="identifier-lower">
                                    <img src="{{ $community->community_coverpic ? asset('storage/' . $community->community_coverpic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                        alt="{{ $community->community_name }} Cover">
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif

            </div>

            <!-- Travel -->
            <div class="identifier-body" id="identifier-body-travel">

                @if (empty($groupedCommunities['travel'] ?? []))
                    <div class="not-found">
                        <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                        <h3>Looks like there are no communities yet</h3> 
                    </div>
                @else

                    @foreach ($groupedCommunities['travel'] ?? [] as $community)

                        <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}">
                            <div class="identifier">
                                <div class="identifier-upper">
                                    <div class="identifier-upper-left">
                                        <img src="{{ $community->community_pic ? asset('storage/' . $community->community_pic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                            alt="{{ $community->community_name }}">
                                        <div>
                                            <div>r/{{ $community->community_name }}</div>
                                            <div>{{ $community->members_count ?? '0' }} members</div>
                                        </div>
                                    </div>
                                    <button class="join-button">Join</button>
                                </div>
                                <div class="identifier-middle">
                                    <p>{{ $community->community_description }}</p>
                                </div>
                                <div class="identifier-lower">
                                    <img src="{{ $community->community_coverpic ? asset('storage/' . $community->community_coverpic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                        alt="{{ $community->community_name }} Cover">
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif

            </div>

            <!-- Music -->
            <div class="identifier-body" id="identifier-body-music">

                @if (empty($groupedCommunities['music'] ?? []))
                    <div class="not-found">
                        <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                        <h3>Looks like there are no communities yet</h3> 
                    </div>
                @else

                    @foreach ($groupedCommunities['music'] ?? [] as $community)

                        <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}">
                            <div class="identifier">
                                <div class="identifier-upper">
                                    <div class="identifier-upper-left">
                                        <img src="{{ $community->community_pic ? asset('storage/' . $community->community_pic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                            alt="{{ $community->community_name }}">
                                        <div>
                                            <div>r/{{ $community->community_name }}</div>
                                            <div>{{ $community->members_count ?? '0' }} members</div>
                                        </div>
                                    </div>
                                    <button class="join-button">Join</button>
                                </div>
                                <div class="identifier-middle">
                                    <p>{{ $community->community_description }}</p>
                                </div>
                                <div class="identifier-lower">
                                    <img src="{{ $community->community_coverpic ? asset('storage/' . $community->community_coverpic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                        alt="{{ $community->community_name }} Cover">
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif

            </div>

            <!-- Education -->
            <div class="identifier-body" id="identifier-body-education">

                @if (empty($groupedCommunities['education'] ?? []))
                    <div class="not-found">
                        <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                        <h3>Looks like there are no communities yet</h3> 
                    </div>
                @else

                    @foreach ($groupedCommunities['education'] ?? [] as $community)

                        <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}">
                            <div class="identifier">
                                <div class="identifier-upper">
                                    <div class="identifier-upper-left">
                                        <img src="{{ $community->community_pic ? asset('storage/' . $community->community_pic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                            alt="{{ $community->community_name }}">
                                        <div>
                                            <div>r/{{ $community->community_name }}</div>
                                            <div>{{ $community->members_count ?? '0' }} members</div>
                                        </div>
                                    </div>
                                    <button class="join-button">Join</button>
                                </div>
                                <div class="identifier-middle">
                                    <p>{{ $community->community_description }}</p>
                                </div>
                                <div class="identifier-lower">
                                    <img src="{{ $community->community_coverpic ? asset('storage/' . $community->community_coverpic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                        alt="{{ $community->community_name }} Cover">
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif

            </div>

            <!-- Sport -->
            <div class="identifier-body" id="identifier-body-sport">

                @if (empty($groupedCommunities['sport'] ?? []))
                    <div class="not-found">
                        <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                        <h3>Looks like there are no communities yet</h3> 
                    </div>
                @else

                    @foreach ($groupedCommunities['sport'] ?? [] as $community)

                        <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}">
                            <div class="identifier">
                                <div class="identifier-upper">
                                    <div class="identifier-upper-left">
                                        <img src="{{ $community->community_pic ? asset('storage/' . $community->community_pic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                            alt="{{ $community->community_name }}">
                                        <div>
                                            <div>r/{{ $community->community_name }}</div>
                                            <div>{{ $community->members_count ?? '0' }} members</div>
                                        </div>
                                    </div>
                                    <button class="join-button">Join</button>
                                </div>
                                <div class="identifier-middle">
                                    <p>{{ $community->community_description }}</p>
                                </div>
                                <div class="identifier-lower">
                                    <img src="{{ $community->community_coverpic ? asset('storage/' . $community->community_coverpic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                        alt="{{ $community->community_name }} Cover">
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif

            </div>

            <!-- News -->
            <div class="identifier-body" id="identifier-body-news">

                @if (empty($groupedCommunities['news_politics'] ?? []))
                    <div class="not-found">
                        <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                        <h3>Looks like there are no communities yet</h3> 
                    </div>
                @else

                    @foreach ($groupedCommunities['news_politics'] ?? [] as $community)

                        <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}">
                            <div class="identifier">
                                <div class="identifier-upper">
                                    <div class="identifier-upper-left">
                                        <img src="{{ $community->community_pic ? asset('storage/' . $community->community_pic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                            alt="{{ $community->community_name }}">
                                        <div>
                                            <div>r/{{ $community->community_name }}</div>
                                            <div>{{ $community->members_count ?? '0' }} members</div>
                                        </div>
                                    </div>
                                    <button class="join-button">Join</button>
                                </div>
                                <div class="identifier-middle">
                                    <p>{{ $community->community_description }}</p>
                                </div>
                                <div class="identifier-lower">
                                    <img src="{{ $community->community_coverpic ? asset('storage/' . $community->community_coverpic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                        alt="{{ $community->community_name }} Cover">
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif

            </div>

            <!-- Business -->
            <div class="identifier-body" id="identifier-body-business">

                @if (empty($groupedCommunities['business_finance'] ?? []))
                    <div class="not-found">
                        <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                        <h3>Looks like there are no communities yet</h3> 
                    </div>
                @else

                    @foreach ($groupedCommunities['business_finance'] ?? [] as $community)

                        <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}">
                            <div class="identifier">
                                <div class="identifier-upper">
                                    <div class="identifier-upper-left">
                                        <img src="{{ $community->community_pic ? asset('storage/' . $community->community_pic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                            alt="{{ $community->community_name }}">
                                        <div>
                                            <div>r/{{ $community->community_name }}</div>
                                            <div>{{ $community->members_count ?? '0' }} members</div>
                                        </div>
                                    </div>
                                    <button class="join-button">Join</button>
                                </div>
                                <div class="identifier-middle">
                                    <p>{{ $community->community_description }}</p>
                                </div>
                                <div class="identifier-lower">
                                    <img src="{{ $community->community_coverpic ? asset('storage/' . $community->community_coverpic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                        alt="{{ $community->community_name }} Cover">
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif

            </div>

         </main>



        <script src="{{asset('js/explore.js')}}"></script>
    </body>
</html> 