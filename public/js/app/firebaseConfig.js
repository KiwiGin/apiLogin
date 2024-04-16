// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-app.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-auth.js"

// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyBWkZZOzCkN7sfE3oKEafys8eD6fwvaaqU",
    authDomain: "my-project-4146d.firebaseapp.com",
    projectId: "my-project-4146d",
    storageBucket: "my-project-4146d.appspot.com",
    messagingSenderId: "583828422898",
    appId: "1:583828422898:web:5a04165c554d93f1e3906b"
};

// Initialize Firebase
export const app = initializeApp(firebaseConfig);
export const auth = getAuth(app);
console.log(app)
