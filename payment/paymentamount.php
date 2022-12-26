<?php
            if(isset($POST['submit']))
            {
                
                $_SESSION['address'] = $_POST['address'];
                $_SESSION['nicnum'] = $_POST['nicnum'];

                $address = $_SESSION['address'];
                $nicNum = $_SESSION['nicnum'];
            }

        ?>



<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title><?php echo $fetch_info['name'] ?> | Home</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
            </script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="paymentamount.js"></script>
        
    </head>

    <body>


    <?php

        //let's start the session
        session_start();

    ?>
        <!--this is for full payment total calculation-->
        <div class="container mt-4">
            <h2>Additional Requirements</h2>
            <form class="form-group" action="uploadslip.php" method="post">
                <div class="table-responsive-md">
                    <table class="table table-hover">
                        <thead>    <!--table heading-->
                            <tr>
                            <th scope="col">Package</th>
                            <th scope="col">Option</th>
                            <th scope="col">Hours</th>
                            <th scope="col">Price</th>
                            </tr>
                        </thead>

                        <tbody class="table-group-divider">
                            <tr>
                                <td>Hall Package</td>
                                <td>

                                    <select id="inputState" class="form-select form-select-sm">
                                        <option selected value="yes">Yes</option>
                                    </select>
                                </td>
                                <td>
                                
                                    <select id="package" class="form-select form-select-sm qty" name="Package" onChange="getPackagetype(this.value)" required>
                                        <!--<option selected value="0">----</option>-->
                                        <option selected value="4000">4 Hours</option>
                                        <option value="8000">8 Hours</option>
                                    </select>   <!--choose for wich package comfotable for client-->
                                </td>
                                <td>
                                    <input type="number" name="packageprice" class="form-control form-control-sm" readonly value="4000" id="package_price">
                                </td>
                            </tr>

                            <tr>
                                <td>Decorations (In Hours)</td>  <!--option select hall decorations nessecery or not-->
                                <td>
                                    <select id="is_decoration" class="form-select form-select-sm" name="decoration_option" onChange="decorationCheck(); calculateTotal();" required>
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm qty" name="decoration" id="decoration_hours" min="1" max="24">
                                </td>
                                <td>
                                    <input type="number" name="decoration_price" class="form-control form-control-sm" readonly min="0" id="dec_price" value="0">
                                </td>
                            </tr>

                            <tr>
                                <td>Rehearsal (In Hours)</td>  <!--option select for rehearsal nessecery or not-->
                                <td>
                                    <select id="is_rehearsal" class="form-select form-select-sm" name="rehearsal_option" onChange="rehearsalCheck(); calculateTotal();" required>
                                        <option selected value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm qty" name="rehearsal" id="rehearsal_hours" min="2" max="24">
                                </td>
                                <td>
                                    <input type="number" name="rehearsalprice" class="form-control form-control-sm" readonly min="0" id="rehearsal_price">
                                </td>
                            </tr>

                            <tr>
                                <td>University Security (In Hours)</td>  <!--option select for take security by university security or not-->
                                <td>
                                    <select id="is_security" class="form-select form-select-sm" name="security_option" onChange="securityCheck(); calculateTotal();" required>
                                        <option selected value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="security_hours" class="form-select form-select-sm qty" name="security_hours_option">
                                        <option selected value="0">----</option>
                                        <option value="7">7 Hours</option>
                                        <option value="11">11 Hours</option>
                                    </select>
                                    <!--<input type="number" class="form-control form-control-sm qty" name="security" id="security_hours" placeholder="0" min="2" max="24">-->
                                </td>
                                <td>
                                    <input type="number" name="securityPrice" class="form-control form-control-sm" readonly value="0" id="security_price">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="3" class="total">Total Amount</td>
                                <td>
                                    <input type="number" name="total_price" class="form-control form-control-sm" name="total_amount" readonly id="total_id" value="4000"> 
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-warning">Proceed to pay</button>
                </div>
            </form>

        </div>

        <?php
            if(isset($_POST['submit']))
            {
                //finally, let's store our posted values in the session variables
                $_SESSION['packageprice'] = $_POST['packageprice'];
                $_SESSION['decoration_price'] = $_POST['decoration_price'];
                $_SESSION['rehearsalprice'] = $_POST['rehearsalprice'];
                $_SESSION['securityPrice'] = $_POST['securityPrice'];
                $_SESSION['total_price'] = $_POST['total_price'];

            }
        ?>
    </body>



</html>