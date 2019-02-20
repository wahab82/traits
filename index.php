<?php

include "mobile.php";
include "laser.php";
include "projector.php";

class Galaxy extends Mobile {
	use Laser, Projector {
		Projector::power insteadof Laser;
		Laser::power as Lpower;
	}
}

$galaxy = new Galaxy;
$galaxy->battery();
$galaxy->power();
$galaxy->Lpower();
$galaxy->range();