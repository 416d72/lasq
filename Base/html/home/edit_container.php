<form action="" method="post">
  <table>
    <tr>
      <td>
        <label>Title</label>
      </td>
      <td>
        <input type="text" name="title" placeholder="maximum charachters = 32" value="<?php echo $otitle; ?>"/>
      </td>
    </tr>
    <tr>
        <td>
          <label>Text</label>
        </td>
        <td>
          <textarea name="text" rows="25" cols="125" placeholder="maximum charachters = 10000"><?php echo $otext; ?></textarea>
        </td>
    </tr>
  </table>
  <input type="hidden" name="send" value="send" />
  <tr>
    <td>
      <input type="submit" value="Submit" />
    </td>
    <td>
    </td>
  </tr>
</form>