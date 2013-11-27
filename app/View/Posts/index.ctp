<div align="right"></div>
 <table>
     <th>Phone Book</th>
     <th><?php echo $this->html->link('Add new >>',array('action'=>'add')); ?></th>
     <tr>
         <td>Contact List</td>
         <td>Action</td>
         <td>Action</td>
     </tr>
     <?php foreach ($views as $Post): ?>
     <tr>
         <td><?php echo $this->html->link($Post['Post']['fname'],array('action'=>'view',$Post['Post']['id'])) ; ?></td>
         <td><?php echo $this->html->link('Edit',array('action'=>'edit', $Post['Post']['id'])); ?></td>
         <td><?php echo $this->html->link('Delete',array('action'=>'delete', $Post['Post']['id'])); ?></td>
     </tr>            
     <?php endforeach;?>
 </table>