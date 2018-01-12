<?php
	require_once("./PHPExcel-1.8/Classes/PHPExcel/IOFactory.php");
	function cherche($req)
	{
		$objPHPExcel=PHPExcel_IOFactory::load("Classeur1.xls");
		$sheet=$objPHPExcel->getSheet(0);
		foreach($sheet->getRowIterator() as $row)
		{
			foreach($row->getCellIterator() as $cell)
			{
				if($cell->getValue() == $req)
				{
					print_r($cell->getValue());
				}
			}
		}
	}

?>