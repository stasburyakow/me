<?php
    $commandLine = $argv;
    $csv_file = './money.csv';
	if(count($commandLine) == 1)
	    exit('Ошибка! Аргументы не заданы. Укажите флаг --today или запустите скрипт с аргументами {цена} и {описание покупки}'."\n");	
	
	if ($commandLine[1] == '--today' && count($commandLine) == 2 && !file_exists($csv_file))
		exit('Ошибка. Файл $csv_file не найден'."\n");
	
    if(!file_exists($csv_file)) 
	    $myfile = fopen($csv_file, "w");
        	
    if(!is_writable($csv_file)) 
	    exit('Ошибка. Файл $csv_file защищен от записи'."\n");
    
    if ($commandLine[1] == '--today' && count($commandLine) == 2){	  
	    $sum = 0;	
	    $datafile = file($csv_file,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		
	    foreach($datafile as $row) {		
		    $WorldArray = explode(',', $row);
			$date = date('Y-m-d');
		    if ($WorldArray[0] === date('Y-m-d'))
			    $sum += $WorldArray[1];
	    }
		   		        
	        echo ("$date расход за день: $sum руб.\n");
    } 
	
        elseif(count($commandLine) == 2) 
            exit('Ошибка! Неверный флаг. Используйте --today'."\n");
    if(count($commandLine) > 2) {
	    if((float)$commandLine[1] < 1) exit('Ошибка! Неверный формат цены'."\n");
	        $pokupka = implode(' ', array_slice($commandLine, 2, count($commandLine) - 2));
	        file_put_contents($csv_file,date('Y-m-d').','.(float)$commandLine[1].','.$pokupka."\n",FILE_APPEND);
	    echo "\n Добавлена строка: " . date('Y-m-d').', '.(float)$commandLine[1].', '.$pokupka."\n";
    }
?>	
