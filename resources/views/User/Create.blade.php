<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/create.css')}}">
        <link rel="shortcut icon" href="{{asset('/Pictures/inkspire.png')}}" type="image/svg+xml">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Create Post</title>

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
            
                <button href="#" class="create"><i class="fa-solid fa-plus"></i> <span>Create</span></button>
            
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
                    <label class="for-dropdown3" for="dropdown3"><button class="dropdown3-click-button"><i class="fa-solid fa-user"></i></button></label> 
                    <p class="dropdown3-floating-message">Open profile menu</p>

                    <div class="section-dropdown3"> 

                        <div class="section-dropdown3-profile">
                            <img src="https://www.redditstatic.com/avatars/defaults/v2/avatar_default_0.png" alt="">
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

                    @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
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

             <div class="create-post">

                <a href="/createcommunity">
                    <button class="create-community-button"><i class="fa-solid fa-plus"></i> <span style="color: white">Create Community</span></button>
                </a>

                <div class="create-post-header">
                    <h3>Create Post</h3>
                </div>

                <div class="create-post-community">

                    <button class="create-post-community-button" id="create-post-community-button" onclick="toggleSearchBar(event)">
                        <div class="create-post-community-button-svg">
                            <svg rpl="" aria-hidden="true" fill="currentColor" height="16" icon-name="search-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.5 18.616 14.985 14.1a8.528 8.528 0 1 0-.884.884l4.515 4.515.884-.884ZM1.301 8.553a7.253 7.253 0 1 1 7.252 7.253 7.261 7.261 0 0 1-7.252-7.253Z"></path>
                            </svg>
                            <span>Search</span>
                        </div>

                        <img src="/Pictures/down-arrow.svg" class="create-post-community-button-img" alt="">

                    </button>

                    <div id="create-post-community-search-bar" class="hidden">
                        <input type="text" id="post-community-search-input" placeholder="Search...">
                    </div>

                    <div class="create-post-community-community-bar hidden" id="create-post-community-community-bar">

                        {{-- <div class="create-post-community-community-bar-community">

                            <h3>Your Profile</h3>

                            <p class="create-post-community-community-bar-community-para"  onclick="selectCommunity('r/adhiphalder')">
                                <img src="https://styles.redditmedia.com/t5_4imbec/styles/profileIcon_asf6w9eqj1d91.jpeg?width=128&height=128&frame=1&auto=webp&crop=128:128,smart&s=7ee7532de7781e287649c54d67a8f82e35530bdf" alt="">
                                <span>r/adhiphalder</span>
                            </p>

                            <h3>Your Community</h3>

                            <p class="create-post-community-community-bar-community-para"  onclick="selectCommunity('r/IndianStockMarket')">
                                <img src="https://styles.redditmedia.com/t5_30ke2/styles/communityIcon_7s1ojp85ocj61.png" alt="">
                                <span>r/IndianStockMarket</span>
                            </p>
                            <p class="create-post-community-community-bar-community-para" onclick="selectCommunity('r/bangalore')">
                                <img src="https://styles.redditmedia.com/t5_2qhvf/styles/communityIcon_pulpp8crshh91.png" alt="">
                                <span>r/bangalore</span>
                            </p>
                            <p class="create-post-community-community-bar-community-para" onclick="selectCommunity('r/BollyBlindsNGossip')">
                                <img src="https://styles.redditmedia.com/t5_fknyy/styles/communityIcon_z40tlzmvbyw91.png" alt="">
                                <span>r/BollyBlindsNGossip</span>
                            </p>
                            <p class="create-post-community-community-bar-community-para" onclick="selectCommunity('r/AskIndia')">
                                <img src="https://styles.redditmedia.com/t5_2s8wu/styles/communityIcon_f0eqjg7jiyja1.JPG" alt="">
                                <span>r/AskIndia</span>
                            </p>
                            <p class="create-post-community-community-bar-community-para"  onclick="selectCommunity('r/IndianStockMarket')">
                                <img src="https://styles.redditmedia.com/t5_30ke2/styles/communityIcon_7s1ojp85ocj61.png" alt="">
                                <span>r/IndianStockMarket</span>
                            </p>
                            <p class="create-post-community-community-bar-community-para" onclick="selectCommunity('r/BollyBlindsNGossip')">
                                <img src="https://styles.redditmedia.com/t5_fknyy/styles/communityIcon_z40tlzmvbyw91.png" alt="">
                                <span>r/BollyBlindsNGossip</span>
                            </p>
                            <p class="create-post-community-community-bar-community-para" onclick="selectCommunity('r/bangalore')">
                                <img src="https://styles.redditmedia.com/t5_2qhvf/styles/communityIcon_pulpp8crshh91.png" alt="">
                                <span>r/bangalore</span>
                            </p>

                        </div> --}}

                        @php
                            $user = \App\Models\User::find(session('user_id')); 
                            $communities = \App\Models\Communities::where('user_id', session('user_id'))->get();
                        @endphp

                        <div class="create-post-community-community-bar-community">
                            <h3>Your Profile</h3>

                            {{-- @if ($user)
                                <p class="create-post-community-community-bar-community-para" onclick="selectCommunity('r/{{ $user->user_name }}')">
                                    <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="{{ $user->user_name }}">
                                    <span>r/{{ $user->user_name }}</span>
                                </p>
                            @endif --}}

                            <p class="create-post-community-community-bar-community-para" onclick="selectCommunity('r/{{ $user->user_name }}')">
                                @if (!empty($user->profile_pic))
                                    <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="{{ $user->user_name }}">
                                @else
                                    <div class="profile-img2">
                                        <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Profile">
                                    </div>
                                @endif
                                <span>r/{{ $user->user_name }}</span>
                            </p>

                            <h3>Your Community</h3>

                            @if ($communities->isNotEmpty())
                                @foreach ($communities as $community)
                                    {{-- <p class="create-post-community-community-bar-community-para" onclick="selectCommunity('r/{{ $community->community_name }}')"> --}}
                                        <div class="profile-img2">
                                            @if (!empty($community->community_pic))
                                                <img class="profile-img2-img"  src="{{ asset('storage/' . $community->community_pic) }}" alt="{{ $community->community_name }}">
                                                <span>r/{{ $community->community_name }}</span>
                                            @else
                                                <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Profile">
                                            @endif
                                        </div>
                                    {{-- </p> --}}
                                @endforeach
                            @else
                                {{-- <p class="create-post-community-community-bar-community-para"> --}}
                                    <div class="profile-img3">
                                        <img class="profile-img2-img" style="width: 33px" src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                                        <span style="font-size: 12px; color: rgb(198, 198, 198);">You have No Community Yet</span>
                                    </div>
                                {{-- </p> --}}
                            @endif


                        </div>

                    </div>
                    
                </div>

                <div class="create-post-form">
                    {{-- <form action="" method="get">
                        <div class="form-one">
                            <label for="create-post-title">Title<span class="required-star">*</span></label>
                            <input type="text" name="" id="create-post-title" class="create-post-title" style="margin-left: 0px;" placeholder="" required>
                        </div>
                        <div class="form-two">
                            <textarea name="" id="" class="create-post-body" required placeholder="Body"></textarea>
                        </div>
                        <div class="form-three">
                            <input type="file" class="" id="create-post-form-img" style="display: none;" accept="image/*">
                            <label class="create-post-form-img-lable" for="create-post-form-img">
                                <span id="upload-label">Upload Image</span>
                                <svg rpl="" fill="currentColor" height="16" icon-name="upload-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m10.513 5.63 3.929 3.928-.884.884-2.933-2.933V19h-1.25V7.51l-2.933 2.932-.884-.884L9.67 5.446l.589-.029.254.212Zm5.859-1.482A6.876 6.876 0 0 0 10 0a6.876 6.876 0 0 0-6.372 4.148A4.639 4.639 0 0 0 0 8.625a4.716 4.716 0 0 0 4.792 4.625V12A3.465 3.465 0 0 1 1.25 8.625 3.412 3.412 0 0 1 4.189 5.31l.364-.06.123-.35A5.607 5.607 0 0 1 10 1.25a5.607 5.607 0 0 1 5.324 3.65l.123.348.364.06a3.412 3.412 0 0 1 2.939 3.317A3.465 3.465 0 0 1 15.208 12v1.25A4.716 4.716 0 0 0 20 8.625a4.639 4.639 0 0 0-3.628-4.477Z"></path>
                                </svg>
                            </label>
                            <div id="image-preview"></div>
                        </div>
                        <div class="form-four">
                            <button class="form-four-button" type="submit">Post</button>
                        </div>
                    </form> --}}

                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-one">
                            <label for="create-post-title">Title<span class="required-star">*</span></label>
                            <input type="text" name="post_caption" id="create-post-title" class="create-post-title" style="margin-left: 0px;" placeholder="" required>
                        </div>
                        <div class="form-two">
                            <textarea name="post_desc" id="" class="create-post-body" placeholder="Body"></textarea>
                        </div>
                        <div class="form-three">
                            <input type="file" name="post_img" class="" id="create-post-form-img" style="display: none;" accept="image/*">
                            <label class="create-post-form-img-lable" for="create-post-form-img">
                                <span id="upload-label">Upload Image</span>
                                <svg rpl="" fill="currentColor" height="16" icon-name="upload-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m10.513 5.63 3.929 3.928-.884.884-2.933-2.933V19h-1.25V7.51l-2.933 2.932-.884-.884L9.67 5.446l.589-.029.254.212Zm5.859-1.482A6.876 6.876 0 0 0 10 0a6.876 6.876 0 0 0-6.372 4.148A4.639 4.639 0 0 0 0 8.625a4.716 4.716 0 0 0 4.792 4.625V12A3.465 3.465 0 0 1 1.25 8.625 3.412 3.412 0 0 1 4.189 5.31l.364-.06.123-.35A5.607 5.607 0 0 1 10 1.25a5.607 5.607 0 0 1 5.324 3.65l.123.348.364.06a3.412 3.412 0 0 1 2.939 3.317A3.465 3.465 0 0 1 15.208 12v1.25A4.716 4.716 0 0 0 20 8.625a4.639 4.639 0 0 0-3.628-4.477Z"></path>
                                </svg>
                            </label>
                            <div id="image-preview"></div>
                        </div>
                        <div class="form-four">
                            <button class="form-four-button" type="submit">Post</button>
                        </div>
                    </form>
                    
                </div>
                
            </div>
         </main>



        <script src="{{asset('js/create.js')}}"></script>
    </body>
</html> 