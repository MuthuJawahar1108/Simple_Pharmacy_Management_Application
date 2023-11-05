<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <p>Welcome <span>
            <?php 
                session_start();
                $username=$_SESSION['username'];
                echo "$username"
            ?>
        </span></p>
        <a href="index.html">Logout</a>
    </nav>
    <div class="f-container">
        <form action="#" method="post" class="billing_form">
            <h1 id="billing_heading">Billing details</h1>
            <div class="customer">
                <div class="cust_data">
                    <label for="">Customer Name</label>
                    <input type="text" name="med_name" id=""><br>
                </div>
                <div class="cust_data">
                    <label for="">Customer Phone</label>
                    <input type="text" name="comp_name" id=""><br>
                </div>
            </div>
            <div class="selection">
                <div class="select_data">
                    <label for="">Select Medicine</label><br>
                    <select name="medicines" id="medicines">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="select_data">
                    <label for="">Quantity</label>
                    <input type="text" name="quantity" id=""><br>
                </div>
            </div>
            <div class="button-group">
                <button type="submit">Add</button>
                <button type="reset">Cancel</button>
            </div>
            <div class="bill_table_container">
                <table class="billing_table" border="1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Med_Name</th>
                            <th>CPI</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr class="tot_row">
                            <td colspan="4" id="grand_total">Grand Total</td>
                            <td id="tot_amt">100<span>₹</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</body>
</html>