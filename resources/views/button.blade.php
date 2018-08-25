<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="UTF-8">
<title>Send Button Widget</title>
<meta name="robots" content="none">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
<!-- <link type="text/css" rel="stylesheet" href="{{ asset('/css/sweetalert.css') }}"> -->
<!-- <link type="text/css" rel="stylesheet" href="{{ asset('/css/whatshelp-font.css') }}" media="all" onload="if(media!='all')media='all'"> -->
<style type="text/css">

 .callback-countdown-block::before, .messangers-block::before {
   right: 21px;
}
 .callback-countdown-block::before {
   position: absolute;
   bottom: -7px;
   right: 25px;
   left: auto;
   display: inline-block !important;
   border-right: 8px solid transparent;
   border-top: 8px solid #FFF;
   border-left: 8px solid transparent;
   content: '';
}
 .callback-countdown-block, .messangers-block {
   bottom: 70px;
}
 .callback-countdown-block {
   background: center no-repeat #FFF;
   box-shadow: 0 0 10px rgba(0,0,0,.6);
   width: 410px;
   height: 150px;
   position: absolute;
   bottom: 80px;
   left: auto;
   right: 64px;
   -webkit-box-orient: vertical;
   -webkit-box-direction: normal;
   -ms-flex-direction: column;
   flex-direction: column;
   -webkit-box-align: center;
   -ms-flex-align: center;
   align-items: center;
   -webkit-box-sizing: border-box;
   box-sizing: border-box;
   border-radius: 7px;
   -webkit-transform-origin: 80% 105%;
   -ms-transform-origin: 80% 105%;
   transform-origin: 80% 105%;
   -webkit-transform: scale(1);
   -ms-transform: scale(1);
   transform: scale(1);
   -webkit-transition: ease-out .12s all;
   -o-transition: ease-out .12s all;
   transition: ease-out .12s all;
   z-index: 10000;
   color: red;
   padding-top: 5px;
   padding-left: 8px;
   padding-right: 19px;
   display: none;
}
 .callback-countdown-block .callback-countdown-block-close {
   position: absolute;
   top: 9px;
   right: 9px;
   cursor: pointer;
   z-index: 1;
}

 .callback-countdown-block .callback-countdown-block-phone::before {
   transition: .2s all;
}
 .callback-countdown-block .callback-countdown-block-phone {
   font-family: Arial,sans-serif;
   font-size: 14px;
   line-height: 16px;
   padding-left: 10px;
   padding-right: 10px;
   -webkit-box-orient: vertical;
   -webkit-box-direction: normal;
   -ms-flex-direction: column;
   flex-direction: column;
   -webkit-box-align: center;
   -ms-flex-align: center;
   align-items: center;
   -webkit-box-pack: center;
   -ms-flex-pack: center;
   justify-content: center;
   height: 140px;
   display: none;
   position: relative;
}
#whatsapp_popup {
   width: 40%;
   float: right;
   height: 369px;
   margin-top: 500px;
   margin-right: -260px;
   display: none;
}
.panel-primary > .panel-heading {
   color: #fff;
   background-color: green;
   border-color: green;
}
.panel-body {
   padding: 50px;
}
#accordion span{
   padding: 4px;
   font-size: 34px;
}
#upper_textt {
   font-size: 24px;
}
#down_text_no {
   font-size: 33px;
   margin-left: 51px;
}
</style>
</head>
<body class="wh-widget-send-button-desktop">

<div class="at-expanding-share-button-desktop at-expanding-share-button addthis-smartlayers addthis-animated slideInRight" id="at-expanding-share-button" aria-labelledby="at-expanding-share-button-label" role="region" data-emotion="basic" data-position="bottom-right">
   <label id="at-expanding-share-button-label" class="at4-hide">AddThis Sharing</label>
   <ul class="at-expanding-share-button-services-list">
      <li class="wh-widget-button ">
         <a class="at-share-btn at-svc-messenger" data-name="Messenger" title="Share to Messenger" tabindex="8" role="button" href="#">
            <span class="at-icon-wrapper" style="background-color: rgb(0, 132, 255);">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-messenger-1" class="at-icon at-icon-messenger" title="Messenger" alt="Messenger">
                  <title id="at-svg-messenger-1">Messenger</title>
                  <g>
                     <path d="M16 6C9.925 6 5 10.56 5 16.185c0 3.205 1.6 6.065 4.1 7.932V28l3.745-2.056c1 .277 2.058.426 3.155.426 6.075 0 11-4.56 11-10.185C27 10.56 22.075 6 16 6zm1.093 13.716l-2.8-2.988-5.467 2.988 6.013-6.383 2.868 2.988 5.398-2.987-6.013 6.383z" fill-rule="evenodd"></path>
                  </g>
               </svg>
            </span>
            <div class=" mes-us">Facebook Messenger</div>
         </a>
      </li>
      <li class="wh-widget-button ">
         <a class="at-share-btn at-svc-lineme" data-name="LINE" title="Share to LINE" tabindex="7" role="button" href="#">
            <span class="at-icon-wrapper" style="background-color: rgb(0, 195, 0);">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-lineme-2" class="at-icon at-icon-lineme" title="LINE" alt="LINE">
                  <title id="at-svg-lineme-2">LINE</title>
                  <g>
                     <path d="M27 14.926C27 10.006 22.065 6 16 6S5 10.005 5 14.926c0 4.413 3.913 8.11 9.2 8.808.358.077.845.236.968.542.112.278.073.713.036.995l-.157.942c-.048.28-.22 1.088.953.593 1.174-.494 6.334-3.73 8.642-6.386C26.236 18.67 27 16.896 27 14.925zm-4.247-.41a.577.577 0 0 1 0 1.153h-1.61v1.03h1.61a.578.578 0 0 1 0 1.155h-2.186a.578.578 0 0 1-.577-.577v-4.37c0-.32.26-.578.577-.578h2.186a.578.578 0 0 1 0 1.153h-1.61v1.033h1.61zm-3.537 2.762a.575.575 0 0 1-.578.577.58.58 0 0 1-.46-.23l-2.24-3.05v2.703a.577.577 0 0 1-1.154 0v-4.37a.577.577 0 0 1 1.038-.347l2.24 3.05v-2.703a.578.578 0 0 1 1.154 0v4.37zm-5.26 0a.577.577 0 0 1-1.154 0v-4.37a.577.577 0 0 1 1.153 0v4.37zm-2.262.577H9.508a.577.577 0 0 1-.576-.577v-4.37a.577.577 0 0 1 1.153 0V16.7h1.61a.577.577 0 0 1 0 1.155z" fill-rule="evenodd"></path>
                  </g>
               </svg>
            </span>
            <div class="mes-us">Line</div>
         </a>
      </li>
      <li class="wh-widget-button " id="san_whtsapp">
         <a class="at-share-btn at-svc-whatsapp" data-name="WhatsApp" title="Share to WhatsApp" tabindex="6" role="button" href="#">
            <span class="at-icon-wrapper" style="background-color: rgb(77, 194, 71);">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-whatsapp-3" class="at-icon at-icon-whatsapp" title="WhatsApp" alt="WhatsApp">
                  <title id="at-svg-whatsapp-3">WhatsApp</title>
                  <g>
                     <path d="M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path>
                  </g>
               </svg>
            </span>
            <div class="mes-us">WhatsApp</div>
         </a>
      </li>
      <li class="wh-widget-button ">
         <a class="at-share-btn at-svc-slack" data-name="Slack" title="Share to Slack" tabindex="5" role="button" href="#">
            <span class="at-icon-wrapper" style="background-color: rgb(120, 212, 182);">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-slack-4" class="at-icon at-icon-slack" title="Slack" alt="Slack">
                  <title id="at-svg-slack-4">Slack</title>
                  <g>
                     <path d="M22.256 17.884l-1.426.477.494 1.476a1.14 1.14 0 1 1-2.162.724l-.494-1.475-2.94.984.494 1.474a1.14 1.14 0 0 1-2.162.725l-.494-1.476-1.426.477a1.14 1.14 0 0 1-.724-2.16l1.426-.48-.948-2.828-1.426.477a1.14 1.14 0 0 1-.724-2.164l1.425-.477-.495-1.476a1.14 1.14 0 0 1 2.163-.724l.494 1.475 2.94-.984-.495-1.474a1.14 1.14 0 0 1 2.163-.725l.494 1.476 1.426-.477a1.14 1.14 0 0 1 .724 2.16l-1.426.48.948 2.828 1.426-.477a1.14 1.14 0 1 1 .724 2.164zm-8.2-2.806l.948 2.83 2.94-.986-.948-2.83-2.94.986m12.023-2.102c-2.27-7.56-5.545-9.323-13.104-7.055-7.56 2.27-9.323 5.545-7.055 13.104 2.27 7.56 5.545 9.323 13.104 7.055 7.56-2.27 9.323-5.545 7.055-13.104z" fill-rule="evenodd"></path>
                  </g>
               </svg>
            </span>
            <div class="mes-us">Slack</div>
         </a>
      </li>
      <li class="wh-widget-button ">
         <a class="at-share-btn at-svc-telegram" data-name="Telegram" title="Share to Telegram" tabindex="4" role="button" href="#">
            <span class="at-icon-wrapper" style="background-color: rgb(0, 136, 204);">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-telegram-5" class="at-icon at-icon-telegram" title="Telegram" alt="Telegram">
                  <title id="at-svg-telegram-5">Telegram</title>
                  <g>
                     <g fill-rule="evenodd"></g>
                     <path d="M15.02 20.814l9.31-12.48L9.554 17.24l1.92 6.42c.225.63.114.88.767.88l.344-5.22 2.436 1.494z" opacity=".6"></path>
                     <path d="M12.24 24.54c.504 0 .727-.234 1.008-.51l2.687-2.655-3.35-2.054-.344 5.22z" opacity=".3"></path>
                     <path d="M12.583 19.322l8.12 6.095c.926.52 1.595.25 1.826-.874l3.304-15.825c.338-1.378-.517-2.003-1.403-1.594L5.024 14.727c-1.325.54-1.317 1.29-.24 1.625l4.98 1.58 11.53-7.39c.543-.336 1.043-.156.633.214"></path>
                  </g>
               </svg>
            </span>
            <div class="mes-us">Telegram</div>
         </a>
      </li>
      <li class="wh-widget-button ">
   <!--    <span class="skype-button bubble " data-contact-id="live:sandeep.digittrix"></span> -->
         <a class="at-share-btn at-svc-skype" data-name="Skype" title="Share to Skype" tabindex="3" role="button" href="#">
            <span class="at-icon-wrapper skype-button bubble" data-contact-id="digit.trix" style="background-color: rgb(0, 175, 240);">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-skype-6" class="at-icon at-icon-skype" title="Skype" alt="Skype">
                  <title id="at-svg-skype-6">Skype</title>
                  <g>
                     <path d="M22.453 19c0-.52-.1-.997-.305-1.43a3.438 3.438 0 0 0-.757-1.07 4.837 4.837 0 0 0-1.14-.766 8.692 8.692 0 0 0-1.29-.53 17.54 17.54 0 0 0-1.366-.36l-1.625-.375a49.96 49.96 0 0 1-.69-.165 5.017 5.017 0 0 1-.546-.18c-.218-.083-.375-.167-.468-.25a1.31 1.31 0 0 1-.258-.328.92.92 0 0 1-.117-.47c0-.8.75-1.202 2.25-1.202a3.6 3.6 0 0 1 1.204.188c.354.125.635.273.843.445.21.172.407.346.594.523.19.178.397.33.626.454.23.125.48.188.75.188.49 0 .883-.167 1.18-.5.297-.333.445-.734.445-1.203 0-.574-.29-1.092-.874-1.556-.583-.463-1.323-.815-2.218-1.055-.896-.24-1.844-.36-2.844-.36a8.73 8.73 0 0 0-2.063.242 7.19 7.19 0 0 0-1.866.735 3.782 3.782 0 0 0-1.39 1.36c-.35.577-.524 1.246-.524 2.007 0 .635.1 1.19.297 1.664.198.474.49.867.875 1.18.385.312.802.565 1.25.757a9.66 9.66 0 0 0 1.61.508l2.28.563c.938.23 1.52.416 1.75.562.334.208.5.52.5.938 0 .406-.208.742-.625 1.007-.416.266-.963.4-1.64.4-.53 0-1.008-.084-1.43-.25-.422-.168-.76-.368-1.015-.603a13 13 0 0 1-.71-.703 3.737 3.737 0 0 0-.72-.6 1.536 1.536 0 0 0-.844-.25c-.52 0-.914.155-1.18.467-.265.313-.398.703-.398 1.172 0 .96.635 1.78 1.906 2.46 1.27.683 2.787 1.025 4.547 1.025.76 0 1.49-.096 2.188-.288a7.115 7.115 0 0 0 1.915-.836 4.048 4.048 0 0 0 1.383-1.46c.343-.61.515-1.296.515-2.056zM28 22c0 1.656-.586 3.07-1.758 4.242C25.07 27.414 23.656 28 22 28a5.845 5.845 0 0 1-3.656-1.25c-.802.167-1.584.25-2.344.25-1.49 0-2.914-.29-4.273-.867-1.36-.578-2.532-1.36-3.516-2.344-.983-.985-1.765-2.157-2.343-3.517A10.81 10.81 0 0 1 5 16c0-.76.083-1.542.25-2.344A5.845 5.845 0 0 1 4 10c0-1.656.586-3.07 1.758-4.242C6.93 4.586 8.344 4 10 4c1.354 0 2.573.417 3.656 1.25C14.458 5.083 15.24 5 16 5c1.49 0 2.914.29 4.273.867 1.36.578 2.532 1.36 3.516 2.344.983.985 1.765 2.157 2.343 3.517A10.81 10.81 0 0 1 27 16c0 .76-.083 1.542-.25 2.344A5.845 5.845 0 0 1 28 22z" fill-rule="evenodd"></path>
                  </g>
               </svg>
            </span>
            <div class="mes-us">Skype</div>
         </a>
      </li>
      <li class="wh-widget-button">
         <a class="at-share-btn at-svc-email" data-name="Email" title="Share to Email" tabindex="2" role="button" href="#">
            <span class="at-icon-wrapper" style="background-color: rgb(132, 132, 132);">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-email-7" class="at-icon at-icon-email" title="Email" alt="Email">
                  <title id="at-svg-email-7">Email</title>
                  <g>
                     <g fill-rule="evenodd"></g>
                     <path d="M27 22.757c0 1.24-.988 2.243-2.19 2.243H7.19C5.98 25 5 23.994 5 22.757V13.67c0-.556.39-.773.855-.496l8.78 5.238c.782.467 1.95.467 2.73 0l8.78-5.238c.472-.28.855-.063.855.495v9.087z"></path>
                     <path d="M27 9.243C27 8.006 26.02 7 24.81 7H7.19C5.988 7 5 8.004 5 9.243v.465c0 .554.385 1.232.857 1.514l9.61 5.733c.267.16.8.16 1.067 0l9.61-5.733c.473-.283.856-.96.856-1.514v-.465z"></path>
                  </g>
               </svg>
            </span>
            <div class="mes-us">Email</div>
         </a>
      </li>
      <li class="wh-widget-button" id="line_response">
         <a class="at-share-btn at-svc-email" data-name="Email" title="Share to Email" tabindex="2" role="button" href="#">
            <span class="at-icon-wrapper" style="background-color:#4EB625">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="at-icon-call"><path fill="#fff" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg></span>
            <div class="mes-us">CallBack Request</div>
         </a>
      </li>
      
   </ul>
   <div class="at-expanding-share-button-toggle">
        <a class="wh-widget-button wh-widget-button-activator" href="javascript:void(0);">
           <div class=" wh-widget-button-icon wh-messenger-bg-activator" style="background-color:#E74339;">
              <div>
                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-9 -10 41 44" class="wh-messenger-svg-close wh-svg-close">
                    <path d=" M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill-rule="evenodd"></path>
                 </svg>
                 <i class="wh-icon-whatshelp wh-svg-icon"><b class="fa fa-comments-o"></b></i>
              </div>
           </div>
       
        </a>
   </div>
</div>
<!-- Callback Request Popuop -->
<div class="callback-countdown-block display-flex"  style="color: #008749;display: none;"><div class="callback-countdown-block-close"><svg width="12" height="13" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-4087 108)"><g id="Vector"><use xlink:href="#path0_fill" transform="translate(4087 -108)" fill="currentColor"></use></g></g><defs><path id="path0_fill" d="M 14 1.41L 12.59 0L 7 5.59L 1.41 0L 0 1.41L 5.59 7L 0 12.59L 1.41 14L 7 8.41L 12.59 14L 14 12.59L 8.41 7L 14 1.41Z"></path></defs></svg></div><div class="callback-countdown-block-phone display-flex"><p>Please enter your phone number<br>and we call you back soon</p><form action="https://wp496.areama.net/wp-admin/admin-ajax.php" method="POST"><div class="callback-countdown-block-form-group"><input name="action" type="hidden" value="arcontactus_request_callback"><input name="gtoken" class="ar-g-token" type="hidden" value=""><input name="phone" id="san_number" class="arcontactus-message-callback-phone" required="required" type="tel" value="" placeholder="+XXX-XX-XXX-XX-XX"><input id="arcontactus-message-callback-phone-submit" type="button" style="background-color: #008749;color: white;padding: 5px;border-radius: 6px;" value="Waiting for call"></div></form></div><div class="callback-countdown-block-timer"><p>We are calling you to phone</p><div class="callback-countdown-block-timer_timer"></div></div><div class="callback-countdown-block-sorry"><p>Thank you.<br>We are call you back soon.</p></div></div>
<!-- **** -->
<!-- Whats App Popup -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary" id="whatsapp_popup">
                <div class="panel-heading" id="accordion">
                    <span class="fa fa-whatsapp">&nbsp&nbspWhatsApp</span>
                     <div class="btn-group pull-right">
                        <span style="cursor: pointer;" id="san_close" class="fa fa-window-close"></span>
                     </div> 
                </div>
            <div class="panel-collapse collapse in" id="collapseOne">
                <div class="panel-body">
                    <span id="upper_textt">Add The Number to the Contacts on your phone and send us a message via app</span></br></br></br>
                    <span id="down_text_no"><strong>+1(800) 1234567</strong></span>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- **** -->

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="{{ asset('/js/custom.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<!-- <script src="{{ asset('/js/sweetalert.js') }}"></script> -->
<script src="https://swc.cdn.skype.com/sdk/v1/sdk.min.js"></script>
<script type="text/javascript">
   $(function(){
      $('#line_response').click('.at-svc-email',function(){
         $('.callback-countdown-block-timer').hide();
         $('.callback-countdown-block-sorry').hide();
         $('.callback-countdown-block .callback-countdown-block-phone').show();
         $('.callback-countdown-block').show();
      });
      $('.callback-countdown-block-close').click(function(){
         $('.callback-countdown-block .callback-countdown-block-phone').hide();
         $('.callback-countdown-block').hide();
      });
      $('#san_whtsapp').click(function(){
         $('#whatsapp_popup').show();
      });
      $('#san_close').click(function(){
         $('#whatsapp_popup').hide();
      });
      $('#arcontactus-message-callback-phone-submit').click(function(){
         if ($('#san_number').val()) {
            $('.callback-countdown-block .callback-countdown-block-phone').hide();
            $('.callback-countdown-block').show();
            $('.callback-countdown-block-sorry').show();
         }else{
            alert('Please Enter Phone No');
         }
      });
   });
</script>
</body>
</html>

