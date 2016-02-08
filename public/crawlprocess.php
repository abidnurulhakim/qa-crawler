<?php
ignore_user_abort(true);
set_time_limit(0);

$url = $argv[1];
$run = true;
$fail_count = 0;
while($run && $fail_count < 3) {
    try {
        $data = json_decode(file_get_contents($url));
        if ($data->status == 201) {
            $run = false;
        }
    } catch (Exception $e) {
        $fail_count++;
    }
}
exit;

?>
