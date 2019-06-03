<?php
$title = "Book Your Trip";
include '_top.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div class="form" style="max-width: 1200px; margin: 0 auto;">
        <div class="column">
            <h1 class="title">Book a Cruise</h1><label for="fullname">Full Name</label><br>
            <input id="fullname" maxlength="200" name="fullname" placeholder="Enter Full Name..." required="" size="200" type="text"><br>
            <label for="address">Address:</label><br>
            <input id="address" maxlength="200" name="address" placeholder="Enter Address..." size="200" type="text"><br>
            <label for="city">City</label><br>
            <input id="city" maxlength="200" name="city" placeholder="Enter City..." size="200" type="text"><br>
            <label for="state">State</label><br>
            <form action="" method="get">
                <select class="states" name="state">
                    <option value="AL">
                        Alabama
                    </option>
                    <option value="AK">
                        Alaska
                    </option>
                    <option value="AZ">
                        Arizona
                    </option>
                    <option value="AR">
                        Arkansas
                    </option>
                    <option value="CA">
                        California
                    </option>
                    <option value="CO">
                        Colorado
                    </option>
                    <option value="CT">
                        Connecticut
                    </option>
                    <option value="DE">
                        Delaware
                    </option>
                    <option value="FL">
                        Florida
                    </option>
                    <option value="GA">
                        Georgia
                    </option>
                    <option value="HI">
                        Hawaii
                    </option>
                    <option value="ID">
                        Idaho
                    </option>
                    <option value="IL">
                        Illinois
                    </option>
                    <option value="IN">
                        Indiana
                    </option>
                    <option value="IA">
                        Iowa
                    </option>
                    <option value="KS">
                        Kansas
                    </option>
                    <option value="KY">
                        Kentucky
                    </option>
                    <option value="LA">
                        Louisiana
                    </option>
                    <option value="ME">
                        Maine
                    </option>
                    <option value="MD">
                        Maryland
                    </option>
                    <option value="MA">
                        Massachusetts
                    </option>
                    <option value="MI">
                        Michigan
                    </option>
                    <option value="MN">
                        Minnesota
                    </option>
                    <option value="MS">
                        Mississippi
                    </option>
                    <option value="MO">
                        Missouri
                    </option>
                    <option value="MT">
                        Montana
                    </option>
                    <option value="NE">
                        Nebraska
                    </option>
                    <option value="NV">
                        Nevada
                    </option>
                    <option value="NH">
                        New Hampshire
                    </option>
                    <option value="NJ">
                        New Jersey
                    </option>
                    <option value="NM">
                        New Mexico
                    </option>
                    <option value="NY">
                        New York
                    </option>
                    <option value="NC">
                        North Carolina
                    </option>
                    <option value="ND">
                        North Dakota
                    </option>
                    <option value="OH">
                        Ohio
                    </option>
                    <option value="OK">
                        Oklahoma
                    </option>
                    <option value="OR">
                        Oregon
                    </option>
                    <option value="PA">
                        Pennsylvania
                    </option>
                    <option value="RI">
                        Rhode Island
                    </option>
                    <option value="SC">
                        South Carolina
                    </option>
                    <option value="SD">
                        South Dakota
                    </option>
                    <option value="TN">
                        Tennessee
                    </option>
                    <option value="TX">
                        Texas
                    </option>
                    <option value="UT">
                        Utah
                    </option>
                    <option value="VT">
                        Vermont
                    </option>
                    <option value="VA">
                        Virginia
                    </option>
                    <option value="WA">
                        Washington
                    </option>
                    <option value="WV">
                        West Virginia
                    </option>
                    <option value="WI">
                        Wisconsin
                    </option>
                    <option value="WY">
                        Wyoming
                    </option>
                </select>
            </form><br>
            <label for="zipcode">Zipcode</label><br>
            <input id="zipcode" maxlength="9" name="zipcode" placeholder="Enter Zipcode..." size="200" type="text"><br>
            <label for="phonenumber">Phone Number</label><br>
            <input id="phonenumber" maxlength="18" name="phonenumber" placeholder="Enter Phone Number..." size="200" type="tel"><br>
            <label for="emailaddress">Email Address</label><br>
            <input id="emailaddress" maxlength="200" name="emailaddress" placeholder="Enter valid email address..." required="" size="200" type="email"><br>
            <label for="state">Cruises</label><br>
            <form action="" method="get">
                <select class="cruises" name="cruises">
                    <option value="Mexico">
                        Mexico
                    </option>
                    <option value="Disney">
                        Disney
                    </option>
                    <option value="Royal Caribbean">
                        Royal Caribbean
                    </option>
                    <option value="Norwegian">
                        Norwegian
                    </option>
                </select>
            </form><br>
            <button class="button button2" type="button">Book My Cruise</button>
        </div>
    </div><?php include '_bottom.php' ?>
</body>
</html>