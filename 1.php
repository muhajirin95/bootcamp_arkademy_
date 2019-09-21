<?php 

function index($d)
{
return json_encode($d);
}
	$d['name'] = 'taufiq al muhajirin';
	$d['age'] = 24;
	$d['address'] = 'Sawangan, Magelang, Jawa Tengah';
	$d['hobbies'] = array('gowes', 'hiking' );
	$d['is_married'] = false;
	$d['list_school'] = array(
		['name'=>'Universitas Muhammadiyah Magelang', 'year_in'=>'2015', 'year_out'=>'2019', 'major'=>'Teknik Informatika S1'],
		['name'=>'SMK Muhammadiyah Mungkid', 'year_in'=>'2011', 'year_out'=>'2014', 'major'=>'Teknik Mesin'],
		['name'=>'SMP Muhammadiyah Tempuran', 'year_in'=>'2008', 'year_out'=>'2011', 'major'=>'null'],
		['name'=>'MI Muhammadiyah Sawangan', 'year_in'=>'2002', 'year_out'=>'2008', 'major'=>'null']
	 );
	$d['skills'] = array(
		['skill_name'=>'PHP', 'level'=>'intermediate'],
		['skill_name'=>'Javascript', 'level'=>'intermediate'],
		['skill_name'=>'Bootstrap', 'level'=>'intermediate'],
		['skill_name'=>'java', 'level'=>'beginner']
	 );
	 $d['interest_in_coding']= true;

echo index($d);
?>