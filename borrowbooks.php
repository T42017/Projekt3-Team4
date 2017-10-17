<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Bibliomania</title>
</head>
<body>
	<div class="hole-page">	
		<?php include 'importheader.php'; 
        require 'DatabasConnection.php';
        ?>
        
        <table>
            <form action="borrowbooks.php" method = "post">
                <tr>
                    <td>
                        <label for = "isbn">
                            ISBN
                        </label>
                    </td>
                    <td class="addbook">
                        <input type="text" name="isbn">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for = "titel">
                            Titel
                        </label>
                    </td>
                    <td class="addbook">
                        <input type="text" name="titel">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for = "kategori">
                            Kategori
                        </label>
                    </td>
                    <td class="addbook">
                        <input type="text" name="kategori">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for = "år">
                            Utgivningsår
                        </label>
                    </td>
                    <td class="addbook">
                        <input type="date" name="år">
                    </td>
                </tr>
                <td>
                    <input type="submit" value="Submit">
                </td>
            </form>
        </table>
        
	</div>
    <?php 
        if(isset($_POST["isbn"]) && isset($_POST["titel"]) && isset($_POST["kategori"]) && isset($_POST["år"])){
            $isbn = $_POST["isbn"];
            $titel = $_POST["titel"];
            $kategori = $_POST["kategori"];
            $år = $_POST["år"];
            $lånad = $_POST["kategori"];
            
            $query = "INSERT INTO böcker VALUES(:isbn, :titel, :kategori, :år, :lånad);";
            $stmt = $db->prepare($query);
            $stmt -> execute(array(
                ":isbn"=> $isbn,
                ":titel"=> $titel,
                ":kategori"=> $kategori,
                ":år"=> $år,
                ":lånad"=> $lånad
            ));
            
            echo "isbn: $isbn <br>titel: $titel <br>kategori: $kategori <br>år: $år";
        }
        else {
            echo "Var snäll och fyll i allt!";
        }
    ?>
</body>
</html>