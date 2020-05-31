
let banned = document.querySelectorAll(".banned");
let admin_makes = document.querySelectorAll(".admin_make");
let delete_its = document.querySelectorAll(".delete_it");

let delete_ot = document.querySelectorAll(".delete_otz");
let activе_it = document.querySelectorAll(".activе_it");
let deactive_it = document.querySelectorAll(".deactive_it");
let path = window.location.hostname;

for(let i = 0; i < delete_its.length && i < admin_makes.length && i < banned.length; i++){
    delete_its[i].onclick = () =>{
        let user_id = delete_its[i].getAttribute('id');
        // console.log(id);
        delete_its[i].parentElement.parentElement.remove()
        Query(user_id);
        function Query(user_id){
            let xhr = new XMLHttpRequest();
            xhr.open("GET", `http://${path}:80/admin/ajax/ajaxdel.php?user=${user_id}`);
            xhr.send()
        
            
            xhr.addEventListener("load", function(){
                let answer = xhr.responseText;
                alert(answer);
            })
        }
    }
    admin_makes[i].onclick = () =>{
        let user_id = admin_makes[i].getAttribute('id');
        Query(user_id);
        function Query(user_id){
            let xhr = new XMLHttpRequest();
            xhr.open("GET", `http://${path}:80/admin/ajax/ajaxadm.php?user=${user_id}`);
            xhr.send()
            
            xhr.addEventListener("load", function(){
                location.reload();
                let answer = xhr.responseText;
                alert(answer);
            })
        }
    }
    banned[i].onclick = () =>{
        let useradm_id = banned[i].getAttribute('id');
        Query(useradm_id);
        function Query(user_id){
            let xhr = new XMLHttpRequest();
            xhr.open("GET", `http://${path}:80/admin/ajax/ajaxban.php?user=${user_id}`);
            xhr.send()
        
            
            xhr.addEventListener("load", function(){
                location.reload();
                let answer = xhr.responseText;
                alert(answer);
            })
        }
    }
}


for (let i=0; i < delete_ot.length && i < activе_it.length && i < deactive_it.length; i++){
    delete_ot[i].onclick = () =>{
        let id = delete_ot[i].getAttribute('id');
        // console.log(id);
        delete_ot[i].parentElement.parentElement.remove()
        Query(id);
        function Query(id){
            let xhr = new XMLHttpRequest();
            xhr.open("GET", `http://${path}:80/admin/ajax/ajaxdelotz.php?user=${id}`);
            xhr.send()
        
            
            xhr.addEventListener("load", function(){
                let answer = xhr.responseText;
                alert(answer);
            })
        }
    }
    activе_it[i].onclick = () =>{
        let id = activе_it[i].getAttribute('id');
        Query(id);
        function Query(id){
            let xhr = new XMLHttpRequest();
            xhr.open("GET", `http://${path}:80/admin/ajax/ajaxact.php?user=${id}`);
            xhr.send()
            
            xhr.addEventListener("load", function(){
                location.reload();
                let answer = xhr.responseText;
                alert(answer);
            })
        }
    }
    deactive_it[i].onclick = () =>{
        let id = deactive_it[i].getAttribute('id');
        Query(id);
        function Query(id){
            let xhr = new XMLHttpRequest();
            xhr.open("GET", `http://${path}:80/admin/ajax/ajaxdeact.php?user=${id}`);
            xhr.send()
            
            xhr.addEventListener("load", function(){
                location.reload();
                let answer = xhr.responseText;
                alert(answer);
            })
        }
    }
}









