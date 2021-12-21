<?php
	function map($arrayPasato, $userProfileDaricevere){
		$results = [];
		foreach($arrayPasato as $userProfile)
		{	
			$results[] =  $userProfileDaricevere($userProfile);
		}
		
		return $results;
}
?>