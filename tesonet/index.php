<?php
$log_directory = 'C:\Users\Karlas\Documents\GitHub\tesonet';
$file = $log_directory;
$fileSizeBytes = filesize($file);
$results_array = array();

if (is_dir($log_directory))
{
        if ($handle = opendir($log_directory))
        {
                //Notice the parentheses I added:
                while(($file = readdir($handle)) !== FALSE)
                {
                        $results_array[] = $file;
                }
                closedir($handle);
        }
}
echo "$log_directory";

//Output findings
foreach($results_array as $value)
{
    echo $value ." ".$fileSizeBytes. '<br />';
}
?>
<?php
// if form is submitted
if(isset($_POST["pname"])){
  // create folder
  mkdir('C:\Users\Karlas\Documents\GitHub\tesonet\..' . $_POST["pname"], 0655); // Creates a folder in this directory named whatever value returned by pname input
}
?>

<form method="POST">
  <input type="text" id="pname" name="pname" placeholder="Enter the name">
  <input type="submit" class="button" value="Next">
</form>
