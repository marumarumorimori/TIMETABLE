function showdate() {
    let datetitle = document.getElementById('daytitle2');
    let date = document.getElementById('date').value;
    datetitle.textContent = date;
    // console.log(date)

}

function decidetime() {
    let selecthour1 = document.getElementById('hour1');
    let selectmin1 = document.getElementById('min1');
    let selecthour1value = parseInt(selecthour1.options[selecthour1.selectedIndex].text);
    let selectmin1value = parseInt(selectmin1.options[selectmin1.selectedIndex].text);
    let actualhourstart = selecthour1value;
    let actualminstart  = selectmin1value;
    let now = new Date();
    let studytime = document.getElementById('studytime');
    let studytimevalue = parseInt(studytime.options[studytime.selectedIndex].text);
    let resttime = document.getElementById('resttime');
    let resttimevalue = parseInt(resttime.options[resttime.selectedIndex].text);



let todo1start= new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        actualhourstart,
        actualminstart,
        0,
        );
    let todo1end = new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        actualhourstart,
        actualminstart + studytimevalue,
        0,
    );
    let todo2start= new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        actualhourstart,
        actualminstart + studytimevalue + resttimevalue,
        0,
        );
    let todo2end = new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        actualhourstart,
        actualminstart + studytimevalue + resttimevalue + studytimevalue,
        0,
    );
    let todo3start= new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        actualhourstart,
        actualminstart + studytimevalue + resttimevalue + studytimevalue + resttimevalue,
        0,
        );
    let todo3end = new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        actualhourstart,
        actualminstart + studytimevalue + resttimevalue + studytimevalue + resttimevalue + studytimevalue,
        0,
    );
    let todo4start= new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        actualhourstart,
        actualminstart + studytimevalue + resttimevalue + studytimevalue + resttimevalue + studytimevalue + resttimevalue,
        0,
        );
    let todo4end = new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        actualhourstart,
        actualminstart + studytimevalue + resttimevalue + studytimevalue + resttimevalue + studytimevalue + resttimevalue + studytimevalue,
        0,
    );
    let todo5start= new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        actualhourstart,
        actualminstart + studytimevalue + resttimevalue + studytimevalue + resttimevalue + studytimevalue + resttimevalue + studytimevalue + resttimevalue,
        0,
        );
    let todo5end = new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        actualhourstart,
        actualminstart + studytimevalue + resttimevalue + studytimevalue + resttimevalue + studytimevalue + resttimevalue + studytimevalue + resttimevalue + studytimevalue,
        0,
    );

    console.log(selecthour1value);
    console.log(selectmin1value);
    let todo1time = document.getElementById('todo1time');
    let todo2time = document.getElementById('todo2time');
    let todo3time = document.getElementById('todo3time');
    let todo4time = document.getElementById('todo4time');
    let todo5time = document.getElementById('todo5time');

    let todo1starthour = todo1start.getHours();
    let todo1startmin  = todo1start.getMinutes();
    let todo1endhour = todo1end.getHours();
    let todo1endmin = todo1end.getMinutes();

    let todo2starthour = todo2start.getHours();
    let todo2startmin  = todo2start.getMinutes();
    let todo2endhour = todo2end.getHours();
    let todo2endmin = todo2end.getMinutes();

    let todo3starthour = todo3start.getHours();
    let todo3startmin  = todo3start.getMinutes();
    let todo3endhour = todo3end.getHours();
    let todo3endmin = todo3end.getMinutes();

    let todo4starthour = todo4start.getHours();
    let todo4startmin  = todo4start.getMinutes();
    let todo4endhour = todo4end.getHours();
    let todo4endmin = todo4end.getMinutes();

    let todo5starthour = todo5start.getHours();
    let todo5startmin  = todo5start.getMinutes();
    let todo5endhour = todo5end.getHours();
    let todo5endmin = todo5end.getMinutes();

    todo1time.textContent = String(todo1starthour).padStart(2,'0') + ":" + String(todo1startmin).padStart(2,'0') + " - " + String(todo1endhour).padStart(2,'0') + ":" +String(todo1endmin).padStart(2,'0');
    todo2time.textContent = String(todo2starthour).padStart(2,'0') + ":" + String(todo2startmin).padStart(2,'0') + " - " + String(todo2endhour).padStart(2,'0') + ":" +String(todo2endmin).padStart(2,'0');
    todo3time.textContent = String(todo3starthour).padStart(2,'0') + ":" + String(todo3startmin).padStart(2,'0') + " - " + String(todo3endhour).padStart(2,'0') + ":" +String(todo3endmin).padStart(2,'0');
    todo4time.textContent = String(todo4starthour).padStart(2,'0') + ":" + String(todo4startmin).padStart(2,'0') + " - " + String(todo4endhour).padStart(2,'0') + ":" +String(todo4endmin).padStart(2,'0');
    todo5time.textContent = String(todo5starthour).padStart(2,'0') + ":" + String(todo5startmin).padStart(2,'0') + " - " + String(todo5endhour).padStart(2,'0') + ":" +String(todo5endmin).padStart(2,'0');

}

// function createtable() {
//     let totaltime = document.getElementById('totaltime');
//     let totaltimevalue = parseInt(totaltime.options[totaltime.selectedIndex].text);
//     var tableEle = document.getElementById('data-table');
//         for (var i = 0; i < totaltimevalue; i++) {

//         var tr = document.createElement('tr');

//         for (var j = 0; j < 1; j++) {
//             var td = document.createElement('td');
//             td.innerHTML = i + 1;
//             tr.appendChild(td);

//         }
//         for (var j = 0; j < 1; j++) {
//             var td = document.createElement('td');
//             td.innerHTML = "00:00-00:00";
//             tr.appendChild(td);

//         }
//         for (var j = 0; j < 1; j++) {
//             var td = document.createElement('td');
//             td.innerHTML = "<input type=\"text\" name=\"todostudy1\" id=\"todo1\" class=\"textclass\" require></input>";
//             tr.appendChild(td);

//         }

//     tableEle.appendChild(tr);
// }
// }




window.onload = function() {



    let studytime = document.getElementById('studytime');
    let resttime = document.getElementById('resttime');
    let numstudytime = parseInt(studytime.textContent);
    let numresttime = parseInt(resttime.textContent);
    // console.log(numstudytime);
    // console.log(numresttime);
    let h = document.getElementById('h');
    let m = document.getElementById('m');


    let numh = parseInt(h.textContent);
    let numm = parseInt(m.textContent);

    let strh = String(numh).padStart(2,'0');
    let strm = String(numm).padStart(2,'0');
    h.textContent = strh;
    m.textContent = strm;

    let now = new Date();

    let todo1start= new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        numh,
        numm,
        0,
        );
    let todo1end = new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        numh,
        numm + numstudytime,
        0,
    );
    let todo2start= new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        numh,
        numm + numstudytime + numresttime,
        0,
        );
    let todo2end = new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        numh,
        numm + numstudytime + numresttime + numstudytime,
        0,
    );
    let todo3start= new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        numh,
        numm + numstudytime + numresttime + numstudytime + numresttime,
        0,
        );
    let todo3end = new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        numh,
        numm + numstudytime + numresttime + numstudytime + numresttime + numstudytime,
        0,
    );
    let todo4start= new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        numh,
        numm + numstudytime + numresttime + numstudytime + numresttime + numstudytime + numresttime,
        0,
        );
    let todo4end = new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        numh,
        numm + numstudytime + numresttime + numstudytime + numresttime + numstudytime + numresttime + numstudytime,
        0,
    );
    let todo5start= new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        numh,
        numm + numstudytime + numresttime + numstudytime + numresttime + numstudytime + numresttime + numstudytime + numresttime,
        0,
        );
    let todo5end = new Date(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        numh,
        numm + numstudytime + numresttime + numstudytime + numresttime + numstudytime + numresttime + numstudytime + numresttime + numstudytime,
        0,
    );

    let todo1time = document.getElementById('todo1time');
    let todo2time = document.getElementById('todo2time');
    let todo3time = document.getElementById('todo3time');
    let todo4time = document.getElementById('todo4time');
    let todo5time = document.getElementById('todo5time');

    let todo1starthour = todo1start.getHours();
    let todo1startmin  = todo1start.getMinutes();
    let todo1endhour = todo1end.getHours();
    let todo1endmin = todo1end.getMinutes();

    let todo2starthour = todo2start.getHours();
    let todo2startmin  = todo2start.getMinutes();
    let todo2endhour = todo2end.getHours();
    let todo2endmin = todo2end.getMinutes();

    let todo3starthour = todo3start.getHours();
    let todo3startmin  = todo3start.getMinutes();
    let todo3endhour = todo3end.getHours();
    let todo3endmin = todo3end.getMinutes();

    let todo4starthour = todo4start.getHours();
    let todo4startmin  = todo4start.getMinutes();
    let todo4endhour = todo4end.getHours();
    let todo4endmin = todo4end.getMinutes();

    let todo5starthour = todo5start.getHours();
    let todo5startmin  = todo5start.getMinutes();
    let todo5endhour = todo5end.getHours();
    let todo5endmin = todo5end.getMinutes();

    todo1time.textContent = String(todo1starthour).padStart(2,'0') + ":" + String(todo1startmin).padStart(2,'0') + " - " + String(todo1endhour).padStart(2,'0') + ":" +String(todo1endmin).padStart(2,'0');
    todo2time.textContent = String(todo2starthour).padStart(2,'0') + ":" + String(todo2startmin).padStart(2,'0') + " - " + String(todo2endhour).padStart(2,'0') + ":" +String(todo2endmin).padStart(2,'0');
    todo3time.textContent = String(todo3starthour).padStart(2,'0') + ":" + String(todo3startmin).padStart(2,'0') + " - " + String(todo3endhour).padStart(2,'0') + ":" +String(todo3endmin).padStart(2,'0');
    todo4time.textContent = String(todo4starthour).padStart(2,'0') + ":" + String(todo4startmin).padStart(2,'0') + " - " + String(todo4endhour).padStart(2,'0') + ":" +String(todo4endmin).padStart(2,'0');
    todo5time.textContent = String(todo5starthour).padStart(2,'0') + ":" + String(todo5startmin).padStart(2,'0') + " - " + String(todo5endhour).padStart(2,'0') + ":" +String(todo5endmin).padStart(2,'0');


}
