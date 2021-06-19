<?php include "layouts/header.php"?>
<body>
    <div class="container">
        <h2 class="text-center pt-4" style="color: black;">Users Data</h2>

        <br>
        <div class="table-responsive-sm">
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead style="color: black;">
                    <tr>
                        <th class="text-center">S.No</S></th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Contact number</th>
                        <th class="text-center">Email-ID</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'config.php';

                    $sql = "SELECT * FROM `users`";
                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {

                    ?>

                        <tr style="color: black;">
                            <td class="py-2"><?php echo $rows['id']; ?></td>
                            <td class="py-2"><?php echo $rows['name']; ?></td>
                            <td class="py-2"><?php echo $rows['number']; ?></td>
                            <td class="py-2"><?php echo $rows['email']; ?></td>
                        </tr>

                    <?php
                    }

                    ?>

                </tbody>


            </table>

        </div>

    </div>
    <?php include "layouts/footer.php"?>
</body>

</html>