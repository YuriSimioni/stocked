<?php

require_once "../../config/Project.php";
$Project = new Project();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="../../">
    <title><?php echo $Project->getProjectName();?> | Login</title>
    <link rel="stylesheet" href="./public/css/root.css">
    <link rel="stylesheet" href="./public/css/views.login.css">
</head>
<body>
    <form id="form" method="POST" autocomplete="off">
        <h1 id="title-form">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000"><path d="M200-80q-33 0-56.5-23.5T120-160v-451q-18-11-29-28.5T80-680v-120q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v120q0 23-11 40.5T840-611v451q0 33-23.5 56.5T760-80H200Zm0-520v440h560v-440H200Zm-40-80h640v-120H160v120Zm240 280h160q17 0 28.5-11.5T600-440q0-17-11.5-28.5T560-480H400q-17 0-28.5 11.5T360-440q0 17 11.5 28.5T400-400Zm80 20Z"/></svg>
            <?php echo $Project->getProjectName();?>
        </h1>
        <div id="inputs">
            <div class="input-box">
                <input type="text" id="username" placeholder="Username" required maxlength="30">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
            </div>
            <div class="input-box">
                <input type="password" id="password" placeholder="Password" required>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000"><path d="M280-400q-33 0-56.5-23.5T200-480q0-33 23.5-56.5T280-560q33 0 56.5 23.5T360-480q0 33-23.5 56.5T280-400Zm0 160q-100 0-170-70T40-480q0-100 70-170t170-70q67 0 121.5 33t86.5 87h335q8 0 15.5 3t13.5 9l80 80q6 6 8.5 13t2.5 15q0 8-2.5 15t-8.5 13L805-325q-5 5-12 8t-14 4q-7 1-14-1t-13-7l-52-39-57 43q-5 4-11 6t-12 2q-6 0-12.5-2t-11.5-6l-61-43h-47q-32 54-86.5 87T280-240Zm0-80q56 0 98.5-34t56.5-86h125l58 41v.5-.5l82-61 71 55 75-75h-.5.5l-40-40v-.5.5H435q-14-52-56.5-86T280-640q-66 0-113 47t-47 113q0 66 47 113t113 47Z"/></svg>
            </div>
        </div>
        <div id="last-session">
            <label for="btnSubmit">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000"><path d="M520-120q-17 0-28.5-11.5T480-160q0-17 11.5-28.5T520-200h240v-560H520q-17 0-28.5-11.5T480-800q0-17 11.5-28.5T520-840h240q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H520Zm-73-320H160q-17 0-28.5-11.5T120-480q0-17 11.5-28.5T160-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L429-309q-12 12-28.5 11.5T372-310q-11-12-10.5-28.5T373-366l74-74Z"/></svg>
                Login
            </label>
            <div id="msg-info">
            </div>
        </div>
        <input type="submit" value="" hidden id="btnSubmit">
    </form>
</body>
</html>