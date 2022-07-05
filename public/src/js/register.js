
const firebaseConfig = {
    apiKey: "AIzaSyBp0-W5ay72GxCTrJyk_DSccHhfCwqFjyI",
    authDomain: "edhapp-acf22.firebaseapp.com",
    projectId: "edhapp-acf22",
    storageBucket: "edhapp-acf22.appspot.com",
    messagingSenderId: "2812643998",
    appId: "1:2812643998:web:aa117ff928f691e7ce098f"
};

const app = firebase.initializeApp(firebaseConfig);

function passhide(e) {
    const id = e.getAttribute('state');
    const pass = document.getElementById(id);
    const icon = document.getElementById(id + '-hide');
    if (pass.type === 'password') {
        pass.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    }
    else {
        pass.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}

async function gmail_login(path, redirect) {
    const provider = new firebase.auth.GoogleAuthProvider();
    const result = await firebase.auth().signInWithPopup(provider)
    const user = result.user;
    var formdata = new FormData();
    formdata.append("name", user.displayName);
    formdata.append("email", user.email);
    formdata.append("password", user.uid);
    var requestOptions = {
        method: 'POST',
        body: formdata,
        redirect: 'follow'
    };
    const res = await fetch(path, requestOptions)
    if (res.status === 200) {
        window.location.href = redirect;
    }
}