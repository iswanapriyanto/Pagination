			<h1><?=$title;?></h1>

			<!-- Table (TABLE) -->
			<br /><br />
			<table>
				<tr>
					<th>No</th>
					<th>Actions</th>					    
				    <th>Categories Name</th>
				    <th>Description</th>				   				   
				</tr>
				<?php
					$no=0;
					foreach($array_categories as $row):	
					$id=$row->CategoryID;	
					$no++;	
					$css=($no%2==1)? '' : 'class="bg"';
				?>
				<tr <?=$css;?> >
					<td><?=$no;?>.</td>
				    <td><?=anchor(site_url('admin/categories/process/delete/'.$id),'[delete]').' | '.
				    	   anchor(site_url('admin/categories/process/update/'.$id),'[update]');?></td>				    
				    <td><?=$row->CategoryName;?></td>
				    <td><?=$row->Description;?></td>				    
				</tr>
				<?php  endforeach; ?>
			</table>

		