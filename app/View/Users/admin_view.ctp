
 <table>
     <th>Phone Book</th>
     <tr>
         <td>Contact List</td>
         <td>Action</td>
     </tr>
     <?php foreach ($adviews as $User): ?>
     <tr>
        <td><?php echo $this->html->link($User['User']['name'],array('controller'=>'posts','action'=>'index',$User['User']['id'])) ; ?></td>
      
       <td><?php echo $this->html->link('Delete',array('action'=>'delete', $User['User']['id'])); ?></td>
     </tr>            
     <?php endforeach;?>
 </table>