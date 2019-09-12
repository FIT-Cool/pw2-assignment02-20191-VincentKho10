<?php
$btnPatClicked = filter_input(0,"btnPatClicked");
if(isset($btnPatClicked)){
    $mrn = filter_input(0,"mrn");
    $cidn = filter_input(0,"cidn");
    $nme = filter_input(0,"nme");
    $addr = filter_input(0,"adr");
    $bhp = filter_input(0,"bhp");
    $bhd = filter_input(0,"bhd");
    $phn = filter_input(0,"phn");
    $pto = filter_input(0,"pto");
    $ins = filter_input(0,"ins");
    addPatient($mrn,$cidn,$nme,$addr,$bhp,$bhd,$phn,$pto,$ins);
}
?>

<fieldset>
    <legend>manipulate data</legend>
    <form method="post">
        <label for="medrecnum">med record number:</label><br>
        <input type="text" id="medrecnum" name="mrn">
        <br>
        <label for="citidnum">citizen id number:</label><br>
        <input type="text" id="citidnum" name="cidn">
        <br>
        <label for="name">name:</label><br>
        <input type="text" id="name" name="nme">
        <br>
        <label for="addr">address:</label><br>
        <input type="text" id="addr" name="adr">
        <br>
        <label for="bipl">birth place:</label><br>
        <input type="text" id="bipl" name="bhp">
        <br>
        <label for="bida">birth date:</label><br>
        <input type="date" id="bida" name="bhd">
        <br>
        <label for="phnum">phone number:</label><br>
        <input type="text" id="phnum" name="phn">
        <br>
        <label for="phto">photo:</label><br>
        <input type="text" id="phto" name="pto">
        <br>
        <label for="insurance">insurance:</label><br>
        <select id="insurance" name="ins">
        <?php
        $insurances = getAllInsurance();
        foreach ($insurances as $item) {
            echo "<option value='".$item['id']."'>".$item['name_class']."</option>";
        }
        ?>
        </select>
        <button type="submit" name="btnPatClicked">add</button>
    </form>
</fieldset>

<table id="myTable">
    <thead>
    <tr>
        <td>med record number</td>
        <td>citizen id number</td>
        <td>name</td>
        <td>address</td>
        <td>birth place</td>
        <td>birth date</td>
        <td>phone number</td>
        <td>photo </td>
        <td>insurance</td>
    </tr>
    </thead>
    <tbody>
    <?php
    $patients = getAllPatient();
    foreach ($patients as $patient){
        echo '<tr>'
        .'<td>'.$patient["med_record_number"].'</td>'
        .'<td>'.$patient["citizen_id_number"].'</td>'
        .'<td>'.$patient["name"].'</td>'
        .'<td>'.$patient["address"].'</td>'
        .'<td>'.$patient["birth_place"].'</td>'
        .'<td>'.$patient["birth_date"].'</td>'
        .'<td>'.$patient["phone_number"].'</td>'
        .'<td>'.$patient["photo"].'</td>'
        .'<td>'.$patient["name_class"].'</td>'
    .'</tr>';
    }
    ?>
    </tbody>
</table>
<?php
