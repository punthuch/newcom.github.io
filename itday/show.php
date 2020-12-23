<?php
$csv = file_get_contents("https://docs.google.com/spreadsheets/d/e/2PACX-1vTeJD5xikljVuvOGpBufYFDxVbq5JO_hXVh2BoLbdYMj0MYMyJN9blZchQg4nX5bS-BeQt9fXSAor0p/pub?output=csv");

echo $csv;

?>