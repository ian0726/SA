<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  font-family:"Raleway";
}
#notification-area {
  position:fixed;
  top:0px;
  right:10px;
  width:300px;
  height:100vh;
  display:flex;
  flex-direction:column;
  justify-content:flex-end;
}
#notification-area .notification {
  position:relative;
  padding:20px 20px;
  text-align: center;
  background:#111;
  color:#f5f5f5;
  font-family:"Raleway";
  font-size:22px;
  font-weight:600;
  border-radius:5px;
  margin:5px 0px;
  opacity:0;
  left:20px;
  animation:showNotification 500ms ease-in-out forwards;
}
@keyframes showNotification {
  to {
    opacity:1;
    left:0px;
  }
}
#notification-area .notification.success {
  background:#389838;
}
#notification-area .notification.error {
  background:orangered;
}
#notification-area .notification.info {
  background:#00acee;
}
    </style>
</head>
<body>
    
    <div class="buttons">
    <h1>Notifications</h1>
    <button onclick="notifySuccess()">
        Success
    </button>
    <button onclick="notifyError()">
        Error
    </button>
    <button onclick="notifyInfo()">
        Info
    </button>
    </div>

    <div id="notification-area">
    </div>

    <script>
        function notify(type,message){
  (()=>{
    let n = document.createElement("div");
    let id = Math.random().toString(36).substr(2,10);
    n.setAttribute("id",id);
    n.classList.add("notification",type);
    n.innerText = message;
    document.getElementById("notification-area").appendChild(n);
    setTimeout(()=>{
      var notifications = document.getElementById("notification-area").getElementsByClassName("notification");
      for(let i=0;i<notifications.length;i++){
        if(notifications[i].getAttribute("id") == id){
          notifications[i].remove();
          break;
        }
      }
    },5000);
  })();
}

function notifySuccess(){
  notify("success","成功更新購物車");
}
function notifyError(){
  notify("error","請先登入");
}
function notifyInfo(){
  notify("info","This is demo info notification message");
}
    </script>
</body>
</html>
