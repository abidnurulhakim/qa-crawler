<?php
$redirect = $_GET['redirect'];
ignore_user_abort(true);
set_time_limit(0);
header("Location: $redirect", true);
header("Connection: close");
ob_start();
$size = ob_get_length();
header("Content-Length: $size");
echo json_encode(["status" => 200]);
ob_end_flush();     // Strange behaviour, will not work
flush();            // Unless both are called !
ob_end_clean();

$run = false;
if (isset($_GET['url'])) {
	$run = true;
	$url = $_GET['url'];
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
