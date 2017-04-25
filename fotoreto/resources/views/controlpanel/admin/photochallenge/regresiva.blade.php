<br>
<link href='http://fonts.googleapis.com/css?family=Autour+One' rel='stylesheet' type='text/css'>
<style type='text/css'>
.countdown_box{overflow: hidden;position: absolute; text-align: center;}
.countdown_number{width: 51px;height: 26px;font-size:20px;text-align:center;color:#000;}
.countdown_number_name{width: 51px;height: 26px;font-size:13px;text-transform:uppercase;color:#000;}
#countdown_days{margin-left: 0px;margin-top: 10px;}
#countdown_hours{margin-left: 50px;margin-top: 10px;}
#countdown_mins{margin-left: 100px;margin-top: 10px;}
#countdown_secs{margin-left: 150px;margin-top: 10px;}
#countdown_number_name_secs{margin-left: 0px;margin-top: 30px;}
#countdown_number_name_mins{margin-left: 50px;margin-top: 30px;}
#countdown_number_name_hours{margin-left: 100px;margin-top: 30px;}
#countdown_number_name_days{margin-left: 150px;margin-top: 30px;}

</style>
  <script  type="text/javascript">/*courtesy of onlineclock.net*/
   countdown_dateFuture=new Date(2017,4,25,00,00,00);
   function countdown_UpdateCount(){dateNow=new Date();
     timediff=Math.abs(countdown_dateFuture.getTime() - dateNow.getTime());
     delete dateNow;
     if(timediff<0)
      {document.getElementById('countdown_container').style.display="none";}
      else {days=0;hours=0;mins=0;secs=0;out="";
      timediff=Math.floor(timediff/1000);days=Math.floor(timediff/86400);
      timediff=timediff % 86400;
      hours=Math.floor(timediff/3600);
      timediff=timediff % 3600;
      mins=Math.floor(timediff/60);
      timediff=timediff % 60;
      secs=Math.floor(timediff);
      if(document.getElementById('countdown_container'))
      {document.getElementById('countdown_days').innerHTML=days;
      document.getElementById('countdown_hours').innerHTML=hours;
      document.getElementById('countdown_mins').innerHTML=mins;
      document.getElementById('countdown_secs').innerHTML=secs;}
      setTimeout("countdown_UpdateCount()", 1000);}}
      window.onload=function()
      {countdown_UpdateCount();}</script>
      <div id="countdown_container">
        <div id="countdown_days" class="countdown_box countdown_number">

        </div>
        <div id="countdown_hours" class="countdown_box countdown_number">

        </div><div id="countdown_mins" class="countdown_box countdown_number">

        </div><div id="countdown_secs" class="countdown_box countdown_number">

        </div><div id="countdown_number_name_secs" class="countdown_box countdown_number_name">Dias</div>
        <div id="countdown_number_name_mins" class="countdown_box countdown_number_name">Hr</div>
        <div id="countdown_number_name_hours" class="countdown_box countdown_number_name">Min</div>
        <div id="countdown_number_name_days" class="countdown_box countdown_number_name">Seg</div>
</div>
