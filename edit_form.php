<?php
    require("connect.php");
    
    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        $sql = "SELECT * FROM info WHERE id = $id";
        $row = mysqli_query($conn, $sql);
        $result = mysqli_fetch_assoc($row);
        
        if(!$result){
            echo "Error: ".$sql."<br>".mysqli_error($conn);
        }
    }
?>
<html lang="th">
    <head>
        <title>Pasi-kun :edit info</title>
    </head>
    
    
    <body>
        
        <form action="data.php" method="post">
            <fieldset>
                <legend>Personal info's</legend>
                
                <label>เงินเดือน(รายปี)</label>
                <input type="number" name="edit_salary" required value="<?php echo $result['salary']?>"><br>
                
                <label>โบนัส</label>
                <input type="number" name="edit_bonus" required value="<?php echo $result['bonus']?>"><br>
                
                <label>รายได้อื่นๆ</label>
                <input type="number" name="edit_income" required value="<?php echo $result['income']?>"><br>
                
                <input type="hidden" name="edit_form_id" value="<?php echo $result['id']?>">
                
                <input type="submit" value="บันทึกข้อมูล"><br>
              
            </fieldset>
        </form>
        
    </body>
    
</html>

