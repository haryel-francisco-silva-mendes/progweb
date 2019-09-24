
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Firebase</title> 
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
        <title>Document</title>
    </head>
    <body>
        
        
            <input type="text" name="login" id="login" placeholder="informe o login"><br>
            <input type="password" name="senha" id="senha" placeholder="informe a senha"><br>
            <input type="submit" name="submit" id="submit" value="logar">
            <input type="button"  id="logout" value="Logout">
            <input type="button" id="create" value="criar">
            <input type="button" id="alter" value="Alterar Dados" onclick="alterData()">
            <input type="button" id="update" value="Alterar senha">
            <input type="button" id="delete" value="Deletar">
            <input type="button" id="reset" value="Reset Password" onclick="sendPasswordReset('notim123456789@gmail.com')"> 
    

        <div id="console"> </div>


    </body>
    </html>
    <script>
        var firebaseConfig = {
            apiKey: "AIzaSyAoFVu_q9Ev8f1VxltSNU0-zh9MY6d27gE",
            authDomain: "qfome-e2296.firebaseapp.com",
            databaseURL: "https://qfome-e2296.firebaseio.com",
            projectId: "qfome-e2296",
            storageBucket: "",
            messagingSenderId: "545249675453",
            appId: "1:545249675453:web:890dc67e6724422aaacfd4"
        };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

        firebase.auth().onAuthStateChanged(function(user){
            if(user){
                document.getElementById("console").innerHTML = "online";
                document.getElementById("console").innerHTML += JSON.stringify(user);
            }else{
                document.getElementById("console").innerHTML = "offline";
            }
            
        });

        document.getElementById("submit").onclick = function() {
            firebase.auth().signInWithEmailAndPassword(
                document.getElementById("login").value,
                document.getElementById("senha").value).catch(function(error){
                document.getElementById("console").innerHTML = JSON.stringify(error);
            });
        };

        document.getElementById("logout").onclick = function() {
            firebase.auth().signOut()
            .then(function(){
                document.getElementById("console").innerHTML = 'Logout';
            }, function(error) {
                document.getElementById("console").innerHTML = JSON.stringify( error );
            
            });
        };




        //criar usuario
        document.getElementById("create").onclick = function(){
            firebase.auth().createUserWithEmailAndPassword('a@email.com','123456')
            .catch(function(error){
                document.getElementById("console").innerHTML = JSON.stringify( error );
            });
        }

        //acao de alterar senha do botao update
        document.getElementById("update").onclick = function() {
            firebase.auth().currentUser.updatePassword('111111').then(function(){
                document.getElementById("console").innerHTML = 'senha Alterada!';
            })
            .catch(function(error){
                document.getElemntById("console").ennerHTML = JSON.stringify(error);
            });
        };

        function alterData(){
            var user = firebase.auth().currentUser;
            user.updateProfile({
                displayName: "Chico",
                photoURL: "https://example.com/images/chico.jpg"
            }).then(function(){
                //update
                document.getElementById("console").innerHTML = "Dados Alterados: "+JSON.stringify(user);
            }).catch(function(error){
                //erro
                document.getElementById("console").innerHTML = JSON.stringify(error);
            });
        };
        //excluir
        document.getElementById("delete").onclick = function() {
            var user = firebase.auth().currentUser;
            user.delete().then(function(){
                document.getElementById("console").innerHTML = "Usuario deletado";
            }).catch(function(error){
                document.getElementById("console").innerHTML = JSON.stringify(error);
            });
        };

        function sendPasswordReset(email){
            var email = email;
            firebase.auth().sendPasswordResetEmail(email).then(function(){
                alert('E-mail de reset de senha enviado');
            }).catch(function(error){
                var errorCode       = error.code;
                var errorMessage    = error.message;
                if(errorCode == 'auth/user-not-found'){
                    alert (errorMessage);
                } else if(errorCode == 'auth/user-not-found'){
                    alert(errorMessage);
                }
                console.log(error);
            }); 
        }
    </script>
