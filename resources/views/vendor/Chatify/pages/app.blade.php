@include('components.sidebar')
@include('Chatify::layouts.headLinks')
<div style="margin-left: 80px;">
    <div class="messenger">


        {{-- ----------------------Messaging side---------------------- --}}
        <div class="messenger-messagingView">
            {{-- header title [conversation name] amd buttons --}}
            <div class="m-header m-header-messaging" style="background-color: #D9D9D9;">
                <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                    {{-- header back button, avatar and user name --}}
                    <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center" >
                        <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                        <div class="avatar av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                        </div>
                        <a href="#" class="user-name">{{ config('chatify.name') }}</a>
                    </div>
                </nav>
                {{-- Internet connection --}}
                <div class="internet-connection">
                    <span class="ic-connected">Connected</span>
                    <span class="ic-connecting">Connecting...</span>
                    <span class="ic-noInternet">No internet access</span>
                </div>
            </div>

            {{-- Messaging area --}}
            <div class="m-body messages-container app-scroll" >
                <div class="messages">
                    <p class="message-hint center-el"><span>Please select a chat to start messaging</span></p>
                </div>
                {{-- Typing indicator --}}
                <div class="typing-indicator">
                    <div class="message-card typing">
                        <div class="message">
                            <span class="typing-dots">
                                <span class="dot dot-1"></span>
                                <span class="dot dot-2"></span>
                                <span class="dot dot-3"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Send Message Form --}}
            @include('Chatify::layouts.sendForm')
        </div>

        {{-- ---------------------- Info side ---------------------- --}}
        <div class="messenger-infoView app-scroll" style=" overflow-x: hidden; background-color: #F3E8F3;">
            {{-- nav actions --}}
            <nav>
                <p style="font-weight: 600;">User Details</p>
                <div class="nav-icons">
                    <a href="#"><i class="fas fa-times"></i></a>
                    <a href="#"><i class="fa-solid fa-circle-info"></i></a>
                </div>
            </nav>

            {!! view('Chatify::layouts.info')->with('id', $id)->render() !!}

        </div>
    </div>
</div>

@include('Chatify::layouts.modals')
@include('Chatify::layouts.footerLinks')
