<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .line {
            border-bottom: 2px solid #D9D9D9;
            padding-top: 5px;
            width: 100%;
        }

        .circle {
            width: 50px;
            height: 50px;
            border: 4px solid #EFBDEE;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .text {
            font-weight: bold;
            color: black;
            margin-left: 15px;
        }

        .friendSection {
            width: 100%;
        }

        .scroll {
            width: 100%;
            height: 35%;
            overflow: hidden;
            overflow-y: auto;
        }

        .scroll::-webkit-scrollbar {
            display: none;
        }

        .friend-row {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .friend-row .actions {
            margin-left: auto;
            display: flex;
            align-items: center;
        }

        h6 {
            font-size: 14px;
            margin: 0;
        }

        .text p {
            font-size: 12px;
            margin: 0;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <?php
        $user = Auth::user();
        $friends = $user->friends;
    ?>

{{-- user info and avatar --}}
<div class="avatar av-l chatify-d-flex">
    {{-- <img src="{{}}" alt=""> --}}
</div>
<p class="info-name">{{ config('chatify.name') }}</p>
<div class="line"></div>

{{-- user description --}}
<div class="about-me" style="position: relative; left: 4%; top: 0; text-align: left;">
    <p style="font-size: 15px; margin-bottom: 2%; width: 100%; font-weight: 700;">About Me</p>
    <p style="font-size: 14px; margin: 0; width: 90%; font-weight: 500;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, obcaecati at eos fugit qui incidunt deserunt eius laborum quas quibusdam veritatis!</p>
</div>

{{-- friend list --}}
<div class="about-me" style="position: relative; left: 4%; top: -1%; text-align: left;">
    <p style="font-size: 15px; margin-bottom: 2%; width: 100%; font-weight: 700;">Friends</p>
    <div class="friendSection">
        <div class="scroll">
            <!-- Profile Image Section -->
            {{-- @foreach ($friends as $friend)
            <?php
                // dd($friend->profile_pics);
            ?>
                <div class="friend-row">
                    <div class="circle">
                        <img src="{{$friend->profile_pics}}" alt="Profile Image">
                    </div>
                    <div class="text">
                        <h6 class="m-0">{{$friend->name}}</h6>
                        <p style="margin-top: 1%">Halo aku andrea jelek dan sarah cantik</p>
                    </div>
                    <div class="actions" style="margin-right: 10%">
                        <i class="fa-regular fa-comment-dots" style="color: #4ECB71; font-size: 25px; margin-left: 5px;"></i>
                    </div>
                </div>
            @endforeach --}}
{{-- ----------------------Users/Groups lists side---------------------- --}}
        <div class="messenger-listView {{ !!$id ? 'conversation-active' : '' }}">
            {{-- Header and search bar --}}
            <div class="m-header">
                <nav>
                    <a href="#"><i class="fas fa-inbox"></i> <span class="messenger-headTitle">MESSAGES</span> </a>
                    {{-- header buttons --}}
                    <nav class="m-header-right">
                        <a href="#"><i class="fas fa-cog settings-btn"></i></a>
                        <a href="#" class="listView-x"><i class="fas fa-times"></i></a>
                    </nav>
                </nav>
                {{-- Search input --}}
                <input type="text" class="messenger-search" placeholder="Search" />
                {{-- Tabs --}}
                {{-- <div class="messenger-listView-tabs">
                    <a href="#" class="active-tab" data-view="users">
                        <span class="far fa-user"></span> Contacts</a>
                </div> --}}
            </div>
            {{-- tabs and lists --}}
            <div class="m-body contacts-container">
            {{-- Lists [Users/Group] --}}
            {{-- ---------------- [ User Tab ] ---------------- --}}
            <div class="show messenger-tab users-tab app-scroll" data-view="users">
                {{-- Favorites --}}
                <div class="favorites-section">
                    <p class="messenger-title"><span>Favorites</span></p>
                    <div class="messenger-favorites app-scroll-hidden"></div>
                </div>
                {{-- Saved Messages --}}
                <p class="messenger-title"><span>Your Space</span></p>
                {!! view('Chatify::layouts.listItem', ['get' => 'saved']) !!}
                {{-- Contact --}}
                <p class="messenger-title"><span>All Messages</span></p>
                <div class="listOfContacts" style="width: 100%;height: calc(100% - 272px);position: relative;"></div>
            </div>
                {{-- ---------------- [ Search Tab ] ---------------- --}}
            <div class="messenger-tab search-tab app-scroll" data-view="search">
                    {{-- items --}}
                    <p class="messenger-title"><span>Search</span></p>
                    <div class="search-records">
                        <p class="message-hint center-el"><span>Type to search..</span></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

</body>
</html>
