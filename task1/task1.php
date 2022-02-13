<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Registration Form</h1>
    <br>
    <hr>
    <form action="#">
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Lirst Name:</td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="text" name="age"></td>
            </tr> 
            <tr>
                <td>Designation:</td>
                <td><input type="radio" name="des">Junior Programmer
                    <input type="radio" name="des">Senior Programmer
                    <input type="radio" name="des">Project Lead
                </td>
            </tr>
            <tr>
                <td>Prefferd language:</td>
                <td><input type="checkbox"> JAVA  
                    <input type="checkbox"> PHP  
                    <input type="checkbox"> C++  
                </td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td>Pease choose a file:</td>
                <td><input type="file"></td>
            </tr>
        </table>
        <input type="submit" value="Submit"> 
        <input type="Reset">
    </form>

</body>
</html>