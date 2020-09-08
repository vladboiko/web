<div id = "menu_left"><ul>
									<?php 
									$j=0;
									for($i=0;$i<10;$i++){
									echo '<a href=""><li>';
									if($flag == 0){
										echo $menu_left_1[$j];echo '</li>'.'</a>';
										$j = $j+1;
										if($i ==2)break;
										}elseif ($flag == 1){
										echo $menu_left_2[$j];echo '</li>'.'</a>';
										$j++;
										if($i == 2)break;
										}elseif ($flag == 2){
										echo $menu_left_3[$j];echo '</li>'.'</a>';
										$j++;
										if($i == 5)break;
										}elseif ($flag == 3){
										echo $menu_left_4[$j];echo '</li>'.'</a>';
										$j++;
										if($i == 5)break;
										}elseif ($flag == 4){
										echo $menu_left_5[$j];echo '</li>'.'</a>';
										$j++;
										if($i == 4)break;
										}
										}
									?>
									</ul>
			</div>