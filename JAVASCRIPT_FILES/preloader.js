window.addEventListener("load", ()=> {
    const loader = document.querySelector(".loader")
    loader.classList.add("loader-hidden")

    loader.add("transitionend", ()=> {
        document.body.removeChild("loader")
    })
})