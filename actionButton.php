<style>
        .fab-container {
          position: fixed;
          bottom: 20px;
          left: 20px;
          z-index: 999;
          cursor: pointer;
        }
        
        .fab-icon-holder {
          width: 50px;
          height: 50px;
          border-radius: 100%;
          background: blue;
          box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }
        
         .fab-icon-holder2 {
          width: 50px;
          height: 50px;
          border-radius: 100%;
          background: green;
          box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }
        
        .fab-icon-holder:hover {
          opacity: 0.8;
        }
        
        .fab-icon-holder i {
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100%;
          font-size: 25px;
          color: #ffffff;
        }
        
         .fab-icon-holder2:hover {
          opacity: 0.8;
        }
        
        .fab-icon-holder2 i {
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100%;
          font-size: 25px;
          color: #ffffff;
        }
        
        .fab {
          width: 60px;
          height: 60px;
          background: #3F51B5;
        }
        
        .fab-options {
          list-style-type: none;
          margin: 0;
          position: absolute;
          bottom: 0px;
          left: 30px;
          margin-left:30px;
          opacity: 0;
          transition: all 0.3s ease;
          transform: scale(0);
          transform-origin: 85% left;
        }
        
        .fab:hover+.fab-options,
        .fab-options:hover {
          opacity: 1;
          transform: scale(1);
        }
        
        .fab-options li {
          display: flex;
          justify-content: flex-end;
          padding: 5px;
        }
        
        :target {
          visibility: visible !important;
        }
        
        #modal {
          visibility: hidden;
          width: 80%;
          height: 80%;
          position: fixed;
          left: 10%;
          box-shadow: 0 0 3px black;
        }
        
        #modal .content {
          margin: 1em;
        }
        
        #modal #close {
          position: absolute;
          top: 10px;
          right: 15px;
          font-size: 2em;
          cursor: pointer;
        }
</style>


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="fab-container">
  <div class="fab fab-icon-holder">
    <i class="fas fa-headset"></i>
  </div>
  <ul class="fab-options">
    <li>
      <div class="fab-icon-holder">
        <a href="tel:+918076874156" style="all:unset" target="_blank"><i class="fas fa-phone-alt"></i></a>
      </div>
      
      <div class="fab-icon-holder2 ml-2">
        <a href="https://wa.me/+918076874156" target="_blank" style="all:unset"><i class="fas fa-comments"></i></a>
      </div>
    </li>
  </ul>
</div>
<!--<div id="modal">-->
<!--  <div class="content">-->
<!--    <a href="tel:+919065266995"></a>-->
<!--  </div>-->
<!--  <a href="#"><i id="close">×</i></a>-->
<!--</div>-->