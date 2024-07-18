<link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn menu-logo" type="button">
            <i class="material-symbols-outlined mr-10">
                menu
            </i>
        </button>
        <div class="sidebar-logo">
            <a href="{{ route('home') }}">POV.it</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item" title="Profile">
            <a href="#" class="sidebar-link flex-column d-flex justify-content-center" style="padding: .425rem 1.025rem;">
                <div class="d-flex flex-row align-items-center">
                    <img src="{{asset('user_profile/'.auth()->user()->profile_pics)}}" class="user-img" id="image_preview">
                    <h5 class="ms-2">Profile</h5>
                </div>
                <div class="profileDetail w-100 mt-2">
                    <div class="mb-3 mt-1 ">
                        <form action="{{ route('update.profile') }}" method="POST" enctype="multipart/form-data" id="profileForm" >
                            @csrf
                            <input type="file" name="profile_pics" id="profile_pics" class="form-control d-none">
                            <button type="button" class="btn btn-light btn-sm edit-profile-pic">Edit Picture</button>
                            <button type="submit" class="d-none" id="hiddenSubmitButton"></button>
                        </form>
                    </div>
                    <div class="mb-3">
                        <span class="form-label" style="font-size: 0.7rem;">Username</span>
                        <form action="{{ route('update.username') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex">
                                <input type="text" class="form-control" id="username_input" name="username" value="{{auth()->user()->name}}"disabled>
                                <button type="button" class="btn" id="edit-username-btn">
                                    <i class="material-symbols-outlined">
                                        edit_square
                                    </i>
                                </button>
                                <button type="submit" class="d-none" id="submitChangeUsr"></button>
                            </div>
                        </form>
                    </div>
                    <div class="mb-1">
                        <span class="form-label" style="font-size: 0.7rem;">Profile Description</span>
                        <form action="{{ route('update.profile.desc') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex ">
                                <input type="text" class="form-control" id="desc_input" name="profile_desc" value="{{ auth()->user()->profile_desc }}" disabled>
                                <button type="button" class="btn" id="edit-desc-btn">
                                    <i class="material-symbols-outlined">
                                        edit_square
                                    </i>
                                </button>
                                 <button type="submit" class="d-none" id="submitChangeDesc"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <li class="sidebar-item" title="Home">
            <a href="{{ route('home') }}" class="sidebar-link d-flex align-items-center">
                <i class="material-symbols-outlined">
                    home
                </i>
                <h6>Home</h6>
            </a>
        </li>

        <li class="sidebar-item" title="Chat">
            <a href="{{ route('Chat') }}" class="sidebar-link d-flex align-items-center">
                <i class="material-symbols-outlined">
                    chat
                </i>
                <h6>Chat</h6>
            </a>
        </li>

        <li class="sidebar-item" title="Close Friend">
            <a href="#" class="sidebar-link d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <i class="material-symbols-outlined">
                star
              </i>
              <h6>Close Friend</h6>
            </a>
        </li>

        <li class="sidebar-item" title="History">
            <a href="#" class="sidebar-link d-flex align-items-center">
                <i class="material-symbols-outlined">
                    photo_library
                </i>
                <h6>History</h6>
            </a>
        </li>
        <li class="sidebar-item"  title="Logout">
            <a href="{{ route('logout') }}" class="sidebar-link d-flex align-items-center">
                <i class="material-symbols-outlined">
                    logout
                </i>
                <h6>Logout</h6>
            </a>
        </li>
    </div>
</aside>
<!-- Overlay -->
<div id="overlay" class="overlay" style="display: none;"></div>
@include('main.closefriend')
<script src="{{ asset('js/sidebar.js') }}"></script>
<script src="{{ asset('js/profileUpdate.js') }}"></script>
