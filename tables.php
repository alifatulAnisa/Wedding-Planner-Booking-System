<?php
							include('../config.php');
							$sql = mysqli_query($mysql, "SELECT * FROM customer ORDER by cust_name");
							//$rows = mysqli_num_rows($sql);
							/*$sql = "SELECT * FROM customer ORDER by Cust_name";
							$query = mysql_query($sql);
                    		$rows = mysql_num_rows($query);*/
							//if($rows > 0)
							//{
								while($row = mysqli_fetch_object($sql))
									{
										echo '<tr class="record" id="'.$row->cust_name.'">';
										echo '<td>'.$row->cust_name.'</td>';
										echo '<td><div align="right">'.$row->cust_ic.'</div></td>';
										echo '<td><div align="right">'.$row->cust_phone.'</div></td>';
										echo '<td><div align="right">'.$row->cust_email.'</div></td>';
										echo '<td><div align="center"><a rel="facebox" href="#"='.$row->cust_name.'">edit</a> | <a href="#" id="'.$row->cust_name.'" class="delbutton" title="Click To Delete">delete</a></div></td>';
									//echo '<td><div align="right">'.$row['arrival'].'</div></td>';
									//echo '<td><div align="right">'.$row['departure'].'</div></td>';
									/*echo '<td><div align="left">';
									$rrr=$row['confirmation'];
									$results = mysql_query("SELECT * FROM rooinventory where confirmation='$rrr'");
									while($row1 = mysql_fetch_array($results))
										{
										$roomid=$row1['room'];
										$resulta = mysql_query("SELECT * FROM internet_shop where id='$roomid'");
											while($rowa = mysql_fetch_array($resulta))
												{
												echo $rowa['name'];
												}
										echo '&nbsp;&nbsp;&nbsp;'.$row1['qty'].'<br>';
										}
									echo '</div></td>';
									echo '<td><div align="right">'.$row['status'].'</div></td>';*/
									//echo '<td><div align="center"><a href="#" id="'.$row['confirmation'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
									echo '</tr>';
								}
							//}
							?> 