<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/profile.css')}}">
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
            
                <button class="create"><i class="fa-solid fa-plus"></i> <span>Create</span></button>


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

                   <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="sidebar__link">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span>Log Out</span>
                        </button>
                  </form>
    
                   {{-- <button class="sidebar__link">
                     <i class="fa-solid fa-right-from-bracket"></i>
                      <span>Log Out</span>
                   </button> --}}

                </div>
            </div>

        </nav>

         
   
         <main class="main container" id="main">
            <div class="profile-section">
                {{-- <div class="profile-img3">
                    <img src="https://styles.redditmedia.com/t5_4imbec/styles/profileIcon_asf6w9eqj1d91.jpeg?width=256&height=256&frame=1&auto=webp&crop=256:256,smart&s=3bf3f696edafbc8d35a5bcda5ecb2b61e01db7f0" alt="">
                    <img src="{{ $user->profile_pic ? asset('storage/' . $user->profile_pic) : asset('default-profile.png') }}" alt="Profile Picture">
                </div> --}}

                <div class="profile-img3">
                    @if($user->profile_pic)
                        <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture">
                    @else
                        <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Profile Picture">
                    @endif
                </div>
                
                {{-- <div class="profile-info1">
                    <h1>Adhip Halder</h1> 
                    <p>r/adhiphalder</p>
                </div> --}}
                <div class="profile-info1">
                    {{-- <h1>{{ session('user')->name }}</h1> 
                    <p>r/{{ session('user')->user_name }}</p> --}}

                    <h1>{{ session('user')->name ?? '' }}</h1> 
                     <p>r/{{ session('user')->user_name ?? '' }}</p>
                </div>
            </div>



            <div class="slide-container">

                <ul class="main-slidebar">
                    <li>
                        <button class="identifier-button" data-target="identifier-body-all">
                            Overview
                        </button>
                    </li>
                    <li>
                        <button class="identifier-button" data-target="identifier-body-posts">
                            Posts
                        </button>
                    </li>
                    <li>
                        <button class="identifier-button" data-target="identifier-body-save">
                            Saved
                        </button>
                    </li>
                    <li>
                        <button class="identifier-button" data-target="identifier-body-upvoted">
                            Upvoted
                        </button>
                    </li>
                    <li>
                        <button class="identifier-button" data-target="identifier-body-downvoted">
                            Downvoted
                        </button>
                    </li>
                    
                </ul>
                    
            </div>

            <a href="/create">
                <button  class="create2"><i class="fa-solid fa-plus"></i> <span style="color: #868998">Create Post</span></button>
            </a>


            <div class="identifier-body" id="identifier-body-all">  

                @foreach($posts as $post)
                    @if(isset($posts) && $posts->isEmpty())
                        <div class="not-found">
                            <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                            <h3>Looks like you haven't do anything yet</h3> 
                        </div>

                        <!-- 
                        - SECTION POST-WALL1
                        -->

                        @elseif($post->post_caption && $post->post_img)
                            <div class="post-wall">
                                <div class="username">

                                    <div class="profile-img2">
                                        @if($user->profile_pic)
                                            <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture">
                                        @else
                                            <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                        @endif
                                    </div>

                                    <div class="profile-img2"></div>
                                    <span class="username-hover">{{ session('user')->user_name }}</span>
                                    {{-- <p> • 22 hr. ago</p> --}}
                                    <p> • {{ $post->created_at->diffForHumans() }}</p>

                                </div>
                                
                                {{-- <h3>This is a title</h3> --}}
                                <h3 class="post-wall-first-h3">{{ $post->post_caption }}</h3>

                                <div class="post-img" style="position: relative; display: inline-block; overflow: hidden;">
                                    <div style="
                                        position: absolute;
                                        top: -10%;
                                        left: -10%;
                                        height: 120%;
                                        width: 120%;
                                        background: url('{{ asset("storage/" . $post->post_img) }}') no-repeat center;
                                        background-size: cover;
                                        filter: blur(20px);
                                        z-index: 1;
                                    "></div>
                                    <img src="{{ asset('storage/' . $post->post_img) }}" alt="Post Image"style="position: relative; z-index: 2;">
                                </div>

                                <!-- 
                                - SECTION LIKE CMT SHARE POST-WALL1
                                -->

                                
                                <div class="like-cmt-share">

                                    <div class="like-dislike">
                                        <svg class="upvote" rpl="" fill="currentColor" height="16" icon-name="upvote-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.877 19H7.123A1.125 1.125 0 0 1 6 17.877V11H2.126a1.114 1.114 0 0 1-1.007-.7 1.249 1.249 0 0 1 .171-1.343L9.166.368a1.128 1.128 0 0 1 1.668.004l7.872 8.581a1.25 1.25 0 0 1 .176 1.348 1.113 1.113 0 0 1-1.005.7H14v6.877A1.125 1.125 0 0 1 12.877 19ZM7.25 17.75h5.5v-8h4.934L10 1.31 2.258 9.75H7.25v8ZM2.227 9.784l-.012.016c.01-.006.014-.01.012-.016Z"></path>
                                        </svg>
                                        
                                        {{-- <span>151</span> --}}
                                        <span aria-label="Vote count">0</span>
                                        <svg class="downvote" rpl="" fill="currentColor" height="16" icon-name="downvote-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 20a1.122 1.122 0 0 1-.834-.372l-7.872-8.581A1.251 1.251 0 0 1 1.118 9.7 1.114 1.114 0 0 1 2.123 9H6V2.123A1.125 1.125 0 0 1 7.123 1h5.754A1.125 1.125 0 0 1 14 2.123V9h3.874a1.114 1.114 0 0 1 1.007.7 1.25 1.25 0 0 1-.171 1.345l-7.876 8.589A1.128 1.128 0 0 1 10 20Zm-7.684-9.75L10 18.69l7.741-8.44H12.75v-8h-5.5v8H2.316Zm15.469-.05c-.01 0-.014.007-.012.013l.012-.013Z"></path>
                                        </svg>
                                    </div>

                                    <div class="cmt">
                                        <svg rpl="" aria-hidden="true" class="icon-comment" fill="currentColor" height="20" icon-name="comment-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.725 19.872a.718.718 0 0 1-.607-.328.725.725 0 0 1-.118-.397V16H3.625A2.63 2.63 0 0 1 1 13.375v-9.75A2.629 2.629 0 0 1 3.625 1h12.75A2.63 2.63 0 0 1 19 3.625v9.75A2.63 2.63 0 0 1 16.375 16h-4.161l-4 3.681a.725.725 0 0 1-.489.191ZM3.625 2.25A1.377 1.377 0 0 0 2.25 3.625v9.75a1.377 1.377 0 0 0 1.375 1.375h4a.625.625 0 0 1 .625.625v2.575l3.3-3.035a.628.628 0 0 1 .424-.165h4.4a1.377 1.377 0 0 0 1.375-1.375v-9.75a1.377 1.377 0 0 0-1.374-1.375H3.625Z"></path>
                                        </svg>
                                        <span>15</span>
                                    </div>

                                    <!-- 
                                    - SECTION SHARE POST-WALL1 
                                    -->


                                    <!-- 
                                    - DROPDOWN5 SHARE OPTOINS POST-WALL1 
                                    -->

                                    <div class="sec-center"> 	
                                        <input class="dropdown5" type="checkbox" id="dropdown5" name="dropdown"/>
                                        <label class="for-dropdown" for="dropdown5"> 
                                            <svg rpl="" aria-hidden="true" class="icon-share" fill="currentColor" height="20" icon-name="share-new-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m18.8 8.286-6.466-7.064a.759.759 0 0 0-1.295.537v3.277C5.623 5.365 1 9.918 1 15.082v2.907h1.274C2.516 15 5.81 12.62 9.834 12.62h1.205v3.226a.757.757 0 0 0 1.315.515l6.422-7.021A.756.756 0 0 0 19 8.8a.736.736 0 0 0-.2-.514Zm-6.508 6.3V12a.625.625 0 0 0-.625-.625H9.834A9.436 9.436 0 0 0 2.26 14.7c.228-4.536 4.525-8.435 9.4-8.435a.626.626 0 0 0 .625-.625V3.023L17.576 8.8l-5.284 5.786Zm5.586-6.107a.176.176 0 0 0-.023.024.171.171 0 0 1 .02-.028l.003.004Zm-.011.642a.53.53 0 0 0-.003-.004l.003.004Z"></path>
                                            </svg>
                                            <p class="sec-center-p">15</p>
                                        </label> 

                                        <div class="section-dropdown5"> 
                                            {{-- <a href="#">
                                                <div class="profile-container2">
                                                    <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="link-post-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.111 12.5a3.701 3.701 0 0 1-1.09 2.41c-.479.47-.928.922-1.378 1.373-.45.45-.894.9-1.368 1.366a3.852 3.852 0 0 1-2.698 1.099 3.852 3.852 0 0 1-2.698-1.099 3.738 3.738 0 0 1-1.116-2.659c0-.997.402-1.953 1.116-2.658.479-.472.928-.923 1.378-1.375.45-.45.893-.9 1.368-1.365A3.936 3.936 0 0 1 9.638 8.59a3.968 3.968 0 0 1 2.24.258c.27-.269.546-.54.812-.806l.131-.13a5.086 5.086 0 0 0-3.182-.624A5.052 5.052 0 0 0 6.732 8.71c-.48.471-.929.922-1.377 1.373-.449.451-.894.9-1.37 1.366A4.982 4.982 0 0 0 2.5 14.992c0 1.328.534 2.602 1.486 3.543A5.13 5.13 0 0 0 7.58 20a5.13 5.13 0 0 0 3.595-1.465c.478-.471.927-.923 1.377-1.374.451-.451.894-.9 1.368-1.366a4.993 4.993 0 0 0 1.263-2.071c.243-.781.288-1.61.132-2.412L14.11 12.5Z"></path><path d="M16.017 1.467A5.123 5.123 0 0 0 12.422 0a5.123 5.123 0 0 0-3.595 1.467c-.478.471-.926.923-1.377 1.374-.45.451-.894.9-1.367 1.366a4.966 4.966 0 0 0-1.106 1.624 4.907 4.907 0 0 0-.291 2.86l1.2-1.19a3.699 3.699 0 0 1 1.092-2.41c.478-.472.928-.923 1.377-1.374.45-.45.894-.9 1.368-1.366a3.844 3.844 0 0 1 2.698-1.101c1.012 0 1.982.396 2.698 1.101a3.736 3.736 0 0 1 1.116 2.66c0 .996-.401 1.953-1.116 2.658-.478.471-.927.922-1.377 1.373-.45.451-.893.9-1.368 1.367a3.933 3.933 0 0 1-2.014 1.003 3.966 3.966 0 0 1-2.24-.26c-.273.274-.551.549-.818.818l-.123.12a5.087 5.087 0 0 0 3.183.624 5.053 5.053 0 0 0 2.906-1.423c.477-.472.926-.923 1.376-1.375.45-.452.894-.9 1.368-1.365A4.977 4.977 0 0 0 17.5 5.008a4.977 4.977 0 0 0-1.488-3.543l.005.002Z"></path>
                                                    </svg>
                                                    <div class="profile-info2">
                                                        <span>Copy link</span>
                                                    </div>
                                                </div>
                                            </a> --}}

                                            <a href="#" onclick="copyCurrentLink()">
                                                <div class="profile-container2">
                                                    <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="link-post-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.111 12.5a3.701 3.701 0 0 1-1.09 2.41c-.479.47-.928.922-1.378 1.373-.45.45-.894.9-1.368 1.366a3.852 3.852 0 0 1-2.698 1.099 3.852 3.852 0 0 1-2.698-1.099 3.738 3.738 0 0 1-1.116-2.659c0-.997.402-1.953 1.116-2.658.479-.472.928-.923 1.378-1.375.45-.45.893-.9 1.368-1.365A3.936 3.936 0 0 1 9.638 8.59a3.968 3.968 0 0 1 2.24.258c.27-.269.546-.54.812-.806l.131-.13a5.086 5.086 0 0 0-3.182-.624A5.052 5.052 0 0 0 6.732 8.71c-.48.471-.929.922-1.377 1.373-.449.451-.894.9-1.37 1.366A4.982 4.982 0 0 0 2.5 14.992c0 1.328.534 2.602 1.486 3.543A5.13 5.13 0 0 0 7.58 20a5.13 5.13 0 0 0 3.595-1.465c.478-.471.927-.923 1.377-1.374.451-.451.894-.9 1.368-1.366a4.993 4.993 0 0 0 1.263-2.071c.243-.781.288-1.61.132-2.412L14.11 12.5Z"></path><path d="M16.017 1.467A5.123 5.123 0 0 0 12.422 0a5.123 5.123 0 0 0-3.595 1.467c-.478.471-.926.923-1.377 1.374-.45.451-.894.9-1.367 1.366a4.966 4.966 0 0 0-1.106 1.624 4.907 4.907 0 0 0-.291 2.86l1.2-1.19a3.699 3.699 0 0 1 1.092-2.41c.478-.472.928-.923 1.377-1.374.45-.45.894-.9 1.368-1.366a3.844 3.844 0 0 1 2.698-1.101c1.012 0 1.982.396 2.698 1.101a3.736 3.736 0 0 1 1.116 2.66c0 .996-.401 1.953-1.116 2.658-.478.471-.927.922-1.377 1.373-.45.451-.893.9-1.368 1.367a3.933 3.933 0 0 1-2.014 1.003 3.966 3.966 0 0 1-2.24-.26c-.273.274-.551.549-.818.818l-.123.12a5.087 5.087 0 0 0 3.183.624 5.053 5.053 0 0 0 2.906-1.423c.477-.472.926-.923 1.376-1.375.45-.452.894-.9 1.368-1.365A4.977 4.977 0 0 0 17.5 5.008a4.977 4.977 0 0 0-1.488-3.543l.005.002Z"></path>
                                                    </svg>
                                                    <div class="profile-info2">
                                                        <span>Copy link</span>
                                                    </div>
                                                </div>
                                            </a>
                                                        
                                    
                                            <a href="#">
                                                <div class="profile-container2">
                                                    <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="crosspost-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m15.944 11.926-.888.879 1.925 1.945H12A4.873 4.873 0 0 1 7.138 10 4.873 4.873 0 0 1 12 5.25h4.971l-1.915 1.936.888.878L18.875 5.1a.727.727 0 0 0-.007-1.025l-2.929-2.9-.878.888L17.011 4H12a6.128 6.128 0 0 0-6.056 5.25H1v1.625h4.981A6.117 6.117 0 0 0 12 16h5l-1.94 1.92.878.89 2.929-2.9a.726.726 0 0 0 .006-1.025l-2.929-2.96Z"></path>
                                                    </svg>
                                                    <div class="profile-info2">
                                                        <span>Crosspost</span>
                                                    </div>
                                                </div>
                                            </a>
                                        
                                        </div>
                                    </div>

                                </div>
                            </div> 


                        <!-- 
                        - SECTION POST-WALL3
                        -->


                        @elseif($post->post_caption && $post->post_desc )
                        <div class="post-wall2">
                            <div class="username">
                                <div class="profile-img2">
                                    {{-- <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture"> --}}
                                    @if($user->profile_pic)
                                        <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture">
                                    @else
                                        <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                    @endif
                                </div>
                                <span class="username-hover">{{ session('user')->user_name }}</span>
                                <p> • 22 hr. ago</p>

                            
                            </div>
                            
                            {{-- <h3 class="post-wall-first-h3">Who are you? Without reference to your name, job, culture, hobbies, family and relationships? dhfvshfvshvfskfshfshf   </h3> --}}
                            <h3 class="post-wall-first-h3">{{ $post->post_caption }}</h3>
                            {{-- <p class="post-para">Ok so I am 30 years old. Turned 30 back in March and I bought myself a PS5 after my 4 shit out finally after 12 years.

                                I was excited about all the big games but was pleasantly entertained with Astro Bot. So clever! My kids would watch me play before bed and they just loved it.
                                
                                Never thought a sequel would come out. Finally got to try the new one and I am BLOWN AWAY at how absolutely creative and visually appealing this game is. I felt like I was a kid playing an all time classic for the first time. It’s bringing me so much joy!
                                
                                Don’t have many gamers in my life. So I figured I would write this just to share how great I thought it is. Anyone else feel the same?</p> --}}

                                <p class="post-para">{{ $post->post_desc }}</p>



                            <div class="like-cmt-share">


                                <div class="like-dislike">
                                    <svg class="upvote" fill="currentColor" height="16" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.877 19H7.123A1.125 1.125 0 0 1 6 17.877V11H2.126a1.114 1.114 0 0 1-1.007-.7 1.249 1.249 0 0 1 .171-1.343L9.166.368a1.128 1.128 0 0 1 1.668.004l7.872 8.581a1.25 1.25 0 0 1 .176 1.348 1.113 1.113 0 0 1-1.005.7H14v6.877A1.125 1.125 0 0 1 12.877 19ZM7.25 17.75h5.5v-8h4.934L10 1.31 2.258 9.75H7.25v8ZM2.227 9.784l-.012.016c.01-.006.014-.01.012-.016Z"></path>
                                    </svg>
                                    
                                    <span>151</span>
                                    
                                    <svg class="downvote" fill="currentColor" height="16" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 20a1.122 1.122 0 0 1-.834-.372l-7.872-8.581A1.251 1.251 0 0 1 1.118 9.7 1.114 1.114 0 0 1 2.123 9H6V2.123A1.125 1.125 0 0 1 7.123 1h5.754A1.125 1.125 0 0 1 14 2.123V9h3.874a1.114 1.114 0 0 1 1.007.7 1.25 1.25 0 0 1-.171 1.345l-7.876 8.589A1.128 1.128 0 0 1 10 20Zm-7.684-9.75L10 18.69l7.741-8.44H12.75v-8h-5.5v8H2.316Zm15.469-.05c-.01 0-.014.007-.012.013l.012-.013Z"></path>
                                    </svg>
                                </div>

                                

                                <div class="cmt">
                                    <svg rpl="" aria-hidden="true" class="icon-comment" fill="currentColor" height="20" icon-name="comment-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.725 19.872a.718.718 0 0 1-.607-.328.725.725 0 0 1-.118-.397V16H3.625A2.63 2.63 0 0 1 1 13.375v-9.75A2.629 2.629 0 0 1 3.625 1h12.75A2.63 2.63 0 0 1 19 3.625v9.75A2.63 2.63 0 0 1 16.375 16h-4.161l-4 3.681a.725.725 0 0 1-.489.191ZM3.625 2.25A1.377 1.377 0 0 0 2.25 3.625v9.75a1.377 1.377 0 0 0 1.375 1.375h4a.625.625 0 0 1 .625.625v2.575l3.3-3.035a.628.628 0 0 1 .424-.165h4.4a1.377 1.377 0 0 0 1.375-1.375v-9.75a1.377 1.377 0 0 0-1.374-1.375H3.625Z"></path>
                                    </svg>
                                    <span>15</span>
                                </div>


                                <!-- 
                                - SECTION SHARE POST-WALL3
                                -->


                                <!-- 
                                - DROPDOWN9 SHARE OPTOINS POST-WALL3
                                -->


                                <div class="sec-center"> 	
                                    <input class="dropdown9" type="checkbox" id="dropdown9" name="dropdown"/>
                                    <label class="for-dropdown" for="dropdown9"> 
                                        <svg rpl="" aria-hidden="true" class="icon-share" fill="currentColor" height="20" icon-name="share-new-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m18.8 8.286-6.466-7.064a.759.759 0 0 0-1.295.537v3.277C5.623 5.365 1 9.918 1 15.082v2.907h1.274C2.516 15 5.81 12.62 9.834 12.62h1.205v3.226a.757.757 0 0 0 1.315.515l6.422-7.021A.756.756 0 0 0 19 8.8a.736.736 0 0 0-.2-.514Zm-6.508 6.3V12a.625.625 0 0 0-.625-.625H9.834A9.436 9.436 0 0 0 2.26 14.7c.228-4.536 4.525-8.435 9.4-8.435a.626.626 0 0 0 .625-.625V3.023L17.576 8.8l-5.284 5.786Zm5.586-6.107a.176.176 0 0 0-.023.024.171.171 0 0 1 .02-.028l.003.004Zm-.011.642a.53.53 0 0 0-.003-.004l.003.004Z"></path>
                                        </svg>
                                        <p class="sec-center-p"> 17</p>
                                    </label> 
                                
                                    <div class="section-dropdown9"> 
                                        {{-- <a href="#">
                                            <div class="profile-container9">
                                                <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="link-post-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.111 12.5a3.701 3.701 0 0 1-1.09 2.41c-.479.47-.928.922-1.378 1.373-.45.45-.894.9-1.368 1.366a3.852 3.852 0 0 1-2.698 1.099 3.852 3.852 0 0 1-2.698-1.099 3.738 3.738 0 0 1-1.116-2.659c0-.997.402-1.953 1.116-2.658.479-.472.928-.923 1.378-1.375.45-.45.893-.9 1.368-1.365A3.936 3.936 0 0 1 9.638 8.59a3.968 3.968 0 0 1 2.24.258c.27-.269.546-.54.812-.806l.131-.13a5.086 5.086 0 0 0-3.182-.624A5.052 5.052 0 0 0 6.732 8.71c-.48.471-.929.922-1.377 1.373-.449.451-.894.9-1.37 1.366A4.982 4.982 0 0 0 2.5 14.992c0 1.328.534 2.602 1.486 3.543A5.13 5.13 0 0 0 7.58 20a5.13 5.13 0 0 0 3.595-1.465c.478-.471.927-.923 1.377-1.374.451-.451.894-.9 1.368-1.366a4.993 4.993 0 0 0 1.263-2.071c.243-.781.288-1.61.132-2.412L14.11 12.5Z"></path>
                                                </svg>
                                                <div class="profile-info9">
                                                    <span>Copy link</span>
                                                </div>
                                            </div>
                                        </a> --}}

                                        <a href="#" onclick="copyCurrentLink()">
                                            <div class="profile-container2">
                                                <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="link-post-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.111 12.5a3.701 3.701 0 0 1-1.09 2.41c-.479.47-.928.922-1.378 1.373-.45.45-.894.9-1.368 1.366a3.852 3.852 0 0 1-2.698 1.099 3.852 3.852 0 0 1-2.698-1.099 3.738 3.738 0 0 1-1.116-2.659c0-.997.402-1.953 1.116-2.658.479-.472.928-.923 1.378-1.375.45-.45.893-.9 1.368-1.365A3.936 3.936 0 0 1 9.638 8.59a3.968 3.968 0 0 1 2.24.258c.27-.269.546-.54.812-.806l.131-.13a5.086 5.086 0 0 0-3.182-.624A5.052 5.052 0 0 0 6.732 8.71c-.48.471-.929.922-1.377 1.373-.449.451-.894.9-1.37 1.366A4.982 4.982 0 0 0 2.5 14.992c0 1.328.534 2.602 1.486 3.543A5.13 5.13 0 0 0 7.58 20a5.13 5.13 0 0 0 3.595-1.465c.478-.471.927-.923 1.377-1.374.451-.451.894-.9 1.368-1.366a4.993 4.993 0 0 0 1.263-2.071c.243-.781.288-1.61.132-2.412L14.11 12.5Z"></path><path d="M16.017 1.467A5.123 5.123 0 0 0 12.422 0a5.123 5.123 0 0 0-3.595 1.467c-.478.471-.926.923-1.377 1.374-.45.451-.894.9-1.367 1.366a4.966 4.966 0 0 0-1.106 1.624 4.907 4.907 0 0 0-.291 2.86l1.2-1.19a3.699 3.699 0 0 1 1.092-2.41c.478-.472.928-.923 1.377-1.374.45-.45.894-.9 1.368-1.366a3.844 3.844 0 0 1 2.698-1.101c1.012 0 1.982.396 2.698 1.101a3.736 3.736 0 0 1 1.116 2.66c0 .996-.401 1.953-1.116 2.658-.478.471-.927.922-1.377 1.373-.45.451-.893.9-1.368 1.367a3.933 3.933 0 0 1-2.014 1.003 3.966 3.966 0 0 1-2.24-.26c-.273.274-.551.549-.818.818l-.123.12a5.087 5.087 0 0 0 3.183.624 5.053 5.053 0 0 0 2.906-1.423c.477-.472.926-.923 1.376-1.375.45-.452.894-.9 1.368-1.365A4.977 4.977 0 0 0 17.5 5.008a4.977 4.977 0 0 0-1.488-3.543l.005.002Z"></path>
                                                </svg>
                                                <div class="profile-info2">
                                                    <span>Copy link</span>
                                                </div>
                                            </div>
                                        </a>
                                
                                        <a href="#">
                                            <div class="profile-container9">
                                                <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="crosspost-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m15.944 11.926-.888.879 1.925 1.945H12A4.873 4.873 0 0 1 7.138 10 4.873 4.873 0 0 1 12 5.25h4.971l-1.915 1.936.888.878L18.875 5.1a.727.727 0 0 0-.007-1.025l-2.929-2.9-.878.888L17.011 4H12a6.128 6.128 0 0 0-6.056 5.25H1v1.625h4.981A6.117 6.117 0 0 0 12 16h5l-1.94 1.92.878.89 2.929-2.9a.726.726 0 0 0 .006-1.025l-2.929-2.96Z"></path>
                                                </svg>
                                                <div class="profile-info9">
                                                    <span>Crosspost</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>   

                        </div>

                        <!-- 
                        - SECTION POST-WALL2
                        -->

                        @elseif($post->post_caption )
                        <div class="post-wall2">
                            <div class="username">
                                <div class="profile-img2">
                                    {{-- <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture"> --}}
                                    @if($user->profile_pic)
                                        <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture">
                                    @else
                                        <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                    @endif
                                </div>
                                <span class="username-hover">{{ session('user')->user_name }}</span>
                                {{-- <p> • 22 hr. ago</p> --}}
                                <p> • {{ $post->created_at->diffForHumans() }}</p>
                            
                            </div>
                            
                            {{-- <h3 class="post-wall-first-h3">Who are you? Without reference to your name, job, culture, hobbies, family and relationships? dhfvshfvshvfskfshfshf   </h3> --}}
                            <h3 class="post-wall-first-h3">{{ $post->post_caption }}</h3>



                            <div class="like-cmt-share">


                                <div class="like-dislike">
                                    <svg class="upvote" fill="currentColor" height="16" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.877 19H7.123A1.125 1.125 0 0 1 6 17.877V11H2.126a1.114 1.114 0 0 1-1.007-.7 1.249 1.249 0 0 1 .171-1.343L9.166.368a1.128 1.128 0 0 1 1.668.004l7.872 8.581a1.25 1.25 0 0 1 .176 1.348 1.113 1.113 0 0 1-1.005.7H14v6.877A1.125 1.125 0 0 1 12.877 19ZM7.25 17.75h5.5v-8h4.934L10 1.31 2.258 9.75H7.25v8ZM2.227 9.784l-.012.016c.01-.006.014-.01.012-.016Z"></path>
                                    </svg>
                                    
                                    <span>151</span>
                                    
                                    <svg class="downvote" fill="currentColor" height="16" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 20a1.122 1.122 0 0 1-.834-.372l-7.872-8.581A1.251 1.251 0 0 1 1.118 9.7 1.114 1.114 0 0 1 2.123 9H6V2.123A1.125 1.125 0 0 1 7.123 1h5.754A1.125 1.125 0 0 1 14 2.123V9h3.874a1.114 1.114 0 0 1 1.007.7 1.25 1.25 0 0 1-.171 1.345l-7.876 8.589A1.128 1.128 0 0 1 10 20Zm-7.684-9.75L10 18.69l7.741-8.44H12.75v-8h-5.5v8H2.316Zm15.469-.05c-.01 0-.014.007-.012.013l.012-.013Z"></path>
                                    </svg>
                                </div>

                                

                                <div class="cmt">
                                    <svg rpl="" aria-hidden="true" class="icon-comment" fill="currentColor" height="20" icon-name="comment-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.725 19.872a.718.718 0 0 1-.607-.328.725.725 0 0 1-.118-.397V16H3.625A2.63 2.63 0 0 1 1 13.375v-9.75A2.629 2.629 0 0 1 3.625 1h12.75A2.63 2.63 0 0 1 19 3.625v9.75A2.63 2.63 0 0 1 16.375 16h-4.161l-4 3.681a.725.725 0 0 1-.489.191ZM3.625 2.25A1.377 1.377 0 0 0 2.25 3.625v9.75a1.377 1.377 0 0 0 1.375 1.375h4a.625.625 0 0 1 .625.625v2.575l3.3-3.035a.628.628 0 0 1 .424-.165h4.4a1.377 1.377 0 0 0 1.375-1.375v-9.75a1.377 1.377 0 0 0-1.374-1.375H3.625Z"></path>
                                    </svg>
                                    <span>15</span>
                                </div>


                                <!-- 
                                - SECTION SHARE POST-WALL2
                                -->


                                <!-- 
                                - DROPDOWN7 SHARE OPTOINS POST-WALL2
                                -->


                                <div class="sec-center"> 	
                                    <input class="dropdown7" type="checkbox" id="dropdown7" name="dropdown"/>
                                    <label class="for-dropdown" for="dropdown7"> 
                                        <svg rpl="" aria-hidden="true" class="icon-share" fill="currentColor" height="20" icon-name="share-new-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m18.8 8.286-6.466-7.064a.759.759 0 0 0-1.295.537v3.277C5.623 5.365 1 9.918 1 15.082v2.907h1.274C2.516 15 5.81 12.62 9.834 12.62h1.205v3.226a.757.757 0 0 0 1.315.515l6.422-7.021A.756.756 0 0 0 19 8.8a.736.736 0 0 0-.2-.514Zm-6.508 6.3V12a.625.625 0 0 0-.625-.625H9.834A9.436 9.436 0 0 0 2.26 14.7c.228-4.536 4.525-8.435 9.4-8.435a.626.626 0 0 0 .625-.625V3.023L17.576 8.8l-5.284 5.786Zm5.586-6.107a.176.176 0 0 0-.023.024.171.171 0 0 1 .02-.028l.003.004Zm-.011.642a.53.53 0 0 0-.003-.004l.003.004Z"></path>
                                        </svg>
                                        <p class="sec-center-p"> 17</p>
                                    </label> 
                                
                                    <div class="section-dropdown7"> 
                                        {{-- <a href="#">
                                            <div class="profile-container2">
                                                <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="link-post-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.111 12.5a3.701 3.701 0 0 1-1.09 2.41c-.479.47-.928.922-1.378 1.373-.45.45-.894.9-1.368 1.366a3.852 3.852 0 0 1-2.698 1.099 3.852 3.852 0 0 1-2.698-1.099 3.738 3.738 0 0 1-1.116-2.659c0-.997.402-1.953 1.116-2.658.479-.472.928-.923 1.378-1.375.45-.45.893-.9 1.368-1.365A3.936 3.936 0 0 1 9.638 8.59a3.968 3.968 0 0 1 2.24.258c.27-.269.546-.54.812-.806l.131-.13a5.086 5.086 0 0 0-3.182-.624A5.052 5.052 0 0 0 6.732 8.71c-.48.471-.929.922-1.377 1.373-.449.451-.894.9-1.37 1.366A4.982 4.982 0 0 0 2.5 14.992c0 1.328.534 2.602 1.486 3.543A5.13 5.13 0 0 0 7.58 20a5.13 5.13 0 0 0 3.595-1.465c.478-.471.927-.923 1.377-1.374.451-.451.894-.9 1.368-1.366a4.993 4.993 0 0 0 1.263-2.071c.243-.781.288-1.61.132-2.412L14.11 12.5Z"></path>
                                                </svg>
                                                <div class="profile-info2">
                                                    <span>Copy link</span>
                                                </div>
                                            </div>
                                        </a> --}}

                                        <a href="#" onclick="copyCurrentLink()">
                                            <div class="profile-container2">
                                                <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="link-post-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.111 12.5a3.701 3.701 0 0 1-1.09 2.41c-.479.47-.928.922-1.378 1.373-.45.45-.894.9-1.368 1.366a3.852 3.852 0 0 1-2.698 1.099 3.852 3.852 0 0 1-2.698-1.099 3.738 3.738 0 0 1-1.116-2.659c0-.997.402-1.953 1.116-2.658.479-.472.928-.923 1.378-1.375.45-.45.893-.9 1.368-1.365A3.936 3.936 0 0 1 9.638 8.59a3.968 3.968 0 0 1 2.24.258c.27-.269.546-.54.812-.806l.131-.13a5.086 5.086 0 0 0-3.182-.624A5.052 5.052 0 0 0 6.732 8.71c-.48.471-.929.922-1.377 1.373-.449.451-.894.9-1.37 1.366A4.982 4.982 0 0 0 2.5 14.992c0 1.328.534 2.602 1.486 3.543A5.13 5.13 0 0 0 7.58 20a5.13 5.13 0 0 0 3.595-1.465c.478-.471.927-.923 1.377-1.374.451-.451.894-.9 1.368-1.366a4.993 4.993 0 0 0 1.263-2.071c.243-.781.288-1.61.132-2.412L14.11 12.5Z"></path><path d="M16.017 1.467A5.123 5.123 0 0 0 12.422 0a5.123 5.123 0 0 0-3.595 1.467c-.478.471-.926.923-1.377 1.374-.45.451-.894.9-1.367 1.366a4.966 4.966 0 0 0-1.106 1.624 4.907 4.907 0 0 0-.291 2.86l1.2-1.19a3.699 3.699 0 0 1 1.092-2.41c.478-.472.928-.923 1.377-1.374.45-.45.894-.9 1.368-1.366a3.844 3.844 0 0 1 2.698-1.101c1.012 0 1.982.396 2.698 1.101a3.736 3.736 0 0 1 1.116 2.66c0 .996-.401 1.953-1.116 2.658-.478.471-.927.922-1.377 1.373-.45.451-.893.9-1.368 1.367a3.933 3.933 0 0 1-2.014 1.003 3.966 3.966 0 0 1-2.24-.26c-.273.274-.551.549-.818.818l-.123.12a5.087 5.087 0 0 0 3.183.624 5.053 5.053 0 0 0 2.906-1.423c.477-.472.926-.923 1.376-1.375.45-.452.894-.9 1.368-1.365A4.977 4.977 0 0 0 17.5 5.008a4.977 4.977 0 0 0-1.488-3.543l.005.002Z"></path>
                                                </svg>
                                                <div class="profile-info2">
                                                    <span>Copy link</span>
                                                </div>
                                            </div>
                                        </a>
                                
                                        <a href="#">
                                            <div class="profile-container2">
                                                <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="crosspost-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m15.944 11.926-.888.879 1.925 1.945H12A4.873 4.873 0 0 1 7.138 10 4.873 4.873 0 0 1 12 5.25h4.971l-1.915 1.936.888.878L18.875 5.1a.727.727 0 0 0-.007-1.025l-2.929-2.9-.878.888L17.011 4H12a6.128 6.128 0 0 0-6.056 5.25H1v1.625h4.981A6.117 6.117 0 0 0 12 16h5l-1.94 1.92.878.89 2.929-2.9a.726.726 0 0 0 .006-1.025l-2.929-2.96Z"></path>
                                                </svg>
                                                <div class="profile-info2">
                                                    <span>Crosspost</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>   

                        </div> 

                    @endif 
                @endforeach



            </div>


            <div class="identifier-body" id="identifier-body-posts">

                @foreach($posts as $post)
                    @if(isset($posts) && $posts->isEmpty())
                        <div class="not-found">
                            <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                            <h3>Looks like you haven't posted anything yet</h3> 
                        </div>

                        <!-- 
                        - SECTION POST-WALL1
                        -->

                        @elseif($post->post_caption && $post->post_img)
                        <div class="post-wall">
                            <div class="username">

                                <div class="profile-img2">
                                    @if($user->profile_pic)
                                        <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture">
                                    @else
                                        <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D  ">
                                    @endif
                                </div>

                                <div class="profile-img2"></div>
                                <span class="username-hover">{{ session('user')->user_name }}</span>
                                {{-- <p> • 22 hr. ago</p> --}}
                                <p> • {{ $post->created_at->diffForHumans() }}</p>

                            </div>
                            
                            {{-- <h3>This is a title</h3> --}}
                            <h3 class="post-wall-first-h3">{{ $post->post_caption }}</h3>

                            <div class="post-img" style="position: relative; display: inline-block; overflow: hidden;">
                                <div style="
                                    position: absolute;
                                    top: -10%;
                                    left: -10%;
                                    height: 120%;
                                    width: 120%;
                                    background: url('{{ asset("storage/" . $post->post_img) }}') no-repeat center;
                                    background-size: cover;
                                    filter: blur(20px);
                                    z-index: 1;
                                "></div>
                                <img src="{{ asset('storage/' . $post->post_img) }}" alt="Post Image"style="position: relative; z-index: 2;">
                            </div>

                            <!-- 
                            - SECTION LIKE CMT SHARE POST-WALL1
                            -->

                            
                            <div class="like-cmt-share">

                                <div class="like-dislike">
                                    <svg class="upvote" rpl="" fill="currentColor" height="16" icon-name="upvote-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.877 19H7.123A1.125 1.125 0 0 1 6 17.877V11H2.126a1.114 1.114 0 0 1-1.007-.7 1.249 1.249 0 0 1 .171-1.343L9.166.368a1.128 1.128 0 0 1 1.668.004l7.872 8.581a1.25 1.25 0 0 1 .176 1.348 1.113 1.113 0 0 1-1.005.7H14v6.877A1.125 1.125 0 0 1 12.877 19ZM7.25 17.75h5.5v-8h4.934L10 1.31 2.258 9.75H7.25v8ZM2.227 9.784l-.012.016c.01-.006.014-.01.012-.016Z"></path>
                                    </svg>
                                    
                                    {{-- <span>151</span> --}}
                                    <span aria-label="Vote count">0</span>
                                    <svg class="downvote" rpl="" fill="currentColor" height="16" icon-name="downvote-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 20a1.122 1.122 0 0 1-.834-.372l-7.872-8.581A1.251 1.251 0 0 1 1.118 9.7 1.114 1.114 0 0 1 2.123 9H6V2.123A1.125 1.125 0 0 1 7.123 1h5.754A1.125 1.125 0 0 1 14 2.123V9h3.874a1.114 1.114 0 0 1 1.007.7 1.25 1.25 0 0 1-.171 1.345l-7.876 8.589A1.128 1.128 0 0 1 10 20Zm-7.684-9.75L10 18.69l7.741-8.44H12.75v-8h-5.5v8H2.316Zm15.469-.05c-.01 0-.014.007-.012.013l.012-.013Z"></path>
                                    </svg>
                                </div>

                                <div class="cmt">
                                    <svg rpl="" aria-hidden="true" class="icon-comment" fill="currentColor" height="20" icon-name="comment-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.725 19.872a.718.718 0 0 1-.607-.328.725.725 0 0 1-.118-.397V16H3.625A2.63 2.63 0 0 1 1 13.375v-9.75A2.629 2.629 0 0 1 3.625 1h12.75A2.63 2.63 0 0 1 19 3.625v9.75A2.63 2.63 0 0 1 16.375 16h-4.161l-4 3.681a.725.725 0 0 1-.489.191ZM3.625 2.25A1.377 1.377 0 0 0 2.25 3.625v9.75a1.377 1.377 0 0 0 1.375 1.375h4a.625.625 0 0 1 .625.625v2.575l3.3-3.035a.628.628 0 0 1 .424-.165h4.4a1.377 1.377 0 0 0 1.375-1.375v-9.75a1.377 1.377 0 0 0-1.374-1.375H3.625Z"></path>
                                    </svg>
                                    <span>15</span>
                                </div>

                                <!-- 
                                - SECTION SHARE POST-WALL1 
                                -->


                                <!-- 
                                - DROPDOWN5 SHARE OPTOINS POST-WALL1 
                                -->

                                <div class="sec-center"> 	
                                    <input class="dropdown5" type="checkbox" id="dropdown5" name="dropdown"/>
                                    <label class="for-dropdown" for="dropdown5"> 
                                        <svg rpl="" aria-hidden="true" class="icon-share" fill="currentColor" height="20" icon-name="share-new-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m18.8 8.286-6.466-7.064a.759.759 0 0 0-1.295.537v3.277C5.623 5.365 1 9.918 1 15.082v2.907h1.274C2.516 15 5.81 12.62 9.834 12.62h1.205v3.226a.757.757 0 0 0 1.315.515l6.422-7.021A.756.756 0 0 0 19 8.8a.736.736 0 0 0-.2-.514Zm-6.508 6.3V12a.625.625 0 0 0-.625-.625H9.834A9.436 9.436 0 0 0 2.26 14.7c.228-4.536 4.525-8.435 9.4-8.435a.626.626 0 0 0 .625-.625V3.023L17.576 8.8l-5.284 5.786Zm5.586-6.107a.176.176 0 0 0-.023.024.171.171 0 0 1 .02-.028l.003.004Zm-.011.642a.53.53 0 0 0-.003-.004l.003.004Z"></path>
                                        </svg>
                                        <p class="sec-center-p">15</p>
                                    </label> 

                                    <div class="section-dropdown5"> 
                                        {{-- <a href="#">
                                            <div class="profile-container2">
                                                <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="link-post-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.111 12.5a3.701 3.701 0 0 1-1.09 2.41c-.479.47-.928.922-1.378 1.373-.45.45-.894.9-1.368 1.366a3.852 3.852 0 0 1-2.698 1.099 3.852 3.852 0 0 1-2.698-1.099 3.738 3.738 0 0 1-1.116-2.659c0-.997.402-1.953 1.116-2.658.479-.472.928-.923 1.378-1.375.45-.45.893-.9 1.368-1.365A3.936 3.936 0 0 1 9.638 8.59a3.968 3.968 0 0 1 2.24.258c.27-.269.546-.54.812-.806l.131-.13a5.086 5.086 0 0 0-3.182-.624A5.052 5.052 0 0 0 6.732 8.71c-.48.471-.929.922-1.377 1.373-.449.451-.894.9-1.37 1.366A4.982 4.982 0 0 0 2.5 14.992c0 1.328.534 2.602 1.486 3.543A5.13 5.13 0 0 0 7.58 20a5.13 5.13 0 0 0 3.595-1.465c.478-.471.927-.923 1.377-1.374.451-.451.894-.9 1.368-1.366a4.993 4.993 0 0 0 1.263-2.071c.243-.781.288-1.61.132-2.412L14.11 12.5Z"></path><path d="M16.017 1.467A5.123 5.123 0 0 0 12.422 0a5.123 5.123 0 0 0-3.595 1.467c-.478.471-.926.923-1.377 1.374-.45.451-.894.9-1.367 1.366a4.966 4.966 0 0 0-1.106 1.624 4.907 4.907 0 0 0-.291 2.86l1.2-1.19a3.699 3.699 0 0 1 1.092-2.41c.478-.472.928-.923 1.377-1.374.45-.45.894-.9 1.368-1.366a3.844 3.844 0 0 1 2.698-1.101c1.012 0 1.982.396 2.698 1.101a3.736 3.736 0 0 1 1.116 2.66c0 .996-.401 1.953-1.116 2.658-.478.471-.927.922-1.377 1.373-.45.451-.893.9-1.368 1.367a3.933 3.933 0 0 1-2.014 1.003 3.966 3.966 0 0 1-2.24-.26c-.273.274-.551.549-.818.818l-.123.12a5.087 5.087 0 0 0 3.183.624 5.053 5.053 0 0 0 2.906-1.423c.477-.472.926-.923 1.376-1.375.45-.452.894-.9 1.368-1.365A4.977 4.977 0 0 0 17.5 5.008a4.977 4.977 0 0 0-1.488-3.543l.005.002Z"></path>
                                                </svg>
                                                <div class="profile-info2">
                                                    <span>Copy link</span>
                                                </div>
                                            </div>
                                        </a> --}}

                                        <a href="#" onclick="copyCurrentLink()">
                                            <div class="profile-container2">
                                                <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="link-post-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.111 12.5a3.701 3.701 0 0 1-1.09 2.41c-.479.47-.928.922-1.378 1.373-.45.45-.894.9-1.368 1.366a3.852 3.852 0 0 1-2.698 1.099 3.852 3.852 0 0 1-2.698-1.099 3.738 3.738 0 0 1-1.116-2.659c0-.997.402-1.953 1.116-2.658.479-.472.928-.923 1.378-1.375.45-.45.893-.9 1.368-1.365A3.936 3.936 0 0 1 9.638 8.59a3.968 3.968 0 0 1 2.24.258c.27-.269.546-.54.812-.806l.131-.13a5.086 5.086 0 0 0-3.182-.624A5.052 5.052 0 0 0 6.732 8.71c-.48.471-.929.922-1.377 1.373-.449.451-.894.9-1.37 1.366A4.982 4.982 0 0 0 2.5 14.992c0 1.328.534 2.602 1.486 3.543A5.13 5.13 0 0 0 7.58 20a5.13 5.13 0 0 0 3.595-1.465c.478-.471.927-.923 1.377-1.374.451-.451.894-.9 1.368-1.366a4.993 4.993 0 0 0 1.263-2.071c.243-.781.288-1.61.132-2.412L14.11 12.5Z"></path><path d="M16.017 1.467A5.123 5.123 0 0 0 12.422 0a5.123 5.123 0 0 0-3.595 1.467c-.478.471-.926.923-1.377 1.374-.45.451-.894.9-1.367 1.366a4.966 4.966 0 0 0-1.106 1.624 4.907 4.907 0 0 0-.291 2.86l1.2-1.19a3.699 3.699 0 0 1 1.092-2.41c.478-.472.928-.923 1.377-1.374.45-.45.894-.9 1.368-1.366a3.844 3.844 0 0 1 2.698-1.101c1.012 0 1.982.396 2.698 1.101a3.736 3.736 0 0 1 1.116 2.66c0 .996-.401 1.953-1.116 2.658-.478.471-.927.922-1.377 1.373-.45.451-.893.9-1.368 1.367a3.933 3.933 0 0 1-2.014 1.003 3.966 3.966 0 0 1-2.24-.26c-.273.274-.551.549-.818.818l-.123.12a5.087 5.087 0 0 0 3.183.624 5.053 5.053 0 0 0 2.906-1.423c.477-.472.926-.923 1.376-1.375.45-.452.894-.9 1.368-1.365A4.977 4.977 0 0 0 17.5 5.008a4.977 4.977 0 0 0-1.488-3.543l.005.002Z"></path>
                                                </svg>
                                                <div class="profile-info2">
                                                    <span>Copy link</span>
                                                </div>
                                            </div>
                                        </a>
                                                    
                                
                                        <a href="#">
                                            <div class="profile-container2">
                                                <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="crosspost-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m15.944 11.926-.888.879 1.925 1.945H12A4.873 4.873 0 0 1 7.138 10 4.873 4.873 0 0 1 12 5.25h4.971l-1.915 1.936.888.878L18.875 5.1a.727.727 0 0 0-.007-1.025l-2.929-2.9-.878.888L17.011 4H12a6.128 6.128 0 0 0-6.056 5.25H1v1.625h4.981A6.117 6.117 0 0 0 12 16h5l-1.94 1.92.878.89 2.929-2.9a.726.726 0 0 0 .006-1.025l-2.929-2.96Z"></path>
                                                </svg>
                                                <div class="profile-info2">
                                                    <span>Crosspost</span>
                                                </div>
                                            </div>
                                        </a>
                                    
                                    </div>
                                </div>

                            </div>
                        </div> 


                        <!-- 
                        - SECTION POST-WALL3
                        -->


                        @elseif($post->post_caption && $post->post_desc )
                        <div class="post-wall2">
                            <div class="username">
                                <div class="profile-img2">
                                    {{-- <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture"> --}}
                                    @if($user->profile_pic)
                                        <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture">
                                    @else
                                        <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                    @endif
                                </div>
                                <span class="username-hover">{{ session('user')->user_name }}</span>
                                <p> • 22 hr. ago</p>

                            
                            </div>
                            
                            {{-- <h3 class="post-wall-first-h3">Who are you? Without reference to your name, job, culture, hobbies, family and relationships? dhfvshfvshvfskfshfshf   </h3> --}}
                            <h3 class="post-wall-first-h3">{{ $post->post_caption }}</h3>
                            {{-- <p class="post-para">Ok so I am 30 years old. Turned 30 back in March and I bought myself a PS5 after my 4 shit out finally after 12 years.

                                I was excited about all the big games but was pleasantly entertained with Astro Bot. So clever! My kids would watch me play before bed and they just loved it.
                                
                                Never thought a sequel would come out. Finally got to try the new one and I am BLOWN AWAY at how absolutely creative and visually appealing this game is. I felt like I was a kid playing an all time classic for the first time. It’s bringing me so much joy!
                                
                                Don’t have many gamers in my life. So I figured I would write this just to share how great I thought it is. Anyone else feel the same?</p> --}}

                                <p class="post-para">{{ $post->post_desc }}</p>



                            <div class="like-cmt-share">


                                <div class="like-dislike">
                                    <svg class="upvote" fill="currentColor" height="16" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.877 19H7.123A1.125 1.125 0 0 1 6 17.877V11H2.126a1.114 1.114 0 0 1-1.007-.7 1.249 1.249 0 0 1 .171-1.343L9.166.368a1.128 1.128 0 0 1 1.668.004l7.872 8.581a1.25 1.25 0 0 1 .176 1.348 1.113 1.113 0 0 1-1.005.7H14v6.877A1.125 1.125 0 0 1 12.877 19ZM7.25 17.75h5.5v-8h4.934L10 1.31 2.258 9.75H7.25v8ZM2.227 9.784l-.012.016c.01-.006.014-.01.012-.016Z"></path>
                                    </svg>
                                    
                                    <span>151</span>
                                    
                                    <svg class="downvote" fill="currentColor" height="16" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 20a1.122 1.122 0 0 1-.834-.372l-7.872-8.581A1.251 1.251 0 0 1 1.118 9.7 1.114 1.114 0 0 1 2.123 9H6V2.123A1.125 1.125 0 0 1 7.123 1h5.754A1.125 1.125 0 0 1 14 2.123V9h3.874a1.114 1.114 0 0 1 1.007.7 1.25 1.25 0 0 1-.171 1.345l-7.876 8.589A1.128 1.128 0 0 1 10 20Zm-7.684-9.75L10 18.69l7.741-8.44H12.75v-8h-5.5v8H2.316Zm15.469-.05c-.01 0-.014.007-.012.013l.012-.013Z"></path>
                                    </svg>
                                </div>

                                

                                <div class="cmt">
                                    <svg rpl="" aria-hidden="true" class="icon-comment" fill="currentColor" height="20" icon-name="comment-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.725 19.872a.718.718 0 0 1-.607-.328.725.725 0 0 1-.118-.397V16H3.625A2.63 2.63 0 0 1 1 13.375v-9.75A2.629 2.629 0 0 1 3.625 1h12.75A2.63 2.63 0 0 1 19 3.625v9.75A2.63 2.63 0 0 1 16.375 16h-4.161l-4 3.681a.725.725 0 0 1-.489.191ZM3.625 2.25A1.377 1.377 0 0 0 2.25 3.625v9.75a1.377 1.377 0 0 0 1.375 1.375h4a.625.625 0 0 1 .625.625v2.575l3.3-3.035a.628.628 0 0 1 .424-.165h4.4a1.377 1.377 0 0 0 1.375-1.375v-9.75a1.377 1.377 0 0 0-1.374-1.375H3.625Z"></path>
                                    </svg>
                                    <span>15</span>
                                </div>


                                <!-- 
                                - SECTION SHARE POST-WALL3
                                -->


                                <!-- 
                                - DROPDOWN9 SHARE OPTOINS POST-WALL3
                                -->


                                <div class="sec-center"> 	
                                    <input class="dropdown9" type="checkbox" id="dropdown9" name="dropdown"/>
                                    <label class="for-dropdown" for="dropdown9"> 
                                        <svg rpl="" aria-hidden="true" class="icon-share" fill="currentColor" height="20" icon-name="share-new-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m18.8 8.286-6.466-7.064a.759.759 0 0 0-1.295.537v3.277C5.623 5.365 1 9.918 1 15.082v2.907h1.274C2.516 15 5.81 12.62 9.834 12.62h1.205v3.226a.757.757 0 0 0 1.315.515l6.422-7.021A.756.756 0 0 0 19 8.8a.736.736 0 0 0-.2-.514Zm-6.508 6.3V12a.625.625 0 0 0-.625-.625H9.834A9.436 9.436 0 0 0 2.26 14.7c.228-4.536 4.525-8.435 9.4-8.435a.626.626 0 0 0 .625-.625V3.023L17.576 8.8l-5.284 5.786Zm5.586-6.107a.176.176 0 0 0-.023.024.171.171 0 0 1 .02-.028l.003.004Zm-.011.642a.53.53 0 0 0-.003-.004l.003.004Z"></path>
                                        </svg>
                                        <p class="sec-center-p"> 17</p>
                                    </label> 
                                
                                    <div class="section-dropdown9"> 
                                        {{-- <a href="#">
                                            <div class="profile-container9">
                                                <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="link-post-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.111 12.5a3.701 3.701 0 0 1-1.09 2.41c-.479.47-.928.922-1.378 1.373-.45.45-.894.9-1.368 1.366a3.852 3.852 0 0 1-2.698 1.099 3.852 3.852 0 0 1-2.698-1.099 3.738 3.738 0 0 1-1.116-2.659c0-.997.402-1.953 1.116-2.658.479-.472.928-.923 1.378-1.375.45-.45.893-.9 1.368-1.365A3.936 3.936 0 0 1 9.638 8.59a3.968 3.968 0 0 1 2.24.258c.27-.269.546-.54.812-.806l.131-.13a5.086 5.086 0 0 0-3.182-.624A5.052 5.052 0 0 0 6.732 8.71c-.48.471-.929.922-1.377 1.373-.449.451-.894.9-1.37 1.366A4.982 4.982 0 0 0 2.5 14.992c0 1.328.534 2.602 1.486 3.543A5.13 5.13 0 0 0 7.58 20a5.13 5.13 0 0 0 3.595-1.465c.478-.471.927-.923 1.377-1.374.451-.451.894-.9 1.368-1.366a4.993 4.993 0 0 0 1.263-2.071c.243-.781.288-1.61.132-2.412L14.11 12.5Z"></path>
                                                </svg>
                                                <div class="profile-info9">
                                                    <span>Copy link</span>
                                                </div>
                                            </div>
                                        </a> --}}

                                        <a href="#" onclick="copyCurrentLink()">
                                            <div class="profile-container2">
                                                <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="link-post-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.111 12.5a3.701 3.701 0 0 1-1.09 2.41c-.479.47-.928.922-1.378 1.373-.45.45-.894.9-1.368 1.366a3.852 3.852 0 0 1-2.698 1.099 3.852 3.852 0 0 1-2.698-1.099 3.738 3.738 0 0 1-1.116-2.659c0-.997.402-1.953 1.116-2.658.479-.472.928-.923 1.378-1.375.45-.45.893-.9 1.368-1.365A3.936 3.936 0 0 1 9.638 8.59a3.968 3.968 0 0 1 2.24.258c.27-.269.546-.54.812-.806l.131-.13a5.086 5.086 0 0 0-3.182-.624A5.052 5.052 0 0 0 6.732 8.71c-.48.471-.929.922-1.377 1.373-.449.451-.894.9-1.37 1.366A4.982 4.982 0 0 0 2.5 14.992c0 1.328.534 2.602 1.486 3.543A5.13 5.13 0 0 0 7.58 20a5.13 5.13 0 0 0 3.595-1.465c.478-.471.927-.923 1.377-1.374.451-.451.894-.9 1.368-1.366a4.993 4.993 0 0 0 1.263-2.071c.243-.781.288-1.61.132-2.412L14.11 12.5Z"></path><path d="M16.017 1.467A5.123 5.123 0 0 0 12.422 0a5.123 5.123 0 0 0-3.595 1.467c-.478.471-.926.923-1.377 1.374-.45.451-.894.9-1.367 1.366a4.966 4.966 0 0 0-1.106 1.624 4.907 4.907 0 0 0-.291 2.86l1.2-1.19a3.699 3.699 0 0 1 1.092-2.41c.478-.472.928-.923 1.377-1.374.45-.45.894-.9 1.368-1.366a3.844 3.844 0 0 1 2.698-1.101c1.012 0 1.982.396 2.698 1.101a3.736 3.736 0 0 1 1.116 2.66c0 .996-.401 1.953-1.116 2.658-.478.471-.927.922-1.377 1.373-.45.451-.893.9-1.368 1.367a3.933 3.933 0 0 1-2.014 1.003 3.966 3.966 0 0 1-2.24-.26c-.273.274-.551.549-.818.818l-.123.12a5.087 5.087 0 0 0 3.183.624 5.053 5.053 0 0 0 2.906-1.423c.477-.472.926-.923 1.376-1.375.45-.452.894-.9 1.368-1.365A4.977 4.977 0 0 0 17.5 5.008a4.977 4.977 0 0 0-1.488-3.543l.005.002Z"></path>
                                                </svg>
                                                <div class="profile-info2">
                                                    <span>Copy link</span>
                                                </div>
                                            </div>
                                        </a>
                                
                                        <a href="#">
                                            <div class="profile-container9">
                                                <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="crosspost-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m15.944 11.926-.888.879 1.925 1.945H12A4.873 4.873 0 0 1 7.138 10 4.873 4.873 0 0 1 12 5.25h4.971l-1.915 1.936.888.878L18.875 5.1a.727.727 0 0 0-.007-1.025l-2.929-2.9-.878.888L17.011 4H12a6.128 6.128 0 0 0-6.056 5.25H1v1.625h4.981A6.117 6.117 0 0 0 12 16h5l-1.94 1.92.878.89 2.929-2.9a.726.726 0 0 0 .006-1.025l-2.929-2.96Z"></path>
                                                </svg>
                                                <div class="profile-info9">
                                                    <span>Crosspost</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>   

                        </div>

                        <!-- 
                        - SECTION POST-WALL2
                        -->

                        @elseif($post->post_caption )
                        <div class="post-wall2">
                            <div class="username">
                                <div class="profile-img2">
                                    {{-- <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture"> --}}
                                    @if($user->profile_pic)
                                        <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture">
                                    @else
                                        <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                    @endif
                                </div>
                                <span class="username-hover">{{ session('user')->user_name }}</span>
                                {{-- <p> • 22 hr. ago</p> --}}
                                <p> • {{ $post->created_at->diffForHumans() }}</p>
                            
                            </div>
                            
                            {{-- <h3 class="post-wall-first-h3">Who are you? Without reference to your name, job, culture, hobbies, family and relationships? dhfvshfvshvfskfshfshf   </h3> --}}
                            <h3 class="post-wall-first-h3">{{ $post->post_caption }}</h3>



                            <div class="like-cmt-share">


                                <div class="like-dislike">
                                    <svg class="upvote" fill="currentColor" height="16" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.877 19H7.123A1.125 1.125 0 0 1 6 17.877V11H2.126a1.114 1.114 0 0 1-1.007-.7 1.249 1.249 0 0 1 .171-1.343L9.166.368a1.128 1.128 0 0 1 1.668.004l7.872 8.581a1.25 1.25 0 0 1 .176 1.348 1.113 1.113 0 0 1-1.005.7H14v6.877A1.125 1.125 0 0 1 12.877 19ZM7.25 17.75h5.5v-8h4.934L10 1.31 2.258 9.75H7.25v8ZM2.227 9.784l-.012.016c.01-.006.014-.01.012-.016Z"></path>
                                    </svg>
                                    
                                    <span>151</span>
                                    
                                    <svg class="downvote" fill="currentColor" height="16" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 20a1.122 1.122 0 0 1-.834-.372l-7.872-8.581A1.251 1.251 0 0 1 1.118 9.7 1.114 1.114 0 0 1 2.123 9H6V2.123A1.125 1.125 0 0 1 7.123 1h5.754A1.125 1.125 0 0 1 14 2.123V9h3.874a1.114 1.114 0 0 1 1.007.7 1.25 1.25 0 0 1-.171 1.345l-7.876 8.589A1.128 1.128 0 0 1 10 20Zm-7.684-9.75L10 18.69l7.741-8.44H12.75v-8h-5.5v8H2.316Zm15.469-.05c-.01 0-.014.007-.012.013l.012-.013Z"></path>
                                    </svg>
                                </div>

                                

                                <div class="cmt">
                                    <svg rpl="" aria-hidden="true" class="icon-comment" fill="currentColor" height="20" icon-name="comment-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.725 19.872a.718.718 0 0 1-.607-.328.725.725 0 0 1-.118-.397V16H3.625A2.63 2.63 0 0 1 1 13.375v-9.75A2.629 2.629 0 0 1 3.625 1h12.75A2.63 2.63 0 0 1 19 3.625v9.75A2.63 2.63 0 0 1 16.375 16h-4.161l-4 3.681a.725.725 0 0 1-.489.191ZM3.625 2.25A1.377 1.377 0 0 0 2.25 3.625v9.75a1.377 1.377 0 0 0 1.375 1.375h4a.625.625 0 0 1 .625.625v2.575l3.3-3.035a.628.628 0 0 1 .424-.165h4.4a1.377 1.377 0 0 0 1.375-1.375v-9.75a1.377 1.377 0 0 0-1.374-1.375H3.625Z"></path>
                                    </svg>
                                    <span>15</span>
                                </div>


                                <!-- 
                                - SECTION SHARE POST-WALL2
                                -->


                                <!-- 
                                - DROPDOWN7 SHARE OPTOINS POST-WALL2
                                -->


                                <div class="sec-center"> 	
                                    <input class="dropdown7" type="checkbox" id="dropdown7" name="dropdown"/>
                                    <label class="for-dropdown" for="dropdown7"> 
                                        <svg rpl="" aria-hidden="true" class="icon-share" fill="currentColor" height="20" icon-name="share-new-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m18.8 8.286-6.466-7.064a.759.759 0 0 0-1.295.537v3.277C5.623 5.365 1 9.918 1 15.082v2.907h1.274C2.516 15 5.81 12.62 9.834 12.62h1.205v3.226a.757.757 0 0 0 1.315.515l6.422-7.021A.756.756 0 0 0 19 8.8a.736.736 0 0 0-.2-.514Zm-6.508 6.3V12a.625.625 0 0 0-.625-.625H9.834A9.436 9.436 0 0 0 2.26 14.7c.228-4.536 4.525-8.435 9.4-8.435a.626.626 0 0 0 .625-.625V3.023L17.576 8.8l-5.284 5.786Zm5.586-6.107a.176.176 0 0 0-.023.024.171.171 0 0 1 .02-.028l.003.004Zm-.011.642a.53.53 0 0 0-.003-.004l.003.004Z"></path>
                                        </svg>
                                        <p class="sec-center-p"> 17</p>
                                    </label> 
                                
                                    <div class="section-dropdown7"> 
                                        {{-- <a href="#">
                                            <div class="profile-container2">
                                                <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="link-post-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.111 12.5a3.701 3.701 0 0 1-1.09 2.41c-.479.47-.928.922-1.378 1.373-.45.45-.894.9-1.368 1.366a3.852 3.852 0 0 1-2.698 1.099 3.852 3.852 0 0 1-2.698-1.099 3.738 3.738 0 0 1-1.116-2.659c0-.997.402-1.953 1.116-2.658.479-.472.928-.923 1.378-1.375.45-.45.893-.9 1.368-1.365A3.936 3.936 0 0 1 9.638 8.59a3.968 3.968 0 0 1 2.24.258c.27-.269.546-.54.812-.806l.131-.13a5.086 5.086 0 0 0-3.182-.624A5.052 5.052 0 0 0 6.732 8.71c-.48.471-.929.922-1.377 1.373-.449.451-.894.9-1.37 1.366A4.982 4.982 0 0 0 2.5 14.992c0 1.328.534 2.602 1.486 3.543A5.13 5.13 0 0 0 7.58 20a5.13 5.13 0 0 0 3.595-1.465c.478-.471.927-.923 1.377-1.374.451-.451.894-.9 1.368-1.366a4.993 4.993 0 0 0 1.263-2.071c.243-.781.288-1.61.132-2.412L14.11 12.5Z"></path>
                                                </svg>
                                                <div class="profile-info2">
                                                    <span>Copy link</span>
                                                </div>
                                            </div>
                                        </a> --}}

                                        <a href="#" onclick="copyCurrentLink()">
                                            <div class="profile-container2">
                                                <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="link-post-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.111 12.5a3.701 3.701 0 0 1-1.09 2.41c-.479.47-.928.922-1.378 1.373-.45.45-.894.9-1.368 1.366a3.852 3.852 0 0 1-2.698 1.099 3.852 3.852 0 0 1-2.698-1.099 3.738 3.738 0 0 1-1.116-2.659c0-.997.402-1.953 1.116-2.658.479-.472.928-.923 1.378-1.375.45-.45.893-.9 1.368-1.365A3.936 3.936 0 0 1 9.638 8.59a3.968 3.968 0 0 1 2.24.258c.27-.269.546-.54.812-.806l.131-.13a5.086 5.086 0 0 0-3.182-.624A5.052 5.052 0 0 0 6.732 8.71c-.48.471-.929.922-1.377 1.373-.449.451-.894.9-1.37 1.366A4.982 4.982 0 0 0 2.5 14.992c0 1.328.534 2.602 1.486 3.543A5.13 5.13 0 0 0 7.58 20a5.13 5.13 0 0 0 3.595-1.465c.478-.471.927-.923 1.377-1.374.451-.451.894-.9 1.368-1.366a4.993 4.993 0 0 0 1.263-2.071c.243-.781.288-1.61.132-2.412L14.11 12.5Z"></path><path d="M16.017 1.467A5.123 5.123 0 0 0 12.422 0a5.123 5.123 0 0 0-3.595 1.467c-.478.471-.926.923-1.377 1.374-.45.451-.894.9-1.367 1.366a4.966 4.966 0 0 0-1.106 1.624 4.907 4.907 0 0 0-.291 2.86l1.2-1.19a3.699 3.699 0 0 1 1.092-2.41c.478-.472.928-.923 1.377-1.374.45-.45.894-.9 1.368-1.366a3.844 3.844 0 0 1 2.698-1.101c1.012 0 1.982.396 2.698 1.101a3.736 3.736 0 0 1 1.116 2.66c0 .996-.401 1.953-1.116 2.658-.478.471-.927.922-1.377 1.373-.45.451-.893.9-1.368 1.367a3.933 3.933 0 0 1-2.014 1.003 3.966 3.966 0 0 1-2.24-.26c-.273.274-.551.549-.818.818l-.123.12a5.087 5.087 0 0 0 3.183.624 5.053 5.053 0 0 0 2.906-1.423c.477-.472.926-.923 1.376-1.375.45-.452.894-.9 1.368-1.365A4.977 4.977 0 0 0 17.5 5.008a4.977 4.977 0 0 0-1.488-3.543l.005.002Z"></path>
                                                </svg>
                                                <div class="profile-info2">
                                                    <span>Copy link</span>
                                                </div>
                                            </div>
                                        </a>
                                
                                        <a href="#">
                                            <div class="profile-container2">
                                                <svg rpl="" class="mt-[1px] ml-[4px]" fill="currentColor" height="20" icon-name="crosspost-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m15.944 11.926-.888.879 1.925 1.945H12A4.873 4.873 0 0 1 7.138 10 4.873 4.873 0 0 1 12 5.25h4.971l-1.915 1.936.888.878L18.875 5.1a.727.727 0 0 0-.007-1.025l-2.929-2.9-.878.888L17.011 4H12a6.128 6.128 0 0 0-6.056 5.25H1v1.625h4.981A6.117 6.117 0 0 0 12 16h5l-1.94 1.92.878.89 2.929-2.9a.726.726 0 0 0 .006-1.025l-2.929-2.96Z"></path>
                                                </svg>
                                                <div class="profile-info2">
                                                    <span>Crosspost</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>   

                        </div> 

                    @endif 
                @endforeach


            </div>

            <div class="identifier-body" id="identifier-body-save">
                    <div class="not-found">
                        <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                        <h3>Looks like you haven't saved anything yet</h3>
                    </div>
            </div>

            <div class="identifier-body" id="identifier-body-upvoted">

                <div class="not-found">
                    <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                    <h3>Looks like you haven't upvoted anything yet</h3>
                </div>

            </div>

            <div class="identifier-body" id="identifier-body-downvoted">

                <div class="not-found">
                    <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                    <h3>Looks like you haven't downvoted anything yet</h3>
                </div>

            </div>


            


        </main>
        

        <!-- 
         - SECTION RIGHTBAR
        -->


        <div class="rightbar">
            <div class="profile-overview">
                {{-- <img src="/Images/profile bg.jpg" alt="User Profile Picture"> --}}
                @if($user->cover_img)
                    <img src="{{ asset('storage/' . $user->cover_img) }}" alt="Cover Picture">
                @else
                    <img src="https://img.pikbest.com/wp/202344/brick-wall-texture-background-of-a-dimly-lit-street-at-night-with-and-subtle-overhead-light_9936171.jpg!w700wp" alt="Default Cover Picture">
                @endif
                <div class="profile-info">
                    {{-- <h3 class="name">Adhip Halder</h3> --}}
                    <h3 class="name">{{ session('user')->name }}</h3>

                    {{-- <p class="profile-bio">Those Who Don't Appreciate Life Do Not Deserve Life</p> --}}
                    <p class="profile-bio"> {{ $user->bio ?? ' '  }}</p>

                    <div class="share-link-container">
                        <button href="#" class="share2" onclick="toggleShareModal()"> <i class="fa-solid fa-share"></i> <span>Share</span></button>
                    </div>
                    
                    <div id="shareModal" class="modal">
                        <div class="modal-content">
                            <span class="close-btn" onclick="toggleShareModal()">&times;</span>
                            <h3>Share Options</h3>
                            <div class="share-options">
                                <a href="mailto:?subject=Check%20out%20this%20profile&body=https://example.com/userprofile" target="_blank">Email</a>
                                <a href="https://api.whatsapp.com/send?text=https://example.com/userprofile" target="_blank">WhatsApp</a>
                                <a href="https://twitter.com/intent/tweet?url=https://example.com/userprofile" target="_blank">Twitter</a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://example.com/userprofile" target="_blank">Facebook</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="profile-stats">
                <h3 class="stats">PROFILE STATS</h3>
                <div>
                    <span>Karma</span>
                    <span>1.2k</span>
                </div>
                <div>
                    <span>Followers</span>
                    <span>300</span>
                </div>
                <div>
                    <span>Posts</span>
                    <span>50</span>
                </div>
                <div>
                    <span>Comments</span>
                    <span>120</span>
                </div>
            </div>

            <div class="section">
                <h3>SETTINGS</h3>
                <div class="section-item">
                    <div class="settings-img">
                        {{-- <img src="https://styles.redditmedia.com/t5_4imbec/styles/profileIcon_asf6w9eqj1d91.jpeg?width=256&amp;height=256&amp;frame=1&amp;auto=webp&amp;crop=256:256,smart&amp;s=3bf3f696edafbc8d35a5bcda5ecb2b61e01db7f0" alt=""> --}}
                        @if($user->profile_pic)
                            <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture">
                        @else
                            <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                        @endif
                        {{-- <p class="settings-img-p" style="margin-top: 0px;">Adhip Halder</p> --}}
                        <p class="settings-img-p" style="margin-top: 0px;">{{ session('user')->name ?? '' }}</p>
                    </div>
                    <a href="/editprofile">
                        <p>Edit</p>
                    </a>
                </div>

            </div>
        </div>

        <script src="{{asset('js/profile.js')}}"></script>
    </body>
</html> 