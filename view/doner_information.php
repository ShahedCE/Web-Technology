<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Registration Form</title>
</head>
<body>

    <h1><center>Donor Registration Form</center></h1>

    <form action="home.php">
        <fieldset> 
            <legend>Donor Information:</legend><br>

            <table>
                <tr>
                    <td><label>First Name:</label></td>
                    <td><input type="text" id="fname" name="fname"></td>
                </tr>
                <tr>
                    <td><label>Last Name:</label></td>
                    <td><input type="text" id="lname" name="lname"></td>
                </tr>
                <tr>
                    <td><label>Address:</label></td>
                    <td><input type="text" id="address" name="address"></td>
                </tr>
                <tr>
                    <td><label>Email:</label></td>
                    <td><input type="email" id="email" name="email"></td>
                </tr>
                <tr>
                    <td><label>Date of Birth:</label></td>
                    <td><input type="date" name="birth" id="birth"></td>
                </tr>
                <tr>
                    <td><label>Phone Number:</label></td>
                    <td><input type="number" id="phone" name="phone"></td>
                </tr>
                <tr>
                    <td><label>Working:</label></td>
                    <td>
                        <input type="radio" id="student" name="working" value="student">
                        <label>Student</label>

                        <input type="radio" id="business" name="working" value="Business">
                        <label>Businessman</label>

                        <input type="radio" id="job" name="working" value="Job">
                        <label>Job Holder</label>

                        <input type="radio" id="others" name="working" value="Others">
                        <label>Others</label>
                    </td>
                </tr>
                <tr>
                    <td><label>Gender:</label></td>
                    <td>
                        <select id="gender" name="gender">
                            <option value="" disabled selected>Select any one</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Type of Donation:</label></td>
                    <td>
                        <select id="type" name="type">
                            <option value="" disabled selected>Select a type</option>
                            <option value="online">Online Payment</option>
                            <option value="card">Card</option>
                            <option value="cash">Cash</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Amount:</label></td>
                    <td><input type="number" id="amount" name="amount"></td>
                </tr>
                <tr>
                    <td><label>Date:</label></td>
                    <td><input type="month"></td>
                </tr>
                <tr>
                    <td><label>Time:</label></td>
                    <td><input type="time"></td>
                </tr>
            
                <tr>
                    <td><input type="submit" name="submit" id="submit"></td>
                    <td><input type="reset" name="reset" id="reset" value="Reset"></td>
                </tr>
            </table>
            <br>
            <input type="checkbox" name="terms" id="terms">
            <label>Accept terms and conditions</label>
        </fieldset>

      

    </form>

</body>
</html>
