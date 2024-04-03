<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration Form</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="col-6 mx-auto">
                <form action="result.php" method="POST"></form>
                    <div class="card mt-3">
                        <div class="card-header bg-dark text-light">                            
                            <h3>Registration Form</h3>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td><input type="text" name="name" class="form-control ms-2" required/></td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>:</td>
                                    <td>
                                        <div class="form-check form-check-inline ms-2">
                                            <input type="radio" class="form-check-input" name="Gender" value="Male" checked/>
                                            <label class="form-check-label">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline ms-2">
                                            <input type="radio" class="form-check-input" name="Gender" value="Female"/>
                                            <label class="form-check-label">Female</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Religion</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-select ms-2" required>
                                            <option disabled selected value>-- Select on Option --</option>
                                            <option>Islamic</option>
                                            <option>Christian</option>
                                            <option>Catholic</option>
                                            <option>Buddha</option>
                                            <option>Hindu</option>
                                            <option>Confucian</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Self Description</td>
                                    <td>:</td>
                                    <td>    
                                        <textarea class="form-control ms-2" rows=5 name="desciption"></textarea>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-outline-dark" value="Submit"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>