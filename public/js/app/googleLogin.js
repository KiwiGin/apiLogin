import { GoogleAuthProvider, signInWithPopup} from "https://www.gstatic.com/firebasejs/10.4.0/firebase-auth.js"
import { auth } from './firebaseConfig.js'
const googleButtom = document.getElementById('btn-google')
googleButtom.addEventListener('click', async () => {
    const provider = new GoogleAuthProvider()

    try {
        const credentials = await signInWithPopup(auth,provider)
        alert("Welcome " + credentials.user.displayName)
    } catch (error){
        console.log(error)
    }
})
