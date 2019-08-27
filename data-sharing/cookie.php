<form> 
    <textarea id="textarea" rows="4" cols="40" name="text" placeholder="optional"></textarea>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_COOKIE["text"])) {
    echo $_COOKIE["text"];
}
?>