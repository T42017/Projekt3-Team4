
		<?php include 'importheader.php'; 
        require 'DatabasConnection.php';
        ?>
        
        <table class="addbooks">
            <form action="addbooks.php" method = "post">
                <tr>
                    <td class="addbooks">
                        <label for = "isbn">
                            ISBN
                        </label>
                    </td>
                    <td class="addbook">
                        <input type="text" name="isbn">
                    </td>
                </tr>
                <tr>
                    <td class="addbooks">
                        <label for = "title">
                            Title
                        </label>
                    </td>
                    <td class="addbook">
                        <input type="text" name="title">
                    </td>
                </tr>
                <tr>
                    <td class="addbooks">
                        <label for = "author">
                            Author
                        </label>
                    </td>
                    <td class="addbook">
                        <input type="text" name="author">
                    </td>
                </tr>
                <tr>
                    <td class="addbooks">
                        <label for = "category">
                            Category
                        </label>
                    </td>
                    <td class="addbook">
                        <input type="text" name="category">
                    </td>
                </tr>
                <tr>
                    <td class="addbooks">
                        <label for = "released">
                            Released
                        </label>
                    </td>
                    <td class="addbook">
                        <input type="date" name="released">
                    </td>
                </tr>
                <td class="addbooks">
                    <input class="submit" type="submit" value="Submit">
                </td>
            </form>
        </table>
        
	</div>
    <div class="checkadd">
    <?php 
        if(isset($_POST["isbn"]) && isset($_POST["title"]) && isset($_POST["author"]) && isset($_POST["category"]) && isset($_POST["released"])){

            $isbn = $_POST["isbn"];
            $title = $_POST["title"];
            $author = $_POST["author"];
            $category = $_POST["category"];
            $released = $_POST["released"];
            
            $querybook = "INSERT INTO books (isbn, title, category, released) VALUES(:isbn, :title, :category, :released);";
            $queryauthor = "INSERT INTO authors VALUES (:name, NULL)";
            $stmt = $db->prepare($querybook);
            $stmt -> execute(array(
                ":isbn"=> $isbn,
                ":title"=> $title,
                ":category"=> $category,
                ":released"=> $released
            ));
            $stmt = $db->prepare($queryauthor);
            $stmt -> execute(array(
                ":name"=> $author
            ));
            
            echo 
                "ISBN: $isbn <br>
                Title: $title <br>
                Author: $author <br>
                Category: $category <br>
                Released: $released";
        }
        else {
            echo "Please fill out everything!";
        }
    ?>
    </div>
</body>
</html>