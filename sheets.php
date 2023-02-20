
<?php
// This will check if the user is logged in or else the system will automatically kick you out to login
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
    content="IE=edge">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <title>TimeSheet</title>
    <link rel="stylesheet" href="style.css">

    <script>
        function sum() {
        var txt1st =  document.getElementById('totalhours').value;
        var txt2nd =  document.getElementById('totalhours2').value;
        var txt3rd=   document.getElementById('totalhours3').value;
        var txt4rd =  document.getElementById('totalhours4').value;
        var txt5rd =  document.getElementById('totalhours5').value;
        var txt6rd =  document.getElementById('totalhours6').value;
        var txt7rd =  document.getElementById('totalhours7').value;
        var txt8rd =  document.getElementById('totalhours8').value;
        var txt9rd =  document.getElementById('totalhours9').value;
        var txt10rd = document.getElementById('totalhours10').value;
        var txt11st = document.getElementById('totalhours11').value;
        var txt12nd = document.getElementById('totalhours12').value;
        var txt13rd=  document.getElementById('totalhours13').value;
        var txt14rd = document.getElementById('totalhours14').value;
        var txt15rd = document.getElementById('totalhours15').value;
        var txt16rd = document.getElementById('totalhours16').value;
        var txt17rd = document.getElementById('totalhours17').value;
        var txt18rd=  document.getElementById('totalhours18').value;
        var txt19rd = document.getElementById('totalhours19').value;
        var txt20rd = document.getElementById('totalhours20').value;


        if (txt1st == "")
            txt1st = 0;
        if (txt2nd == "")
            txt2nd = 0;
        if (txt3rd == "")
            txt3rd = 0;
        if (txt4rd == "")
            txt4rd = 0;
        if (txt5rd == "")
            txt5rd =0;
        if (txt6rd == "")
            txt6rd  = 0;
        if (txt7rd == "")
            txt7rd = 0;
        if (txt8rd == "")
            txt8rd = 0;
        if (txt9rd == "")
            txt9rd = 0;
        if (txt10rd == "")
            txt10rd =0;
        if (txt11st == "")
            txt11st = 0;
        if (txt12nd == "")
            txt12nd = 0;
        if (txt13rd == "")
            txt13rd = 0;
        if (txt14rd == "")
            txt14rd = 0;
        if (txt15rd == "")
            txt15rd =0;
        if (txt16rd == "")
            txt16rd  = 0;
        if (txt17rd == "")
            txt17rd = 0;
        if (txt18rd == "")
            txt18rd = 0;
        if (txt19rd == "")
            txt19rd = 0;
        if (txt20rd == "")
            txt20rd =0;
            
 
        var result = parseFloat(txt1st) + parseFloat(txt2nd) + parseFloat(txt3rd) + parseFloat(txt4rd) + parseFloat(txt5rd) + parseFloat(txt6rd) + parseFloat(txt7rd) + parseFloat(txt8rd) + parseFloat(txt9rd) + parseFloat(txt10rd) + parseFloat(txt11st) + parseFloat(txt12nd) + parseFloat(txt13rd) + parseFloat(txt14rd) + parseFloat(txt15rd) + parseFloat(txt16rd) + parseFloat(txt17rd) + parseFloat(txt18rd) + parseFloat(txt19rd) + parseFloat(txt20rd) ;
        if (!isNaN(result)) {
            document.getElementById('lastTotalhour').value = result;
            
        }}
    </script>


</head>


<body>
<div class="container">
    <header class="person">

    <div id="one">

       <div><h1><img src="../Admin page2 - Copy/image/Captured.PNG"><span id="h1">Leading Edge Solutions (Pty) Ltd				
        Ottawa Lane Reedville
        Springs		
        1559
        </span></h1></div>
        
       <div><h2 ><span  id="h2" >Client Name</span><input type="text" id="clientname" style= width:56vh font-size:30px></h2>

       </div> 
    </div>

    <section id="two">
        <h3 style="font-size: 25px">Consultant<span  id="h3" style="font-size: 25px"><?php echo $_SESSION["user_name"] ?></span></h3>

    </section>


    </header>
<section class="tableHead">
    <table id="tab">
     
        <tr>
            <th>Date</th>
            <th>Log No.</th>
            <th>BU</th>
            <th>User</th>
            <th>Activity Description</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Total Hours</th>
            <th>Mileage</th>
        </tr>

       
        <tr id ="row">
          <td>  <input type="date" id="Date"> </td>
          <td>  <input type="number" id="lognumber">  </td>
          <td>  <input type="text" id="BU">  </td>
          <td>  <input type="text" id="User">  </td>
          <td>  <input type="text" id="ActivityDescription">  </td>
          <td>  <input type="time" id="Stime">  </td>
          <td>  <input type="time" id="Etime">  </td>
          <td>  <input type="text" id="totalhours" onkeyup="sum();" >  </td>
          <td>  <input type="text" id="Mileage">  </td>     
          
          <tr id ="row">
            <td>  <input type="date" id="Date"> </td>
            <td>  <input type="number" id="lognumber">  </td>
            <td>  <input type="text" id="BU">  </td>
            <td>  <input type="text" id="User">  </td>
            <td>  <input type="text" id="ActivityDescription">  </td>
            <td>  <input type="time" id="Stime">  </td>
            <td>  <input type="time" id="Etime">  </td>
            <td>  <input type="text" id="totalhours2" onkeyup="sum();">  </td>
            <td>  <input type="text" id="Mileage">  </td> 

            <tr id ="row">
                <td>  <input type="date" id="Date"> </td>
                <td>  <input type="number" id="lognumber">  </td>
                <td>  <input type="text" id="BU">  </td>
                <td>  <input type="text" id="User">  </td>
                <td>  <input type="text" id="ActivityDescription">  </td>
                <td>  <input type="time" id="Stime">  </td>
                <td>  <input type="time" id="Etime">  </td>
                <td>  <input type="text" id="totalhours3" onkeyup="sum();"></td>
                <td>  <input type="text" id="Mileage">  </td> 
                <tr id ="row">
                    <td>  <input type="date" id="Date"> </td>
                    <td>  <input type="number" id="lognumber">  </td>
                    <td>  <input type="text" id="BU">  </td>
                    <td>  <input type="text" id="User">  </td>
                    <td>  <input type="text" id="ActivityDescription">  </td>
                    <td>  <input type="time" id="Stime">  </td>
                    <td>  <input type="time" id="Etime">  </td>
                    <td>  <input type="text" id="totalhours4" onkeyup="sum();"></td>
                    <td>  <input type="text" id="Mileage">  </td> 
                    <tr id ="row">
                        <td>  <input type="date" id="Date"> </td>
                        <td>  <input type="number" id="lognumber">  </td>
                        <td>  <input type="text" id="BU">  </td>
                        <td>  <input type="text" id="User">  </td>
                        <td>  <input type="text" id="ActivityDescription">  </td>
                        <td>  <input type="time" id="Stime">  </td>
                        <td>  <input type="time" id="Etime">  </td>
                        <td>  <input type="text" id="totalhours5" onkeyup="sum();"></td>
                        <td>  <input type="text" id="Mileage">  </td> 
                        <tr id ="row">
                            <td>  <input type="date" id="Date"> </td>
                            <td>  <input type="number" id="lognumber">  </td>
                            <td>  <input type="text" id="BU">  </td>
                            <td>  <input type="text" id="User">  </td>
                            <td>  <input type="text" id="ActivityDescription">  </td>
                            <td>  <input type="time" id="Stime">  </td>
                            <td>  <input type="time" id="Etime">  </td>
                            <td>  <input type="text" id="totalhours6" onkeyup="sum();"></td>
                            <td>  <input type="text" id="Mileage">  </td> 
                            <tr id ="row">
                                <td>  <input type="date" id="Date"> </td>
                                <td>  <input type="number" id="lognumber">  </td>
                                <td>  <input type="text" id="BU">  </td>
                                <td>  <input type="text" id="User">  </td>
                                <td>  <input type="text" id="ActivityDescription">  </td>
                                <td>  <input type="time" id="Stime">  </td>
                                <td>  <input type="time" id="Etime">  </td>
                                <td>  <input type="text" id="totalhours7" onkeyup="sum();"></td>
                                <td>  <input type="text" id="Mileage">  </td> 
                                <tr id ="row">
                                    <td>  <input type="date" id="Date"> </td>
                                    <td>  <input type="number" id="lognumber">  </td>
                                    <td>  <input type="text" id="BU">  </td>
                                    <td>  <input type="text" id="User">  </td>
                                    <td>  <input type="text" id="ActivityDescription">  </td>
                                    <td>  <input type="time" id="Stime">  </td>
                                    <td>  <input type="time" id="Etime">  </td>
                                    <td>  <input type="text" id="totalhours8" onkeyup="sum();"></td>
                                    <td>  <input type="text" id="Mileage">  </td> 
                                    <tr id ="row">
                                        <td>  <input type="date" id="Date"> </td>
                                        <td>  <input type="number" id="lognumber">  </td>
                                        <td>  <input type="text" id="BU">  </td>
                                        <td>  <input type="text" id="User">  </td>
                                        <td>  <input type="text" id="ActivityDescription">  </td>
                                        <td>  <input type="time" id="Stime">  </td>
                                        <td>  <input type="time" id="Etime">  </td>
                                        <td>  <input type="text" id="totalhours9" onkeyup="sum();"></td>
                                        <td>  <input type="text" id="Mileage">  </td> 
                                        <tr id ="row">
                                            <td>  <input type="date" id="Date"> </td>
                                            <td>  <input type="number" id="lognumber">  </td>
                                            <td>  <input type="text" id="BU">  </td>
                                            <td>  <input type="text" id="User">  </td>
                                            <td>  <input type="text" id="ActivityDescription">  </td>
                                            <td>  <input type="time" id="Stime">  </td>
                                            <td>  <input type="time" id="Etime">  </td>
                                            <td>  <input type="text" id="totalhours10" onkeyup="sum();"></td>
                                            <td>  <input type="text" id="Mileage">  </td> 
                                            <tr id ="row">
                                                <td>  <input type="date" id="Date"> </td>
                                                <td>  <input type="number" id="lognumber">  </td>
                                                <td>  <input type="text" id="BU">  </td>
                                                <td>  <input type="text" id="User">  </td>
                                                <td>  <input type="text" id="ActivityDescription">  </td>
                                                <td>  <input type="time" id="Stime">  </td>
                                                <td>  <input type="time" id="Etime">  </td>
                                                <td>  <input type="text" id="totalhours11" onkeyup="sum();"></td>
                                                <td>  <input type="text" id="Mileage">  </td> 
                                                <tr id ="row">
                                                    <td>  <input type="date" id="Date"> </td>
                                                    <td>  <input type="number" id="lognumber">  </td>
                                                    <td>  <input type="text" id="BU">  </td>
                                                    <td>  <input type="text" id="User">  </td>
                                                    <td>  <input type="text" id="ActivityDescription">  </td>
                                                    <td>  <input type="time" id="Stime">  </td>
                                                    <td>  <input type="time" id="Etime">  </td>
                                                    <td>  <input type="text" id="totalhours12" onkeyup="sum();"></td>
                                                    <td>  <input type="text" id="Mileage">  </td> 
                                                    <tr id ="row">
                                                        <td>  <input type="date" id="Date"> </td>
                                                        <td>  <input type="number" id="lognumber">  </td>
                                                        <td>  <input type="text" id="BU">  </td>
                                                        <td>  <input type="text" id="User">  </td>
                                                        <td>  <input type="text" id="ActivityDescription">  </td>
                                                        <td>  <input type="time" id="Stime">  </td>
                                                        <td>  <input type="time" id="Etime">  </td>
                                                        <td>  <input type="text" id="totalhours13" onkeyup="sum();"></td>
                                                        <td>  <input type="text" id="Mileage">  </td> 
                                                        <tr id ="row">
                                                            <td>  <input type="date" id="Date"> </td>
                                                            <td>  <input type="number" id="lognumber">  </td>
                                                            <td>  <input type="text" id="BU">  </td>
                                                            <td>  <input type="text" id="User">  </td>
                                                            <td>  <input type="text" id="ActivityDescription">  </td>
                                                            <td>  <input type="time" id="Stime">  </td>
                                                            <td>  <input type="time" id="Etime">  </td>
                                                            <td>  <input type="text" id="totalhours14" onkeyup="sum();"></td>
                                                            <td>  <input type="text" id="Mileage">  </td> 
                                                            <tr id ="row">
                                                                <td>  <input type="date" id="Date"> </td>
                                                                <td>  <input type="number" id="lognumber">  </td>
                                                                <td>  <input type="text" id="BU">  </td>
                                                                <td>  <input type="text" id="User">  </td>
                                                                <td>  <input type="text" id="ActivityDescription">  </td>
                                                                <td>  <input type="time" id="Stime">  </td>
                                                                <td>  <input type="time" id="Etime">  </td>
                                                                <td>  <input type="text" id="totalhours15" onkeyup="sum();"></td>
                                                                <td>  <input type="text" id="Mileage">  </td> 
                                                                <tr id ="row">
                                                                    <td>  <input type="date" id="Date"> </td>
                                                                    <td>  <input type="number" id="lognumber">  </td>
                                                                    <td>  <input type="text" id="BU">  </td>
                                                                    <td>  <input type="text" id="User">  </td>
                                                                    <td>  <input type="text" id="ActivityDescription">  </td>
                                                                    <td>  <input type="time" id="Stime">  </td>
                                                                    <td>  <input type="time" id="Etime">  </td>
                                                                    <td>  <input type="text" id="totalhours16" onkeyup="sum();"></td>
                                                                    <td>  <input type="text" id="Mileage">  </td> 
                                                                    <tr id ="row">
                                                                        <td>  <input type="date" id="Date"> </td>
                                                                        <td>  <input type="number" id="lognumber">  </td>
                                                                        <td>  <input type="text" id="BU">  </td>
                                                                        <td>  <input type="text" id="User">  </td>
                                                                        <td>  <input type="text" id="ActivityDescription">  </td>
                                                                        <td>  <input type="time" id="Stime">  </td>
                                                                        <td>  <input type="time" id="Etime">  </td>
                                                                        <td>  <input type="text" id="totalhours17" onkeyup="sum();"></td>
                                                                        <td>  <input type="text" id="Mileage">  </td> 
                                                                        <tr id ="row">
                                                                            <td>  <input type="date" id="Date"> </td>
                                                                            <td>  <input type="number" id="lognumber">  </td>
                                                                            <td>  <input type="text" id="BU">  </td>
                                                                            <td>  <input type="text" id="User">  </td>
                                                                            <td>  <input type="text" id="ActivityDescription">  </td>
                                                                            <td>  <input type="time" id="Stime">  </td>
                                                                            <td>  <input type="time" id="Etime">  </td>
                                                                            <td>  <input type="text" id="totalhours18" onkeyup="sum();"></td>
                                                                            <td>  <input type="text" id="Mileage">  </td> 
                                                                            <tr id ="row">
                                                                                <td>  <input type="date" id="Date"> </td>
                                                                                <td>  <input type="number" id="lognumber">  </td>
                                                                                <td>  <input type="text" id="BU">  </td>
                                                                                <td>  <input type="text" id="User">  </td>
                                                                                <td>  <input type="text" id="ActivityDescription">  </td>
                                                                                <td>  <input type="time" id="Stime">  </td>
                                                                                <td>  <input type="time" id="Etime">  </td>
                                                                                <td>  <input type="text" id="totalhours19" onkeyup="sum();"></td>
                                                                                <td>  <input type="text" id="Mileage">  </td> 
                                                                                <tr id ="row">
                                                                                    <td>  <input type="date" id="Date"> </td>
                                                                                    <td>  <input type="number" id="lognumber">  </td>
                                                                                    <td>  <input type="text" id="BU">  </td>
                                                                                    <td>  <input type="text" id="User">  </td>
                                                                                    <td>  <input type="text" id="ActivityDescription">  </td>
                                                                                    <td>  <input type="time" id="Stime">  </td>
                                                                                    <td>  <input type="time" id="Etime">  </td>
                                                                                    <td>  <input type="text" id="totalhours20" onkeyup="sum();"></td>
                                                                                    <td>  <input type="text" id="Mileage">  </td> 
                                                        
  </tr>
        
</table>

<button id="btntotalHours" style="background-color: orange;">SAVE</button>
<input type="text" id="lastTotalhour" style= "margin-left:154vh; border-style:groove;">        
<a href="logout.php" style="margin-left:9vh;">Logout</a>

</section>

</div>
</body>

</html>