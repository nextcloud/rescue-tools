<?php
// use prepared test setup
include_once(__DIR__."/main.php");

final class single_file extends main {
	const EXTERNAL_STORAGES = [];
	const INSTANCEID        = "ocsm6z97mzli";
	const RECOVERY_PASSWORD = "recovery";
	const SECRET            = "UTdm0FJIoWHfuolkucrM0aRyXUP56O27MTnu1oM+5IcR1bn9";
	const SOURCEPATHS       = ["/admin/files/Nextcloud.mp4"];
	const USER_PASSWORDS    = ["admin" => "admin"];
	const VERSION           = "single_file";
}
