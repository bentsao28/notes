<?php
  foreach($notes as $note)
  {  ?>
    <div class="notes">
        <form action="/notes/update/<?= $note['id'] ?>" method="post">
	        <h3><?= $note['name'] ?></h3>
	        <!-- <a href="/notes/destroy/<?= $note['id'] ?>">delete</a> -->
	        <textarea name="note" style="height:150px;"><?= $note['description'] ?></textarea>
	        <input type="submit" value="update">
	    </form>
	    <form action="notes/destroy/<?= $note['id'] ?>" method="post"> 
	    	<input type="submit" value="delete">
	    </form>
    </div>
<?php
  }  ?>