
				<?php include 'importheader.php';
				require 'DatabasConnection.php';
				?>
				
			<div class="allbookspage">
				<table class="allbookstable">
					<th class="allbooks">
						Title
					</th>
					<th class="allbooks">
						Author
					</th>
					<th class="allbooks">
						Released
					</th>
					<th class="allbooks">
						Category
					</th>				
					<th class="allbooks">
						ISBN
					</th>
        			<?php 
        				foreach ($books as $book): ?>
			            <tr class="allbooks">
			                <td> 
			                    <?php echo $book["title"]; ?>
			                </td>

			                <td>
			                    Author
			                </td>

			                <td>
			                    <?php echo $book["released"]; ?>
			                </td>

			                <td>
			                	<?php echo $book["category"]; ?>
			                </td>

			                <td> 
			                    <?php echo $book["isbn"]; ?>
			                </td>
			            </tr>
			        <?php endforeach; ?>
			    </table>
			</div>
		</div>
<?php include 'importfooter.php'; ?>