<!-- dbConnect.php. A PHP script to access the MySQL database  -->

	<?php
include "dbconn.php";
$arraysports = array();
	// query the database
	$query = "SELECT * from yornquestions";
	$result = mysqli_query($db,$query);
	$num_rows = mysqli_num_rows($result);

		for ($row_num = 0; $row_num < $num_rows;  $row_num++){
	   	  $row = mysqli_fetch_array($result);

						$array_of_yes[0][$row_num] = $row["sports"];
						$array_of_yes[1][$row_num] = $row["social"];
						$array_of_yes[2][$row_num] = $row["gaming"];
						$array_of_yes[3][$row_num] = $row["height"];
            $array_of_yes[4][$row_num] = $row["terms"];
						$array_of_yes[5][$row_num] = $row["computer"];
						$array_of_yes[6][$row_num] = $row["travel"];
						$array_of_yes[7][$row_num] = $row["sing"];
						$array_of_yes[8][$row_num] = $row["arabic"];
						$array_of_yes[9][$row_num] = $row["rhythm"];
						$array_of_yes[10][$row_num] = $row["cause"];
		}
		for($i=0;$i<11;$i++)
				$counts[$i]=0;
		for($i=0;$i<11;$i++){
			for($j=0;$j<sizeof($array_of_yes[$i]);$j++)
				if($array_of_yes[$i][$j]=="Yes"){
					$counts[$i]++;
				}
	}

$countsports=$counts[0];
$countsocial=$counts[1];
$countgaming=$counts[2];
$countheight=$counts[3];
$countterms=$counts[4];
$countcomputer=$counts[5];
$counttravel=$counts[6];
$countsing=$counts[7];
$countarabic=$counts[8];
$countrhythm=$counts[9];
$countcause=$counts[10];





$query = "SELECT * from thisorthatquestions";
$result2 = mysqli_query($db,$query);
$num_rows2 = mysqli_num_rows($result2);

	for ($row_num2 = 0; $row_num2 < $num_rows2;  $row_num2++){
			$row2 = mysqli_fetch_array($result2);

					$arraythisorthat[0][$row_num2] = $row2["gender"];
					$arraythisorthat[1][$row_num2] = $row2["harry"];
					$arraythisorthat[2][$row_num2] = $row2["outsideorindoor"];
					$arraythisorthat[3][$row_num2] = $row2["tv"];
					$arraythisorthat[4][$row_num2] = $row2["iphone"];
					$arraythisorthat[5][$row_num2] = $row2["dog"];
					$arraythisorthat[6][$row_num2] = $row2["netflix"];
					$arraythisorthat[7][$row_num2] = $row2["phone"];
					$arraythisorthat[8][$row_num2] = $row2["dine"];
					$arraythisorthat[9][$row_num2] = $row2["chocolate"];
					$arraythisorthat[10][$row_num2] = $row2["day"];
					$arraythisorthat[11][$row_num2] = $row2["fruits"];
					$arraythisorthat[12][$row_num2] = $row2["mooney"];
					$arraythisorthat[13][$row_num2] = $row2["mountains"];
					$arraythisorthat[14][$row_num2] = $row2["warm"];
					$arraythisorthat[15][$row_num2] = $row2["basketball"];
					$arraythisorthat[16][$row_num2] = $row2["spring"];
	}
	//First answer from each questions
	$countgender=0;
	$countharry=0;
	$countoutsideorindoor=0;
	$counttv=0;
	$countiphone=0;
	$countdog=0;
	$countnetflix=0;
	$countphone=0;
	$countdine=0;
	$countchocolate=0;
	$countday=0;
	$countfruits=0;
	$countmooney=0;
	$countmountains=0;
	$countwarm=0;
	$countbasketball=0;
	$countspring=0;
	$countvegetables=0;

//Second answer from each questions
$countfemale=0;
$countlord=0;
$countindoor=0;
$countbook=0;
$countandroid=0;
$countcat=0;
$countyoutube=0;
$counttext=0;
$countdelivery=0;
$countcoffee=0;
$countnight=0;
$countfame=0;
$countbeach=0;
$countcold=0;
$countfootball=0;
$countfall=0;


	$countharrymale=0;
	$countharryfemale=0;
	$countlordfemale=0;
	$countlordmale=0;
	$countoutsideorindoormale=0;
	$countoutsideorindoorfemale=0;
	$counttvmale=0;
	$counttvfemale=0;
	$countandroidmale=0;
	$countandroidfemale=0;


	$counttest=50;
	//$countlordfemale=($num_rows2-$countgender-$countharryfemale)/($num_rows2-$countgender)*100
	//$countlordmale=($countgender-$countharrymale)/$countgender*100


//formula to get pourcentage girls that like lord of the Rings
/*
<?php print ($num_rows2-$countgender-$countharryfemale)/($num_rows2-$countgender)*100 ?>
*/
//We will select the first option of each this or that questions!!!!!!!!!!!!

	for($i=0;$i<17;$i++){
		for($j=0;$j<sizeof($arraythisorthat[$i]);$j++){
			if($arraythisorthat[$i][$j]=="male"||$arraythisorthat[$i][$j]=="Male"){
				$countgender++;
			}
			if($arraythisorthat[$i][$j]=="female"||$arraythisorthat[$i][$j]=="Female"){
				$countfemale++;
			}
			if($arraythisorthat[$i][$j]=="harry"){
				$countharry++;
			}
			if($arraythisorthat[$i][$j]=="lord"){
				$countlord++;
			}

			if($arraythisorthat[$i][$j]=="harry"&& $arraythisorthat[0][$j]=="male"||$arraythisorthat[$i][$j]=="harry"&& $arraythisorthat[0][$j]=="Male"){
				$countharrymale++;
			}
			if($arraythisorthat[$i][$j]=="harry"&& $arraythisorthat[0][$j]=="Female"){
				$countharryfemale++;
			}
			if($arraythisorthat[$i][$j]=="lord"&& $arraythisorthat[0][$j]=="male"||$arraythisorthat[$i][$j]=="lord"&&$arraythisorthat[$i][$j]=="Male"){
				$countlordmale++;
			}
			if($arraythisorthat[$i][$j]=="lord"&& $arraythisorthat[0][$j]=="Female"){
				$countlordfemale++;
			}

			if($arraythisorthat[$i][$j]=="outside"){
				$countoutsideorindoor++;
			}
			if($arraythisorthat[$i][$j]=="outside"&& $arraythisorthat[0][$j]=="male"||$arraythisorthat[$i][$j]=="outside"&& $arraythisorthat[0][$j]=="Male"){
				$countoutsideorindoormale++;
			}
			if($arraythisorthat[$i][$j]=="outside"&& $arraythisorthat[0][$j]=="Female"){
				$countoutsideorindoorfemale++;
			}
			if($arraythisorthat[$i][$j]=="indoor"){
				$countindoor++;
			}
			if($arraythisorthat[$i][$j]=="tv"){
				$counttv++;
			}

			if($arraythisorthat[$i][$j]=="tv"&& $arraythisorthat[0][$j]=="male"||$arraythisorthat[$i][$j]=="tv"&& $arraythisorthat[0][$j]=="Male"){
				$counttvmale++;
			}
			if($arraythisorthat[$i][$j]=="tv"&& $arraythisorthat[0][$j]=="Female"){
				$counttvfemale++;
			}
			if($arraythisorthat[$i][$j]=="book"){
				$countbook++;
			}
			if($arraythisorthat[$i][$j]=="iphone"){
				$countiphone++;
			}
			if($arraythisorthat[$i][$j]=="android"){
				$countandroid++;
			}

			if($arraythisorthat[$i][$j]=="android"&& $arraythisorthat[0][$j]=="male"||$arraythisorthat[$i][$j]=="android"&& $arraythisorthat[0][$j]=="Male"){
				$countandroidmale++;
			}
			if($arraythisorthat[$i][$j]=="android"&& $arraythisorthat[0][$j]=="Female"){
				$countandroidfemale++;
			}

			if($arraythisorthat[$i][$j]=="dog"){
				$countdog++;
			}
			if($arraythisorthat[$i][$j]=="cat"){
				$countcat++;
			}
			if($arraythisorthat[$i][$j]=="netflix"){
				$countnetflix++;
			}
			if($arraythisorthat[$i][$j]=="Youtube"){
				$countyoutube++;
			}
			if($arraythisorthat[$i][$j]=="phone"){
				$countphone++;
			}
			if($arraythisorthat[$i][$j]=="text"){
				$counttext++;
			}
			if($arraythisorthat[$i][$j]=="dine"){
				$countdine++;
			}
			if($arraythisorthat[$i][$j]=="delivery"){
				$countdelivery++;
			}
			if($arraythisorthat[$i][$j]=="chocolate"){
				$countchocolate++;
			}
			if($arraythisorthat[$i][$j]=="coffee"){
				$countcoffee++;
			}
			if($arraythisorthat[$i][$j]=="day"){
				$countday++;
			}
			if($arraythisorthat[$i][$j]=="night"){
				$countnight++;
			}
			if($arraythisorthat[$i][$j]=="fruits"){
				$countfruits++;
			}
			if($arraythisorthat[$i][$j]=="vegetables"){
				$countvegetables++;
			}
			if($arraythisorthat[$i][$j]=="money"){
				$countmooney++;
			}
			if($arraythisorthat[$i][$j]=="fame"){
				$countfame++;
			}
			if($arraythisorthat[$i][$j]=="mountains"){
				$countmountains++;
			}
			if($arraythisorthat[$i][$j]=="beach"){
				$countbeach++;
			}
			if($arraythisorthat[$i][$j]=="warm"){
				$countwarm++;
			}
			if($arraythisorthat[$i][$j]=="cold"){
				$countcold++;
			}
			if($arraythisorthat[$i][$j]=="basketball"){
				$countbasketball++;
			}
			if($arraythisorthat[$i][$j]=="football"){
				$countfootball++;
			}
			if($arraythisorthat[$i][$j]=="spring"){
				$countspring++;
			}
			if($arraythisorthat[$i][$j]=="fall"){
				$countfall++;
			}
		}
}






		$query = "SELECT * from agreeordisagreequestions";
		$result3 = mysqli_query($db,$query);
		$num_rows3 = mysqli_num_rows($result3);

			for ($row_num3 = 0; $row_num3 < $num_rows3;  $row_num3++){
		   	  $row3 = mysqli_fetch_array($result3);

							$arrayagreeordisagree[0][$row_num3] = $row3["friend"];
							$arrayagreeordisagree[1][$row_num3] = $row3["imagination"];
							$arrayagreeordisagree[2][$row_num3] = $row3["parties"];
							$arrayagreeordisagree[3][$row_num3] = $row3["routine"];
	            $arrayagreeordisagree[4][$row_num3] = $row3["problems"];
							$arrayagreeordisagree[5][$row_num3] = $row3["eat"];
							$arrayagreeordisagree[6][$row_num3] = $row3["attention"];
							$arrayagreeordisagree[7][$row_num3] = $row3["oorder"];
							$arrayagreeordisagree[8][$row_num3] = $row3["music"];
							$arrayagreeordisagree[9][$row_num3] = $row3["feel"];
							$arrayagreeordisagree[10][$row_num3] = $row3["places"];
							$arrayagreeordisagree[11][$row_num3] = $row3["challenging"];
							$arrayagreeordisagree[12][$row_num3] = $row3["ggroup"];
							$arrayagreeordisagree[13][$row_num3] = $row3["cooperation"];
			}

$countfriendstronglyagree=0;
$countfriendstronglydisagree=0;
$countfriendagree=0;
$countfrienddisagree=0;

$countimaginationstronglyagree=0;
$countimaginationstronglydisagree=0;

$countpartiesstronglyagree=0;
$countpartiesstronglydisagree=0;
$countpartiesdisagree=0;
$countpartiesagree=0;


$countroutinestronglyagree=0;
$countroutinestronglydisagree=0;
$countproblemsstronglyagree=0;
$countproblemsstronglydisagree=0;
$counteatstronglyagree=0;
$counteatstronglydisagree=0;
$countattentionstronglyagree=0;
$countattentionstronglydisagree=0;
$countoorderstronglyagree=0;
$countoorderstronglydisagree=0;

$countmusicstronglyagree=0;
$countmusicstronglydisagree=0;
$countmusicdisagree=0;
$countmusicagree=0;


$countfeelstronglyagree=0;
$countfeelstronglydisagree=0;
$countplacesstronglyagree=0;
$countplacesstronglydisagree=0;
$countchallengingstronglyagree=0;
$countchallengingstronglydisagree=0;
$countggroupstronglyagree=0;
$countggroupstronglydisagree=0;

$countcooperationstronglyagree=0;
$countcooperationstronglydisagree=0;
$countcooperationagree=0;
$countcooperationdisagree=0;


				for($j=0;$j<$num_rows3;$j++){


					if($arrayagreeordisagree[0][$j]=="Strongly disagree"){
						$countfriendstronglydisagree++;
					}
				if($arrayagreeordisagree[0][$j]=="Strongly agree"){
						$countfriendstronglyagree++;
					}
					if($arrayagreeordisagree[0][$j]=="Agree"){
							$countfriendagree++;
						}
						if($arrayagreeordisagree[0][$j]=="Disagree"){
								$countfrienddisagree++;
							}

					if($arrayagreeordisagree[1][$j]=="Strongly disagree"){
						$countimaginationstronglydisagree++;
					}
					if($arrayagreeordisagree[1][$j]=="Strongly agree"){
						$countimaginationstronglyagree++;
					}
					if($arrayagreeordisagree[2][$j]=="Strongly disagree"){
						$countpartiesstronglydisagree++;
					}
					if($arrayagreeordisagree[2][$j]=="Strongly agree"){
						$countpartiesstronglyagree++;
					}
					if($arrayagreeordisagree[2][$j]=="Disagree"){
						$countpartiesdisagree++;
					}
					if($arrayagreeordisagree[2][$j]=="Agree"){
						$countpartiesagree++;
					}

					if($arrayagreeordisagree[3][$j]=="Strongly disagree"){
						$countroutinestronglydisagree++;
					}
					if($arrayagreeordisagree[3][$j]=="Strongly agree"){
						$countroutinestronglyagree++;
					}

					if($arrayagreeordisagree[4][$j]=="Strongly disagree"){
						$countproblemsstronglydisagree++;
					}
					if($arrayagreeordisagree[4][$j]=="Strongly agree"){
						$countpartiesstronglyagree++;
					}
					if($arrayagreeordisagree[5][$j]=="Strongly disagree"){
						$counteatstronglydisagree++;
					}
					if($arrayagreeordisagree[5][$j]=="Strongly agree"){
						$counteatstronglyagree++;
					}
					if($arrayagreeordisagree[6][$j]=="Strongly disagree"){
						$countattentionstronglydisagree++;
					}
					if($arrayagreeordisagree[6][$j]=="Strongly agree"){
						$countattentionstronglyagree++;
					}
					if($arrayagreeordisagree[7][$j]=="Strongly disagree"){
						$countoorderstronglydisagree++;
					}
					if($arrayagreeordisagree[7][$j]=="Strongly agree"){
						$countoorderstronglyagree++;
					}
					if($arrayagreeordisagree[8][$j]=="Strongly disagree"){
						$countmusicstronglydisagree++;
					}
					if($arrayagreeordisagree[8][$j]=="Strongly agree"){
						$countmusicstronglyagree++;
					}
					if($arrayagreeordisagree[8][$j]=="Disagree"){
						$countmusicdisagree++;
					}
					if($arrayagreeordisagree[8][$j]=="Agree"){
						$countmusicagree++;
					}

					if($arrayagreeordisagree[9][$j]=="Strongly disagree"){
						$countfeelstronglydisagree++;
					}
					if($arrayagreeordisagree[9][$j]=="Strongly agree"){
						$countfeelstronglyagree++;
					}
					if($arrayagreeordisagree[10][$j]=="Strongly disagree"){
						$countplacesstronglydisagree++;
					}
					if($arrayagreeordisagree[10][$j]=="Strongly agree"){
						$countplacesstronglyagree++;
					}
					if($arrayagreeordisagree[11][$j]=="Strongly disagree"){
						$countchallengingstronglydisagree++;
					}
					if($arrayagreeordisagree[11][$j]=="Strongly agree"){
						$countchallengingstronglyagree++;
					}
					if($arrayagreeordisagree[12][$j]=="Strongly disagree"){
						$countggroupstronglydisagree++;
					}
					if($arrayagreeordisagree[12][$j]=="Strongly agree"){
						$countggroupstronglyagree++;
					}
					if($arrayagreeordisagree[13][$j]=="Strongly disagree"){
						$countcooperationstronglydisagree++;
					}
					if($arrayagreeordisagree[13][$j]=="Strongly agree"){
						$countcooperationstronglyagree++;
					}
					if($arrayagreeordisagree[13][$j]=="Agree"){
						$countcooperationagree++;
					}
					if($arrayagreeordisagree[13][$j]=="Disagree"){
						$countcooperationdisagree++;
					}

}






?>
