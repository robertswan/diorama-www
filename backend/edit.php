<?php

  include_once "config.php";

  if(isset($_POST["update"]))
  {

    $id              = mysqli_real_escape_string($conn, $_POST["id"]);
    $title           = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary         = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content         = mysqli_real_escape_string($conn, $_POST["content"]);
    $publicationDate = mysqli_real_escape_string($conn, $_POST["pubDate"]);

    //Check if things are empty
    if(empty($title) || empty($summary) || empty($content) || empty($publicationDate))
    {
      if(empty($title))
      {
        echo "Title field empty";
      }

      if(empty($summary))
      {
        echo "Summary field empty";
      }

      if(empty($content))
      {
        echo "Content field empty";
      }

      if(empty($publicationDate))
      {
        echo "Publication Date empty";
      }
    }
    else
    {
      $result = mysqli_query($conn, "UPDATE updates SET pubDate='$publicationDate', title='$title', summary='$summary', content='$content' WHERE id='$id'");
      header("location: panel.php");
    }
  }
?>

<?php

  $id = $_GET['id'];

  $result = mysqli_query($conn, "SELECT * FROM updates WHERE id=$id");

  while($res = mysqli_fetch_array($result))
  {
    $title = $res["title"];
    $summary = $res["summary"];
    $content = $res["content"];
    $pubDate = $res["pubDate"];
  }
?>

<a href="panel.php">Panel Home</a><br><br>

<form name="edit" method="POST", action=edit.php>
  <input type="text" name="title" value="<?php echo $title;?>">
  <input type="text" name="summary" value="<?php echo $summary; ?>">
  <textarea name="content"><?php echo htmlspecialchars($content); ?></textarea>
  <input type="date" name="pubDate" value="<?php echo $pubDate; ?>">

  <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>

  <input type="submit" name="update" value="Update">
</form>
