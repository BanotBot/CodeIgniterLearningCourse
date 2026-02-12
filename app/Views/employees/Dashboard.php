<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        /* Basic Reset & Font */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 20px;
        }

        main {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .leaveformbtn {}

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            text-align: left;
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f8f9fa;
            color: #555;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Status Pill Styling */
        .status {
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .active {
            background-color: #d4edda;
            color: #155724;
        }

        .on-leave {
            background-color: #fff3cd;
            color: #856404;
        }
    </style>
</head>

<body>

    <main>

        <header>
            <div class="container">
                <button class="btn btn-primary leaveformbtn" data-toggle="modal" data-target="#myModal">
                    Leave Form
                </button>
            </div>
        </header>
        <section>
            <h2>Employee Directory</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Role</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#001</td>
                        <td><strong>Alex Rivers</strong></td>
                        <td>Engineering</td>
                        <td>Senior Developer</td>
                        <td><span class="status active">Active</span></td>
                    </tr>
                    <tr>
                        <td>#002</td>
                        <td><strong>Samira Khan</strong></td>
                        <td>Design</td>
                        <td>UI/UX Lead</td>
                        <td><span class="status active">Active</span></td>
                    </tr>
                    <tr>
                        <td>#003</td>
                        <td><strong>Jordan Lee</strong></td>
                        <td>Marketing</td>
                        <td>Specialist</td>
                        <td><span class="status on-leave">On Leave</span></td>
                    </tr>
                </tbody>
            </table>


            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <form action="" class="form-group">

                            <div class="modal-header">
                                <h4 class="modal-title">Leave Form</h4>
                            </div>


                            <div class="modal-body">
                                <label for="">Fullname : </label>
                                <input type="text" name="fullname" required>
                                <br>

                                <label for="">Date Range : </label>
                                <br>

                                <input type="date" name="leaveDatefrom">
                                <input type="date" name="leaveDateTo">

                                <br>
                                <br>
                                <label for="">Reasons : </label>
                                <textarea name="reasons" id="reasons"></textarea>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>