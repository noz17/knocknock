(function() {

  //Initialize Firebase
  const config = {
    apiKey: "AIzaSyC3xzwWStNNoHXu8ZezS9-NJmW3-FOma3Q",
    authDomain: "noknocknoz.firebaseapp.com",
    databaseURL: "https://noknocknoz.firebaseio.com",
    projectId: "noknocknoz",
    storageBucket: "noknocknoz.appspot.com",
    messagingSenderId: "163863157898"
  };
  firebase.initializeApp(config);

  //Get elements 
  const txtEmail = document.getElementById('txtEmail');
  const txtPassword = document.getElementById('txtPassword');
  const txtForgot = document.getElementById('txtForgot');
  const btnLogin = document.getElementById('btnLogin');

  //Add login Event
  btnLogin.addEventListener('click', e=> {
   //get Email and Password
   const email = txtEmail.value;
   const pass = txtPassword.value;
   const auth = firebase.auth();
   //sign in
   const promise = auth.signInWithEmailAndPassword(email, pass);
   promise.catch(e => console.log(e.message))
  });

  //Add a realtime listener
  firebase.auth().onAuthStateChanged(firebaseUser => {
    if(firebaseUser) {
      console.log(firebaseUser);
    }
    else {
      console.log('not logged in');
    }
  });


}());