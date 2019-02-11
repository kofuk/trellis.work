<?php
function section_title (string $title)
{
?>
<h2><?= $title ?></h2>
<?php
}

function include_code (string $filename)
{
        $ret;
        passthru ("pygmentize -f html $filename", $ret);
        if ($ret !== 0)
        {
                exit (1);
        }
}
