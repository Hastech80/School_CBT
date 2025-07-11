const display = document.getElementById("display")

function appendToDisplay(input) {
    display.value += input
}
function calculate() {
    try {
        display.value = eval(display.value)
    } catch (error) {
        display.value = "Invalid input"
    }
    
}
function clearDisplay() {
    display.value = ""
}
function cla_btn() {
    document.getElementById('two').style.display="block"
    
}
function hide_btn() {
    document.getElementById('two').style.display="none"
    
}