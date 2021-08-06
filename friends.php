<?php

$list = [
	"David Valentino" => [
		"desc" => "Frontend Web Programmer",
		"link" => "https://github.com/dvlwj"
	],
	"Fernanda Ma'rouf" => [
		"desc" => "C/C++, x86-64 programmer, love HPC",
		"link" => "https://github.com/majitenshi"
	],
	"Komori Kuzuyu" => [
		"desc" => "Security Expert, C/C++ programmer (Rest in peace, 2021)",
		"link" => "https://github.com/komori-k"
	],
	"Katon Widada" => [
		"desc" => "Software Engineer (Rest in peace, 2018)",
	],
	"Septian Hari Nugroho" => [
		"desc" => "Software Engineer",
		"link" => "https://github.com/LIQRGV"
	],
	"Slamet Sugandi" => [
		"desc" => "Fullstack Web Programmer, love Laravel",
		"link" => "https://github.com/virusphp"
	]
];

ksort($list);

$r = "";
$i = 0;
foreach ($list as $name => $p) {

	if ($p["link"] ?? 0) {
		$name = "<a class=\"ad\" target=\"_blank\" href=\"{$p["link"]}\">".htmlspecialchars($name)."</a>";
	}
	$r .= "<tr><td>{$i}.</td><td>{$name}</td><td>{$p["desc"]}</td></tr>\n";
	$i++;
}

echo $r;