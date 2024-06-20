

<div class="WA_Chat_Widget" data-position="bottom-right">
    <div class="WA_ChatBox">
        <div class="WA_ChatBox_Header">
            <div class="avatarBox">
                <img src="cindy.png" alt="Profile picture">
            </div>
            <div class="infoBox">
                <h4 class="name">Islamic University of Kenya</h4>
                <span class="answer_time">Typically replies within a second</span>
            </div>
            <button class="WA_Close">
        </div>
        <div class="WA_ChatBox_Body">
            <div class="message">
                <h4 class="username">Bot Cindy</h4>
                <div class="message_content">
                    <p>Hey There am Cindy, How can I help you? start chat to connect to IUK  agent</p>
                </div>
            </div>
        </div>
        <div class="WA_ChatBox_Footer">
            <a class="btn btn-whatsapp" href="http://wa.me/254707267957?text=Hi%20am%20interested%20to%20I%20know%20more%20about%20IUK" target="_blank">Start Chat</a>
        </div>
        <p>Powered by <a href="http://wa.me/254711888037?text=Hi%20Medolist Studio,%20I%20need%20whatsapp%20chatbot">Medolist Studio</a></p>
    </div>
    <div class="WA_FloatingButton">
        <svg xmlns="http://www.w3.org/2000/svg" fill="#4FCE5D" viewBox="0 0 90 90">
            <path
                d="M90 43.841c0 24.213-19.779 43.841-44.182 43.841a44.256 44.256 0 01-21.357-5.455L0 90l7.975-23.522a43.38 43.38 0 01-6.34-22.637C1.635 19.628 21.416 0 45.818 0 70.223 0 90 19.628 90 43.841zM45.818 6.982c-20.484 0-37.146 16.535-37.146 36.859 0 8.065 2.629 15.534 7.076 21.61L11.107 79.14l14.275-4.537A37.122 37.122 0 0045.819 80.7c20.481 0 37.146-16.533 37.146-36.857S66.301 6.982 45.818 6.982zm22.311 46.956c-.273-.447-.994-.717-2.076-1.254-1.084-.537-6.41-3.138-7.4-3.495-.993-.358-1.717-.538-2.438.537-.721 1.076-2.797 3.495-3.43 4.212-.632.719-1.263.809-2.347.271-1.082-.537-4.571-1.673-8.708-5.333-3.219-2.848-5.393-6.364-6.025-7.441-.631-1.075-.066-1.656.475-2.191.488-.482 1.084-1.255 1.625-1.882.543-.628.723-1.075 1.082-1.793.363-.717.182-1.344-.09-1.883-.27-.537-2.438-5.825-3.34-7.977-.902-2.15-1.803-1.792-2.436-1.792-.631 0-1.354-.09-2.076-.09s-1.896.269-2.889 1.344c-.992 1.076-3.789 3.676-3.789 8.963 0 5.288 3.879 10.397 4.422 11.113.541.716 7.49 11.92 18.5 16.223C58.2 65.771 58.2 64.336 60.186 64.156c1.984-.179 6.406-2.599 7.312-5.107.9-2.512.9-4.663.631-5.111z">
            </path>
        </svg>
    </div>
</div>

<style>
@import url(https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic);

.WA_Chat_Widget * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

.WA_Chat_Widget .WA_FloatingButton {
    position: fixed;
    width: 70px;
    height: 70px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 4px 10px 0px rgba(0, 0, 0, 0.185);
    border-radius: 50%;
    background: #fff;
    cursor: pointer;
    margin-bottom: -12px;
    margin-left: 140px;
    z-index: 1000;
}

.WA_Chat_Widget .WA_FloatingButton svg {
    width: 40px;
    height: 40px;
    fill: #4fce5d;
}

.WA_Chat_Widget[data-position^="top-"] .WA_FloatingButton {
    top: 20px;
}

.WA_Chat_Widget[data-position^="bottom-"] .WA_FloatingButton {
    bottom: 20px;
}

.WA_Chat_Widget[data-position$="-left"] .WA_FloatingButton {
    left: 20px;
}

.WA_Chat_Widget[data-position$="-right"] .WA_FloatingButton {
    right: 20px;
}

.WA_Chat_Widget[data-position$="-center"] .WA_FloatingButton {
    left: 50%;
    transform: translateX(-50%);
}

.WA_Chat_Widget[data-position^="top-"] .WA_ChatBox {
    top: 110px;
}

.WA_Chat_Widget[data-position^="bottom-"] .WA_ChatBox {
    bottom: 110px;
}

.WA_Chat_Widget[data-position$="-left"] .WA_ChatBox {
    left: 30px;
}

.WA_Chat_Widget[data-position$="-right"] .WA_ChatBox {
    right: 30px;
}

.WA_Chat_Widget[data-position$="-center"] .WA_ChatBox {
    left: 50%;
    transform: translateX(-50%);
}

.WA_Chat_Widget .WA_ChatBox {
    position: fixed;
    width: 360px;
    height: auto;
    overflow: hidden;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 5px 25px 0px rgba(0, 0, 0, 0.1);
    display: none;
    z-index: 9999; /* Adjusted z-index value to ensure it covers photos */
}

.WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Header {
    width: auto;
    background: #095e54;
    padding: 20px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}

.WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Header .avatarBox {
    width: 65px;
    height: 65px;
    border-radius: 50%;
    overflow: hidden;
}

.WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Header .avatarBox img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Header .infoBox .name {
    color: #fff;
    font-weight: 600;
}

.WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Header .infoBox .answer_time {
    color: #e4e4e4;
    font-size: 14px;
}

.WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Header .WA_Close {
    background: transparent;
    color: #fff;
    border: none;
    outline: none;
    font-size: 20px;
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

.WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Header .WA_Close svg {
    fill: #ffff;
}

.WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Body {
    padding: 20px;
    background: #e6ddd4;
    position: relative;
}

.WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Body::before {
    content: '';
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background: url(./bg-pattern.png);
    opacity: 0.1;
    z-index: 0;
}

.WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Body .message {
    max-width: 280px;
    background: #fff;
    padding: 20px;
    padding-top: 10px;
    border-radius: 8px;
    z-index: 1;
    position: relative;
}

.WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Body .message::before {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    background: #fff;
    left: -10px;
    top: 0px;
    border-radius: 3px;
    clip-path: polygon(100% 0, 0 0, 100% 100%);
}

.WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Body .message .username {
    color: darkgray;
    font-weight: 500;
}

.WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Body .message .message_content {
    font-size: 14px;
    color: #000;
}

.WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Footer {
    padding: 20px;
    background-color: #fff;
    width: 100%;
}

.WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Footer .btn {
    width: 100%;
    outline: none;
    border: none;
    padding: 10px;
    border-radius: 1000px;
    font-size: 16px;
    cursor: pointer;
    text-decoration: none;
}

.WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Footer .btn.btn-whatsapp {
    background: #095e54;
    color: #fff;
    display: block;
    text-align: center;
}

@media (max-width: 767px) {
    .WA_Chat_Widget .WA_FloatingButton {
        width: 900px;
        height: 600px;
        margin-left: 0;
    }

    .WA_Chat_Widget .WA_FloatingButton svg {
        width: 300px;
        height: 300px;
    }

    .WA_Chat_Widget .WA_ChatBox {
        width: 90%;
        left: 5%;
        transform: none;
        bottom: 80px;
    }

    .WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Header {
        padding: 15px;
    }

    .WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Header .avatarBox {
        width: 50px;
        height: 50px;
    }

    .WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Body {
        padding: 15px;
    }

    .WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Body .message {
        max-width: 100%;
    }

    .WA_Chat_Widget .WA_ChatBox .WA_ChatBox_Footer {
        padding: 15px;
    }
}

p {
    font-family: Arial, sans-serif;
    font-size: 14px;
}

a {
    color: #007BFF; /* Link color */
    text-decoration: none; /* Removes underline */
}

a:hover {
    text-decoration: underline; /* Underline on hover */
}

</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    let isChatboxVisible = false;
    const chatbox = document.querySelector(".WA_Chat_Widget .WA_ChatBox");
    const floatingButton = document.querySelector(".WA_FloatingButton");
    const closeButton = document.querySelector(".WA_Close");

    console.log('DOMContentLoaded event fired');
    console.log('chatbox:', chatbox);
    console.log('floatingButton:', floatingButton);
    console.log('closeButton:', closeButton);

    floatingButton.addEventListener("click", function() {
        isChatboxVisible = !isChatboxVisible;
        chatbox.style.display = isChatboxVisible ? "block" : "none";
        console.log('Floating button clicked. Chatbox visible:', isChatboxVisible);
    });

    closeButton.addEventListener("click", function() {
        isChatboxVisible = false;
        chatbox.style.display = "none";
        console.log('Close button clicked. Chatbox visible:', isChatboxVisible);
    });
});
</script>
