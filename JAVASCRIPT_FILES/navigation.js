document.addEventListener("visibilitychange" ,() =>{
    if (document.title == "hidden") {
        Swal.fire({
            title: "Last Warning",
            text: "You Have Been Warned Not to Navigate From This Current Tab Or This Browser, If You Navigate From This Tab Or Browser Again, You will Be Logged Out Automatically And You Will Not Be Allowed To Attempt This Examination Again. Be Warned",
            icon: "warning"
          })
    } else {
        Swal.fire({
                title: "Last Warning",
                text: "You Have Been Warned Not to Navigate From This Current Tab Or This Browser, If You Navigate From This Tab Or Browser Again, You will Be Logged Out Automatically And You Will Not Be Allowed To Attempt This Examination Again. Be Warned",
                icon: "warning"
              })
    }
}) 



 
    window.MathJax = {
        tex: {
        inlineMath: [['$', '$'], ["\\(", "\\)"]]
        },
        svg: {
        fontCache: 'global'
        }
    };



 
document.addEventListener('keydown', function(event) {
    switch (event.key) {
        case 'n':
            document.getElementById('nextbtn').click();
            break;
        case 'p':
            document.getElementById('previousbtn').click();
            break;
        case 'a':
            document.querySelector('input[name="opt"][value="A"]').click();
            break;
        case 'b':
            document.querySelector('input[name="opt"][value="B"]').click();
            break;
        case 'c':
            document.querySelector('input[name="opt"][value="C"]').click();
            break;
        case 'd':
            document.querySelector('input[name="opt"][value="D"]').click();
            break;
        case 'N':
            document.getElementById('nextbtn').click();
            break;
        case 'P':
            document.getElementById('previousbtn').click();
            break;
        case 'A':
            document.querySelector('input[name="opt"][value="A"]').click();
            break;
        case 'B':
            document.querySelector('input[name="opt"][value="B"]').click();
            break;
        case 'C':
            document.querySelector('input[name="opt"][value="C"]').click();
            break;
        case 'D':
            document.querySelector('input[name="opt"][value="D"]').click();
            break;
    }
});





 

  document.getElementById('logout-btn').onclick = function () {
    document.getElementById('logout-popup').style.display = "block"
  }
  document.getElementById('no-btn').onclick = function () {
    document.getElementById('logout-popup').style.display = "none"
  }
  
  document.getElementById('submit').onclick = function(){
    // Clear the interval to stop the countdown timer
    clearInterval(countDownTimer);
  } 

  