<?php
function asset (string $name)
{
    return "https://assets.trellis.work/$name";
}

function safe_passthru (string $cmd)
{
    $ret;
    passthru ($cmd, $ret);
    if ($ret !== 0)
    {
        fwrite (STDERR, "Failed to execute command: {$cmd}\nexit code: {$ret}");
        exit (1);
    }
}

function inline_png (string $name, $attrs = NULL)
{
    $src = file_get_contents ("inline-res/images/$name");
    if ($src === FALSE)
    {
        exit (1);
    }
?>
    <img src="data:image/png;base64,<?= base64_encode ($src) ?>"
        <?php
            if ($attrs !== NULL)
            {
                foreach ($attrs as $k => $v)
                {
                    echo "{$k}=\"{$v}\" ";
                }
            }
        ?>
    ><?php /* img */ ?>
<?php
}
