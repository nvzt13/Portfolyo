const talkButton = document.getElementById("talk-btn")
const body = document.getElementsByTagName("body")
const content = document.getElementById("content")
const submit = document.getElementById("submit")
console.log(content)

submit.addEventListener("click", (e) => {
    e.preventDefault()
    console.log("I am clicked!")
})