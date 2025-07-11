
  
    const countDownTimer = setInterval(() => {
        timeInSeconds--

        let minutes = Math.floor(timeInSeconds / 60)
        let seconds = timeInSeconds % 60
        minutes = minutes < 10 ? "0" +minutes : minutes
        seconds = seconds < 10 ? "0" +seconds : seconds
        const timerCounter = document.getElementById("dura")
        timerCounter.innerHTML = `${minutes}:${seconds}`

        document.cookie = `timer=${timeInSeconds};expires =  ${new Date(Date.now() + 36000000).toUTCString()}; path=/`;
        
        if (timeInSeconds <= 0) {
            document.getElementById("dura").innerHTML =  `Time Ended ---- Submit And Logout`
            document.getElementById("dura").style.backgroundColor = "red"
            clearInterval(countDownTimer)
            Swal.fire({
                title: "Time Ended",
                text: " The Time Allocated For This Exam Has Ended, Click On The Submit Button And Logout !!!!",
                icon: "warning"
            })
            document.querySelector("#nextbtn").style.visibility = "hidden"
            document.querySelector("#previousbtn").style.visibility = "hidden"
            const questionButtons = document.querySelectorAll(".question-button");
             questionButtons.forEach(button => {
             button.style.visibility = "hidden";
             });
             
            document.addEventListener('keydown', function(event) {
                switch (event.key) {
                    case 'n':
                    case 'a':    
                    case 'b':    
                    case 'c':    
                    case 'd':    
                    case 'A':    
                    case 'B':    
                    case 'C':    
                    case 'D':    
                        Swal.fire({
                            title: "Time Ended",
                            text: " The Time Allocated For This Exam Has Ended, Click On The Submit Button And Logout !!!!",
                            icon: "warning"
                        })
                        break;
                    case 'p':
                        Swal.fire({
                            title: "Time Ended",
                            text: " The Time Allocated For This Exam Has Ended, Click On The Submit Button And Logout !!!!",
                            icon: "warning"
                        })
                        break;
                    
                    case 'N':
                        Swal.fire({
                            title: "Time Ended",
                            text: " The Time Allocated For This Exam Has Ended, Click On The Submit Button And Logout !!!!",
                            icon: "warning"
                        })
                        break;
                    case 'P':
                        Swal.fire({
                            title: "Time Ended",
                            text: " The Time Allocated For This Exam Has Ended, Click On The Submit Button And Logout !!!!",
                            icon: "warning"
                        })
                        break;
                    
                }
            });
        }
        if(timeInSeconds < 60) {
            document.getElementById("dura").style.backgroundColor = "red"
        }
        
    }, 1100);

