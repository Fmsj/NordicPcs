<?php

function query(/* $sql [, ...] */)

  {
    
    $sql = func_get_arg(0);

    
    $parameters = array_slice(func_get_args(), 1);

    
    static $handle;
    if (!isset($handle))
      {
        try{
          
          $handle = new PDO("mysql:host=". SERVERNAME . ";dbname=" . DBNAME .";port=" . PORT, USERNAME, PASSWORD);

          
          $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        catch (Exception $e)
        {
          trigger_error($e->getMessage(), E_USER_ERROR);
          exit;
        }
     }

      
      $statement = $handle->prepare($sql);
      if ($statement === false)
      {
         //trigger (big, orange) error
         trigger_error($handle->errorInfo()[2], E_USER_ERROR);
         exit;
      }

      //execute SQL statement
      $results = $statement->execute($parameters);

      // return result set's rows, if any
      if($results !== false)
      {
         return $statement->fetchAll(PDO::FETCH_ASSOC);
      }
      else
      {
        return false;
      }
  }
function redirect()
{
  header("Location: http://example.com");
}
?>


