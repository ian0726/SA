
<style>
  #notification-area {
    position:fixed;
    bottom:0px;
    left:10px;
    width:300px;
    display:flex;
    z-index: 1000;
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
