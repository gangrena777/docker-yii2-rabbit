

$items="
<tr>
	<td>
		<table width='100%' cellpadding='0' cellspacing='0' align='center'>
			<tbody>
				<tr>";

				$items.="
					<td width='130'>

						<img width='130' alt='img' src='https://".$GLOBALS['SERVER_NAME'].(str_replace(array('+', ' '), '%20', $item['picture']['src']))."' style='display:block;width:100%;max-width:130px;'>

						
					</td>

					<td width='20'>
						&nbsp;
					</td>";

				$items.="<td width='250'>
						<table width='100%' cellpadding='0' cellspacing='0'>
							<tbody>
								<tr>
									<td style='font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 21px;'>"
										.$item['name']."
									</td>
								</tr>";
                if($item['prop_size']){
                                 	$items.="<tr>
										<td style='font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 12px;color: #282828;line-height: 21px;'>
											Размер :".$item['prop_size']."
										</td>
								    </tr>";
                }

				$items.="<tr>
									<td style='font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 12px;color: #282828;line-height: 21px;'>
										Кол-во : ".$item['coli4estvo']."
									</td>
								</tr>";
				$items.="</tbody>
						</table>
					</td>
					<td>
						&nbsp;
					</td>
					<td align='right' width='60'>
						<table width='60' cellpadding='0' cellspacing='0'>
							<tbody>";
				$items.="<tr>
									<td align='right' style='font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;'>
										".$item['price']." руб.
									</td>
						</tr>";
				$items.="</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>


<tr>
	<td height='20' style='border-bottom: 1px solid #e0e0e0'>
		&nbsp;
	</td>
</tr>

<tr>
	<td height='20'>
		&nbsp;
	</td>
</tr>";
