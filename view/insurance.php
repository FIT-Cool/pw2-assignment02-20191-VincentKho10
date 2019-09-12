<?php
$addBtnClicked=filter_input(0,"addBtnClicked");
if(isset($addBtnClicked)){
    $name_class = filter_input(0,"name_class");
    addInsurance($name_class);
}
?>

<fieldset>
    <legend>
        manipulasi data
    </legend>
    <form method="post">
        <label for="name">name class: </label>
        <input type="text" id="name" name="name_class">
        <button type="submit" name="addBtnClicked">add</button>
    </form>
</fieldset>

<table id="myTable">
    <thead>
    <tr>
        <th>id</th>
        <th>nama class</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $insurances = getAllInsurance();
    foreach($insurances as $insurance)
    {
        echo"<tr>";
        echo"<td>". $insurance['id'] ."</td>";
        echo"<td>". $insurance['name_class'] ."</td>";
        echo"</tr>";
    }
    ?>
    </tbody>
</table>