

<!DOCTYPE html>
<html>
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: greenyellow;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: green;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid green;
    width: 70%;
    border-left: none;
    height: 300px;
}
</style>
</head>
<body>
<h2>STUDENT DATABASE</h2>
<p>Click on the buttons inside the tabbed menu:</p>


<div class="tab">
  <button class="tablinks" onclick="db_fnx(event, 'add')" id="defaultOpen">ADD</button>
  <button class="tablinks" onclick="db_fnx(event, 'delete')">DELETE STUDENT</button>
  <button class="tablinks" onclick="db_fnx(event, 'edit')">EDIT</button>
  <button class="tablinks" onclick="db_fnx(event, 'view')">VIEW</button>
</div>

<div id="add" class="tabcontent">
    <form  >    >
        <table>
            <tbody>
                <tr>
                    <td>
                        id:
                    </td>
                    <td>
                        <input type='text' placeholder='Stu_id' name='stu_id'>
                    </td>
                </tr>
                <tr>
                    <td>
                        prefix:
                    </td>
                    <td>
                        <input type='text' placeholder='Prefix' name ='prefix'>
                    </td>
                </tr>
                <tr>
                    <td>
                        first_name:
                    </td>
                    <td>
                         <input type='text' placeholder='First Name' name ='first_name'>
                    </td>
                </tr><br>
                <tr>
                    <td>
                        middle_name:
                    </td>
                    <td>
                         <input type='text' placeholder='Middle Name' name ='middle_name'>
                    </td>
                </tr>
                <tr>
                    <td>
                        last_name:
                    </td>
                    <td>
                         <input type='text' placeholder='Last Name' name ='last_name'>
                    </td>
                </tr>
                <tr>
                    <td>
                        major:
                    </td>
                    <td>
                         <input type='text' placeholder='Major' name ='major'>
                    </td>
                </tr>
                <tr>
                    <td>
                        department:
                    </td>
                    <td>
                         <input type='text' placeholder='Department' name ='department'>
                    </td>
                </tr>
                <tr>
                    <td>
                        phone_num:
                    </td>
                    <td>
                         <input type='text' placeholder='Phone Number' name ='phone_num'>
                    </td>
                </tr>
                <tr>
                    <td>
                        DoB:
                    </td>
                    <td>
                         <input type='date' placeholder='Date Of Birth' name ='DoB'>
                    </td>
                </tr><br>
                <tr>
                    <td>
                        place of stay:
                    </td>
                    <td>
                         <input type='text' placeholder='Palce Of Stay' name ='place_of_stay'>
                    </td>
                </tr>
                <tr>
                    <td>
                        House number:
                    </td>
                    <td>
                         <input type='text' placeholder='House Number' name ='house_num'>
                    </td>
                </tr>
                <tr>
                    <td>
                        Marital Status:
                    </td>
                    <td>
                         <input type='text' placeholder='Marital Staus' name ='marital_status'>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type='email' placeholder='Email' name ='Email'>
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender:
                    </td>
                    <td>
                         <input type='text' placeholder='Gender' name ='Gender'>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Nationality:
                    </td>
                    <td>
                        <input type='text' placeholder='Nationality' name='nationality'>
                    </td>
                </tr><br>
                <tr>
                    <td>
                        Religion:
                    </td>
                    <td>
                         <input type='text' placeholder='Region' name ='Religion'>
                    </td>
                </tr><br>
                 <tr>
                    <td>
                       <button name="submitbtn"  name="submit" >Submit</button>
                    </td>
                   
                </tr>
            </tbody>
        </table>

        
    </form>
</div>

    <div id="delete" class="tabcontent">
          
    


    </div>

        <div id="edit" class="tabcontent">
            jdhhgfgehshshds
        </div>
    
            <div id="view" class="tabcontent">
                   dhdhfbdhfdfgdygdy
            </div>

<script>
function db_fnx(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 


