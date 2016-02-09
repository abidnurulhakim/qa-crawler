<?php
set_time_limit(0);
$longopts  = array(
    "url::",     // Required value
);
$options = getopt('', $longopts);
$run = false;
if (isset($options['url'])) {
	$run = true;
	$url = $options['url'];
}
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
