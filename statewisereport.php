<?php include "layouts/header2.php"?>
<style>
h3.text-center{
    margin-top: 50px;
    font-size: 38px;
    font-family: 'Times New Roman', Times, serif;
    }
#casesList tr:first-child{
    font-weight: 600;
    background-color: #c5edf7;
    font-size: 130%;
    }
#casesList tr td:first-child{
    font-weight: 600;
    width: 20%;
    }
.table{
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 50px;
    }
#casesList tr td:nth-child(2){
    color: red;
    }
#casesList tr td:nth-child(3){
    color: green;
    }
#casesList tr td:nth-child(4){
    color: black;
    }
</style>
<body>
<section>
      <div class="mb-3">
        <h3 class="text-center">Statewise Corona Cases In India</h3>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered table-striped text-center" id="casesList">
                    
            <tr>
                <td>State</td>
                <td>Confirmed</td>
                <td>Recovered</td>
                <td>Deceased</td>
                <td>Active</td>
            </tr>
        
            <?php 
        
                    $data = file_get_contents('https://api.covid19india.org/data.json');
                    $coronalive = json_decode($data,True);
                    $statecount = count($coronalive['statewise']);
                    $i = 1;
                    while($i < $statecount){
                    ?>
                    <tr>
                        <td><?php echo $coronalive['statewise'][$i]['state'];?></td>
                        <td><?php echo $coronalive['statewise'][$i]['confirmed'];?></td>
                        <td><?php echo $coronalive['statewise'][$i]['recovered'];?></td>
                        <td><?php echo $coronalive['statewise'][$i]['deaths'];?></td>
                        <td><?php echo $coronalive['statewise'][$i]['active']. "<br>";?></td>
                    </tr>
                    <?php 
                         $i++;
                    }
                ?>
        </table>
      </div>
    </section>    
</body>
<?php include "layouts/footer.php"?>