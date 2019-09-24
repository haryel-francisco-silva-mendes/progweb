<!DOCTYPE HTML>
<html>
   <head>
   	    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>Firebase</title> 
        <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
   </head>
   <body>
        <input type="text" name="login" id="login" placeholder="Informe o login"><br>
        <input type="password" name="senha" id="senha" placeholder="Informe a senha"><br>
        <input type="submit" name="submit" id="submit" value="Logar">
        <input type="button" id="logout" value="Logout">
        <div id="console">
        </div>
   </body>
</html>
<script>
// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyATNuMOz_lxK6aDjRn_D5TxBsvtE_T7sOk",
    authDomain: "qfome-46c0f.firebaseapp.com",
    databaseURL: "https://qfome-46c0f.firebaseio.com",
    projectId: "qfome-46c0f",
    storageBucket: "qfome-46c0f.appspot.com",
    messagingSenderId: "740834415854",
    appId: "1:740834415854:web:55a01dc173f5fa2e78cfff"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
    
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    document.getElementById("console").innerHTML = "Online";
  } else {
    document.getElementById("console").innerHTML = 'Offline!';
  }
}); 

//Ação de Login
document.getElementById("submit").onclick = function() { 
  firebase.auth().signInWithEmailAndPassword(
                    document.getElementById("login").value,
                    document.getElementById("senha").value).catch(function(error) { 
      document.getElementById("console").innerHTML = JSON.stringify( error );
  });
};


//Ação de Logout
document.getElementById("logout").onclick = function() { 
  firebase.auth().signOut()
  .then(function() {
    document.getElementById("console").innerHTML = 'Logout';
  }, function(error) {
    document.getElementById("console").innerHTML = JSON.stringify( error );
  });

};

</script>