// $("header").load("header.php");
// $("footer").load("footer.php");

var j=0;
    document.getElementsByName("radio-btn")[j].checked = true;
setInterval(function(){
    for(i=0;i<4;i++)
    {
        if(document.getElementsByName("radio-btn")[i].checked)
        {
            j=i;
            break;
        }
    }

    if(j>4)
    {
        j=0;
    }
    else
    {
        j++;
    }
    document.getElementsByName("radio-btn")[j].checked = true;

    // console.log(document.getElementsByName("radio-btn")[i].checked)
} , 5000);