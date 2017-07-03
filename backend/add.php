<?php
  include_once "config.php";

  if(isset($_POST["Create"]))
  {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $pubDate = mysqli_real_escape_string($conn, $_POST["pubDate"]);

    if(empty($title) || empty($summary) || empty($content) || empty($pubDate))
    {
      if(empty($title))
      {
        echo "Title field is empty";
      }

      if(empty($summary))
      {
        echo "Summary field is empty";
      }

      if(empty($content))
      {
        echo "Content field is empty";
      }

      if(empty($pubDate))
      {
        echo "Publication Date is empty";
      }

      echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    }
    else
    {
        $result = mysqli_query($conn, "INSERT INTO updates(pubDate, title, summary, content) VALUES('$pubDate', '$title', '$summary', '$content')");

        echo "Data added successfully <br/>";
        echo "<a href='panel.php'>Panel Homepage</a>";
    }
  }
?>
