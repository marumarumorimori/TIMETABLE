document.addEventListener('DOMContentLoaded', () => {
let timerbtn = document.querySelector('.timer');
let timerOn = document.querySelector('.timeron');

timerbtn.addEventListener('click', function(){

    timerOn.style.display = "block";
     
});



    let counttime = document.getElementById("counttime");
    let startbtn = document.getElementById('startBTN');
    let stopbtn = document.getElementById('stopBTN');
    let resetbtn = document.getElementById('resetBTN');
    let sec = 0;
    let min = 0;
    let hrs = 0;
    let t;



    function tick() {
      sec++;
      if (sec >= 60) {
        sec = 0;
        min++;
        if (min >= 60) {
            min = 0;
            hrs++;
        };
      };
    };

    function add() {
      tick();
      counttime.innerHTML  =(hrs > 9? hrs :"0" + hrs) + ":" + (min > 9? min :"0" + min) + ":" + (sec > 9? sec :"0" + sec); 
      timer();
    };

    function timer() {
      t = setTimeout(add,1000);
    }



       startbtn.addEventListener('click' , function(){
       timer()
       startbtn.style.display = "none"
        });

        stopbtn.addEventListener('click' ,function(){
          clearTimeout(t);
          startbtn.style.display = "block"
        });

      resetbtn.addEventListener('click' ,function(){
      
      
        function confirmAction() {
          let confirmAction = confirm('勉強時間 : ' +(hrs > 9? hrs :"0" + hrs) + ":" + (min > 9? min :"0" + min) + ":" + (sec > 9? sec :"0" + sec) + "\n記録しますか?" );
          if (confirmAction) {
            alert("記録しました。");
          } else {
            alert("キャンセルしました");
          }
        }
        confirmAction()
      
        window.setTimeout(dispMsg, 500);

        function dispMsg(){
           timerOn.style.display = "none";
        }


          counttime.innerHTML = "00:00:00";
      
        sec = 0;
        min = 0;
        hours = 0;
      });
  
    });