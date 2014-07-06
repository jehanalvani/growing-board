{
"graph" : {
            "title" : "Like a Weed",
	        "refreshEveryNSeconds" : 15,
	        "type" : "line",
			"yAxis" : {
						  "minValue" : 9.5,
						  "units" : { 
							"suffix" : " in."
							 }
						},	        
            "datasequences" : [
								  {
										"title" : "Kid",
										"color" : "blue",
										"datapoints" : 

														<?php

														$file = "file.csv";
														$csv_data = rtrim(file_get_contents($file));

														$lines = explode("\n", $csv_data);
														$head = str_getcsv(array_shift($lines));

														$array = array();
														foreach ($lines as $line) {
															$array[] = array_combine($head, str_getcsv($line));
														}


														print json_encode($array);

														?>
														 
									}
								]
			}
}