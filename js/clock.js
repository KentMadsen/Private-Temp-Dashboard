var h = setInterval(run_clock, 1000);

function run_clock()
{
    var hours = document.getElementsByClassName('clock-hours');
    var minutes = document.getElementsByClassName('clock-minutes');
    var seconds = document.getElementsByClassName('clock-seconds');
    
    var i = null;
    
    var tr = new Date();

    for(i = 0; i < hours.length; i++)
    {
        var e = hours[i];

        e.innerHTML = tr.getHours();
    }
    
    
    for(i = 0; i < minutes.length; i++)
    {
        var e = minutes[i];

        e.innerHTML = tr.getMinutes();
    }

    
    for(i = 0; i < seconds.length; i++)
    {
        var e = seconds[i];

        e.innerHTML = tr.getSeconds();
    }
    
}