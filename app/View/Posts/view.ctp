
<table>
    <th>Personal Details</th>
    <tr>
        <td>First Name</td>
        <td><?php echo $view['Post']['fname']; ?></td>
    </tr>
    
    <tr>
        <td>Last Name</td>
        <td><?php echo $view['Post']['lname']; ?></td>
    </tr>
    
    <tr>
        <td>e-mail</td>
        <td><?php echo $view['Post']['email']; ?></td>
    </tr>
    
    <tr>
        <td>Contact 1</td>
        <td><?php echo $view['Post']['contact1']; ?></td>
    </tr>
    
    <tr>
        <td>Contact 2</td>
        <td><?php echo $view['Post']['contact2']; ?></td>
    </tr>
    
    <tr>
        <td>Contact 3</td>
        <td><?php echo $view['Post']['contact3']; ?></td>
    </tr>
    
    <tr>
        <td>Web Address</td>
        <td><?php echo $view['Post']['webadd']; ?></td>
    </tr>
    
    <tr>
        <td>Facebook Address</td>
        <td><?php echo $view['Post']['facebook']; ?></td>
    </tr>
    
    <tr>
        <td>Google Plus</td>
        <td><?php echo $view['Post']['googleplus']; ?></td>
    </tr>
    
    <tr>
        <td>Twitter</td>
        <td><?php echo $view['Post']['twitter']; ?></td>
    </tr>
    
    <tr>
        <td>Last Modified</td>
        <td><?php echo $view['Post']['modified']; ?></td>
    </tr>
    
    <tr>
        <td><h2><?php echo $this->html->link('<<< Back',array('action'=>'index',)); ?></h2></td>
        
    </tr>
 
</table>