<?php include "layouts/header.php"?>
<body>
<div class="container">
        <h2 class="text-center pt-4" style="color: black;">Request-Form Data</h2>

        <br>
        <div class="table-responsive-sm">
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead style="color: black;">
                    <tr>
                        <th class="text-center">S.No</S></th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email-ID</th>
                        <th class="text-center">Contact number</th>
                        <th class="text-center">Condition</th>
                        <th class="text-center">Need</th>
                        <th class="text-center">Address</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'config.php';

                    $sql = "SELECT * FROM `request_form`";
                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {

                    ?>

                        <tr style="color: black;">
                            <td class="py-2"><?php echo $rows['id']; ?></td>
                            <td class="py-2"><?php echo $rows['name']; ?></td>
                            <td class="py-2"><?php echo $rows['email']; ?></td>
                            <td class="py-2"><?php echo $rows['number']; ?></td>
                            <td class="py-2"><?php echo $rows['condition']; ?></td>
                            <td class="py-2"><?php echo $rows['need']; ?></td>
                            <td class="py-2"><?php echo $rows['address']; ?></td>
                        </tr>

                    <?php
                    }

                    ?>

                </tbody>


            </table>

        </div>

    </div>
</body>
<?php include  "layouts/footer.php"?>