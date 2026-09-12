<?php
/* Shared helpers + data loader for the /architecture/<country>/ project pages.
   Data lives in _data.json (built from research, keyed as a flat list of projects). */

$ARCH_ISO = [
  'France'=>'FR','Spain'=>'ES','Italy'=>'IT','United Kingdom'=>'GB','Germany'=>'DE',
  'Netherlands'=>'NL','United States'=>'US','Japan'=>'JP','China'=>'CN',
  'United Arab Emirates'=>'AE','Brazil'=>'BR','Australia'=>'AU','Denmark'=>'DK',
  'Switzerland'=>'CH','Portugal'=>'PT','Turkey'=>'TR','Singapore'=>'SG','India'=>'IN',
  'Mexico'=>'MX','Pakistan'=>'PK','Norway'=>'NO','Sweden'=>'SE','Austria'=>'AT',
  'Canada'=>'CA','South Korea'=>'KR','Greece'=>'GR','Russia'=>'RU','Belgium'=>'BE',
  'Finland'=>'FI','Ireland'=>'IE','Argentina'=>'AR','Chile'=>'CL','Sri Lanka'=>'LK',
  'Malaysia'=>'MY','Vietnam'=>'VN','Bangladesh'=>'BD','Thailand'=>'TH',
  'Burkina Faso'=>'BF','Ghana'=>'GH','Egypt'=>'EG','Nigeria'=>'NG','Iraq'=>'IQ',
];
$ARCH_REGION = [
  'FR'=>'Europe','ES'=>'Europe','IT'=>'Europe','GB'=>'Europe','DE'=>'Europe','NL'=>'Europe',
  'DK'=>'Europe','CH'=>'Europe','PT'=>'Europe','TR'=>'Europe','NO'=>'Europe','SE'=>'Europe',
  'AT'=>'Europe','GR'=>'Europe','RU'=>'Europe','BE'=>'Europe','FI'=>'Europe','IE'=>'Europe',
  'US'=>'Americas','BR'=>'Americas','MX'=>'Americas','CA'=>'Americas','AR'=>'Americas','CL'=>'Americas',
  'JP'=>'Asia','CN'=>'Asia','SG'=>'Asia','IN'=>'Asia','PK'=>'Asia','KR'=>'Asia',
  'LK'=>'Asia','MY'=>'Asia','VN'=>'Asia','BD'=>'Asia','TH'=>'Asia',
  'AE'=>'Middle East & Africa','BF'=>'Middle East & Africa','GH'=>'Middle East & Africa',
  'EG'=>'Middle East & Africa','NG'=>'Middle East & Africa','IQ'=>'Middle East & Africa',
  'AU'=>'Oceania',
];

function arch_slug($c) { return trim(preg_replace('/[^a-z0-9]+/', '-', strtolower($c)), '-'); }
function arch_flag($iso) { if (!$iso || strlen($iso) != 2) return ''; $f=''; foreach (str_split(strtoupper($iso)) as $c) $f .= mb_chr(0x1F1E6 + (ord($c)-65)); return $f; }
function arch_load() { $f = $_SERVER['DOCUMENT_ROOT'].'/architecture/_data.json'; return is_file($f) ? (json_decode(file_get_contents($f), true) ?: []) : []; }

/* group loaded projects by country name */
function arch_by_country() {
  $out = [];
  foreach (arch_load() as $p) { $c = $p['country'] ?? ''; if ($c==='') continue; $out[$c][] = $p; }
  return $out;
}
